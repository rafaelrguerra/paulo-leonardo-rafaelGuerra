<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastroSite";
	$conexao = mysql_connect($host,$user,$pass,$banco) or die(mysql_errno());
	mysql_select_db($banco) or die(mysql_error());
?>

<html>
	<head>
		<title>Atenticando usuario</title>
		<script type="text/javascript">
			function loginsuccessfully() {
				setTimeout("window.location='Administrador.php'", 2000);
			}
			function loginfailed(){
				setTimeout("window.location='Login.php'", 2000);
			}
		</script>
	</head>
	<body>
		<?php
			$usuario=$_POST['usuario'];
			$senha=$_POST['senha'];
			$sql = mysql_query("SELECT * FROM admin WHERE usuario = '$usuario' and senha = '$senha'") or die (mysql_error());
			$row = mysql_num_rows($sql);
			if($row > 0 and $senha != "" and $usuario != ""){
				session_start();
				$_SESSION['usuario']= $_POST['usuario'];
				$_SESSION['senha']= $_POST['senha'];
				echo "Você foi autenticado com sucesso! Aguarde um momento...";
				echo "<script>loginsuccessfully()</script>";
			} else {
				echo "Nome de usuário ou senha inválidos! Redirecionando...";
				echo "<script>loginfailed()</script>";
			}
		?>
	</body>
</html>