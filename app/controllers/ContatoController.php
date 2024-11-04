<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeception;

class ContatoController extends Controller{

    public function index(){
        $dados = array();
        $dados['titulo'] = 'Contato - InnovaClick';
        $this ->carregarViews('contato',$dados);
    }

    public function enviarEmail(){
        //$_SERVER é uma variavel global ele vai ler a url completa
        //REQUEST_METHOD
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //filter_input A função filter_input() obtém uma variável externa (por exemplo, da entrada do formulário) e, opcionalmente, a filtra. Esta função é usada para validar variáveis ​​de fontes inseguras, como entradas do usuário
            //
            $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
            $tel = filter_input(INPUT_POST,'tel', FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST,'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
            $assunto = "CONTATO VIA SITE";

            var_dump($nome);
            var_dump($email);
            var_dump($tel);
            var_dump($mensagem);
            
        }
    }
}