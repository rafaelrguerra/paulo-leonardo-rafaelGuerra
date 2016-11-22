<?php
	include "conecta_mysql.php";
	
	$email=$_POST['email'];
	$sql = "DELETE FROM contato WHERE email='$email'";
	$resultado = mysqli_query($conexao,$sql) or die ("Não foi possível executar a SQL: ".mysqli_error());
	mysqli_close($conexao);
?>
<script>
	setTimeout("window.location='Administrador.php'", 0);
</script>