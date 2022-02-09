   <?php
session_start();
include_once("conexao.php");

if(!empty($_SESSION['id'])){
  /*echo "<h5 id='bemvin'>"; 
 echo "<img src='https://img.icons8.com/fluent/54/000000/user-male-circle.png'/>";
 echo "<br>";
  
   echo "</h5>";*/
}else{
  $_SESSION['msg'] = "Faça Login";
  header("Location: login/login.php");  

}

$id=$_SESSION['id'];

      $consulta = "SELECT * FROM `usuarios` WHERE `id`= $id";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
$foto=  'foto/'.$dado["foto"];
$nome1=  $dado["nome"];
$ft=  $dado["ft"];
$descricao=  $dado["descricao"];


}

   
   $consulta = "SELECT * FROM `produtos` WHERE 1";
 $resultado = $conn->query($consulta) or die($conn->error);

 $c=0;


while($dado = $resultado->fetch_array()){
    $mesdecadastro=  $dado["datadecadastro"];
      $data = new DateTime($mesdecadastro);
  $data->modify('+0 month');
  $mesdecadastro= $data->format('m');
if($mesdecadastro==date("m")){
    $mesatual=$mesdecadastro;
    $c++;
}

}





                $consulta = "SELECT * FROM `produtos` WHERE `instalada` = 1 ORDER BY `pagamento` DESC";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo

$instalada=0;
while($dado = $resultado->fetch_array()){
$dado["nome"];
   $mesdecadastro=  $dado["datadeinstalacao"];
      $data = new DateTime($mesdecadastro);
  $data->modify('+0 month');
  $mesdecadastro= $data->format('m');
if($mesdecadastro==date("m")){
    $instalada++;
}




} 


   $consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '%$mesatual%'";
 $resultado = $conn->query($consulta) or die($conn->error);
$cf=0;
    while($dado = $resultado->fetch_array()){
    $caixa=  $dado["valor"];
$cf=$caixa+$cf;
}


date_default_timezone_set('America/Sao_Paulo');
    $pagamento= date('d/m/Y', time());
        $consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '%$mesatual%'";
            $resultado = $conn->query($consulta) or die($conn->error);
            $somatotal=0;
      while($dado = $resultado->fetch_array()){
    $valor=  $dado["valor"];
$somatotal=$valor + $somatotal;

      }


//consulta dos meses

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '01'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$janeiro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$janeiro=$valor+$janeiro;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '02'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$fevereiro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$fevereiro=$valor+$fevereiro;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '03'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$marco=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$marco=$valor+$marco;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '04'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$abril=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$abril=$valor+$abril;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '05'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$maio=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$maio=$valor+$maio;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '06'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$junho=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$junho=$valor+$junho;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '07'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$julho=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$julho=$valor+$julho;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '08'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$agosto=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$agosto=$valor+$agosto;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '09'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$setembro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$setembro=$valor+$setembro;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '10'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$outubro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$outubro=$valor+$outubro;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '11'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$novembro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$novembro=$valor+$novembro;
}

$consulta = "SELECT * FROM `gastos` WHERE `mes` LIKE '12'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$dezembro=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$dezembro=$valor+$dezembro;
}


$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '01'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$janeiro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$janeiro1=$valor+$janeiro1;
}

$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '02'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$fevereiro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$fevereiro1=$valor+$fevereiro1;
}

$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '03'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$marco1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$marco1=$valor+$marco1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '04'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$abril1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$abril1=$valor+$abril1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '05'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$maio1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$maio1=$valor+$maio1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '06'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$junho1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$junho1=$valor+$junho1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '07'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$julho1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$julho1=$valor+$julho1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '08'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$agosto1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$agosto1=$valor+$agosto1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '09'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$setembro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$setembro1=$valor+$setembro1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '10'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$outubro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$outubro1=$valor+$outubro1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '11'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$novembro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$novembro1=$valor+$novembro1;
}
$consulta = "SELECT * FROM `entradas` WHERE `mes` LIKE '12'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$dezembro1=0;
while($dado = $resultado->fetch_array()){
$valor=$dado["valor"];
$dezembro1=$valor+$dezembro1;
}




