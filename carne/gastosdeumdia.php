<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
session_start();
include_once("conexao.php");

  date_default_timezone_set('America/Sao_Paulo');


$data1 = filter_input(INPUT_POST, 'data1', FILTER_SANITIZE_STRING);

  $data2 = new DateTime($data1);
           ;
           $datafinal= $data2->format('d/m/Y');




 $consulta = "SELECT * FROM `gastos` WHERE `data` LIKE '$datafinal'";



 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


   ?>


<head>
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
<body>
  <CENTER><h1 style="font-family:cursive;">TODOS OS GASTOS DO DIA <?php echo $datafinal; ?> </h1></CENTER>

  <form action="" method="POST">
    
    <input style="padding: 7px;background: #9effaa;margin-bottom: 7px;border:none;cursor: pointer;" type="date" name="data1"  placeholder="data1">

     <button style="padding: 10px;background: #9effaa;margin-bottom: 7px;border:none;cursor: pointer;">FILTRAR 🔎</button>
  </form>



 <?php 
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
