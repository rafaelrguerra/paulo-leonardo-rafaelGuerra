<html>
<head>
	<meta charset="utf-8">
	<title>Salvando comentário...</title>
</head>
<body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastroSite";
	$conexao = mysql_connect($host,$user,$pass) or die(mysql_errno());
	mysql_select_db($banco) or die(mysql_error());
	
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$comentario=$_POST['comentario'];

	$sql = mysql_query("INSERT INTO contato(nome, email, comentario) VALUES('$nome', '$email', '$comentario')");
?>
	<script>
		setTimeout("window.location='Contato.php'", 2000);
	</script>
	
	<p>Comentário enviado com sucesso.</p>
</body>
</html>