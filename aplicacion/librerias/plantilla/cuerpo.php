<?php
class cuerpo {
    function __construct (){
        $des="";
    }

    public function a(){
        $des="
            <!DOCTYPE html>
            <html lang='en'>

            <head>

                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <meta name='description' content=''>
                <meta name='author' content=''>

                <title>ESCRITORIO</title>

                <!-- Bootstrap CSS -->
                <link href='../../../publica/css/bootstrap-css/bootstrap.min.css' rel='stylesheet'>
                <!-- ESTILO CSS -->
                <link href='../../../publica/css/style.css' rel='stylesheet'>

                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
                    <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
                <![endif]-->

            </head>

            <body>
        ";
        return $des;
    }

    public function b(){
        $des="
            <!-- jQuery -->
            <script src='../../../publica/js/bootstrap-js/jquery.min.js'></script>
            <!-- jQuery -->
            <script src='../../../publica/js/bootstrap-js/bootstrap.min.js'></script>
        </body>
        </html>
        ";
        return $des;
    }
}
?>