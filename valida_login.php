<?php

session_start();


//variavel que verifica se a autentificação foi realizadfa
$usuario_autenticado =
false;
//usuarios do sistema

$usuarios_app =array(
	array('email' =>'adm@teste.com.br', 'senha'=>'123456'),
	array('email' =>'user@teste.com.br', 'senha'=>'abcd')	

);
/*
echo "<pre>";
print_r($usuarios_app);
echo "</pre>";
*/

foreach ($usuarios_app as $user ) {
	/*
	echo 'Usuário app: '.$user['email'].'/'.$user['email'];
	echo '<br/>';
	echo 'Usuário form: '.$_POST['email'].'/'.$_POST['email'];
	*/

		if($user['email']==$_POST['email']&&$user['senha']==$_POST['senha']){
		$usuario_autenticado=true;
		}
	}
if ($usuario_autenticado) {
	echo "Usuário autenticado";
	$_SESSION['autenticado']='SIM';
	header('Location:home.php');
}else{
	$_SESSION['autenticado']='NÃO';
	header('Location:index.php?login=erro');
}
	

/*
	print_r($_GET);
	
	echo "<br/>";

	echo $_GET['email'];
	echo "<br/>";

	echo $_GET['senha'];
*//*
	print_r($_POST);

	echo '<br/>';
	echo $_POST['email'];
	echo '<br/>';
	echo $_POST['senha'];
	*/
?>
