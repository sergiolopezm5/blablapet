// JavaScript Document
function filtrarCuidadores(){
		
 	var url = "funciones_ajax_dashboard.php"; // El script a dónde se realizará la petición.
	var funcion = "filtrarCuidadores";
	var provincia = document.getElementById("state").value;
	var agresividad_max = document.getElementById("agre").value;
	var tamano_max = document.getElementById("size").value;
	//console.log(dni);
	$.ajax({
		   type: "POST",
		   url: url,
		   data: "funcion="+funcion+"&provincia="+provincia+"&agresividad_max="+agresividad_max+"&tamano_max="+tamano_max, // Adjuntar los campos del formulario enviado.
		   success: function(data)
		   {
			   console.log(data);
			   $("#pricing-table").html(data); // Buscar donde mostrarlo
			   
			   
			}
		 });
	return false; // Evitar ejecutar el submit del formulario.
}