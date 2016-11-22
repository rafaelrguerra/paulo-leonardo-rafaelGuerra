<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
	<head>
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
	<article>
	<center>
	<div id="form-main">
  <div id="form-div">
 
    <form class="form" name="form1" id="form1" method="post" action="SalvarComent.php">
      
      <p class="name">
        <input name="nome" type="text" class="feedback-input" pattern="[a-zA-Z\s]+$" placeholder="Nome" id="name" required>
      </p>
      
      <p class="email">
        <input name="email" type="email" class="feedback-input" id="email" placeholder="Email" required>
      </p>
      
      <p class="text">
        <textarea name="comentario" class="feedback-input" id="comment" placeholder="Comente" required></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" id="button-blue"/>
      </div>
    </form>
	
  </div>
	</center>
	</article>
  
	<footer>
		<?php
	include 'footer.php';
  ?>
	</footer>
	</div>	
	</body>
</html>