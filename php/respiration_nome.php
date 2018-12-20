<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
	<script>
	alert("Prencha os dados corretamente");
	
	
	</script>

	<form method="post" id="formulario" action="respiration_tratamento.php">
		<fieldset id="mensagem"><legend>Deixe Sua Mensagem!</legend>
			<p><label for="cNome">Nome: </label> <input type:"text" name="nome" id="cNome" size="20" maxlength="30" placeholder="Nome Obigatório"/></p>
			<p><label for="cEmail">E-mail </label><input type="email" name="email"id="cEmail" size="20" maxlength="40" placeholder="Melhor E-mail"/></p>
			<p><label for="cMsg">Mensagem:</label> 
			<textarea name="mensagem" id="cMsg" cols="45" rows="5" placeholder="Deixe sua Dúvida ou Sugestão"></textarea></p>
		<p><input type="reset" value="    Limpar   ">
		<input type="submit" value="    Enviar    "></p>  
		</fieldset>
		
	
	</form>
	
<body>
</body>
</html>
