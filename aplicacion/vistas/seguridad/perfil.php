<?php
session_start();
include_once("../../librerias/plantilla/cuerpo.php");
include_once("../../librerias/plantilla/menu.php");
    
    $obj_cuerpo= new cuerpo;
    $obj_menu= new menu;
    $auxnom=$_SESSION['datos_perfil'];

    echo $obj_cuerpo->a();

    echo $obj_menu->c();

    $obj_menu->d();
?>    
    <div class="container-fluid">  
     <div class="row">
     		<div class="col-md-12">
            <div class="page-header">
                <h1>EDITAR PERFIL</h1>
            </div>   
      	</div>		
     </div>
		
		<form class="form-horizontal" action="../../controladores/seguridad/con_perfil.php"  method="GET">
      <input type="hidden" name="op" value="act"/>
			<div class="form-group">
   				<label for="cedula" class="col-sm-2 col-md-offset-2 control-label">Cedula</label>
   				<div class="col-sm-4">
      				<input type="input" name="cedula" class="form-control"  id="cedula" value=<?php echo $auxnom[0]['cedula']; ?> placeholder="Cedula">
   				 </div>
 			</div>
  			<div class="form-group">
   				<label for="nombre" class="col-sm-2 col-md-offset-2 control-label">Nombre</label>
   				<div class="col-sm-4">
      				<input type="input" name="nombre" class="form-control" id="nombre" value=<?php echo $auxnom[0]['nombre']; ?> placeholder="Nombre">
   				 </div>
 			</div>
			<div class="form-group">
 				<label for="apellido" class="col-sm-2 col-md-offset-2 control-label">Apellido</label>
 				<div class="col-sm-4">
   				<input type="input" name="apellido" class="form-control" id="apellido" value=<?php echo $auxnom[0]['apellido']; ?> placeholder="Apellido">
  			</div>
			</div>

      <div class="form-group">
        <label for="fechanac" class="col-sm-2 col-md-offset-2 control-label">Fecha Nacimiento</label>
        <div class="col-sm-4">           
          <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" value=<?php echo $auxnom[0]['fecha_nac']; ?> type="text"/> 
        </div>
      </div>

      <div class="form-group">
          <label for="apellido" class="col-sm-2 col-md-offset-2 control-label">Sexo</label>
          <div class="col-sm-4">  
            <div class="radio-inline">
              <label>
                <input type="radio" name="sexo" id="optionsRadios1" <?php if($auxnom[0]['sexo']=='M') {echo "checked";} ?>  value="M">
                Masculino
              </label>
            </div>
            <div class="radio-inline">
             <label>
               <input type="radio" name="sexo" id="optionsRadios2" <?php if($auxnom[0]['sexo']=='F') {echo "checked";} ?> value="F">
                Femenino
              </label>
            </div>
          </div>
      </div>

      <div class="form-group">
        <label for="telefono" class="col-sm-2 col-md-offset-2 control-label">Telefono</label>
        <div class="col-sm-4">
          <input type="input" name="telf" class="form-control" id="telefono" value=<?php echo $auxnom[0]['telefono']; ?> placeholder="Telefono">
        </div>
      </div>

      <div class="form-group">
        <label for="celular" class="col-sm-2 col-md-offset-2 control-label">Celular</label>
        <div class="col-sm-4">
          <input type="input" name="cel" class="form-control" id="celular" value=<?php echo $auxnom[0]['celular']; ?> placeholder="Celular">
        </div>
      </div>

      <div class="form-group">
        <label for="correo" class="col-sm-2 col-md-offset-2 control-label">Correo</label>
          <div class="col-sm-4">
            <div class="input-group">
                <input type="text" name="correo1" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"placeholder="Correo">
                <span class="input-group-addon">@</span>
                <input type="text" name="correo2" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status" placeholder="Ejemplo.com">
            </div>
          </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
      </div>


    </form>  

<?php
    echo $obj_cuerpo->b();
?>
    <script>
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            language: "es",
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options); //initiali110/26/2015 8:20:59 PM ze plugin
    </script>

  </body>
</html>
