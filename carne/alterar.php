   <?php
session_start();
include_once("conexao.php");


if(!empty($_SESSION['id'])){
  /*echo "<h5 id='bemvin'>"; 
 echo "<img src='https://img.icons8.com/fluent/54/000000/user-male-circle.png'/>";
 echo "<br>";
  
   echo "</h5>";*/
}else{
  $_SESSION['msg'] = "Área restrita";
  header("Location: ../login/login.php");  
}

$nomemodificado = filter_input(INPUT_POST, 'nomemodificado', FILTER_SANITIZE_STRING);


$id=$_SESSION['id'];
$consulta = "UPDATE `usuarios` SET `nome` = '$nomemodificado' WHERE `usuarios`.`id` = $id;";
 $resultado = $conn->query($consulta) or die($conn->error);
  header("Location: configuracao.php");  


?>