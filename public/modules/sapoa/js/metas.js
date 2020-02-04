 var form 		= false;



$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#objetivo').attr('readonly', 'readonly') ;
});




$.fn.eventos = function(){

    $('[data-toggle="tooltip"]').tooltip();

	$('#id_proyecto').unbind('change');//borro evento click
	$('#id_proyecto').on("change", function(e) { //asigno el evento change u otro
	  
	  id_proyecto = e.target.value;
	  $('#objetivo').fadeOut('slow'); 

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

	


	   $.fn.get_coordinacion(id_gerencia);

	});

	$('#id_coordinacion').unbind('change');//borro evento click
	$('#id_coordinacion').on("change", function(e) { //asigno el evento change u otro
	  
	   id_coordinacion= e.target.value;

	    $('#objetivo').fadeOut('slow');

	   $.fn.get_objetivo(id_coordinacion);

	});

	$('.objetivo').unbind('click');//borro evento click
	$('.objetivo').on("click", function(e) { //asigno el evento change u otro
	  
	   id_objetivo= e.target.value;

	   

	   $.fn.get_nacion(id_objetivo);

	});

	$('.nacion').unbind('click');//borro evento click
	$('.nacion').on("click", function(e) { //asigno el evento change u otro
	  
	   id_nacion= e.target.value;

	   

	   $.fn.get_institucional(id_nacion)
	});
	

	
	
	 
}
	
/********* AJAX ***********/

$.fn.get_gerencia = function(id_proyecto){

    	$.ajax({url: "/proyecto/"+id_proyecto+"/gerencias",
				method: 'GET',
				//data: {'id_proyecto': id_proyecto}
    	}).then(function(result) {

	    		
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

	 		$.fn.get_nacion = function(id_objetivo){


			$.ajax({url: "/objetivo/nacion/"+ id_objetivo ,
			method: 'GET',

		}).then(function(result) {

	        console.log('resultado',result);

    		$('#nacion').html('<label for="">Plan estratégico de la nación</label></br>');

				
    			$.each( result.nacion, function( key, element ) {
				  

    		let desc =  ( element.nombre.substr(0, 80).length == 80 ) ?  element.nombre.substr(0, 80) + '...' : element.nombre.substr(0, 80);
    		      					
    		$('#nacion').append(
    			`<p>
    				<input 
    				type="radio"
    				data-toggle="tooltip" 
    				title="${element.nombre}" 
    				class="nacion" 
    				name="nacion" 
    				value="${element.id_nacion}" 
    				id="obj-${element.id_nacion }"
    				/> 
    				${desc} 
    			</p>`);
				
    			$.fn.eventos();
				$('#nacion').fadeIn('slow');
				});



				

	    })
	    .catch(function(err) {
	        console.error(err);
	    });		
			   
	 }

	 $.fn.get_institucional= function ($id_nacion) {

	 	$.ajax({url: "/nacion/institucional/"+ id_nacion ,
			method: 'GET',}).then(function(result){
				console.log('resultado',result);
				$('#institucional').html('<label for="">Plan estratégico institucional</label></br>');

				$.each(result.institucional,function(key,element){

				
let desc =  ( element.nombre.substr(0, 80).length == 80 ) ?  element.nombre.substr(0, 80) + '...' : element.nombre.substr(0, 80);

					$('#institucional').append(
    			`<p>
    				<input 
    				type="checkbox"
    				data-toggle="tooltip" 
    				title="${element.nombre}" 
    				class="institucional" 
    				name="institucional" 
    				value="${element.id_institucional}" 
    				id="obj-${element.id_institucional }"
    				/> 
    				${desc} 
    			</p>`);
				
    			$.fn.eventos();
				$('#institucional').fadeIn('slow');
				

					});

				})
				.catch(function(err) {
					        console.error(err);
	    });
				}



	

	

