<?php
require_once("../../modelos/conexion/cls_conexion.php");
class perfil extends conexcionpsql{
	private $get_cedula;
	private $sql;
	private $retornar;
	function __construct(){
		$this->get_cedula="";
		$this->sql="";
		$this->retornar="";
	}

	function __destruct(){

	}

	public function get($cedula){
		$this->get_cedula=$cedula;
	}

	public function buscar_datos(){
		$this->sql="SELECT cedula, nombre, apellido, sexo, telefono, celular, correo, estatus,fecha_nac
  					FROM persona where cedula='$this->get_cedula'";
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