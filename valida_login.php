<?php

session_start();


//variavel que verifica se a autentificação foi realizadfa
$usuario_autenticado =
false;
$usuarios_id=null;
//usuarios do sistema
$usuarios_perfil_id=null;


$perfis =array(1=>'Administrativo',2=>'Usuário');

$usuarios_app =array(
	array('id'=> 1,'email' =>'adm@teste.com.br', 'senha'=>'123','perfil_id'=>1),
	array('id'=> 2,'email' =>'user@teste.com.br', 'senha'=>'123','perfil_id'=>1),
	array('id'=> 3,'email' =>'jose@teste.com.br', 'senha'=>'123','perfil_id'=>2),
	array('id'=> 4,'email' =>'maria@teste.com.br', 'senha'=>'123','perfil_id'=>3),	

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
			$usuarios_id = $user['id'];	
			$usuarios_perfil_id=$user['perfil_id'];
		}
}

if ($usuario_autenticado) {
	echo "Usuário autenticado";
	$_SESSION['autenticado']='SIM';
	$_SESSION['id']= $usuarios_id;
	$_SESSION['perfil_id']= $usuarios_perfil_id;
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
