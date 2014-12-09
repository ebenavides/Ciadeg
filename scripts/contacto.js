// JavaScript Document


function validarFormulario() //solo se valida que los tres datos esten completos
{
	if($('#nombre').val() == "" | $('#correo').val() == ""  | $('#mensaje').val() == "" )
	{
		alert("Por favor complete todos los espacios! \nPlease, fill in the blanks!");
		return false;
	}
	return true;
}

function enviarMensaje()  //desde aqui se llama al php para que envíe el mensaje
{
	if (validarFormulario())
	{
	   //enviar mensaje	
	   $.ajax({
			type: "POST",
			url: "scripts/enviarCorreo.php",
			data:{nombreC: $('#nombre').val(),			
				   correoC: $('#correo').val(),
				   mensajeC:  $('#mensaje').val(),	
				  },
  			
			success : function(data){
				alert(data);
				location.reload();
		    }
		   
	   });	   
	}
}

$(document).ready(function() {
  	$("#submit").click(function() {
		enviarMensaje();    					
	});	    	
});