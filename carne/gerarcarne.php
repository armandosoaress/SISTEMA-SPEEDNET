
   <?php

session_start();
include_once("conexao.php");

$pag = $_POST['pag'];




    date_default_timezone_set('America/Sao_Paulo');








   $consulta = "SELECT * FROM `produtos` WHERE id=$pag";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$nome=  $dado["nome"];
$preco=  $dado["preco"];
$prox=  $dado["vencimento"];
$plano=  $dado["plano"];



if($preco==100 || $preco==0){
    if($plano==2){
    $preco=50;
    }   if($plano==3){
    $preco=55;
    }
       if($plano==5){
    $preco=60;
    }
       if($plano==8){
    $preco=70;
    }
}
$endereco=  $dado["endereco"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 

	     <div   id="sua_div">

        <style type="text/css">
      table{
     background-image: url("../img/carne.jpg");
  -webkit-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;

}
td,th{
  background: white;
}
.opacy{
    opacity: 0.7;

}
        </style>



<?php 

$i = 0;
while ($i <= 11) {
   $i++;

if($i > 1){
$dataEspecifica =$prox;
$dataEspecificaIngles = implode("-", array_reverse(explode("/", $dataEspecifica))); // 2019-08-03
/*** Exemplo 02 ***/
// Convertendo para formato inglês
$dataSomada = strtotime($dataEspecificaIngles . ' +1 month'); // Exemplo de saída: 1570334400
$denvia1= date('d/m/Y', $dataSomada); // 06/10/2019', $dataSomada); // 06/08/2019
$prox=$denvia1;
}


 echo "<table>
  <tr>
    <th> VIA CLIENTE</th>

    <th colspan='2'>VIA REVENDEDOR</th>
     <th></th>
  </tr>
  <tr>
    <td  style='width:23%'>CLIENTE <br>
 <input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value=' $nome'>
    </td>




    <td>CLIENTE
 <input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value=' $nome'>
    </td></td>

      <td>MESALIDADE
 <input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$i DE 2021'>
    </td>
</tr>





  </tr>
  <tr>
    <td>N° MESALIDADE
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$i de 12'>


    </td>
      <td>
  <p>
      <span style='border-top:0px solid black;padding: 5px;font-size: 20px;margin-top:5px;'>ACADEMIA</span>

       <td>CODIGO DO CARNÊ
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='2020-$pag'>

    </td>
    </td>



      </tr>
 <td>CODIGO DO CARNÊ
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='2020-$pag'>

    </td>


     <td>VALOR DA MENSALIDADE
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$preco,00 R$'>
   <td>VENCIMENTO
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$prox'>



    </td>


    </td>


</tr>




  </tr>


    
</tr>





  </tr>
     <td>VENCIMENTO
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$prox'>



    </td>

     <td>DATA DE PAGAMENTO
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value=''>

    </td>
     <td>ENDEREÇO
<input style='border-radius: 6px;border:1px solid black;padding: 10px;font-size: 20px;' type='' name='' value='$endereco'>

    </td>
</tr>

  </tr>





    </tr>
     <td>VALOR DA MENSALIDADE
<input style='border-radius: 6px;border:1px solid black;padding: 5px;font-size: 20px;' type='' name='' value='$preco,00 R$'>

    </td>

     <th class='opacy'>
    

   <center><H5>codigo boleto ou pix.</H5>
   </center>
    </th> 









</table>"; 

}




	     	?></div>
    


        <style>
table, td {
  border: 2px solid black;

}


table {
  width: 100%;
margin-top: 0.5px;
margin-bottom:15px;
font-family: Courier, monospace
}

input{
	font-family: OCR A Std, monospace;
	
}



</style>
</head>
<body>


<style type="text/css">
  
  #apDiv1 {
position: fixed;
width: 98%;
height: 60px;

right: 0;
bottom: 0;

}


  .men{ background-image: url("../img/carne.jpg");
  -webkit-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;}


</style>

<script type="text/javascript">
  function volta() {
 window.location.replace("carne.php");

  }
</script>

 <script>
 alert("FORMATAÇÃO USAR 67% DA PAGINA NO PDF")  
 </script>



</body>
</html>
