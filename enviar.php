

<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senhacr = password_hash($senha, PASSWORD_DEFAULT);




$consulta = "SELECT * FROM `usuarios` WHERE `usuario` LIKE '$usuario'";
 $resultado = $conn->query($consulta) or die($conn->error);
 $dado = $resultado->fetch_array();
echo  $dado["usuario"];
$achou = ($dado["usuario"]);

echo count($dado["usuario"]);


if (count($dado["usuario"])==0) {
	if((!empty($nome)) AND (!empty($usuario)) AND (!empty($senha))){

			$result_usuario = "INSERT INTO `usuarios` (`nome`,`usuario`,`senha`,`foto`) VALUES ('$nome','$usuario','$senhacr',0);";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "cadastro realizado";
	header("Location: login/login.php");

}else{
	$_SESSION['msg'] = "Usuário não foi cadastrado com sucesso";
	header("Location: login/cadastra.php");
}

}else{
$_SESSION['msg'] = "preencha todos os campos";
	header("Location: login/cadastra.php");	
}
}

else{
	$_SESSION['msg'] = "usuário ja existe";
	header("Location: login/cadastra.php");
}



