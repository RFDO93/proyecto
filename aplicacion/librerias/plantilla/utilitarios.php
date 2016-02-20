<?php
	/**
	* Clase donde incluiremos todas la funciones extrasistema --  Ejemplo (Cambio de formato)
	*/
	class utilitarios
	{	
		private $FechaBD	
		function __construct(){
			$FechaBD="";
		}
		public function format_fecha($fecha){
			if (strlen($Fecha)==10)
			{
		  	 	$elDia=substr($Fecha,0,2);
		  	 	$elMes=substr($Fecha,3,2);
		  	 	$elYear=substr($Fecha,6,4);
		  	 	$this->FechaBD=$elYear."-".$elMes."-".$elDia;
			}
			return $this->FechaBD;
		}
	}
?>