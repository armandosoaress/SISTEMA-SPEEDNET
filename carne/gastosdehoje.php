<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
background: #9effaa;
margin-bottom: 10px;
}
th, td,table {
  padding: 5px;
  text-align: left; 

 
}
textarea {
  resize: none;
}

</style>
</head>


   <?php
session_start();
include_once("conexao.php");
  date_default_timezone_set('America/Sao_Paulo');

$pagamento= date('d/m/Y', time());

 ?>
<body style="font-family: cursive;">

  <CENTER><h1 style="font-family:cursive;">TODOS OS GASTOS DO DIA <?php echo $pagamento; ?> </h1></CENTER>



<?php 


 $consulta = "SELECT * FROM `gastos` WHERE `data` LIKE '$pagamento'";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo

$somatotal=0;
while($dado = $resultado->fetch_array()){
   $valor=  $dado["valor"];
  $descricao=  $dado["descricao"];
$data=  $dado["data"];
$hora=  $dado["hora"];
$somatotal=$valor + $somatotal;

echo "<table style='width:100%''>
  <tr>
  <th>DESCRIÇÃO</th>
   
    <th>VALOR</th>
    <th>DATA E HORA</th>
  </tr>
  <tr>
     <th> <textarea> $descricao</textarea></th>
    <td>$valor</td>
    <td>$data ---- $hora</td>
  </tr>
</table>";

}


echo "<table style='width:100%'>
  <tr>
  <th colspan='3'>valor total:</th>

  </tr>
  <tr>

    <td colspan='3'><center><h2>$somatotal R$</h2></center></td>
   
  </tr>
</table>";

   ?>



</body>
</html>
