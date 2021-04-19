<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location:index.php');
	exit();
}


$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);

$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT id,usuario FROM usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao , $query);
$row = mysqli_num_rows($result);

//echo $row;

if($row == 1){
	$_SESSION['usuario'] = $usuario;
		header('location: painel.php');
		exit();
}else{
	$_SESSION['Não autenticado'] = true;
	header('location: index.php');

	$_SESSION['Not auth'] = true;
	header('location: index.php');

}