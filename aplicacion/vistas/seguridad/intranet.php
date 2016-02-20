<?php
session_start();
include_once("../../librerias/plantilla/cuerpo.php");
    $obj_cuerpo= new cuerpo;
    echo $obj_cuerpo->a();
?>
    <div class="container">
        <br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">INICIO DE SESION</h3>
                    </div>
                    <div class="panel-body">
                        <form action="../../controladores/seguridad/con_usuario.php" role="form" method="POST" name="SESION" >
                        <input type="hidden" value="1" name="a"/>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="USUARIO" name="usuario" type="usuario" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="clave" name="clave" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">ENTRAR</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    echo $obj_cuerpo->b();
?>
    </body>
</html>