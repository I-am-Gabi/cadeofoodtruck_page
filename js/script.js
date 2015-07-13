$("#enviar").click(function( event ) {
	nome = document.getElementById('inputNome').value;
	email = document.getElementById('inputEmail').value;
	msg = document.getElementById('inputMsg').value;
  	$.ajax({
	  	method: "GET",
	  	url: "email.php",
	  	data: {
	  		cod: "f00dtruck", // Segurança nível nasa :3 
	  		id: 2,
 	  		nome: nome, 
	  		email: email,
	  		msg: msg}
	})
  	.done(function( msg ) {
    	if(msg == 1)
    		document.getElementById("msgEmail").innerHTML = "Email enviado com sucesso :)";
    	else if(msg == 0)
    		document.getElementById("msgEmail").innerHTML = "Problema ao enviar o email, tente novamente mais tarde :(";
  	});
});
