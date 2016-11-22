<html>
<head>
	<meta charset="utf-8">
	<title>Salvando comentário...</title>
</head>
<body>
<?php
	include "conecta_mysql.php";
	
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$comentario=$_POST['comentario'];

	$sql = "INSERT INTO contato(nome, email, comentario) VALUES('$nome', '$email', '$comentario')";
	$resultado = mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());
	mysqli_close($conexao);
?>
	<script>
		setTimeout("window.location='Contato.php'", 2000);
	</script>
	
	<p>Comentário enviado com sucesso.</p>
</body>
</html>