//ultimos 7 dias 
$datamodificada= date('d-m-Y', time());

   $Date = $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 7 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum=$contarnum+1;
}


   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 6 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum2=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum2=$contarnum2+1;
}


   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 5 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum3=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum3=$contarnum3+1;
}



   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 4 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum4=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum4=$contarnum4+1;
}

   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 3 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum5=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum5=$contarnum5+1;
}

   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 2 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum6=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum6=$contarnum6+1;
}

   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 1 days'));
   //Mostra resultado
    

   $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum7=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum7=$contarnum7+1;
}



   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 0 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadecadastro` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum8=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum8=$contarnum8+1;
}





   $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 7 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum9=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum9=$contarnum9+1;
}

 $Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 6 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum10=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum10=$contarnum10+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 5 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum11=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum11=$contarnum11+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 4 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum12=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum12=$contarnum12+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 3 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum13=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum13=$contarnum13+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 2 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum14=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum14=$contarnum14+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 1 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum15=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum15=$contarnum15+1;}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 0 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `produtos` WHERE `datadeinstalacao` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum16=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["nome"];
$contarnum16=$contarnum16+1;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 7 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum17=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum17=$contarnum17+$variavel;
}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 6 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum18=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum18=$contarnum18+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 5 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum19=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum19=$contarnum19+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 4 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum20=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum20=$contarnum20+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 3 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum21=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum21=$contarnum21+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 2 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum22=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum22=$contarnum22+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 1 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum23=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum23=$contarnum23+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 0 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `gastos` WHERE `datacadastrada` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum24=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum24=$contarnum24+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 7 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum25=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum25=$contarnum25+$variavel;
}

$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 6 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum26=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum26=$contarnum26+$variavel;
}


$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 5 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum27=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum27=$contarnum27+$variavel;
}



$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 4 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum28=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum28=$contarnum28+$variavel;
}



$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 3 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum29=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum29=$contarnum29+$variavel;
}



$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 2 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum30=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum30=$contarnum30+$variavel;
}



$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 1 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum31=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum31=$contarnum31+$variavel;
}



$Date =  $datamodificada;
   //Modifica a data (7 dias atrás) 
   $data_actula = date('d-m-y', strtotime($Date. ' - 0 days'));
   //Mostra resultado
    
  $consulta = "SELECT * FROM `entradas` WHERE `cadastradas` LIKE '$data_actula'";
$resultado = $conn->query($consulta) or die($conn->error);
//enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
$contarnum32=0;
while($dado = $resultado->fetch_array()){
$variavel=$dado["valor"];
$contarnum32=$contarnum32+$variavel;
}




  
  

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                          <div class="info clearfix">
                                                <div class="image">
                                                    <a href="">
                                                       <img style="border-radius:30px;" src="images/icon/<?php echo $ft; ?>" alt="error.." />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <span><?php echo $nome1; ?></span>
                                                    </h5>
                                                   
                                                </div>
                                            </div>
                        </li>
                         <li>
                            <a href="index.php">
                                <i class="fa fa-home"></i>inicio</a>
                        </li>
                        <li>
                            <a href="Pagamento.php">
                                <i class="fas fa-chart-bar"></i>Pagamento</a>
                        </li>
                        <li>
                            <a href="listadeclientes.php">
                                <i class="fas fa-table"></i>Lista de clientes</a>
                        </li>
                        <li>
                            <a href="pendentes.php">
                                <i class="far fa-check-square"></i>Instalações</a>
                        </li>
                        <li>
                            <a href="despesas.php">
                                <i class="fas fa-money-bill-alt"></i>Despesas</a>
                        </li>
                        <li>
                            <a href="aniversariantes.php">
                                <i class="fa fa-smile-o"></i>Aniversáriantes</a>
                        </li>
                         <li>
                            <a href="carne">
                                <i class="far fa-space-shuttle"></i>Carnê</a>
                        </li>
                             <li>
                            <a href="relatorios.php">
                                <i class="fa fa-file"></i>Relatorios</a>
                        </li>
                            <li>
                            <a  href="sair.php">
                                <i class="fa fa-user"></i>SAIR</a>
                        </li>
                        
                      
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                              <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img style="border-radius:30px;" src="images/icon/<?php echo $ft; ?>" alt="error.." />
                                                        
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                         <span><?php echo $nome1; ?></span>
                                                    </h5>
                                                   
                                                </div>
                                            </div>
                        </li>
                        <li>
                            <a href="index.php">
                                <i class="fa fa-home"></i>inicio</a>
                        </li>
                        <li>
                            <a href="Pagamento.php">
                                <i class="fas fa-chart-bar"></i>Pagamento</a>
                        </li>
                        <li>
                            <a href="listadeclientes.php">
                                <i class="fas fa-table"></i>Lista de clientes</a>
                        </li>
                        <li>
                            <a href="pendentes.php">
                                <i class="far fa-check-square"></i>Instalações</a>
                        </li>
                        <li>
                            <a href="despesas.php">
                                <i class="fas fa-money-bill-alt"></i>Despesas</a>
                        </li>
                        <li>
                            <a href="aniversariantes.php">
                                <i class="fa fa-smile-o"></i>Aniversáriantes</a>
                        </li>
                         <li>
                            <a href="carne">
                                <i class="fa fa-space-shuttle"></i>Carnê</a>
                        </li>
                           <li>
                            <a href="relatorios.php">
                                <i class="fa fa-file"></i>Relatorios</a>
                        </li>
                           <li>
                            <a  href="sair.php">
                                <i class="fa fa-user"></i>SAIR</a>
                        </li>
                        
                        <li class="has-sub">
                            
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
           

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">



                                    
                                       <script>
                                    function relatorioanual(){
                                        location.href="relatorios.php"
                                    }
                                    </script>
                                    <button  onclick="relatorioanual()" class="au-btn au-btn-icon au-btn--blue">
                                        RELATORIO 2021</button>

                                           <script>
                                    function relatoriomensal(){
                                        location.href="#"
                                    }
                                    </script>
                                    <button style="background: #36eb7e;" onclick="relatoriomensal()" class="au-btn au-btn-icon au-btn--blue">
                                        RELATORIO MENSAL</button>


                                     <script>
                                    function relatoriodiario(){
                                        location.href="https://th.bing.com/th/id/OIP.OfeaSwcYUJ2pwGr5w2oWygAAAA?pid=ImgDet&rs=1"
                                    }
                                    </script>
                                    <button  onclick="relatoriodiario()" class="au-btn au-btn-icon au-btn--blue">
                                        RELATORIO DIARIO</button>


                                    




                    

                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                
                                               echo $c;
                                        
                                                
                                                ?>
                                                </h2>
                                                <span>CLIENTES</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $instalada; ?></h2>
                                                <span>INSTALAÇÕES</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $somatotal ?></h2>
                                                <span>SAÍDA</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $cf ?></h2>
                                                <span>ENTRADA</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        
                            <div class="col-lg-6">
                                 <div class="recent-report2">
                                    <h3 class="title-3">Relatorio Financeiro</h3>
                                    <div class="chart-info">
                                        <div class="chart-info__left">
                                            <div class="chart-note">
                                                <span class="dot dot--blue"></span>
                                                <span>ENTRADA</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--green"></span>
                                                <span>SAÍDA</span>
                                            </div>
                                        </div>
                                        <div class="chart-info-right">
                                            <div class="rs-select2--dark rs-select2--md m-r-10">
                                                <select class="js-select2" name="property">


                                                    <option selected="selected">Selecionar</option>
                                                    <option value="">2021</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep2-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                    <li style="list-style:none; class="has-sub"> <h3 class="title-2 tm-b-5">RESUMO GERAL DO MÊS <?php echo $mesatual                                  

                                    ?></h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>ENTRADA</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>SAÍDA</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       <!--
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script>
    
(function ($) {
  // USE STRICT
  "use strict";



  try {
    //WidgetChart 1
    var ctx = document.getElementById("widgetChart1");
    if (ctx) {
      ctx.height = 100;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
           labels: ['7 dias atrás', '6 dias atrás', '5 dias atrás', '4 dias atrás', '3 dias atrás', '2  dias atrás','Ontem','hoje'],
          type: 'line', 
          datasets: [{
            data: [<?php echo $contarnum; ?>,<?php echo $contarnum2; ?>, <?php echo $contarnum3; ?>, <?php echo $contarnum4; ?>, <?php echo $contarnum5; ?>, <?php echo $contarnum6; ?>,<?php echo $contarnum7; ?>,  <?php echo $contarnum8; ?>],
            label: 'Total', 
            backgroundColor: 'rgba(255,255,255,.1)',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 0
            },
            point: {
              radius: 3,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }


    //WidgetChart 2
    var ctx = document.getElementById("widgetChart2");
    if (ctx) {
      ctx.height = 130;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['7 dias atrás', '6 dias atrás', '5 dias atrás', '4 dias atrás', '3 dias atrás', '2  dias atrás','Ontem','hoje'],
          type: 'line',
          datasets: [{
            data: [<?php echo $contarnum9; ?>, <?php echo $contarnum10; ?>, <?php echo $contarnum11; ?>, <?php echo $contarnum12; ?>, <?php echo $contarnum13; ?>, <?php echo $contarnum14; ?>,<?php echo $contarnum15; ?>,<?php echo $contarnum16; ?>],
            label: 'Total',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              tension: 0.00001,
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }


    //WidgetChart 3
    var ctx = document.getElementById("widgetChart3");
    if (ctx) {
      ctx.height = 100;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['7 dias atrás', '6 dias atrás', '5 dias atrás', '4 dias atrás', '3 dias atrás', '2  dias atrás','Ontem','hoje'],
          type: 'line',
          datasets: [{
            data: [<?php echo $contarnum17; ?>, <?php echo $contarnum18; ?>, <?php echo $contarnum19; ?>, <?php echo $contarnum20; ?>, <?php echo $contarnum21; ?>, <?php echo $contarnum22; ?>,<?php echo $contarnum23; ?>,<?php echo $contarnum24; ?>],
            label: 'Total',
            backgroundColor: 'transparent',
            borderColor: 'rgba(255,255,255,.55)',
          },]
        },
        options: {

          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Montserrat',
            bodyFontFamily: 'Montserrat',
            cornerRadius: 3,
            intersect: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                color: 'transparent',
                zeroLineColor: 'transparent'
              },
              ticks: {
                fontSize: 2,
                fontColor: 'transparent'
              }
            }],
            yAxes: [{
              display: false,
              ticks: {
                display: false,
              }
            }]
          },
          title: {
            display: false,
          },
          elements: {
            line: {
              borderWidth: 1
            },
            point: {
              radius: 4,
              hitRadius: 10,
              hoverRadius: 4
            }
          }
        }
      });
    }


    //WidgetChart 4
    var ctx = document.getElementById("widgetChart4");
    if (ctx) {
      ctx.height = 100;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['7 dias atrás', '6 dias atrás', '5 dias atrás', '4 dias atrás', '3 dias atrás', '2  dias atrás','Ontem','hoje'],
          datasets: [
            {
              label: "Total",
              data: [<?php echo $contarnum25 ?>, <?php echo $contarnum26 ?>, <?php echo $contarnum27 ?>, <?php echo $contarnum28 ?>, <?php echo $contarnum29 ?>, <?php echo $contarnum30 ?>, <?php echo $contarnum31 ?>, <?php echo $contarnum32 ?>, 0],
              borderColor: "transparent",
              borderWidth: "3",
              backgroundColor: "rgba(255,255,255,.3)"
            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
            
          },
          scales: {
            xAxes: [{
              display: false,
              categoryPercentage: 1,
              barPercentage: 0.99
            }],
            yAxes: [{
              display: false
            }]
          }
        }
      });
    }

    // Recent Report
    const brandProduct = 'rgba(0,181,233,0.8)'
    const brandService = 'rgba(0,173,95,0.8)'

    var elements = 10
    var data1 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
    var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

    var ctx = document.getElementById("recent-rep-chart");
    if (ctx) {
      ctx.height = 250;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', ''],
          datasets: [
            {
              label: 'My First dataset',
              backgroundColor: brandService,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data1

            },
            {
              label: 'My Second dataset',
              backgroundColor: brandProduct,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data2

            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 5,
                stepSize: 100,
                max: 150,
                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: true,
                color: '#f2f2f2'

              }
            }]
          },
          elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
            }
          }


        }
      });
    }

   

    // Percent Chart

    



    var ctx = document.getElementById("percent-chart");
    if (ctx) {
      ctx.height = 280;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
            label: "My First dataset",
            data: [ 
<?php
            $tot=$cf+$somatotal; 
            $texto =  100-$somatotal*100/$tot; 
             echo substr($texto, 0,4);

 ?>
            ,
              
<?php
            $tot=$cf+$somatotal;
            $texto2 = $somatotal*100/$tot;
            echo substr($texto2, 0,4);
?> 
              
               ],
              backgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Lucro',
            'Despesas'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 55,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false
          },
          
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 10,
            caretPadding: 0,
            bodyFontSize: 16
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }



  try {

    // Recent Report 2
    const bd_brandProduct2 = 'rgba(0,181,233,0.9)'
    const bd_brandService2 = 'rgba(0,173,95,0.9)'
    const brandProduct2 = 'rgba(0,181,233,0.2)'
    const brandService2 = 'rgba(0,173,95,0.2)'

    var data3 = [<?php echo $janeiro; ?>, <?php echo $fevereiro; ?>, <?php echo $marco; ?>, <?php echo $abril; ?>, <?php echo $maio; ?>, <?php echo $junho; ?>, <?php echo $julho; ?>, <?php echo $agosto; ?>, <?php echo $setembro; ?>, <?php echo $outubro; ?>,<?php echo $novembro; ?>, <?php echo $dezembro; ?>]
    var data4 = [<?php echo $janeiro1 ?>,<?php echo $fevereiro1 ?>, <?php echo $marco1 ?>, <?php echo $abril1 ?>, <?php echo $maio1 ?>, <?php echo $junho1 ?>, <?php echo $julho1 ?>, <?php echo $agosto1 ?>, <?php echo $setembro1 ?>, <?php echo $outubro1 ?>,<?php echo $novembro1 ?>, <?php echo $dezembro1 ?>]

    var ctx = document.getElementById("recent-rep2-chart");
    if (ctx) {
      ctx.height = 230;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O','N','D'],
          datasets: [
            {
              label: 'Valor em saídas ($)',
              backgroundColor: brandService2,
              borderColor: bd_brandService2,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data3

            },
            {
              label: 'Valor em entradas ($)',
              backgroundColor: brandProduct2,
              borderColor: bd_brandProduct2,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data4

            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 5,
                stepSize: 1000,
                max: 10000,
                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: true,
                color: '#f2f2f2'

              }
            }]
          },
          elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
            },
            line: {
              tension: 0
            }
          }


        }
      });
    }

  } catch (error) {
    console.log(error);
  }


  try {

    // Recent Report 3
    const bd_brandProduct3 = 'rgba(0,181,233,0.9)';
    const bd_brandService3 = 'rgba(0,173,95,0.9)';
    const brandProduct3 = 'transparent';
    const brandService3 = 'transparent';

    var data5 = [52, 60, 55, 50, 65, 80, 57, 115];
    var data6 = [102, 70, 80, 100, 56, 53, 80, 90];

    var ctx = document.getElementById("recent-rep3-chart");
    if (ctx) {
      ctx.height = 230;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', ''],
          datasets: [
            {
              label: 'My First dataset',
              backgroundColor: brandService3,
              borderColor: bd_brandService3,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data5,
              pointBackgroundColor: bd_brandService3
            },
            {
              label: 'My Second dataset',
              backgroundColor: brandProduct3,
              borderColor: bd_brandProduct3,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data6,
              pointBackgroundColor: bd_brandProduct3

            }
          ]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 5,
                stepSize: 50,
                max: 150,
                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: false,
                color: '#f2f2f2'
              }
            }]
          },
          elements: {
            point: {
              radius: 3,
              hoverRadius: 4,
              hoverBorderWidth: 3,
              backgroundColor: '#333'
            }
          }


        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  try {
    //WidgetChart 5
    var ctx = document.getElementById("widgetChart5");
    if (ctx) {
      ctx.height = 220;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          datasets: [
            {
              label: "My First dataset",
              data: [78, 81, 80, 64, 65, 80, 70, 75, 67, 85, 66, 68],
              borderColor: "transparent",
              borderWidth: "0",
              backgroundColor: "#ccc",
            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          scales: {
            xAxes: [{
              display: false,
              categoryPercentage: 1,
              barPercentage: 0.65
            }],
            yAxes: [{
              display: false
            }]
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  try {

    // Percent Chart 2
    var ctx = document.getElementById("percent-chart2");
    if (ctx) {
      ctx.height = 100;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [
            {
              label: "My First dataset",
              data: [60, 40],
              backgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              hoverBackgroundColor: [
                '#00b5e9',
                '#fa4251'
              ],
              borderWidth: [
                0, 0
              ],
              hoverBorderColor: [
                'transparent',
                'transparent'
              ]
            }
          ],
          labels: [
            'Products',
            'Services'
          ]
        },
        options: {
          maintainAspectRatio: false,
          responsive: true,
          cutoutPercentage: 87,
          animation: {
            animateScale: true,
            animateRotate: true
          },
          legend: {
            display: false,
            position: 'bottom',
            labels: {
              fontSize: 14,
              fontFamily: "Poppins,sans-serif"
            }

          },
          tooltips: {
            titleFontFamily: "Poppins",
            xPadding: 15,
            yPadding: 20,
            caretPadding: 0,
            bodyFontSize: 16,
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  try {
    //Sales chart
    var ctx = document.getElementById("sales-chart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
          type: 'line',
          defaultFontFamily: 'Poppins',
          datasets: [{
            label: "Foods",
            data: [0, 30, 10, 120, 50, 63, 10],
            backgroundColor: 'transparent',
            borderColor: 'rgba(220,53,69,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(220,53,69,0.75)',
          }, {
            label: "Electronics",
            data: [0, 50, 40, 80, 40, 79, 120],
            backgroundColor: 'transparent',
            borderColor: 'rgba(40,167,69,0.75)',
            borderWidth: 3,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(40,167,69,0.75)',
          }]
        },
        options: {
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Poppins',
            bodyFontFamily: 'Poppins',
            cornerRadius: 3,
            intersect: false,
          },
          legend: {
            display: false,
            labels: {
              usePointStyle: true,
              fontFamily: 'Poppins',
            },
          },
          scales: {
            xAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: false,
                labelString: 'Month'
              },
              ticks: {
                fontFamily: "Poppins"
              }
            }],
            yAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: true,
                labelString: 'Value',
                fontFamily: "Poppins"

              },
              ticks: {
                fontFamily: "Poppins"
              }
            }]
          },
          title: {
            display: false,
            text: 'Normal Legend'
          }
        }
      });
    }


  } catch (error) {
    console.log(error);
  }

  try {

    //Team chart
    var ctx = document.getElementById("team-chart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
          type: 'line',
          defaultFontFamily: 'Poppins',
          datasets: [{
            data: [0, 7, 3, 5, 2, 10, 7],
            label: "Expense",
            backgroundColor: 'rgba(0,103,255,.15)',
            borderColor: 'rgba(0,103,255,0.5)',
            borderWidth: 3.5,
            pointStyle: 'circle',
            pointRadius: 5,
            pointBorderColor: 'transparent',
            pointBackgroundColor: 'rgba(0,103,255,0.5)',
          },]
        },
        options: {
          responsive: true,
          tooltips: {
            mode: 'index',
            titleFontSize: 12,
            titleFontColor: '#000',
            bodyFontColor: '#000',
            backgroundColor: '#fff',
            titleFontFamily: 'Poppins',
            bodyFontFamily: 'Poppins',
            cornerRadius: 3,
            intersect: false,
          },
          legend: {
            display: false,
            position: 'top',
            labels: {
              usePointStyle: true,
              fontFamily: 'Poppins',
            },


          },
          scales: {
            xAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: false,
                labelString: 'Month'
              },
              ticks: {
                fontFamily: "Poppins"
              }
            }],
            yAxes: [{
              display: true,
              gridLines: {
                display: false,
                drawBorder: false
              },
              scaleLabel: {
                display: true,
                labelString: 'Value',
                fontFamily: "Poppins"
              },
              ticks: {
                fontFamily: "Poppins"
              }
            }]
          },
          title: {
            display: false,
          }
        }
      });
    }


  } catch (error) {
    console.log(error);
  }

  try {
    //bar chart
    var ctx = document.getElementById("barChart");
    if (ctx) {
      ctx.height = 200;
      var myChart = new Chart(ctx, {
        type: 'bar',
        defaultFontFamily: 'Poppins',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "My First dataset",
              data: [65, 59, 80, 81, 56, 55, 40],
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 123, 255, 0.5)",
              fontFamily: "Poppins"
            },
            {
              label: "My Second dataset",
              data: [28, 48, 40, 19, 86, 27, 90],
              borderColor: "rgba(0,0,0,0.09)",
              borderWidth: "0",
              backgroundColor: "rgba(0,0,0,0.07)",
              fontFamily: "Poppins"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
      });
    }


  } catch (error) {
    console.log(error);
  }

  try {

    //radar chart
    var ctx = document.getElementById("radarChart");
    if (ctx) {
      ctx.height = 200;
      var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
          labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
          defaultFontFamily: 'Poppins',
          datasets: [
            {
              label: "My First dataset",
              data: [65, 59, 66, 45, 56, 55, 40],
              borderColor: "rgba(0, 123, 255, 0.6)",
              borderWidth: "1",
              backgroundColor: "rgba(0, 123, 255, 0.4)"
            },
            {
              label: "My Second dataset",
              data: [28, 12, 40, 19, 63, 27, 87],
              borderColor: "rgba(0, 123, 255, 0.7",
              borderWidth: "1",
              backgroundColor: "rgba(0, 123, 255, 0.5)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scale: {
            ticks: {
              beginAtZero: true,
              fontFamily: "Poppins"
            }
          }
        }
      });
    }

  } catch (error) {
    console.log(error)
  }

  try {

    //line chart
    var ctx = document.getElementById("lineChart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          defaultFontFamily: "Poppins",
          datasets: [
            {
              label: "My First dataset",
              borderColor: "rgba(0,0,0,.09)",
              borderWidth: "1",
              backgroundColor: "rgba(0,0,0,.07)",
              data: [22, 44, 67, 43, 76, 45, 12]
            },
            {
              label: "My Second dataset",
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "1",
              backgroundColor: "rgba(0, 123, 255, 0.5)",
              pointHighlightStroke: "rgba(26,179,148,1)",
              data: [16, 32, 18, 26, 42, 33, 44]
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true,
          tooltips: {
            mode: 'index',
            intersect: false
          },
          hover: {
            mode: 'nearest',
            intersect: true
          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }

        }
      });
    }


  } catch (error) {
    console.log(error);
  }


  try {

    //doughut chart
    var ctx = document.getElementById("doughutChart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [45, 25, 20, 10],
            backgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ],
            hoverBackgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ]

          }],
          labels: [
            "Green",
            "Green",
            "Green",
            "Green"
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true
        }
      });
    }


  } catch (error) {
    console.log(error);
  }


  try {

    //pie chart
    var ctx = document.getElementById("pieChart");
    if (ctx) {
      ctx.height = 200;
      var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          datasets: [{
            data: [45, 25, 20, 10],
            backgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ],
            hoverBackgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0, 123, 255,0.5)",
              "rgba(0,0,0,0.07)"
            ]

          }],
          labels: [
            "Green",
            "Green",
            "Green"
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true
        }
      });
    }


  } catch (error) {
    console.log(error);
  }

  try {

    // polar chart
    var ctx = document.getElementById("polarChart");
    if (ctx) {
      ctx.height = 200;
      var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
          datasets: [{
            data: [15, 18, 9, 6, 19],
            backgroundColor: [
              "rgba(0, 123, 255,0.9)",
              "rgba(0, 123, 255,0.8)",
              "rgba(0, 123, 255,0.7)",
              "rgba(0,0,0,0.2)",
              "rgba(0, 123, 255,0.5)"
            ]

          }],
          labels: [
            "Green",
            "Green",
            "Green",
            "Green"
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          responsive: true
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  try {

    // single bar chart
    var ctx = document.getElementById("singelBarChart");
    if (ctx) {
      ctx.height = 150;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
          datasets: [
            {
              label: "My First dataset",
              data: [40, 55, 75, 81, 56, 55, 40],
              borderColor: "rgba(0, 123, 255, 0.9)",
              borderWidth: "0",
              backgroundColor: "rgba(0, 123, 255, 0.5)"
            }
          ]
        },
        options: {
          legend: {
            position: 'top',
            labels: {
              fontFamily: 'Poppins'
            }

          },
          scales: {
            xAxes: [{
              ticks: {
                fontFamily: "Poppins"

              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                fontFamily: "Poppins"
              }
            }]
          }
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);



(function ($) {
    // USE STRICT
    "use strict";
    var navbars = ['header', 'aside'];
    var hrefSelector = 'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])';
    var linkElement = navbars.map(element => element + ' ' + hrefSelector).join(', ');
    $(".animsition").animsition({
      inClass: 'fade-in',
      outClass: 'fade-out',
      inDuration: 900,
      outDuration: 900,
      linkElement: linkElement,
      loading: true,
      loadingParentElement: 'html',
      loadingClass: 'page-loader',
      loadingInner: '<div class="page-loader__spin"></div>',
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: ['animation-duration', '-webkit-animation-duration'],
      overlay: false,
      overlayClass: 'animsition-overlay-slide',
      overlayParentElement: 'html',
      transition: function (url) {
        window.location.href = url;
      }
    });
  
  
  })(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Map
  try {

    var vmap = $('#vmap');
    if(vmap[0]) {
      vmap.vectorMap( {
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverOpacity: 0.7,
        selectedColor: '#1de9b6',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: [ '#1de9b6', '#03a9f5'],
        normalizeFunction: 'polynomial'
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Europe Map
  try {
    
    var vmap1 = $('#vmap1');
    if(vmap1[0]) {
      vmap1.vectorMap( {
        map: 'europe_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // USA Map
  try {
    
    var vmap2 = $('#vmap2');

    if(vmap2[0]) {
      vmap2.vectorMap( {
        map: 'usa_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true,
        selectedColor: null,
        hoverColor: null,
        colors: {
            mo: '#001BFF',
            fl: '#001BFF',
            or: '#001BFF'
        },
        onRegionClick: function ( event, code, region ) {
            event.preventDefault();
        }
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Germany Map
  try {
    
    var vmap3 = $('#vmap3');
    if(vmap3[0]) {
      vmap3.vectorMap( {
        map: 'germany_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();

            alert( message );
        }
      });
    }
    
  } catch (error) {
    console.log(error);
  }
  
  // France Map
  try {
    
    var vmap4 = $('#vmap4');
    if(vmap4[0]) {
      vmap4.vectorMap( {
        map: 'france_fr',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        enableZoom: true,
        showTooltip: true
      });
    }

  } catch (error) {
    console.log(error);
  }

  // Russia Map
  try {
    var vmap5 = $('#vmap5');
    if(vmap5[0]) {
      vmap5.vectorMap( {
        map: 'russia_en',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        hoverOpacity: 0.7,
        selectedColor: '#999999',
        enableZoom: true,
        showTooltip: true,
        scaleColors: [ '#C8EEFF', '#006491' ],
        normalizeFunction: 'polynomial'
      });
    }


  } catch (error) {
    console.log(error);
  }
  
  // Brazil Map
  try {
    
    var vmap6 = $('#vmap6');
    if(vmap6[0]) {
      vmap6.vectorMap( {
        map: 'brazil_br',
        color: '#007BFF',
        borderColor: '#fff',
        backgroundColor: '#fff',
        onRegionClick: function ( element, code, region ) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert( message );
        }
      });
    }

  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // Use Strict
  "use strict";
  try {
    var progressbarSimple = $('.js-progressbar-simple');
    progressbarSimple.each(function () {
      var that = $(this);
      var executed = false;
      $(window).on('load', function () {

        that.waypoint(function () {
          if (!executed) {
            executed = true;
            /*progress bar*/
            that.progressbar({
              update: function (current_percentage, $this) {
                $this.find('.js-value').html(current_percentage + '%');
              }
            });
          }
        }, {
            offset: 'bottom-in-view'
          });

      });
    });
  } catch (err) {
    console.log(err);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Scroll Bar
  try {
    var jscr1 = $('.js-scrollbar1');
    if(jscr1[0]) {
      const ps1 = new PerfectScrollbar('.js-scrollbar1');      
    }

    var jscr2 = $('.js-scrollbar2');
    if (jscr2[0]) {
      const ps2 = new PerfectScrollbar('.js-scrollbar2');

    }

  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Select 2
  try {

    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    });

  } catch (error) {
    console.log(error);
  }


})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Dropdown 
  try {
    var menu = $('.js-item-menu');
    var sub_menu_is_showed = -1;

    for (var i = 0; i < menu.length; i++) {
      $(menu[i]).on('click', function (e) {
        e.preventDefault();
        $('.js-right-sidebar').removeClass("show-sidebar");        
        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = -1;
        }
        else {
          for (var i = 0; i < menu.length; i++) {
            $(menu[i]).removeClass("show-dropdown");
          }
          $(this).toggleClass('show-dropdown');
          sub_menu_is_showed = jQuery.inArray(this, menu);
        }
      });
    }
    $(".js-item-menu, .js-dropdown").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
    });

  } catch (error) {
    console.log(error);
  }

  var wW = $(window).width();
    // Right Sidebar
    var right_sidebar = $('.js-right-sidebar');
    var sidebar_btn = $('.js-sidebar-btn');

    sidebar_btn.on('click', function (e) {
      e.preventDefault();
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
      right_sidebar.toggleClass("show-sidebar");
    });

    $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      right_sidebar.removeClass("show-sidebar");

    });
 

  // Sublist Sidebar
  try {
    var arrow = $('.js-arrow');
    arrow.each(function () {
      var that = $(this);
      that.on('click', function (e) {
        e.preventDefault();
        that.find(".arrow").toggleClass("up");
        that.toggleClass("open");
        that.parent().find('.js-sub-list').slideToggle("250");
      });
    });

  } catch (error) {
    console.log(error);
  }


  try {
    // Hamburger Menu
    $('.hamburger').on('click', function () {
      $(this).toggleClass('is-active');
      $('.navbar-mobile').slideToggle('500');
    });
    $('.navbar-mobile__list li.has-dropdown > a').on('click', function () {
      var dropdown = $(this).siblings('ul.navbar-mobile__dropdown');
      $(this).toggleClass('active');
      $(dropdown).slideToggle('500');
      return false;
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Load more
  try {
    var list_load = $('.js-list-load');
    if (list_load[0]) {
      list_load.each(function () {
        var that = $(this);
        that.find('.js-load-item').hide();
        var load_btn = that.find('.js-load-btn');
        load_btn.on('click', function (e) {
          $(this).text("Loading...").delay(1500).queue(function (next) {
            $(this).hide();
            that.find(".js-load-item").fadeToggle("slow", 'swing');
          });
          e.preventDefault();
        });
      })

    }
  } catch (error) {
    console.log(error);
  }

})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  try {
    
    $('[data-toggle="tooltip"]').tooltip();

  } catch (error) {
    console.log(error);
  }

  // Chatbox
  try {
    var inbox_wrap = $('.js-inbox');
    var message = $('.au-message__item');
    message.each(function(){
      var that = $(this);

      that.on('click', function(){
        $(this).parent().parent().parent().toggleClass('show-chat-box');
      });
    });
    

  } catch (error) {
    console.log(error);
  }

})(jQuery);
    
    </script>

</body>

</html>
<!-- end document-->
