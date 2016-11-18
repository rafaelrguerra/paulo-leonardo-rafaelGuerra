<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastroSite";
	$conexao = mysql_connect($host,$user,$pass,$banco) or die(mysql_errno());
	mysql_select_db($banco) or die(mysql_error());
	
	$email=$_POST['email'];
	$sql = mysql_query("DELETE FROM contato WHERE email='$email'");
	
?>
<script>
	setTimeout("window.location='Administrador.php'", 0);
</script>