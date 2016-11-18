<html>
<head>
	<title>Cadastrando...</title>
</head>
<body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastroSite";
	$conexao = mysql_connect($host,$user,$pass) or die(mysql_errno());
	mysql_select_db($banco) or die(mysql_error());
	
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];

	$sql = mysql_query("INSERT INTO admin(usuario, senha) VALUES('$usuario', '$senha')");
?>
	<script>
		setTimeout("window.location='Login.php'", 2000);	
	</script>
	
	<p>Cadastrando... Caso não funcionar, favor, tentar outro nome de usuário.</p>
</body>
</html>