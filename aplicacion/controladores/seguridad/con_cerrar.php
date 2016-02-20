<?php
session_start();
session_unset($_SESSION['usuario']);
session_unset($_SESSION['numrow']);
session_destroy();
header("Location: ../../vistas/seguridad/intranet.php");
?>