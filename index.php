<?php 

	require_once("config.php");
/*
	$user = new Usuario();
	$user->loadById(2);

		echo $user;
*/

/*
$lista=Usuario::getList();

echo json_encode($lista);
*/

/*
$search=Usuario::search("di");
echo json_encode($search);
*/
/*
$usuario = new Usuario();

$usuario->login("diogo","diogo");

echo $usuario;
*/


$aluno=new Usuario();

$aluno->setDeslogin('Aluno');
$aluno->setDessenha('olamundo');

$aluno->insert();

echo $aluno;

 ?>