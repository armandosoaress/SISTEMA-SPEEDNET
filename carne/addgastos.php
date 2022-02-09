

<?php
session_start();
include_once("conexao.php");

$gastos =  $_POST['gasto'];
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

echo $gastos;


  date_default_timezone_set('America/Sao_Paulo');

$pagamento= date('d/m/Y', time());



$hora= date('H:i:s');


 $_SESSION['msg'] = "Despesa $descricao adicionada!!<p> $pagamento ás $hora ";



$consulta = "INSERT INTO `gastos` (`id`, `valor`, `descricao`, `data`,`hora`) VALUES (NULL, '$gastos', '$descricao', '$pagamento','$hora');";
 $resultado = $conn->query($consulta) or die($conn->error);




 header("Location: gastos.php");

