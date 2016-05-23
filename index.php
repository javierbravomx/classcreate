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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/body.css">
	<link rel="stylesheet" href="css/detalle.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php
    include('php/header.php');
    ?>
	<div class="container main">
        <div class="row main-row">
		</div>
	</div>
    <?php
    include('php/footer.php');
    ?>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		var url="http://rigel.fca.unam.mx/~li413008451/classcreateserver/database/json.php";
		$.getJSON(url,function(result){
			console.log(result);
	        $.each(result, function(i, field){
                var asignatura_id=field.asignatura_id;
	        	var asignatura_empresa=field.asignatura_empresa;
                var asignatura_titulo=field.asignatura_empresa;
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
                if(asignatura_titulo.includes("1") || asignatura_titulo.includes("2")) {
                    asignatura_titulo = asignatura_titulo.slice(0,-2);
                }
                if(asignatura_carrera == "N/A") {
                    asignatura_carrera = "";
                }
                if(asignatura_plan == "N/A") {
                    asignatura_plan = "";
                }
                if(asignatura_semestre == "N/A") {
                    asignatura_semestre = "";
                }
                if(asignatura_tipo == "N/A") {
                    asignatura_tipo = "";
                }
                if(asignatura_cupo == "N/A") {
                    asignatura_cupo = "";
                }
                if(asignatura_asignatura == "N/A") {
                    asignatura_asignatura = "";
                }
                if(asignatura_dia == "N/A") {
                    asignatura_dia = "";
                }
                if(asignatura_hora_inicio == "00") {
                    asignatura_dia = "";
                }
                if(asignatura_hora_fin == "00") {
                    asignatura_dia = "";
                }
                if(asignatura_salon == "N/A") {
                    asignatura_salon = "";
                }
                if(asignatura_promedio == "N/A") {
                    asignatura_promedio = "";
                }
                if(asignatura_tipo == "P") {
                    asignatura_tipo = "Profesionalizante";
                }
                if(asignatura_tipo == "C") {
                    asignatura_tipo = "Complementaria";
                }
                if(asignatura_carrera == "A") {
                    asignatura_carrera = "Administración";
                }
                if(asignatura_carrera == "C") {
                    asignatura_carrera = "Contaduría";
                }
                if(asignatura_carrera == "I") {
                    asignatura_carrera = "Informática";
                }
                if(asignatura_carrera == "AC") {
                    asignatura_carrera = "Administración y Contaduría";
                }
                if(asignatura_carrera == "ACI") {
                    asignatura_carrera = "Administración, Contaduría e Informática";
                }
                if(asignatura_dia == "L") {
                    asignatura_dia = "Lunes";
                }
                if(asignatura_dia == "LJ") {
                    asignatura_dia = "Lunes / Jueves";
                }
                if(asignatura_dia == "LMC") {
                    asignatura_dia = "Lunes / Miércoles";
                }
                if(asignatura_dia == "M") {
                    asignatura_dia = "Martes";
                }
                if(asignatura_dia == "MC") {
                    asignatura_dia = "Miércoles";
                }
                if(asignatura_dia == "MCV") {
                    asignatura_dia = "Miércoles / Jueves";
                }
                if(asignatura_dia == "MJ") {
                    asignatura_dia = "Martes / Jueves";
                }
                if(asignatura_dia == "J") {
                    asignatura_dia = "Jueves";
                }
                if(asignatura_dia == "V") {
                    asignatura_dia = "Viernes";
                }
				var rows =
                '<a class="col-lg-1 col-md-2 col-sm-3 col-xs-4 thumbnail gallery"' + ' href=".' + asignatura_empresa.toLowerCase() + '-detalle">' +
				    '<img class="img-responsive"' +' data-carrera="' + asignatura_carrera.toLowerCase() + '" src="' + asignatura_img + '">' +
				'</a>' +
				'<div class="' + asignatura_empresa.toLowerCase() + '-detalle">' +
			        '<div class="row">' +
				        '<div class="col-sm-1">' +
		                '</div>' +
                        '<div class="col-sm-7">' +
                            '<h1>' + asignatura_titulo + '</h1>' +
	                        '<h3>' + asignatura_asignatura + '</h3>' +
				        '</div>' +
                        '<div class="col-sm-3">' +
                            '<img class="img-responsive" src="' + asignatura_img + '">' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '</div>' +
                    '</div>' +
                        '<div class="row">' +
                            '<div class="col-sm-1">' +
                            '</div>' +
                            '<div class="table-responsive col-sm-10">' +
                                '<table class="table table-striped">' +
                                '<tr>' +
                                    '<td>Tipo:</td>' +
                                    '<td>' + asignatura_tipo + '</td>' +
                                '</tr>' +
                                    '<tr>' +
                                        '<td>Día:</td>' +
                                        '<td>' + asignatura_dia + '</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Hora:</td>' +
                                        '<td>' + asignatura_hora_inicio + ":00 - " + asignatura_hora_fin + ':00</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Carrera:</td>' +
                                        '<td>' + asignatura_carrera + '</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Semestre:</td>' +
                                        '<td>' + asignatura_semestre + 'º</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Lugar:</td>' +
                                        '<td>' + asignatura_salon + '</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Cupo:</td>' +
                                        '<td>' + asignatura_cupo + '</td>' +
                                    '</tr>' +
                                    '<tr>' +
                                        '<td>Promedio:</td>' +
                                        '<td>' + asignatura_promedio + '</td>' +
                                    '</tr>' +
                                '</table>' +
                            '</div>' +
                            '<div class="col-sm-1">' +
                            '</div>' +
                        '</div>' +
                        '<div class="row">' +
                            '<div class="col-sm-1">' +
                            '</div>' +
                            '<div class="col-sm-10">' +
                                '<table class="table">' +
                                    '<tr>' +
                                    '<th>Temario</th>' +
                                    '</tr>' +
                                    '<tr>' +
                                    '<td><img class="img-responsive" src="img/logo/temario.png"></td>' +
                                    '</tr>' +
                                '</table>' +
                            '</div>' +
                            '<div class="col-sm-1">' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
				'</div>';
				$('.main-row').append(rows);
	        });
            $('.gallery').featherlightGallery();
    	});
    });
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;
        $(".row a").each(function(){
            if($(this).html().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            } else {
                $(this).fadeIn();
                count++;
            }
        });
    });
    $("input[type=checkbox]").click(function() {
        if($('#administracion_checkbox').is(':checked')) {
            var count = 0;
            $(".row a").each(function(){
                if($(this).html().includes("administración")) {
                    if($('#contaduria_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("contaduría")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    if($('#informatica_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("informática")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                    count++;
                }
            });
        }
        if($('#contaduria_checkbox').is(':checked')) {
            var count = 0;
            $(".row a").each(function(){
                if($(this).html().includes("contaduría")) {
                    if($('#administracion_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("administración")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    if($('#informatica_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("informática")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                    count++;
                }
            });
        }
        if($('#informatica_checkbox').is(':checked')) {
            var count = 0;
            $(".row a").each(function(){
                if($(this).html().includes("informática")) {
                    if($('#administracion_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("administración")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    if($('#contaduria_checkbox').is(':checked')) {
                        var count = 0;
                        $(".row a").each(function(){
                            if($(this).html().includes("contaduría")) {
                                $(this).fadeIn();
                            } else {
                                count++;
                            }
                        });
                    }
                    $(this).fadeIn();
                } else {
                    $(this).fadeOut();
                    count++;
                }
            });
        }
        //if($('#administracion_checkbox').is(':checked') == false) {
    });
    </script>
</body>
</html>