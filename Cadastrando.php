<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
<?php
	include "conecta_mysql.php";
	
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];

	$sql = "INSERT INTO admin(usuario, senha) VALUES('$usuario', '$senha')";
	$resultado = mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());
?>
	<script>
		setTimeout("window.location='Login.php'", 2000);	
	</script>
	
	<p>Cadastrando... Caso não funcionar, favor, tentar outro nome de usuário.</p>
</body>
</html>