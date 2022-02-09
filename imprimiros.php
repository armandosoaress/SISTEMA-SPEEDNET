<!DOCTYPE html>
<html>


<?php
session_start();
include_once("conexao.php");

$consulta = "SELECT * FROM `odemdeservico` WHERE `concluida` = 0 ORDER BY `id` ASC";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$id=$_SESSION['id'];


while($dado = $resultado->fetch_array()){
$endereco=  $dado["endereco"];
$descricao=  $dado["descricao"];
$situacao=  $dado["situacao"];
$inde=  $dado["id"];
$nome=$dado["nome"];
$telefone=$dado["telefone"];
$cpf=$dado["cpf"];
$nomeequipamento=$dado["equiusado"];
$marca=$dado["marcaequi"];


$datalimite=  $dado["datalimite"];

}

echo "


<table>
  <tr>
    <th>Cliente</th>
    <th></th>
    
  </tr>
  <tr>
  <td style='border: 1px solid #dddddd;'>
  <b>Nome</b> <br>
     $nome
     
    <p><b>Telefone</b><br>
    $telefone
    </td>
    <td style=' border: 1px solid #dddddd;'>
    
     <b>Endereço</b> <br>     $endereco
    <p>
    <b>cpf</b><br>
    $cpf
    </td>
  </tr>
  



  <tr>
    <th> Equipamento<br>
     </th>
    <th></th>
    
  </tr>
  <tr>
  <td style=' border: 1px solid #dddddd;'>
    <b>Nome</b> <br>
     $nomeequipamento
    <p><b>Marca</b><br>
    $marca
    </td>
    <td style='border: 1px solid #dddddd;'>
     <br>

    <p><br>
    
    </td>
  </tr>

  <tr>
    <th> Diagnostico<br>
     </th>
    <th></th>
    
  </tr>
  <tr>
  <td style=' border: 1px solid #dddddd;'>
     <br>
     $descricao
    <p><br>
    
    </td>
    <td style=' border: 1px solid #dddddd;'>
     <br>

    <p><br>
    
    </td>
  </tr>




  
  <tr>
    <th> dados do serviço<br>
     </th>
    <th></th>
    
  </tr>
  <tr>
  <td style=' border: 1px solid #dddddd;'>
  <b>Técnico responsável</b>  <br><p>
     -----------------------------------------------------------
     
   <p>  
    
    </td>
    <td style=' border: 1px solid #dddddd;'>
     <br>
    <b>Data e Hora</b> <br><p>
      ----/----/-----    as ----:----

    <p><br>
    
    </td>

    
  </tr>
  
</table>


";


?>

<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
 
  text-align: left;
  padding: 8px;
}

tr {
  background-color: #dddddd;
}
TD {
  background-color: WHITE;
}
</style>
</head>
<body>
<p>
<center><img src="templatemo_logo.png" alt="Girl in a jacket" width="300">
</center>



</body>
</html>

