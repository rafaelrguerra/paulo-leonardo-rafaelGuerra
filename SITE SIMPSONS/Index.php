<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
<center><img src="Logo.png" width="400" height="200"></center>
<link rel="stylesheet" type="text/css" href="CSSsite.css"/>
	</head>
<body>
 <div id="site">
  <div class="menu">
	<?php
		include 'menu.php';
	?>
	</div>
     <article>
	<center>
	<h2>História e Criação dos Simpsons</h2>
	<font size="3">  <p>The Simpsons é uma série de animação adulta e sitcom norte-americana criada por Matt Groening para a Fox Broadcasting Company.A série é uma paródia satírica do estilo de vida da classe média dos Estados Unidos, simbolizada 
		pela família protagonista, que consiste de Homer Jay Simpson,Marjorie (Marge) Bouvier Simpson, Bartholomew (Bart) Simpson, Elisabeth (Lisa) Marie Simpson e Margareth (Maggie) Simpson. A série se passa na fictícia cidade de Springfield 
		e satiriza a cultura e a sociedade norte-americanas,a televisão e vários aspectos da condição humana.A família foi concebida por Groening pouco antes de uma solicitação do produtor James L. Brooks para uma série de curtas de animação.
		Groening elaborou uma família disfuncional e nomeou os personagens como os membros de sua própria família, substituindo o seu próprio nome por Bartholomew (Bart).Os curtas tornaram-se parte do programa The Tracey Ullman Show em 19 de 
		abril de 1987.Após três temporadas, o projeto foi transformado em um programa para o horário nobre, tornando-se primeira série da rede a figurar na lista dos 30 programas mais assistidos da temporada televisiva de 1989-1990.Desde sua 
		estreia, em 17 de dezembro de 1989, foram exibidos 579 episódios. A 27ª temporada da série começou a ser exibida em 27 de setembro de 2015. The Simpsons é uma das séries dos Estados Unidos de maior duração e o programa de horário nobre 
		há mais tempo em transmissão.Um filme foi lançado em 26 de julho de 2007 e arrecadou mais de meio bilhão de dólares em todo o mundo.The Simpsons é amplamente considerada como uma das maiores séries de televisão de todos os tempos. A edição
		da revista Time publicada em 31 de dezembro de 1999 classificou a série como a melhor do século XX,e em 14 de janeiro de 2000, a animação foi homenageada com uma estrela na Calçada da Fama de Hollywood, na Califórnia. A série já venceu 
		inúmeros prêmios desde a sua estreia, incluindo 31 Primetime Emmy Awards, 30 prêmios Annie e um prêmio Peabody. A expressão utilizada por Homer, "D'oh", foi incluída no Oxford English Dictionary, enquanto a série tem influenciado várias sitcoms 
		direcionadas ao público adulto.</p></font>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/tmQLIVE44xA" frameborder="0" allowfullscreen></iframe>
	</center>
	</article>
     
     <?php

    ?>
  
	<footer>
		<?php
			include 'footer.php';

		?>
	</footer>
     <?php
         $cookie_nome="ADM";
    $cookie_value="Administrador";
    setcookie($cookie_nome, $cookie_value, time()+(86400*30),"/");
    
    if(!isset($_COOKIE[$cookie_nome])){
        echo "Cookie nome '".$cookie_nome."'is not set!";
    }else{
        echo "Cookie '".$cookie_nome."'is set!<br>";
        echo "Value is: ".$_COOKIE[$cookie_nome];
    }
     ?>
	</div>	
	</body>
</html>