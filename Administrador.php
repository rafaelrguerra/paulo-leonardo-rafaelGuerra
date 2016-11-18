
<html>
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="CSSsite.css"/>
        <center><img src="Logo.png" width="400" height="200"></center>
    </head>
    <body>
        
        <div id="site">
  <header>
  <nav>
  <?php
	include 'menu.php';
  ?>
	</nav>
	</header>
	<article>
	<!-- Parte futuramente em CSS-->
	<br><br>
	<center><h1> <b>Página de administrador</h1></center>
	<br>
	<div class="Homer">
	
	</div>
	<?php
	include "conecta_mysql.php";
	
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
		header("Location: login.php");
		exit;
	} else{
		echo "Lista de comentários:";
	}
    
?>
        
        </br>
        <?php
            $qwe = "SELECT nome,email,comentario FROM contato";
            $var = mysqli_query($conexao,$qwe) or die("Não foi possivel execcutar a sql: ".msqli_error());
            if($var){
                while($coment=mysqli_fetch_array($var)){
                    echo "</br>";
                    echo strip_tags("<b><i>Nome: </i></b>","<i>");   
                    echo $coment['nome'];
                    echo "</br>";
                    echo strip_tags("<b><i>Email: </i></b>","<i>"); 
                    echo $coment['email'];
                    echo "</br>";
                    echo strip_tags("<b><i>Comentário: </i></b>","<i>"); 
                    echo $coment['comentario'];
                    echo "</br>";
                    
                    
                }
				echo "<form action='Excluir.php' method='post'>
							<input type='text' name='email' placeholder='Confirme email para excluir'>
							<input type='submit' value='Excluir comentário'>";
            }   
        echo "</br>";
        ?>
	</article>
		<br>
            <h1><a href="Logout.php">LOGOUT</a></h1>
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
	</div>
    </body>
</html>