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

$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
$datalimite = filter_input(INPUT_POST, 'datalimite', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$equiusado = filter_input(INPUT_POST, 'equiusado', FILTER_SANITIZE_STRING);
$marcaequi = filter_input(INPUT_POST, 'marcaequi', FILTER_SANITIZE_STRING);

 date_default_timezone_set('America/Sao_Paulo');
$datadeincricaooo=  date('d-m-y', time());;  


$id=$_SESSION['id'];

      $consulta = "SELECT * FROM `usuarios` WHERE `id`= $id";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){

$responcavel=  $dado["nome"];


}



 date_default_timezone_set('America/Sao_Paulo');
$datadeincricaooo=  date('d-m-y', time());;  
$consulta = "INSERT INTO `odemdeservico` (`id`, `datadecadastro`, `situacao`, `descricao`, `endereco`, `datalimite`, `responsavel`,`nome`,`telefone`,`cpf`,`equiusado`,`marcaequi`) 
                                VALUES (NULL, '$datadeincricaooo', '$situacao', '$descricao', '$endereco', '$datalimite','$responcavel', '$nome', '$telefone','$cpf', '$equiusado','$marcaequi')";
 $resultado = $conn->query($consulta) or die($conn->error);
  header("Location: imprimiros.php");

$anooo=  date('y', time());;  
$datedeinscricao= $datadeincricaooo.$anooo;



  $data1 = DateTime::createFromFormat("d/m/Y", $data);
  $niver= $data1->format("d/m");

 




?>
  <script>
location.href = "imprimiros.php";
</script>
