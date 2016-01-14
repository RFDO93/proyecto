<?php
include("../conexion/cls_conexion.php");
class clsmenu{
	private $mensaje;	
	
	public function setusuario($valor){
		$this->mensaje=$valor;
	}

	public function buscarusuario(){
		$obj_aux = new conexcionpsql;
		$resultado=$obj_aux->consulta("Select * from usuario;");
		return "hola mundo";
	}

	public function setclave($valor){
		$this->mensaje=$valor;
	}

}
?>
