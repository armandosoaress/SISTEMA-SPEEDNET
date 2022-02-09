  <?php
session_start();
include_once("conexao.php");

$pag = $_POST['pag'];



date_default_timezone_set('America/Sao_Paulo');
$datadeincricaooo=  date('d-m-', time());;  
$anooo=  date('y', time());;  
$datedeinscricao= $datadeincricaooo.$anooo;


$consulta = "UPDATE `odemdeservico` SET `concluida` = '1' WHERE `odemdeservico`.`id` =$pag;";
 $resultado = $conn->query($consulta) or die($conn->error);



$pagamento= date('d/m/Y', time());

$id=$_SESSION['id'];
$consulta = "UPDATE `produtos` SET `instalada` = '1' WHERE `produtos`.`id` =$pag;
";
 $resultado = $conn->query($consulta) or die($conn->error);
  header("Location: listarordem.php");  //header("Location: configuracao.php");  


