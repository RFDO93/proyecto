<?php
	class conexcionpsql{
        private $host;
        private $db;
        private $user;
        private $pass;
        private $conexion;
        private $url;
        private $con;

        //creación de la función para cargar los valores de la conexión.
        function __construct(){}
        //Destruccion de las variables y funciones de destruccion.
        function __destruct(){}

        //función que se utilizara al momento de hacer la instancia de la clase
        public function conectar(){
           $aux=pg_connect("host='localhost' dbname='proyecto' user='dorta' password='dorta'") or die('La ergue fallo: ' . pg_last_error());
           return $aux;
         }       

         public function consulta($aux){
            $auxcon=$this->conectar();
            $resultado=pg_query($aux) or die('La consulta fallo: ' . pg_last_error());
            pg_close($auxcon);
            return $resultado;                     
        }

        public function listar($aux){
            $this->con=0;
            $cont=pg_num_rows($aux);
            if($consulta=pg_num_rows($aux) > 0 ){
                while($consulta=pg_fetch_assoc($aux)){
                    $resultado[$this->con]=$consulta;
                    $this->con++;
                }  
             }
           return $resultado;
        }

   	}	
?>