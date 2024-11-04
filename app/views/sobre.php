<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo)?$titulo:'Sobre - Innova Click'; ?></title>
    <!-- RESET sempre será o primeiro link -->
    <link rel="stylesheet" href="<?php BASE_URL?>vendors/css/reset.css">
    <!-- Animação banner -->
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>vendors/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>vendors/css/slick-theme.css" />
    <!--Animate.css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- STYLE sempre será o ultimo link -->
    <link rel="stylesheet" href="<?php BASE_URL?>assets/css/style.css">
 
</head>
 
<body>
    <!-- INICIO DO CABEÇALHO -->
    <header>
       <?php require_once('templates/topo.php')?>
    </header>
    <!-- INICIO DO CONTEÚDO -->
    <main>
       <!-- banner -->
    <?php   require_once   ('templates/banner.php')?>
     <!-- Sobre -->
     <?php require_once('templates/sobre.php')?>
      <!-- conteudo missao visaop valores -->
 
      <!--  -->
    </main>
    <!-- EQUIPE -->
        <?php require_once('templates/equipe.php')?>
       
    <!-- INICIO DO RODAPÉ -->
    <footer>
            <?php require_once('templates/rodape.php')?>
    </footer>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/25f4259441.js" crossorigin="anonymous"></script>
    <!-- Jquery par trabalhar com animação -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- Animação banner -->
    <script type="text/javascript" src="vendors/js/slick.min.js"></script>
    <!-- minha animacao -->
    <script src="assets/js/animacao.js"></script>
</body>
</html>