<?php


	session_start();
/*
	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";


	//remover indice do array de sessão
	//unset()

	unset($_SESSION['x']);//remove apenas se existir

	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";
	//destruir a variavel de sessão
	//session_destroy()

	session_destroy();//vai destruir apenas na nova recsição

	echo "<pre>";
	print_r($_SESSION);
	echo "<pre>";
*/

	session_destroy();
	header('Location:index.php')
?>