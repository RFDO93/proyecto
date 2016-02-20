<?php

	class menu{

		function __construct(){
			$des=" ";
			
		}

		public function c(){
	        $des="
	             <nav class='navbar navbar-default navbar-fixed-top'>
	              <div class='container-fluid'>   
	                  <div class='row'>
	                      <ul class='nav navbar-nav navbar-right'>
	                            <li class='dropdown'>
	                              <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span class='glyphicon glyphicon-envelope'></span></a>
	                              <ul class='dropdown-menu'>
	                                <li><a href='#'><span class='glyphicon glyphicon-user'></span>&nbsp;PERFIL</a></li>
	                              </ul>
	                            </li>
	                            <li class='dropdown'>
	                              <a href='#' class='dropdown-toggle' style='margin-right:80px;' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span class='glyphicon glyphicon-user'></span></a>
	                              <ul class='dropdown-menu'>
	                                <li><a href='../../controladores/seguridad/con_perfil.php?op=bus'><span class='glyphicon glyphicon-user'></span>&nbsp;PERFIL</a></li>
	                                <li><a href='#'><span class='glyphicon glyphicon-cog'></span>&nbsp;CONFIGURACION</a></li>
	                                <li role='separator' class='divider'></li>
	                                <li><a href='../../controladores/seguridad/con_cerrar.php'><span class='glyphicon glyphicon-off'></span>&nbsp;CERRAR SESION</a></li>
	                              </ul>
	                            </li>
	                        </ul>       
	                  </div>     
	                  <div class='row' id='navcolor'>
	                        <ul class='nav nav-tabs'>
	                    ";
	        return $des;
    	}

    	public function d(){
	    	$aux=$_SESSION['usuario'];
	    	$aux2=$_SESSION['numrow'];
	    	if (isset($_SESSION['usuario'])) {  
		    	for ($i=0; $i<$aux2 ; $i++) {
		    		if($aux[$i]['nivel']>0){
		    			if($aux[$i]['recur']==null){
			    			echo "
			    			<li class='dropdown'>
					          <a href=".$aux[$i]['ruta']." class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".$aux[$i]['des']."<span class='caret'></span></a>
					          <ul class='dropdown-menu'>";	
					        for ($o=0; $o<$aux2 ; $o++){
					        	if($aux[$i]['idmenu']==$aux[$o]['recur']){
		    						echo "<li><a href='../".$aux[$o]['ruta']."'>".$aux[$o]['des']."</a></li>";
					        	}
		    				}
		    				echo "</ul></li>";       		 	    			
			    		}
		    		}else{
		    			echo "<li><a href='../".$aux[$i]['ruta']."'>".$aux[$i]['des']."</a></li>";
		    		}		    		
		    	}
		    	echo "</ul></div></div></nav>";
		    }else{
		    	header("Location: ../../vistas/seguridad/intranet.php");
		    }
	    }
	    	
    }
?>