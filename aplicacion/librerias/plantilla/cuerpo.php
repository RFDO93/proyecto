<?php
class cuerpo {
    function __construct (){
        $des="";
    }

    public function a(){
        $des="
            <!DOCTYPE html>
            <html lang='es'>

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

                <!-- Bootstrap Date-Picker Plugin -->
                <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css'/>
            </head>

            <body>
            <br><br><br><br>
        ";
        return $des;
    }

    public function b(){
        $des="
            <!-- jQuery -->
            <script src='../../../publica/js/bootstrap-js/jquery.min.js'></script>
            <!--Bootstrap js -->
            <script src='../../../publica/js/bootstrap-js/bootstrap.min.js'></script>
            
            <!-- Bootstrap Date-Picker Plugin -->

            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js'></script>       
        ";
        return $des;
    }

    public function calendario(){
        $des="
        <div class='col-sm-6'>
            <div class='form-group'>
                <div class='input-group date' id='aux'>
                    <input type='text' class='form-control' />
                    <span class='input-group-addon'>
                        <span class='glyphicon glyphicon-calendar'></span>
                    </span>
                </div>
            </div>
        </div>
        

        ";
        return $des;
    }
}
?>