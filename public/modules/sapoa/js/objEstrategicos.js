 var form 		= false;


$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#objetivo').attr('readonly', 'readonly') ;

	//$('#objetivos').hide();
    
});


$.fn.eventos = function(){


	$('#proyecto').unbind('change');//borro evento click
	$('#proyecto').on("change", function(e) { //asigno el evento change u otro
	  
	  id_proyecto = e.target.value;
	  $('#objetivos').fadeOut('slow'); 

	  if(id_proyecto != '0')
	  {
			$.fn.get_gerencia(id_proyecto);
	  	
	  }else{
	  	console.log('epa selecciona un proyecto valido');
	  }

	});

	$('#gerencia').unbind('change');//borro evento click
	$('#gerencia').on("change", function(e) { //asigno el evento change u otro
	  
	   id_gerencia= e.target.value;

		$('#objetivos').fadeOut('slow'); 


	   $.fn.get_coordinacion(id_gerencia);

	});

	$('#coordinacion').unbind('change');//borro evento click
	$('#coordinacion').on("change", function(e) { //asigno el evento change u otro
	  
	   id_coordinacion= e.target.value;

	    $('#objetivos').fadeOut('slow');

	  

	});
	
}

/********* AJAX ***********/

$.fn.get_gerencia = function(id_proyecto){

    	$.ajax({url: "/proyecto/"+id_proyecto+"/gerencias",
				method: 'GET',
				//data: {'id_proyecto': id_proyecto}
    	}).then(function(result) {

	    		
    		$('#gerencia').html('<option value="0"> Seleccione </option>');

				$( result.gerencias ).each(function( index, element ) {

					$('#gerencia').append('<option value="'+ element.id_gerencia +'">'+ element.nombre +'</option>');
			
				});
	    })
	    .catch(function(err) {
	        console.error(err);
	    });

}

		$.fn.get_coordinacion = function(id_gerencia){


			$.ajax({url: "/gerencia/"+ id_gerencia +"/coordinaciones",
			method: 'GET',

		}).then(function(result) {

	    		
    		$('#coordinacion').html('<option value="0"> Seleccione </option>');

				$( result.coordinaciones ).each(function( index, element ) {

					$('#coordinacion').append('<option value="'+ element.id_coordinacion +'">'+ element.nombre +'</option>');
			
				});
	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }

