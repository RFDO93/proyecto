<?php
include("../../modelos/seguridad/cls_menu.php");
$obj_aux= new clsmenu;



echo $obj_aux->buscarusuario();

?>