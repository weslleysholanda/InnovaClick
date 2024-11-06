<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo)?$titulo:'Contato - Innova Click';?></title>
    <!-- RESET sempre será o primeiro link -->
    <link rel="stylesheet" href="http://localhost/innovaclick/public/vendors/css/reset.css">
    <!-- ANIMAÇÃO BANNER -->
    <link rel="stylesheet" href="http://localhost/innovaclick/public/vendors/css/slick.css">
    <link rel="stylesheet" href="http://localhost/innovaclick/public/vendors/css/slick-theme.css">
    <!-- ANIMATE.CSS -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- STYLE SEMPRE SERÁ O ÚLTIMO LINK -->
    <link rel="stylesheet" href="http://localhost/innovaclick/public/assets/css/style.css">
</head>
 
</head>
 
<body>
    <!-- INICIO DO CABEÇALHO -->
    <header>
       <?php require_once('templates/topo.php')?>
    </header>
    <!-- INICIO DO CONTEÚDO -->
    <main>
       
       <!-- banner -->
        <?php   require_once  ('templates/banner.php')?>
 
        <!-- conteudo do contato -->
        <?php   require_once  ('templates/contato.php')?>
        <!-- fim do conteudo contato -->

        <!-- serviço -->
        <?php require_once('templates/servico.php')?>
        <!-- Sobre -->
   
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
    <script type="text/javascript" src="http://localhost/innovaclick/public/vendors/js/slick.min.js"></script>
    <!-- minha animacao -->
    <script src="http://localhost/innovaclick/public/assets/js/animacao.js"></script>
</body>
</html>