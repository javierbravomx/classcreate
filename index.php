<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignaturas Empresariales y Organizacionales</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.css" type="text/css" rel="stylesheet">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/body.css">
	<link rel="stylesheet" href="css/detalle.css">
</head>
<body>
	<div class="container main">
        <div class="row main-row">
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
	$(document).ready(function(){
		$('.gallery').featherlightGallery();
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		var url="http://rigel.fca.unam.mx/~li413008451/classcreateserver/database/json.php";
		$.getJSON(url,function(result){
			console.log(result);
	        $.each(result, function(i, field){
                var asignatura_id=field.asignatura_id;
	        	var asignatura_empresa=field.asignatura_empresa;
	        	var asignatura_carrera=field.asignatura_carrera;
	        	var asignatura_plan=field.asignatura_plan;
	        	var asignatura_semestre=field.asignatura_semestre;
                var asignatura_clave=field.asignatura_clave;
	        	var asignatura_tipo=field.asignatura_tipo;
	        	var asignatura_cupo=field.asignatura_cupo;
	        	var asignatura_asignatura=field.asignatura_asignatura;
                var asignatura_dia=field.asignatura_dia;
	        	var asignatura_hora_inicio=field.asignatura_hora_inicio;
	        	var asignatura_hora_fin=field.asignatura_hora_fin;
	        	var asignatura_salon=field.asignatura_salon;
				var asignatura_promedio=field.asignatura_promedio;
				var asignatura_img=field.asignatura_img;

				var rows = '<a class="col-md-1 thumbnail gallery"' + 'href=".' + asignatura_empresa.toLowerCase() + '-detalle">' +
				'<img class="img-responsive" src="' + asignatura_img + '">' +
				'</a>' +
				'<div class="' + asignatura_empresa.toLowerCase() + '-detalle">' +
				'<div class="row">' +
				'<div class="col-md-1">' +
				'</div>' +
				'<div class="col-md-7">' +
				'<h1>' + asignatura_empresa + '</h1>' +
				'<h3>' + asignatura_asignatura + '</h3>' +
				'</div>' +
				'</div>' +
				'</div>';

				$('.main-row').append(rows);
	        });
    	});
	});
	</script>
</body>
</html>