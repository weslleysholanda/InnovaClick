<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVA CLICK - Agência Web</title>
    <!-- RESET sempre será o primeiro link -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Animação banner -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!--Animate.css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- STYLE sempre será o ultimo link -->
    <link rel="stylesheet" href="css/style.css">
 
</head>
 
<body>
    <!-- INICIO DO CABEÇALHO -->
    <header>
       <?php require_once('conteudo/topo.php')?>
    </header>
    <!-- INICIO DO CONTEÚDO -->
    <main>
       
 
       <!-- banner -->
    <?php   require_once   ('conteudo/banner.php')?>
 
 
    <!-- conteudo do contato -->

    <section class="contato">
        <article class="site">
            <h2>Formulário de Contato</h2>
            <form action="email.php" method="post">
                <div>
                    <label>Nome: </label><br>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" require><br>
                    <label>Telefone: </label><br>
                    <input type="tel" name="tel" placeholder="Digite seu telefone" require><br>
                    <label>E-mail: </label><br>
                    <input type="email" name="email" placeholder="Digite seu email" require><br>
                </div>
                <div>
                    <label>Mensagem</label><br>
                    <textarea name="mensagem" cols="50" rows="6" placeholder="Digite sua mensagem" require></textarea><br>
                    <div class="mesageButton">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpar">
                    </div>
                </div>
                </form>
        </article>
    </section>
   
    <!-- fim do conteudo contato -->
     <!-- serviço -->
     <?php require_once('conteudo/servico.php')?>
     <!-- Sobre -->
   
 
     
    </main>
    <!-- EQUIPE -->
        <?php require_once('conteudo/equipe.php')?>
       
    <!-- INICIO DO RODAPÉ -->
    <footer>
            <?php require_once('conteudo/rodape.php')?>
    </footer>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/25f4259441.js" crossorigin="anonymous"></script>
    <!-- Jquery par trabalhar com animação -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- Animação banner -->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- minha animacao -->
    <script src=" js/animacao.js"></script>
</body>
</html>