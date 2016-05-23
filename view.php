<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignaturas Empresariales y Organizacionales</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="css/body.css">
</head>
<body>
    <div class="container">
        <h1>Asignaturas Empresariales y Organizacionales</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empresa</th>
                    <th>Carrera</th>
                    <th>Plan</th>
                    <th>Semestre</th>
                    <th>Clave</th>
                    <th>Tipo</th>
                    <th>Cupo</th>
                    <th>Asignatura</th>
                    <th>Dia</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Salón</th>
					<th>Promedio</th>
                </tr>
            </thead>
            <tbody id="asignatura-tabla">
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
                var rows = "<tr>"
                + "<td>" + asignatura_id + "</td>"
                + "<td>" + asignatura_empresa + "</td>"
                + "<td>" + asignatura_carrera + "</td>"
                + "<td>" + asignatura_plan + "</td>"
                + "<td>" + asignatura_semestre + "</td>"
                + "<td>" + asignatura_clave + "</td>"
                + "<td>" + asignatura_tipo + "</td>"
                + "<td>" + asignatura_cupo + "</td>"
                + "<td>" + asignatura_asignatura + "</td>"
                + "<td>" + asignatura_dia + "</td>"
                + "<td>" + asignatura_hora_inicio + "</td>"
                + "<td>" + asignatura_hora_fin + "</td>"
                + "<td>" + asignatura_salon + "</td>"
				+ "<td>" + asignatura_promedio + "</td>"
                + "</tr>";
                $('#asignatura-tabla').append(rows);
	        });
    	});
	});
	</script>
</body>
</html>