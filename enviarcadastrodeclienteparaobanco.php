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
  header("Location: ./login/login.php");  
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$dataqueoclienteescolheuparapagamento= filter_input(INPUT_POST, 'dataqueoclienteescolheuparapagamento', FILTER_SANITIZE_STRING);
 
 date_default_timezone_set('America/Sao_Paulo');
$datadeincricaooo=  date('d-m-', time());;  
$anooo=  date('y', time());;  
$datedeinscricao= $datadeincricaooo.$anooo;



  $data1 = DateTime::createFromFormat("d/m/Y", $data);
  $niver= $data1->format("d/m");

 




$id=$_SESSION['id'];
$consulta = "INSERT INTO `produtos`(`nome`,`preco`,`endereco`,`cpf`,`instalada`,`nacimento`,`telefone`,`datadecadastro`,`niver`,`dataqueoclienteescolheuparapagamento`)VALUES('$nome','0','$endereco','$cpf','0','$data','$telefone','$datedeinscricao','$niver','$dataqueoclienteescolheuparapagamento')";
 $resultado = $conn->query($consulta) or die($conn->error);



?>
  <script>
location.href = "Pagamento.php";
</script>
