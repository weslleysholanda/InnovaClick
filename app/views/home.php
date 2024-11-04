<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVA CLICK - Agência Web</title>
    <meta name="author" content="Weslley Holanda Santos">
    <!-- RESET sempre será o primeiro link -->
    <link rel="stylesheet" href="<?php BASE_URL?>vendors/css/reset.css">
    <!-- Animação -->
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>vendors/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php BASE_URL?>vendors/css/slick-theme.css"/>
    <!-- ANIMATE.JS -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- STYLE sempre será o ultimo link -->
    <link rel="stylesheet" href="<?php BASE_URL?>assets/css/style.css">
    
</head>

<body>
    <!-- INICIO DO CABEÇALHO -->
    <header>
        <!-- Header topo -->
        <?php require_once('templates/topo.php') ?>
    </header>
    <!-- INICIO DO CONTEÚDO -->
    <main>
        <!-- section banner -->
        <?php require_once('templates/banner.php') ?>
       <!-- servico -->
       <?php require_once('templates/servico.php') ?>

        <!-- sobre -->
        <?php require_once('templates/sobre.php') ?>

        <!-- equipe -->
        <?php require_once('templates/equipe.php') ?>
    </main>
    <!-- INICIO DO RODAPÉ -->
    <footer>
        <?php require_once('templates/rodape.php') ?>
        <p>Desenvolvido por: Weslley Holanda Santos - Senac SMP - TIPI-02</p>
    </footer>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/25f4259441.js" crossorigin="anonymous"></script>
    <!-- Jquery - Script para trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- Animação banner -->
    <script type="text/javascript" src="vendors/js/slick.min.js"></script>

    <!-- MINHA ANIMAÇÃO -->
    <script src="assets/js/animacao.js"></script>
</body>

</html>