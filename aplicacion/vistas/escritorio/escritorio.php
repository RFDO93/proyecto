<?php
session_start();
include_once("../../librerias/plantilla/cuerpo.php");
include_once("../../librerias/plantilla/menu.php");
    
    $obj_cuerpo= new cuerpo;
    $obj_menu= new menu;
    $auxnom=$_SESSION['usuario'];
    echo $obj_cuerpo->a();

    echo $obj_menu->c();

    $obj_menu->d();
?>    
    <div class="container-fluid">  
        <div class="row"> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <?php
                if($_SESSION['menini']==1){
                    echo "<br><div class='alert alert-success alert-dismissible'role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span></button><strong>BIENVENIDO ".$auxnom[0]['nombre']." ".$auxnom[0]['apellido']." </strong> 
                    </div>"; 
                } 
             ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>ESCRITORIO</h1>
                </div>   
            </div>            
        </div>
    </div>
<?php
    echo $obj_cuerpo->b();
    $_SESSION['menini']=0;
?>

    </body>
</html>