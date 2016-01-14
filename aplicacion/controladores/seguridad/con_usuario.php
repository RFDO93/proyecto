<?php
session_start();
include("../../modelos/seguridad/cls_usuario.php");
$obj_aux= new clsusuario;
$aux=$_POST['a'];
switch ($aux) {
	case '1':
	echo "hola";
		$obj_aux->get($_POST['usuario'],sha1(md5($_POST['clave'])));
		$aux=$obj_aux->validar_usuario();
		$aux2=$obj_aux->numrow();
		if($aux){
			$_SESSION['numrow']=$aux2;
			$_SESSION['usuario']=$aux;
			header("location: ../../vistas/escritorio/escritorio.php");
		}else{
			$_SESSION['mensaje_e']="LA CLAVE O EL USUARIO SON INCORRECTO";
			header("location: ../../vistas/seguridad/intranet.php");
		}
	break;
}


?>