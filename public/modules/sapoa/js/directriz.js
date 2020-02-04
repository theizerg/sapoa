 var form 		= false;


$(document).ready(function() {

	form = $('#form');
     
    $.fn.eventos();
    
	$('#objetivo').attr('readonly', 'readonly') ;

	//$('#objetivo').hide();
	
    

    
});


$.fn.eventos = function(){

    $('[data-toggle="tooltip"]').tooltip();

	$('#id_objetivo').unbind('click');//borro evento click
	$('#id_objetivo').on("click", function(e) { //asigno el evento change u otro
	  
	   id_objetivo= e.target.value;

	  

	   $.fn.get_nacion(id_objetivo);

	});

	$('.id_nacion').unbind('click');//borro evento click
	$('.id_nacion').on("click", function(e) { //asigno el evento change u otro
	  
	   id_nacion= e.target.value;

	   

	   $.fn.get_institucional(id_nacion)
	});
	
	$('.id_institucional').unbind('click');//borro evento click
	$('.id_institucional').on("click", function(e) { //asigno el evento change u otro
	  
	   id_institucional= e.target.value;

	   

	   $.fn.get_estrategico(id_institucional)
	});
	
	
	 
}
	
/********* AJAX ***********/
	 		$.fn.get_nacion = function(id_objetivo){


			$.ajax({url: "/objetivo/nacion/"+ id_objetivo ,
			method: 'GET',

		}).then(function(result) {

	        console.log('resultado',result);

    		$('#nacion').html('<label for=""></label>');

				
    			$.each( result.nacion, function( key, element ) {
				  

    		let desc =  ( element.tx_nacion.substr(0, 80).length == 80 ) ?  element.tx_nacion.substr(0, 80) + '...' : element.tx_nacion.substr(0, 80);
    		      					
    		$('#nacion').append(
    			`<p>
    				<input 
    				type="radio"
    				data-toggle="tooltip" 
    				title="${element.tx_nacion}" 
    				class="id_nacion" 
    				name="id_nacion" 
    				value="${element.id_nacion}" 
    				id="obj-${element.id_nacion }"
    				/>
    				${desc} 
    			</p>`);
				
    			$.fn.eventos();
				
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
				$('#institucional').html('<label for=""></label>');

				$.each(result.institucional,function(key,element){

				
let desc =  ( element.tx_institucional.substr(0, 80).length == 80 ) ?  element.tx_institucional.substr(0, 80) + '...' : element.tx_institucional.substr(0, 80);

					$('#institucional').append(
    			`<p>
    				<input 
    				type="checkbox"
    				data-toggle="tooltip" 
    				title="${element.tx_institucional}" 
    				class="id_institucional" 
    				name="id_institucional" 
    				value="${element.id_institucional}" 
    				id="obj-${element.id_institucional }"
    				/> 
    				${desc} 
    			</p>`);
				
    			$.fn.eventos();
			
				

					});

				})
				.catch(function(err) {
					        console.error(err);
	    });
				}


				 $.fn.get_estrategico= function ($id_nacion) {

	 	$.ajax({url: "/institucional/estrategico/"+ id_institucional+'/'+ id_nacion ,
			method: 'GET',}).then(function(result){
				console.log('resultado',result);
				$('#estrategico').html('<label for=""></label>');

				$.each(result.estrategico,function(key,element){

				
let desc =  ( element.tx_estrategico.substr(0, 80).length == 80 ) ?  element.tx_estrategico.substr(0, 80) + '...' : element.tx_estrategico.substr(0, 80);

					$('#estrategico').append(
    			`<p>
    				<input 
    				type="checkbox"
    				data-toggle="tooltip" 
    				title="${element.tx_estrategico}" 
    				class="id_estrategico" 
    				name="id_estrategico" 
    				value="${element.id_estrategico}" 
    				id="obj-${element.id_estrategico }"
    				/> 
    				${desc} 
    			</p>`);
				
    			$.fn.eventos();
				
				

					});

				})
				.catch(function(err) {
					        console.error(err);
	    });
				}
	

	

	

