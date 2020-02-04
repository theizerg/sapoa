 var form 		= false;


$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#objetivo').attr('readonly', 'readonly') ;

	//$('#objetivo').hide();
	
    

    
});


$.fn.eventos = function(){

    $('[data-toggle="tooltip"]').tooltip();

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

	


	   $.fn.get_coordinacion(id_gerencia);

	});

	$('#coordinacion').unbind('change');//borro evento click
	$('#coordinacion').on("change", function(e) { //asigno el evento change u otro
	  
	   id_coordinacion= e.target.value;

	    $('#objetivo').fadeOut('slow');

	   $.fn.get_objetivo(id_coordinacion);

	});

	$('.objetivo').unbind('click');//borro evento click
	$('.objetivo').on("click", function(e) { //asigno el evento change u otro
	  
	   id_objetivo= e.target.value;

	   

	   $.fn.get_iniciativa(id_objetivo);

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
				  

    				$('#objetivo').append('<input type="checkbox" class="objetivo" name="objetivo" value="'+element.id_objetivo +'" id="obj-'+element.id_objetivo +'" /> '+element.objetivo+' <br/>');

				});

                   
    			$.fn.eventos();
				$('#objetivo').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }

	 $.fn.get_iniciativa = function(id_coordinacion){


			$.ajax({url: "/iniciativa/objetivo/"+ id_objetivo ,
			method: 'GET',

		}).then(function(result) {

	        console.log('resultado',result);

    		$('#iniciativa').html('<label for="">iniciativa</label></br>');

				
    			$.each( result.iniciativa, function( key, element ) {
				  

    				$('#iniciativa').append('<input type="checkbox" class="iniciativa" name="iniciativa" value="'+element.id_iniciativa +'" id="obj-'+element.id_iniciativa +'" /> '+element.nombre+' <br/>');

				});

                   
    			$.fn.eventos();
				$('#iniciativa').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }










	

	

	

