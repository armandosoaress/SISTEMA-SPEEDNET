<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave Cafe HTML Template by Tooplate</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
<!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>
<body>
  <div class="tm-container">
    <div class="tm-row">
    <script src="https://kit.fontawesome.com/4f8a95a052.js" crossorigin="anonymous"></script>
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">SISTEMIZE.AI</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="../cadastrarcliente.php" class="tm-page-link active">
                  <i class="fa fa-user-plus tm-page-link-icon"></i>
                  <span>Cadastrar cliente
                  </span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fa fa-plus tm-page-link-icon"></i>
                  <span>Gerar OS</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                <i class="fas fa-money-bill-wave tm-page-link-icon"></i>
                  <span>Pagamento</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fas fa-print tm-page-link-icon"></i>
                  <span>Reimprimir NF</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fas fa-money-check tm-page-link-icon"></i>
                  <span>Folha de pag.</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>Funcionarios.</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Chat speed</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="../ordemdeservico.php" class="tm-page-link">
                  <i class="fa fa-bars tm-page-link-icon"></i>
                  <span>Mais</span>
                </a>
              </li>
        
        
            </ul>
          </nav>
        </div>        
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                <li>
                  <a href="#" class="tm-tab-link active" data-id="cold">OS pendetes</a>
                </li>
                <!-- <li>
                  <a href="#" class="tm-tab-link" data-id="hot">Hot Coffee</a>
                </li>
                <li>
                  <a href="#" class="tm-tab-link" data-id="juice">Fruit Juice</a>
                </li> -->
              </ul>
            </nav>

            <div id="cold" class="tm-tab-content">
              <div class="tm-list">
              
              <?php 
            
              include_once("../conexao.php");
                $consulta = "SELECT * FROM `odemdeservico` WHERE `concluida` = 0 ORDER BY `id` ASC";
                $resultado = $conn->query($consulta) or die($conn->error);
                //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo
            
               
               
               while($dado = $resultado->fetch_array())
               {
               $datadecadastro=  $dado["datadecadastro"];
               $datalimite=  $dado["datalimite"];
               $descricao=  $dado["descricao"];
               echo"<div class='tm-list-item'>          
               <div class='tm-black-bg tm-list-item-text'>
                 <h3 class='tm-list-item-name'>$datadecadastro<span class='tm-list-item-price'>$datalimite</span></h3>
                 <p class='tm-list-item-description'> $descricao</p>  </div></div>";
              }   
              ?>
         
          
                <!-- <div class="tm-list-item">          
                  <img src="img/iced-cappuccino.png" alt="Image" class="tm-list-item-img"> 
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Cappuccino<span class="tm-list-item-price">$12.50</span></h3>
                    <p class="tm-list-item-description">Here is a list of 4 items or add more. You can use this template for commercial purposes.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                   <img src="img/iced-espresso.png" alt="Image" class="tm-list-item-img"> 
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Espresso<span class="tm-list-item-price">$14.25</span></h3>
                    <p class="tm-list-item-description">You are not permitted to redistribute this template ZIP file on any other template websites.</p>
                  </div>
                </div>
                <div class="tm-list-item">          
                   <img src="img/iced-latte.png" alt="Image" class="tm-list-item-img"> 
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">Iced Latte<span class="tm-list-item-price">$11.50</span></h3>
                    <p class="tm-list-item-description">Contents are organized into 3 tabs. Please <a href="https://www.tooplate.com/contact" rel="nofollow" target="_parent">contact Tooplate</a> if you have anything to ask.</p>
                  </div>
                </div>  -->
                                       
              </div>
            </div> 

         </main>
      </div>    
    </div>
  
  </div>
    
  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <!-- <source src="video/wave-cafe-video-bg.mp4" type="video/mp4"> -->
      </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>    
  <script>

    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }    

    function initPage() {
      let pageId = location.hash;

      if(pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`)); 
        showPage($(pageId));
      }
      else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function(){

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {
        
        if(window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });

      
      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault(); 
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function(){
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
      
  </script>
</body>
</html>