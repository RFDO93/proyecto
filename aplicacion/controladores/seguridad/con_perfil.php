<?php
session_start();
include("../../modelos/seguridad/cls_perfil.php");
switch ($_GET['op']) {
	case 'act':

		echo $_GET['cedula'];
		echo $_GET['nombre'];
		echo $_GET['apellido'];
		echo $_GET['date'];
		echo $_GET['sexo'];
		echo $_GET['telf'];
		echo $_GET['cel'];
		echo $_GET['correo1'];
		echo $_GET['correo2'];

	break;
	case 'bus':
		$obj_aux= new perfil;
		$auxnom=$_SESSION['usuario'];
		$obj_aux->get($auxnom[0]['cedula']);
		$aux=$obj_aux->buscar_datos();
		$aux2=$obj_aux->numrow();
		if($aux2>0){
			$_SESSION['numrow_perfil']=$aux2;
			$_SESSION['datos_perfil']=$aux;
			header("location: ../../vistas/seguridad/perfil.php");
		}else{
			echo "MALOOOOO";
		}
	break;
}
?>