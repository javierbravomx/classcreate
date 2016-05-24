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
    $("input[type=checkbox]").change(function(){
    if($('input[name=administracion_checkbox]').is(':checked')){
            $("[data-carrera='informatica']").fadeout();
        } else {
            $("[data-carrera='informatica']").fadeIn();
        }
    });
    </script>
    <script>
	/*
	*Función más un diccionario de palabras que utiliza el elemento de búsqueda
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
		*El siguiente código es para iniciar la busqueda con autocompleción
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