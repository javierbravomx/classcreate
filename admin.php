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
    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://fca.unam.mx">
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Asignaturas Empresariales y Organizacionales</h1>
        <form>
            <div class="form-group">
                <label for="asignatura_empresa">Empresa / Organización</label>
                <input type="text" class="form-control" id="asignatura_empresa" placeholder="Empresa / Organización">
            </div>
            <div class="form-group">
                <label>Carrera</label>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="carrera" value="A">Administración
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="carrera" value="C">Contaduría
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="carrera" value="I">Informática
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="asignatura_plan">Plan</label>
                <select class="form-control" id="asignatura_plan">
                    <option value="" disabled selected>Seleccione una opción:</option>
                    <option value="2012">2012</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asignatura_semestre">Semestre</label>
                <select class="form-control" id="asignatura_semestre">
                    <option value="" disabled selected>Seleccione una opción:</option>
                    <option value="3">3°</option>
                    <option value="5">5°</option>
                    <option value="7">7°</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asignatura_clave">Clave</label>
                <input type="text" class="form-control" id="asignatura_clave" placeholder="Clave">
            </div>
            <div class="form-group">
                <label for="asignatura_tipo">Tipo</label>
                <select class="form-control" id="asignatura_tipo">
                    <option value="" disabled selected>Seleccione una opción:</option>
                    <option value="P">Profesionalizante</option>
                    <option value="C">Complementaria</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asignatura_cupo">Cupo</label>
                <input type="text" class="form-control" id="asignatura_cupo" placeholder="Cupo">
            </div>
            <div class="form-group">
                <label for="asignatura_asignatura">Asignatura</label>
                <input type="text" class="form-control" id="asignatura_asignatura" placeholder="Asignatura">
            </div>
            <div class="form-group">
                <label>Día</label>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="dia" value="L">Lunes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="dia" value="M">Martes
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="dia" value="MC">Miércoles
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="dia" value="J">Jueves
                        </label>
                    </div>
                </div>
                <div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="dia" value="V">Viernes
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="asignatura_hora_inicio">Hora de Inicio</label>
                <select class="form-control" id="asignatura_hora_inicio">
                    <option value="" disabled selected>Seleccione una opción:</option>
                    <option value="07">07:00</option>
                    <option value="09">09:00</option>
                    <option value="11">11:00</option>
                    <option value="13">13:00</option>
                    <option value="16">16:00</option>
                    <option value="17">17:00</option>
                    <option value="18">18:00</option>
                    <option value="20">20:00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="asignatura_hora_fin">Hora de Fin</label>
                <select class="form-control" id="asignatura_hora_fin">
                    <option value="" disabled selected>Seleccione una opción:</option>
                    <option value="09">09:00</option>
                    <option value="11">11:00</option>
                    <option value="13">13:00</option>
                    <option value="15">15:00</option>
                    <option value="18">18:00</option>
                    <option value="20">20:00</option>
                    <option value="21">21:00</option>
                    <option value="22">22:00</option>
                </select>
            </div>
        </form>
            <div class="form-group">
                <label for="asignatura_salon">Salón / Empresa</label>
                <input type="text" class="form-control" id="asignatura_salon" placeholder="Salón / Empresa">
            </div>
            <input id="insert" type="submit" class="btn btn-default" value="Enviar">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $("#insert").click(function(){
            var asignatura_empresa=$("#asignatura_empresa").val();
            var asignatura_carrera=$("input[name=carrera]:checked").map(
                 function () {return this.value;}).get().join("");
            var asignatura_plan=$("#asignatura_plan option:selected").val();
            var asignatura_semestre=$("#asignatura_semestre option:selected").val();
            var asignatura_clave=$("#asignatura_clave").val();
            var asignatura_tipo=$("#asignatura_tipo option:selected").val();
            var asignatura_cupo=$("#asignatura_cupo").val();
            var asignatura_asignatura=$("#asignatura_asignatura").val();
            var asignatura_dia=$("input[name=dia]:checked").map(
                 function () {return this.value;}).get().join("");
            var asignatura_hora_inicio=$("#asignatura_hora_inicio option:selected").val();
            var asignatura_hora_fin=$("#asignatura_hora_fin option:selected").val();
            var asignatura_salon=$("#asignatura_salon").val();
            var dataString=
            "asignatura_empresa="+asignatura_empresa+
            "&asignatura_carrera="+asignatura_carrera+
            "&asignatura_plan="+asignatura_plan+
            "&asignatura_semestre="+asignatura_semestre+
            "&asignatura_clave="+asignatura_clave+
            "&asignatura_tipo="+asignatura_tipo+
            "&asignatura_cupo="+asignatura_cupo+
            "&asignatura_asignatura="+asignatura_asignatura+
            "&asignatura_dia="+asignatura_dia+
            "&asignatura_hora_inicio="+asignatura_hora_inicio+
            "&asignatura_hora_fin="+asignatura_hora_fin+
            "&asignatura_salon="+asignatura_salon+
            "&insert=";
            if(
                $.trim(asignatura_empresa).length>0
                & $.trim(asignatura_carrera).length>0
                & $.trim(asignatura_plan).length>0
                & $.trim(asignatura_semestre).length>0
                & $.trim(asignatura_clave).length>0
                & $.trim(asignatura_tipo).length>0
                & $.trim(asignatura_cupo).length>0
                & $.trim(asignatura_asignatura).length>0
                & $.trim(asignatura_dia).length>0
                & $.trim(asignatura_hora_inicio).length>0
                & $.trim(asignatura_hora_fin).length>0
                & $.trim(asignatura_salon).length>0
            )
            {
                $.ajax({
                    type: "POST",
                    url:"http://rigel.fca.unam.mx/~li413008451/classcreateserver/database/insert.php",
                    data: dataString,
                    crossDomain: true,
                    cache: false,
                    beforeSend: function(){ $("#insert").val('Conectando...');},
                    success: function(data){
                        if(data=="ok")
                        {
                            alert("Insertado");
                            $("#insert").val('Enviar');
                        }
                        else if(data=="error")
                        {
                            alert("Error");
                            $("#insert").val('Enviar');
                        }
                    }
                });
            }return false;
        });
    });
    </script>
</body>
</html>