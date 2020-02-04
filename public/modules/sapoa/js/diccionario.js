 var form 		= false;



$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#id_objetivo').attr('readonly', 'readonly') ;

	$('#nu_enero').fadeOut('slow');

	$('#nu_febrero').fadeOut('slow');

	$('#nu_marzo').fadeOut('slow');

	$('#nu_abril').fadeOut('slow');

	$('#nu_mayo').fadeOut('slow');

	$('#nu_junio').fadeOut('slow');

	$('#nu_julio').fadeOut('slow');
	
	$('#nu_agosto').fadeOut('slow');

	$('#nu_septiembre').fadeOut('slow');

	$('#nu_octubre').fadeOut('slow');

	$('#nu_noviembre').fadeOut('slow');

	$('#nu_diciembre').fadeOut('slow');	

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


	$('#objetivo').unbind('change');//borro evento click
	$('#objetivo').on("change", function(e) { //asigno el evento change u otro
	  
	   id_objetivo= e.target.value;

	    $('#indicadores').fadeOut('slow');

	   $.fn.get_indicadores(id_objetivo);

	});

	$('#ene').unbind('change');//borro evento click
	$('#ene').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_enero').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#feb').unbind('change');//borro evento click
	$('#feb').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_febrero').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#mar').unbind('change');//borro evento click
	$('#mar').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_marzo').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});
		$('#abr').unbind('change');//borro evento click
	$('#abr').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_abril').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});
	$('#may').unbind('change');//borro evento click
	$('#may').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_mayo').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#jun').unbind('change');//borro evento click
	$('#jun').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_junio').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#jul').unbind('change');//borro evento click
	$('#jul').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_julio').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#ago').unbind('change');//borro evento click
	$('#ago').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_agosto').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#sept').unbind('change');//borro evento click
	$('#sept').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_septiembre').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

		$('#oct').unbind('change');//borro evento click
	$('#oct').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_octubre').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#nov').unbind('change');//borro evento click
	$('#nov').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_noviembre').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

	});

	$('#dic').unbind('change');//borro evento click
	$('#dic').on("change", function(e) { //asigno el evento change u otro
	  
	 

	    $('#nu_diciembre').fadeIn('slow/400/fast', function() {
	    	
	    });('slow');

	 

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
				  

    				$('#objetivo').append('<input type="radio" class="objetivo" name="objetivo" value="'+element.id_objetivo +'" id="obj-'+element.id_objetivo +'" /> '+element.objetivo+' <br/>');

				});

                   
    			$.fn.eventos();
				$('#objetivo').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }
	 	$.fn.get_indicadores = function(id_objetivo){


			$.ajax({url: "/indicadores/objetivo/"+ id_objetivo ,
			method: 'GET',

		}).then(function(result) {

	        console.log('resultado',result);

    		$('#indicadores').html('<label for="">Indicadores</label></br>');

				
    			$.each( result.indicadores, function( key, element ) {
				  

    				$('#indicadores').append('<input type="checkbox" class="indicadores" name="indicadores" value="'+element.id_indicadores +'" id="obj-'+element.id_indicadores +'" /> '+element.indicadores+' <br/>');

				});

                   
    			$.fn.eventos();
				$('#indicadores').fadeIn('slow');

	    })
	    .catch(function(err) {
	        console.error(err);
	    });
			
			   
	 }




	

	

