<?php  ?>
<!DOCTYPE html>
<html>
<title>Sitio Vovó Clarinha</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>

<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
counterType: "skip",
slideshowDelay: 5
});
</script>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="avatar_smoke.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>SOBRE</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>FOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTATO</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">SOBRE</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">FOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTATO</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> Sítio Vovó Clarinha.</h1>
    <p>Um ótimo lugar para passar suas férias com os amigos ou a família.</p>
    <img src="piscina.jpg" alt="piscina" class="w3-image" width="800" height="auto">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Sobre o Sítio Vovó Clarinha</h2>
    <hr style="width:200px" class="w3-opacity">
    <h3 class="w3-text-light-grey">Nazaré Paulista</h3>
    <p>O que em muito destaca o Centro desta cidade é a edificação de Igraja Matriz Nossa Senhora de Nazareth, da 
      qual possui arquitetura em estilo arcaico e barroco, lembrando muito as Igrejas de Minas Gerais em especial a de Ouro Preto. Sua localização dista-se ao topo do morro desta cidade, onde pode ser vista de qualquer local da cidade, estando à uma altura aproximada de 10.30mts de altitude acima do nível do mar, e possuindo uma torre de aproximadamente 30mts de altura. Em seu interior apesar de não contar com objetos ou imagens de confecção em material precioso, pode se notar detalhes entalhados em madeira na composição de seu altar além de possuir imagens muito antigas provindas ainda de Portugal. É notável os pilares de sustentação de seu teto do qual lembra em muito Roma antiga, além de suas pinturas em óleo confeccinadas em suas paredes e tetos.
    </p>
  
    
    </div>

  <!-- Portfolio Section -->
  
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Fotos do Sítio Vovó Clarinha</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 16px">
      <div class="w3-half">
       <a href="churrasqueira.jpg" rel="shadowbox[plants];height=490;width=720"> <img src="churrasqueira.jpg" style="width:45%" alt="Churraqueira"></a>
        <a href="jogos_1.jpg" rel="shadowbox[plants];height=496;width=720"><img src="jogos_1.jpg" style="width:45%"></a>
        <a href="jogos_2.jpg" rel="shadowbox[plants];height=496;width=720"><img src="jogos_2.jpg" style="width:45%"></a>
        <a href="piscina.jpg" rel="shadowbox[plants];height=496;width=720"><img src="piscina.jpg" style="width:45%"></a>
        <a href="play_1.jpg" rel="shadowbox[plants];height=496;width=720"><img src="play_1.jpg" style="width:45%"></a>
      </div>

      <div class="w3-half">
        <img src="lago_1.jpg" style="width:45%">
        <img src="lago_2.jpg" style="width:45%">
        <img src="lago_3.jpg" style="width:45%">
        <img src="quadra.jpg" style="width:45%">
        
      </div>
      
      
    <!-- End photo grid -->
  </div>
  <!-- Mapa do sitio Vovó clarinha-->

    <h2 class="w3-text-light-grey" style="text-align-last: center;">Como chegar no Sítio Vovó Clarinha</h2>
      <div style="text-align-last: center;" class="">
        <img src="mapasitio.jpg" style="width:60%">
      </div>

  <!-- Contact Section -->

  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Entre em contato</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i><b style="color: #ffffff"> Estamos em São Paulo</b></p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <b style="color: #ffffff">Telefone: 11 (11)3208.9957 (11)99-889.6174</b></p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i><b style="color: #ffffff"> Email: contato@sitiovovoclarinha.com.br </b></p>
    </div><br>
    <p>Entre em contato. Mande uma mensagem:</p>

    <form action="mail_send.php" method="post">
      <!--
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      -->
      <p><input class="w3-input w3-padding-16" type="text" placeholder="EMAIL" required name="email"></p>
      <!--
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      -->
      <p><input class="w3-input w3-padding-16" type="text" placeholder="MENSAGEM" required name="mensagem"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
   <a href="http://facebook.com.br"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <!-- Linkes de redes sociais desativados-->
    <!--
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  -->
    <p class="w3-medium">Desenvolvido por <a href="https://viaremoto.com.br" target="_blank" class="w3-hover-text-green">Via Remoto</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
