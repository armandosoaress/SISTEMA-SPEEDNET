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


}



?>


<!DOCTYPE html>
<meta http-equiv="Content-Language" content="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>SISTEMA</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="./"><img src="images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
           <!--  <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div> -->
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>



          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">

  <?php
               if ($foto!="foto/0") {
                echo "<img src='$foto' alt='profile'/>"; 
               }else{
                 echo "<img src='images/logo.png' alt='profile'/>"; 
               
               }

               

                ?>



              <span class="nav-profile-name"><?php echo $nome; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a href="../administrativo" class="dropdown-item">
                <script type="text/javascript">
                  function inicio() {
                    location.href = "../administrativo";
                  }
                </script>
                <span onclick="inicio()">
                 <i class="mdi mdi-home text-primary"></i>
               Voltar
              </a></span>
               
              <script type="text/javascript">
                function sair() {
                   location.href = "../sair.php";
                }
              </script>

              <a href="../sair.php" onclick="sair()" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Sair
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">VOLTAR </span>
            </a>
          </li>
       

            </a>
          
          </li>

        </ul>

      </nav>
      <!-- partial -->


      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sua conta</h4>
                  <p class="card-description">
                   Faça alterações na sua conta
                  </p>
                  <form method="POST" action="alterar.php" enctype="multipart/form-data">
                     <div class="form-group">
                      <label for="exampleInputUsername1">Nome</label>
                      <input type="text" name="nomemodificado" class="form-control" value="<?php echo $nome  ?>" id="exampleInputUsername1" placeholder="Username">
                    </div>
                  
                    
                     <div class="form-group">
                           <div class="form-group">
                      <label for="exampleInputPassword1">CHAVE DE SEGURANÇA</label>
                      <input  disabled type="password" class="form-control" id="exampleInputPassword1" placeholder="EER847FGRYGVV">
                    </div>
                  

               
                          
                                                     <style>
body {margin:25px;}

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>





                              

                    </div>
               
                    <button type="submit" class="btn btn-primary mr-2">Salvar alterações</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>





     

 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
      function previewImagem(){
        var arquivo = document.querySelector('input[name=arquivo]').files[0];
        var preview = document.querySelector('#pre');
        
        var reader = new FileReader();
        
        reader.onloadend = function () {
          preview.src = reader.result;
        }
        
        if(arquivo){
          reader.readAsDataURL(arquivo);
        }else{
          preview.src = "";
        }
      }
    </script>


              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fotos</h4>
                  
                  <form  method="POST" action="enviarft.php" enctype="multipart/form-data" class="forms-sample">
                    <div class="form-group row">
                     <div class="polaroid">
 

  <div  class="container">


                      <div class="input-group col-xs-12">
                        <input style="display: none" type="text" class="form-control file-upload-info" disabled >
                        
                        <span class="input-group-append">
                       
                        </span>
                      </div>
              
                      <input name="arquivo"  id="imagem" onchange="previewImagem()" type="file" class="file-upload-default">

                    

      <img id="pre" class="file-upload-browse" style="width: 150px; height: 150px;border-radius: 40%;cursor: pointer;display:"
       src="<?php
        if ($foto=="foto/0") {
          echo "images/logo.png";
           }else{
            echo $foto;
           } ?>"  alt="erro"> <p></p>

   <button  onclick="sumirbotao()" id="botao" class="file-upload-browse btn btn-primary" type="button">Escolher outra foto</button>
 
  </div>
</div>
                    </div>
                 
                  
                    <button type="submit" class="btn btn-primary mr-2">Enviar</button>
                    
<script type="text/javascript">
  function afp() {
    location.href = "deletarftdeperfil.php";
  }
</script>
                    <?php 
                    if ($foto!="foto/0") {

                     echo "<input onclick='afp()' type='button' style='background: red'  class='btn btn-primary mr-2' value='Deletar foto de perfil'>";
                    }

                     ?>

                  </form>
                </div>
              </div>
            </div>
           
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer  class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
