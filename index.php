<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="publica/css/bootstrap-css/bootstrap.css">
<link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<div class="container">
	<h1>HOLA MUNDO</h1>
	
	<h1><?php echo $aux=sha1(md5("12345")) ?></h1>

	
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

	
</div>
</body>
<script src="publica/js/bootstrap-js/jquery.min.js"></script>
<script src="publica/js/bootstrap-js/bootstrap.min.js"></script> 
<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</html>



