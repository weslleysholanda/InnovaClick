<?php
    function getActiveClass($nomePagina){
        $paginaAtual = basename($_SERVER['PHP_SELF']);
        return $paginaAtual === $nomePagina ? 'ativo' : '';
    }
?>

<section class="site">
            <div>
                <a href="index.php">
                    <h1 class="animate__animated animate__backInUp">Logo Innova Click</h1>
                </a>
            </div>
            <button class="abrirMenu"><i class="fa-solid fa-bars"></i></button>
            <nav>
                <button class="fecharMenu"><i class="fa-solid fa-xmark"></i></button>
                <ul>
                    <li class="<?= getActiveClass('index.php') ?>"><a href="index.php">Home</a></li>
                    <li class="<?= getActiveClass('sobre.php') ?>"><a href="sobre.php">Sobre</a></li>
                    <li class="<?= getActiveClass('contato.php') ?>"><a href="contato.php">Contato</a></li>
                </ul>
                <button><i class="fa-solid fa-user"></i></button>
            </nav> 
            <div class="loginNormal">
                <button><i class="fa-solid fa-user"></i></button>
            </div>
</section>