<script>
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
	var string1 = "";
	var string2 = "miercoles";
	if(($('#miercoles_checkbox').is(':checked'))) {
		string1 = string1.concat(string2);
		alert(string1);
		$("img[data-dia*='" + string1 + "']").closest("a").fadeOut();
	}
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