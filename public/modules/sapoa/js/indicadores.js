 var form 		= false;


$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#objetivo').attr('readonly', 'readonly') ;

	//$('#objetivo').hide();
    
});


$.fn.eventos = function(){


	$('#proyecto').unbind('change');//borro evento click
	$('#proyecto').on("change", function(e) { //asigno el evento change u otro
	  
	  id_proyecto = e.target.value;
	  $('#objetivo').fadeOut('slow'); 

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

		$('#objetivo').fadeOut('slow'); 


	   $.fn.get_coordinacion(id_gerencia);

	});

	$('#coordinacion').unbind('change');//borro evento click
	$('#coordinacion').on("change", function(e) { //asigno el evento change u otro
	  
	   id_coordinacion= e.target.value;

	    $('#objetivo').fadeOut('slow');

	   $.fn.get_objetivo(id_coordinacion);

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


		$.fn.get_objetivo = function(id_coordinacion){


			$.ajax({url: "/objetivo/coordinacion/"+ id_coordinacion ,
			method: 'GET',

		}).then(function(result) {

	        console.log('resultado',result);

    		$('#objetivo').html('<label for="">Objetivo</label></br>');

				
    			$.each( result.objetivo, function( key, element ) {
				  

    				$('#objetivo').append('<input type="radio" name="objetivo" value="'+element.id_objetivo +'" id="obj-'+element.id_objetivo +'" /> '+element.objetivo+' <br/>');

				});



				$('#objetivo').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }