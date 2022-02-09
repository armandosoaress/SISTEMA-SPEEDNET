<!DOCTYPE html>
<html>
<head>
  <title>gastos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="font-family: cursive;">

<style type="text/css">
  .g{
    border:1px solid black;
    padding:7px;
    cursor:pointer;
    font-size:25PX;
    background: #9effaa;
    margin-bottom: 14px;
  }
  input{
    padding:10px 30PX 10px 0px;
    margin-bottom:10px;
    font-family: cursive;
  }
  button{
    padding: 15px;
    background:#9effaa;
    border: none;
  font-family: cursive;
  }
</style>

  <form style="margin-bottom:15px;" action="addgastos.php" method="POST">
    <CENTER>
       <input type="number" required="" step=0.01 name="gasto"  placeholder="VALOR" name="">
     <input type="text" required="" name="descricao" placeholder="DESCRIÇÃO" name=""><P>
        <button>ADICIONAR</button>
    </CENTER>
   




   

      
      <div id="ap" style="background:#9effaa;padding: 10px ">
        <?php
        session_start();
$dip="none";
      if(isset($_SESSION['msg'])){
        echo  $_SESSION['msg'];
        $dip="inline-block";
        unset($_SESSION['msg']);
      }
    ?>

    </div>

 

     <script type="text/javascript">
 
         document.getElementById('ap').style.display="<?php echo $dip ?>";

      setTimeout(function(){


       document.getElementById('ap').style.display="none";


        }, 7000);




       function link() {
        location.href="gastosdehoje.php"
       }
         function link2() {
        location.href="gastosdeumdia.php"
       } function link3() {
        location.href="todososgastos.php"
       }


     


    
     </script>

  </form>

  
             <style type="text/css">
  
  #apDiv1 {
position: fixed;
width: 100%;
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
 window.location.replace("./");

  }
</script>

<label><h2><center>HISTORICO DE DESPESAS</center></h2></label>
  <div style="margin-top: 50px" onclick="link()" class="g">GASTOS DE HOJE</div>
   <div onclick="link2()" class="g">SELECIONAR DATA</div>
    <div onclick="link3()" class="g">TODOS OS GASTOS</div>
     <div onclick='volta()'' class='opacy men' style='text-align: center;border:2px solid black;padding:10px;border-radius:30px;cursor: pointer;margin-top: 500px


' id='apDiv1'><h1>VOLTAR</h1></div>


</body>
</html>