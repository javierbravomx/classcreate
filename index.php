<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignaturas Empresariales y Organizacionales</title>
	<!--
	*Importar las hojas de estilo de Bootstrap, jQuery UI, Featherlight, más las locales
	-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.min.css">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.css" type="text/css" rel="stylesheet">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/body.css">
	<link rel="stylesheet" href="css/detalle.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
	<!--
	*Inclusión del archivo del encabezado de la página
	-->
    <?php
    include('php/header.php');
    ?>
	<!--
	*Contenedor principal de la página. Aquí se almacenará todas las asignaturas que estén registradas en la base de datos
	-->
	<div class="container main">
        <div class="row main-row">
		</div>
	</div>
	<!--
	*Inclusión del archivo del pié de la página
	-->
    <?php
    include('php/footer.php');
    ?>
	<!--
	*Importar los scripts principales de jQuery, jQuery UI, jQuery Autocomplete Bootstrap, más Featherlight
	-->
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function()
	{
		/*
		*Conexión a la base de datos. Cada valor se itera y se regresa en un arreglo de objetos en un formato tipo diccionario
		*/
		var url="http://rigel.fca.unam.mx/~li413008451/classcreateserver/database/json.php";
		$.getJSON(url,function(result){
			console.log(result);
	        $.each(result, function(i, field){
				/*
				*Variables para cada propiedad del objeto de la asignatura
				*/
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
				/*
				*Polyfill para la función includes() en internet explorer
				*/
				if (!String.prototype.includes) {
					String.prototype.includes = function() {
						'use strict';
						return String.prototype.indexOf.apply(this, arguments) !== -1;
					};
				}
				/*
				*Remover duplicados del título de la empresa
				*/
                if(asignatura_titulo.includes("1") || asignatura_titulo.includes("2")) {
                    asignatura_titulo = asignatura_titulo.slice(0,-2);
                }

				var rows =
                '<a class="col-lg-1 col-md-2 col-sm-3 col-xs-4 thumbnail gallery"' + ' href=".' + asignatura_empresa.toLowerCase() + '-detalle">' +
				    '<img class="img-responsive"' + ' data-carrera="' + asignatura_carrera.toLowerCase() +
                    '" data-dia="' + asignatura_dia.toLowerCase() +
                    '" data-salon="' + asignatura_salon.toLowerCase() +
                    '" data-tipo="' + asignatura_tipo.toLowerCase() +
                    '" data-horario="' + asignatura_hora_inicio.toLowerCase() +
                    '" data-semestre="' + asignatura_semestre.toLowerCase() +
                    'o" src="' + asignatura_img + '">' +
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
                                        '<td>' + asignatura_hora_inicio + '-' + asignatura_hora_fin + '</td>' +
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
	/*
	*Función más un diccionario de palabras que utiliza el elemento de búsqueda
	*/
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
	function check_administracion_checked() {
		if($('#administracion_checkbox').is(':checked')) {
			$("img[data-carrera*='contaduria'][data-carrera*='administracion']").closest("a").fadeIn();
			$("img[data-carrera*='informatica'][data-carrera*='administracion']").closest("a").fadeIn();
			$("img[data-carrera='administracion']").closest("a").fadeIn();
		}
	}
	function check_administracion_unchecked() {
		if(!$('#administracion_checkbox').is(':checked')) {
			$("img[data-carrera='administracion']").closest("a").fadeOut();
		}
	}
	function check_contaduria_checked() {
		if($('#contaduria_checkbox').is(':checked')) {
			$("img[data-carrera*='administracion'][data-carrera*='contaduria']").closest("a").fadeIn();
			$("img[data-carrera*='informatica'][data-carrera*='contaduria']").closest("a").fadeIn();
			$("img[data-carrera='contaduria']").closest("a").fadeIn();
		}
	}
	function check_contaduria_unchecked() {
		if(!$('#contaduria_checkbox').is(':checked')) {
			$("img[data-carrera='contaduria']").closest("a").fadeOut();
		}
	}
	function check_informatica_checked() {
		if($('#informatica_checkbox').is(':checked')) {
			$("img[data-carrera*='administracion'][data-carrera*='informatica']").closest("a").fadeIn();
			$("img[data-carrera*='contaduria'][data-carrera*='informatica']").closest("a").fadeIn();
			$("img[data-carrera='informatica']").closest("a").fadeIn();
		}
	}
	function check_informatica_unchecked() {
		if(!$('#informatica_checkbox').is(':checked')) {
			$("img[data-carrera='informatica']").closest("a").fadeOut();
		}
	}
	function check_carrera() {
		check_administracion_unchecked();
		check_contaduria_unchecked();
		check_informatica_unchecked();
		check_administracion_checked();
		check_contaduria_checked();
		check_informatica_checked();
	}
	function check_lunes_checked() {
		if($('#lunes_checkbox').is(':checked')) {
			$("img[data-dia*='martes'][data-dia*='lunes']").closest("a").fadeIn();
			$("img[data-dia*='miercoles'][data-dia*='lunes']").closest("a").fadeIn();
			$("img[data-dia*='jueves'][data-dia*='lunes']").closest("a").fadeIn();
			$("img[data-dia*='viernes'][data-dia*='lunes']").closest("a").fadeIn();
			$("img[data-dia='lunes']").closest("a").fadeIn();
		}
	}
	function check_lunes_unchecked() {
		if(!$('#lunes_checkbox').is(':checked')) {
			$("img[data-dia*='lunes']").closest("a").fadeOut();
		}
	}
	function check_martes_checked() {
		if($('#martes_checkbox').is(':checked')) {
			$("img[data-dia*='lunes'][data-dia*='martes']").closest("a").fadeIn();
			$("img[data-dia*='miercoles'][data-dia*='martes']").closest("a").fadeIn();
			$("img[data-dia*='jueves'][data-dia*='martes']").closest("a").fadeIn();
			$("img[data-dia*='viernes'][data-dia*='martes']").closest("a").fadeIn();
			$("img[data-dia='martes']").closest("a").fadeIn();
		}
	}
	function check_martes_unchecked() {
		if(!$('#martes_checkbox').is(':checked')) {
			$("img[data-dia*='martes']").closest("a").fadeOut();
		}
	}
	function check_miercoles_checked() {
		if($('#miercoles_checkbox').is(':checked')) {
			$("img[data-dia*='martes'][data-dia*='miercoles']").closest("a").fadeIn();
			$("img[data-dia*='lunes'][data-dia*='miercoles']").closest("a").fadeIn();
			$("img[data-dia*='jueves'][data-dia*='miercoles']").closest("a").fadeIn();
			$("img[data-dia*='viernes'][data-dia*='miercoles']").closest("a").fadeIn();
			$("img[data-dia='miercoles']").closest("a").fadeIn();
		}
	}
	function check_miercoles_unchecked() {
		if(!$('#miercoles_checkbox').is(':checked')) {
			$("img[data-dia*='miercoles']").closest("a").fadeOut();
		}
	}
	function check_jueves_checked() {
		if($('#jueves_checkbox').is(':checked')) {
			$("img[data-dia*='martes'][data-dia*='jueves']").closest("a").fadeIn();
			$("img[data-dia*='miercoles'][data-dia*='jueves']").closest("a").fadeIn();
			$("img[data-dia*='lunes'][data-dia*='jueves']").closest("a").fadeIn();
			$("img[data-dia*='viernes'][data-dia*='jueves']").closest("a").fadeIn();
			$("img[data-dia='jueves']").closest("a").fadeIn();
		}
	}
	function check_jueves_unchecked() {
		if(!$('#jueves_checkbox').is(':checked')) {
			$("img[data-dia*='jueves']").closest("a").fadeOut();
		}
	}
	function check_viernes_checked() {
		if($('#viernes_checkbox').is(':checked')) {
			$("img[data-dia*='martes'][data-dia*='viernes']").closest("a").fadeIn();
			$("img[data-dia*='miercoles'][data-dia*='viernes']").closest("a").fadeIn();
			$("img[data-dia*='jueves'][data-dia*='viernes']").closest("a").fadeIn();
			$("img[data-dia*='lunes'][data-dia*='viernes']").closest("a").fadeIn();
			$("img[data-dia='viernes']").closest("a").fadeIn();
		}
	}
	function check_viernes_unchecked() {
		if(!$('#viernes_checkbox').is(':checked')) {
			$("img[data-dia*='viernes']").closest("a").fadeOut();
		}
	}
	function check_dia() {
		check_lunes_unchecked();
		check_martes_unchecked();
		check_miercoles_unchecked();
		check_jueves_unchecked();
		check_viernes_unchecked();
		check_lunes_checked();
		check_martes_checked();
		check_miercoles_checked();
		check_jueves_checked();
		check_viernes_checked();
	}
	function check_hora() {
		if($('#7_checkbox').is(':checked')) {
			$("img[data-horario='7:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='7:00']").closest("a").fadeOut();
		}
		if($('#9_checkbox').is(':checked')) {
			$("img[data-horario='9:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='9:00']").closest("a").fadeOut();
		}
		if($('#11_checkbox').is(':checked')) {
			$("img[data-horario='11:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='11:00']").closest("a").fadeOut();
		}
		if($('#16_checkbox').is(':checked')) {
			$("img[data-horario='16:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='16:00']").closest("a").fadeOut();
		}
		if($('#17_checkbox').is(':checked')) {
			$("img[data-horario='17:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='17:00']").closest("a").fadeOut();
		}
		if($('#18_checkbox').is(':checked')) {
			$("img[data-horario='18:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='18:00']").closest("a").fadeOut();
		}
		if($('#20_checkbox').is(':checked')) {
			$("img[data-horario='20:00']").closest("a").fadeIn();
		}
		else {
			$("img[data-horario*='20:00']").closest("a").fadeOut();
		}
	}
	function check_semestre() {
		if($('#3o_checkbox').is(':checked')) {
			$("img[data-semestre='3o']").closest("a").fadeIn();
		}
		else {
			$("img[data-semestre*='3o']").closest("a").fadeOut();
		}
		if($('#5o_checkbox').is(':checked')) {
			$("img[data-semestre='5o']").closest("a").fadeIn();
		}
		else {
			$("img[data-semestre*='5o']").closest("a").fadeOut();
		}
		if($('#7o_checkbox').is(':checked')) {
			$("img[data-semestre='7o']").closest("a").fadeIn();
		}
		else {
			$("img[data-semestre*='7o']").closest("a").fadeOut();
		}
	}
	function check_tipo() {
		if($('#prof_checkbox').is(':checked')) {
			$("img[data-tipo='profesionalizante']").closest("a").fadeIn();
		}
		else {
			$("img[data-tipo*='profesionalizante']").closest("a").fadeOut();
		}
		if($('#comp_checkbox').is(':checked')) {
			$("img[data-tipo='complementaria']").closest("a").fadeIn();
		}
		else {
			$("img[data-tipo*='complementaria']").closest("a").fadeOut();
		}
	}
	function check_salon() {
		if($('#fca_checkbox').is(':checked')) {
			$("img[data-salon!='emp']").closest("a").fadeIn();
		}
		else {
			$("img[data-salon!='emp']").closest("a").fadeOut();
		}
		if($('#emp_checkbox').is(':checked')) {
			$("img[data-salon*='emp']").closest("a").fadeIn();
		}
		else {
			$("img[data-salon*='emp']").closest("a").fadeOut();
		}
	}

    function do_other() {
        $("img[data-carrera*='administracion'][data-dia*='lunes']").closest("a").fadeIn();
    }
	$(":checkbox").change(function(){
		if($(this).attr("name") == "carrera") {
			check_carrera();
		}
		if($(this).attr("name") == "dia") {
			check_dia();
		}
		if($(this).attr("name") == "hora") {
			check_hora();
		}
		if($(this).attr("name") == "semestre") {
			check_semestre();
		}
		if($(this).attr("name") == "tipo") {
			check_tipo();
		}
		if($(this).attr("name") == "salon") {
			check_salon();
		}
        if($(this).attr("name") == "other") {
			do_other();
		}
    });
    </script>
    <script>
	/*
	*Función para el buscador dinámico
	*/
    $(function() {
        var availableTags = [
            { value: "Actinver", label: "Actinver" },
            { value: "ADO", label: "ADO" },
            { value: "AMDAID", label: "AMDAID" },
            { value: "AMIB", label: "AMIB" },
            { value: "AOSPORT", label: "AO-Sport" },
            { value: "ASF", label: "ASF" },
            { value: "Aspel", label: "Aspel" },
            { value: "Baker-Tilly", label: "Baker-Tilly" },
            { value: "Bancomer", label: "Bancomer" },
            { value: "Bancomext", label: "Bancomext" },
            { value: "Banorte-Ixe", label: "Banorte-Ixe" },
            { value: "BDO", label: "BDO" },
            { value: "BMV", label: "BMV" },
            { value: "BX-Grupo-Financiero", label: "BX-Grupo-Financiero" },
            { value: "CANACO", label: "CANACO" },
            { value: "CCPM", label: "CCPM" },
            { value: "CONAGUA", label: "CONAGUA" },
            { value: "CONTPAQI", label: "CONTPAQI" },
            { value: "Deloitte", label: "Deloitte" },
            { value: "Donarte", label: "Donarte" },
            { value: "EC-Council", label: "EC-Council" },
            { value: "Emprebask", label: "Emprebask" },
            { value: "EY", label: "EY" },
            { value: "Fundación Alfredo Harp Helú", label: "Fundación Alfredo Harp Helú" },
            { value: "Hospital Infantil de México", label: "Hospital Infantil de México" },
            { value: "GeneXus", label: "GeneXus" },
            { value: "Gossler", label: "Gossler" },
            { value: "Grupo-Modelo", label: "Grupo-Modelo" },
            { value: "IBM", label: "IBM" },
            { value: "IFECOM", label: "IFECOM" },
            { value: "IMCP", label: "IMCP" },
            { value: "IMEF", label: "IMEF" },
            { value: "INADEM", label: "INADEM" },
            { value: "ISSSTE", label: "ISSSTE" },
            { value: "Latin American Speakers", label: "Latin American Speakers" },
            { value: "Loreal", label: "L'Oréal" },
            { value: "Nielsen IBOPE", label: "Nielsen IBOPE" },
            { value: "PNC", label: "PNC" },
            { value: "Prodecon", label: "Prodecon" },
            { value: "Radio Fórmula", label: "Radio Fórmula" },
            { value: "Revistas México", label: "Revistas México" },
            { value: "Russell Bedford", label: "Russell Bedford" },
            { value: "SALLES-SAINZ-GRAND-THORTON", label: "SALLES-SAINZ-GRAND-THORTON" },
            { value: "Siemens", label: "Siemens" },
            { value: "TOKS", label: "TOKS" },
            { value: "Unilever", label: "Unilever" }
        ];
		/*
		*El siguiente código es para iniciar la busqueda con diccionario
		*/
        $( "#filter" ).devbridgeAutocomplete({
            lookup: availableTags,
            onSelect: function (suggestion) {
                var filter = $(this).val(), count = 0;
                $(".row a").each(function(){
                    if($(this).html().search(new RegExp(filter, "i")) < 0) {
                        $(this).fadeOut();
                    } else {
                        $(this).fadeIn();
                        count++;
                    }
                });
            }
        });
    });
    </script>
</body>
</html>