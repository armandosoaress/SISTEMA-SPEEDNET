<?php
session_start();
  include_once("conexao.php");
    $gastos =  $_POST['valor'];
      $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $id=$_SESSION['id'];
          $consulta = "SELECT * FROM `usuarios` WHERE `id`= $id";
            $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
            while($dado = $resultado->fetch_array())
            {
            $responsavel=  $dado["nome"];
            }
            echo $responsavel;
          date_default_timezone_set('America/Sao_Paulo');
        $pagamento= date('d/m/Y', time());
        $hora= date('H:i:s');
     $mes=date('m', time());
  $ano= date('y', time());
$_SESSION['msg'] = "Despesa $descricao adicionada!!<p> $pagamento ás $hora ";

$datadeincricaooo=  date('d-m-', time());;  
  $anooo=  date('y', time());;  
   $datedeinscricao= $datadeincricaooo.$anooo;
     $consulta = "INSERT INTO `gastos` (`id`, `valor`, `descricao`, `data`,`hora`,`mes`,ano,`responsavel`,`datacadastrada`) VALUES (NULL, '$gastos', '$descricao', '$pagamento','$hora','$mes','$ano','$responsavel','$datedeinscricao');";
   $resultado = $conn->query($consulta) or die($conn->error); 
header('Location: despesas.php');

    



