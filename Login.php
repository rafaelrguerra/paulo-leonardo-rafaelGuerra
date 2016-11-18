<?php
   include("conecta_mysql.php");
?>

<html>
   <head>
      <title>Login Page</title>
       <meta charset="UTF-8">
   <center><img src="Logo.png" width="400" height="200"></center>
<link rel="stylesheet" type="text/css" href="CSSsite.css"/>
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
<br>
     <br>
     <br>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "Autenticacao.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "usuario" /><br /><br />
                  <label>Password  :</label><input type = "password" name = "senha" /><br/><br />
                  <input type = "submit" value = "Entrar" />
               </form><br>
               <h2>Não está cadastrado?</h2><br>
			   <form action = "Cadastrando.php" method = "post">
					<b>UserName :</b> <input type="text" name="usuario" /><br /><br />
					<b>Password: </b><input type="password" name="senha" /><br /><br />
					<input type="submit" value="Cadastrar">
			   </form>
					
            </div>
				
         </div>
			
      </div>
		<footer>
			<?php include "footer.php"; ?>
		</footer>
   </body>
</html>
