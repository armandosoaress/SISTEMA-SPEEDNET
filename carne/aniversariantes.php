  
             <!DOCTYPE html>
             <html>
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

$id=$_SESSION['id'];

      $consulta = "SELECT * FROM `usuarios` WHERE `id`= $id";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$foto=  'foto/'.$dado["foto"];
$nome=  $dado["nome"];
$descricao=  $dado["descricao"];


}
?>

<!DOCTYPE html>
 <meta http-equiv="Content-Language" content="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

  <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">ÁREA DO CLIENTES</p>
                 <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr> <form  method="POST" action="pagamentorealizado.php" > 
                          <th>NOME</th>
                          <th>ENDEDEÇO</th>
                            <th>ANIVERSÁRIO</th>
                           <th>TELEFONE</th>
                          <th>REALIZAR</th>
                                                  </tr>
                      </thead>
                      <tbody>



                      
                 

                              <?php 

                                  date_default_timezone_set('America/Sao_Paulo');


$pagamento= date('d/m/Y', time());


   $consulta = "SELECT * FROM `produtos` WHERE `nacimento` LIKE '$pagamento' ORDER BY `pagamento` DESC";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$nome=  $dado["nome"];
$endereco=  $dado["endereco"];
$cpf=  $dado["cpf"];
$pagame=  $dado["pagamento"];
$inde=  $dado["id"];
$insta=  $dado["instalada"];
$telefone=  $dado["telefone"];

$prox=date('d/m/Y', strtotime('+31 days'));


date_default_timezone_set('America/Sao_Paulo');





$data2 = $pagame;
$data1 = date('d/m/Y', time());;

// transforma a data do formato BR para o formato americano, ANO-MES-DIA
$data1 = implode('-', array_reverse(explode('/', $data1)));
$data2 = implode('-', array_reverse(explode('/', $data2)));

// converte as datas para o formato timestamp
$d1 = strtotime($data1); 
$d2 = strtotime($data2);

// verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
$dataFinal = ($d2 - $d1) /86400;



// caso a data 2 seja menor que a data 1, multiplica o resultado por -1
if($dataFinal < 0)
  $dataFinal *= -1;



echo "   <tr id='$inde'>
                          <td> $nome</td>
                          <td>$endereco</td>
                        
                 
                        
<td>$pagamento</td>

                            

                      
                         

                        <td>$telefone</td>

                        
 <td> 
                          <button  onclick='fu($inde)' id=$inde class='btn btn-primary btn-icon-text'>
                          <i class='mdi mdi-file-check btn-icon-prepend'></i>
                          FEITA
                        </button>


                        </td>

                        </tr>";

}
                         ?>
                         <script type="text/javascript">
                           function fu(x){
                            document.getElementById(x).style.background="red"
                             document.getElementById('inn').value=x;
                           }
                         </script>
                  
                     
            
                      
                      
                      </tbod>

                      
                    </table>
                  </div>
                </div>
              </div>
            </div>  

                          <input id="inn" style="display: none" type="text" name="pag" value="" >
                         

             </form>
                
             </html>