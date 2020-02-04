 $(document).ready(function() {
 $("#inicio").datepicker({
 onSelect: function(dateText, inst){
 //604800000 Es el equivalente en milisegundos a 7 días. Se obtiene multiplicando 24 horas por 60 minutos
 //por 60 segundos por 1000 milisegundos por la cantidad de días deseada
 var p = new Date(Date.parse(dateText) + 604800000);
 //p cotiene la nueva fecha. Ahora la desbaratamos en un valor string en formato mm/dd/aaaa
 var curr_date = p.getDate();
 var curr_month = p.getMonth();
 //Date.getMonth() me devuelve los meses del 0 al 11, así que hay que aumentarle 1 para obtener el mes real
 curr_month++;
 var curr_year = p.getFullYear();
 //armamos nuestro nuevo string para ajustar el valor del segundo datepicker
 var newdate = curr_month + "/" + curr_date + "/" + curr_year;
 $("#fin").datepicker("setDate", newdate);
 }
 });

 $("#fin").datepicker();
 });