<?php
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

	$arquivo=fopen('arquivo.hd', 'a');

	$titulo=str_replace('#', '-',$_POST);
	$categoria=str_replace('#', '-',$_POST);
	$descricao=str_replace('#', '-',$_POST);

	//pesquisa nas constantes a existencia do # e se houver modifica para -

	$texto =$_POST['titulo'].'#'.$_POST['categoria'].'#'.$_POST['descricao'].PHP_EOL;
	
	//abrindo o arquivo

	$arquivo=fopen('arquivo.hd', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando
	fclose($arquivo);
	//echo $texto;

	header('Location: abrir_chamado.php');

?>
