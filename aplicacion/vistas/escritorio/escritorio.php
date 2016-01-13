<?php
include_once("../../librerias/plantilla/cuerpo.php");
include_once("../../librerias/plantilla/menu.php");

    $obj_cuerpo= new cuerpo;
    $obj_menu= new menu;

    echo $obj_cuerpo->a();

    echo $obj_menu->c();

    $obj_menu->d();
?>    
    <div class="container-fluid">  
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
?>