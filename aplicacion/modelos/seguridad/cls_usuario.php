<?php
require_once("../../modelos/conexion/cls_conexion.php");
class clsusuario extends conexcionpsql{
	private $get_usuario;
	private $get_clave;
	private $sql;
	private $retornar;
	function __construct(){
		$this->get_usuario=" ";
		$this->get_clave=" ";
		$this->sql=" ";
		$this->retornar=" ";
	}

	function __destruct(){}

	
	public function get($usuario,$clave){
		$this->get_usuario=$usuario;
		$this->get_clave=$clave;
	}

	public function validar_usuario(){
		$this->sql= "SELECT u.id,rec.descripcion as des,rec.ruta, per.cedula, per.nombre, per.apellido, rec.cod_recur as recur, rec.id as idmenu, rec.nivel
					FROM usuario as u 
					INNER JOIN clave as c on c.cod_usuario=u.id
					INNER JOIN d_rol_recurso as drr on drr.cod_rol=u.cod_rol
					INNER JOIN recursos as rec on rec.id = drr.cod_recurso
					INNER JOIN persona as per on per.cedula=u.cod_cedula
                    WHERE u.usuario='$this->get_usuario' AND c.clave='$this->get_clave' AND rec.estatus = 'A'";
		$this->retornar=parent::consulta($this->sql);
		$auxexis=pg_num_rows($this->retornar);
        if($auxexis>0){
        	$resultado=parent::listar($this->retornar);
		    return $resultado; 
        }else{
            return false;
        }
	}

	public function numrow(){
		$auxexis=pg_num_rows($this->retornar);
        if($auxexis>0){
		    return $auxexis; 
        }else{
            return 0;
        }
	}
}
?>
