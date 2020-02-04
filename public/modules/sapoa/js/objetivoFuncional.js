var form 		= false;


$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	

	//$('#objetivos').hide();
    
});


$.fn.eventos = function(){


	$('#id_proyecto').unbind('change');//borro evento click
	$('#id_proyecto').on("change", function(e) { //asigno el evento change u otro
	 
	  id_proyecto = e.target.value;
	  $('#objetivos').fadeOut('slow'); 

	  if(id_proyecto != '0')
	  {
			$.fn.get_gerencia(id_proyecto);
	  	
	  }else{
	  	console.log('epa selecciona un proyecto valido');
	  }

	});

	$('#id_gerencia').unbind('change');//borro evento click
	$('#id_gerencia').on("change", function(e) { //asigno el evento change u otro
	  
	   id_gerencia= e.target.value;

		$('#objetivos').fadeOut('slow'); 


	   $.fn.get_coordinacion(id_gerencia);

	});

	$('#id_coordinacion').unbind('change');//borro evento click
	$('#id_coordinacion').on("change", function(e) { //asigno el evento change u otro
	  
	   id_coordinacion= e.target.value;

	    $('#objetivos').fadeOut('slow');

	   $.fn.get_objetivo(id_coordinacion);

	});
	
}

/********* AJAX ***********/

$.fn.get_gerencia = function(id_proyecto){

    	$.ajax({url: "/proyecto/"+id_proyecto+"/gerencias",
				method: 'GET',
				//data: {'id_proyecto': id_proyecto}
    	}).then(function(result) {
    		console.log(result);
	    		
    		$('#id_gerencia').html('<option value="0"> Seleccione </option>');
    		

				$( result.gerencias ).each(function( index, element ) {

					$('#id_gerencia').append('<option value="'+ element.id_gerencia +'">'+ element.nb_gerencia +'</option>');
			
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

	    		
    		$('#id_coordinacion').html('<option value="0"> Seleccione </option>');

				$( result.coordinaciones ).each(function( index, element ) {

					$('#id_coordinacion').append('<option value="'+ element.id_coordinacion +'">'+ element.nb_coordinacion +'</option>');
			
				});
	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }


		$.fn.get_objetivo = function(id_coordinacion){


			$.ajax({url: "/objetivo/coordinacion/"+ id_coordinacion ,
			method: 'GET',

		}).then(function(result) {

	    		
    		$('#objetivos').html('<label for="">Objetivo</label></br>');

				$( result.objetivo ).each(function( index, element ) {

					//$('#objetivo').append('<option value="'+ element.id_objetivo +'">'+ element.objetivo +'</option>');
					$('#objetivos').append('<input type="radio" name="objetivo" value="'+element.objetivo +'" id="obj-'+element.id +'" /> '+element.objetivo+' <br/>');
					
			
				});

				$('#objetivos').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }