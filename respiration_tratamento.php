<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>
<body>
	
<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
	$erro = Array();
	
	if((empty($nome)) || (empty($email)) || (empty($mensagem))){
		$url ='http://localhost:8080/site/Paginas/contato_alerta.html';
		
			echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}
	else{
			$url ='http://localhost:8080/site/Paginas/contato_sucesso.html';
			echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
				
}
	
	 
?>  
	
</body>
</html>