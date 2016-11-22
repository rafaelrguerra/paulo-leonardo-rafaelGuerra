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
		
			include "conecta_mysql.php";
			$usuario=$_POST['usuario'];
			$senha=$_POST['senha'];
			
			$sql = "SELECT * FROM admin WHERE usuario = '$usuario' and senha = '$senha'";
			$resultado = mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());
			$row = mysqli_num_rows($resultado);
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
			mysqli_close($conexao);
		?>
	</body>
</html>