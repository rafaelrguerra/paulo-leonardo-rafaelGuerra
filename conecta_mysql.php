﻿<?php
	// abrir conexao e selecionar o banco de dados
	// CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE – 3306 ou 3308
	$conexao = mysqli_connect("localhost","root","","cadastrosite");
	// tratamento de erros
	if (mysqli_connect_errno())
	{
		echo "Não foi possível conectar: " . mysqli_connect_error();
	}
?>