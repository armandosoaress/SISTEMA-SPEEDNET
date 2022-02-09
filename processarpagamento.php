

   
   <?php
session_start();
include_once("conexao.php");

$pag = $_POST['meuidparapagamento'];




    date_default_timezone_set('America/Sao_Paulo');






$pagamento= date('d/m/Y', time());

$id=$_SESSION['id'];
$consulta = "UPDATE `produtos` SET `pagamento` = '$pagamento' WHERE `produtos`.`id` =$pag;
";
 $resultado = $conn->query($consulta) or die($conn->error);


$dia= date('d', time());
$mes= date('m', time());
$ano= date('Y', time());
$valor= $_POST['valor'];;
$hora= date('H:i:s');

$datadeincricaooo=  date('d-m-', time());;  
$anooo=  date('y', time());;  
$datedeinscricao= $datadeincricaooo.$anooo;

 
$consulta = "INSERT INTO `entradas` (`id`, `mes`, `ano`, `valor`, `hora`,`dia`,`cadastradas`,`iddouser`) 
VALUES (NULL, '$mes', '$ano', '$valor', '$hora','$dia','$datedeinscricao','$pag');;
";
 $resultado = $conn->query($consulta) or die($conn->error);





 



   $consulta = "SELECT * FROM `produtos` WHERE id=$pag";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$nome=  $dado["nome"];
$preco=  $dado["preco"];
$somaosmesadiantado=  $dado["preco"]/35;
$dataqueoclienteescolheuparapagamento=  $dado["dataqueoclienteescolheuparapagamento"];

}

 $denvia= $dataqueoclienteescolheuparapagamento.date('/m/')."2022";


$dataEspecifica = $denvia;
$dataEspecificaIngles = implode("-", array_reverse(explode("/", $dataEspecifica))); // 2019-08-03



/*** Exemplo 02 ***/
// Convertendo para formato inglês
$somaosmesadiantado=$somaosmesadiantado+1;
$dataSomada = strtotime($dataEspecificaIngles . '+'.$somaosmesadiantado.' month'); // Exemplo de saída: 1570334400
$denvia1= date('d/m/Y', $dataSomada); // 06/10/2019', $dataSomada); // 06/08/2019


 

// echo "-----aaa";
// $datahoje=  date('d-m-y', time());
// $data= $dataqueoclienteescolheuparapagamento."-".$datahoje;
//   $data->modify('+1 month');
//   $denvia= $data->format('d/m/Y');


$consulta = " UPDATE `produtos` SET `vencimento` = '$denvia1' WHERE `produtos`.`id` = $pag;";
 $resultado = $conn->query($consulta) or die($conn->error);
 


$precofinal=$preco+$valor;;


$consulta = "UPDATE `produtos` SET `preco` = '$precofinal' WHERE `produtos`.`id` = $pag;";
 $resultado = $conn->query($consulta) or die($conn->error);


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

?>

	     	</div>
    


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

   <script>
location.href = "Pagamento.php";
</script>


</body>
</html>
