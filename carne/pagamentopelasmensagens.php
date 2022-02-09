   <?php
session_start();
include_once("conexao.php");

$pag = $_POST['pag'];




    date_default_timezone_set('America/Sao_Paulo');






$pagamento= date('d/m/Y', time());

$id=$_SESSION['id'];
$consulta = "UPDATE `produtos` SET `pagamento` = '$pagamento' WHERE `produtos`.`id` =$pag;
";
 $resultado = $conn->query($consulta) or die($conn->error);
  //header("Location: configuracao.php");  



   $consulta = "SELECT * FROM `produtos` WHERE id=$pag";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$nome=  $dado["nome"];
$preco=  $dado["preco"];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	     <div id="sua_div">

<?php 

$i = 0;
while ($i <= 11) {
   $i++;

  

   	 $prox=date('d/m/Y', strtotime("+$i Month"));
   




    }

header('Location: index.php');
exit;
?>

	     	?></div>
    


        <style>
table, td {
  border: 1px solid black;

}


table {
  width: 100%;
margin-top: 20px;
font-family: Courier, monospace
}

input{
	font-family: OCR A Std, monospace;
	
}
</style>
</head>
<body>





</body>
</html>
