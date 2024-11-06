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

            // var_dump($nome);
            // var_dump($email);
            // var_dump($tel);
            // var_dump($mensagem);

            //Estrutura para envio de email
            if($nome && $email && $tel && $mensagem){
                //reconhecer estrutura PHPMAILER
                require_once("vendors/phpmailer/src/PHPMailer.php");
                require_once("vendors/phpmailer/src/SMTP.php");
                $phpmail = new PHPMAILER(); // Gerando variavel de email

                try{
                    $phpmail -> isSMTP(); //envio por SMTP
                    $phpmail -> SMTPDebug = 0;
                    $phpmail -> Host = HOST_EMAIL; //SMTP Servidor de Email
                    $phpmail -> Port = PORT_EMAIL; //Porta do Servidor SMTP

                    $phpmail -> SMTPSecure = 'ssl'; //Certificado / Autenticação SMTP
                    $phpmail -> SMTPAuth = true; //Caso necessite ser autenticado

                    $phpmail -> Username = USER_EMAIL; //Email SMTP
                    $phpmail -> Password = PASS_EMAIL; //Senha SMTP

                    $phpmail -> isHTML(true); //Trabalhar com estrtura HTML
                    $phpmail -> setFrom(USER_EMAIL, $nome); //Email do remetente
                    $phpmail -> addAddress('weslleyh98@gmail.com', $assunto); //Email do destinatario

                    $phpmail -> Subject = $assunto; //Assunto enviado pelo método POST

                    //Estrutura do Email
                    $phpmail -> msgHtml("Nome:  $nome <br>
                                E-mail: $email <br> 
                                Telefone: $tel <br> 
                                Mensagem: $mensagem");

                    $phpmail -> AltBody= "Nome:  $nome \n
                                E-mail: $email \n 
                                Telefone: $tel \n 
                                Mensagem: $mensagem";
            
                    $phpmail ->send();
                    
                    $dados = array(
                        'mensagem' => 'Obrigado pelo seu contato, em breve responderemos.',
                        'status'   => 'sucesso'
                    );

                    $this ->carregarViews('contato',$dados);

                    //****************E-MAIL DE RESPOSTA***************** */

                    $phpmailResposta = new PHPMAILER();
   
                    $phpmailResposta->isSMTP();
                    $phpmailResposta->SMTPDebug = 0;
                    $phpmailResposta->Host =HOST_EMAIL;
                    $phpmailResposta->Port = PORT_EMAIL;
                    $phpmailResposta->SMTPSecure = 'ssl';
                    $phpmailResposta->SMTPAuth = true;
                    $phpmailResposta->Username = USER_EMAIL;  //Email SMTP
                    $phpmailResposta-> Password = PASS_EMAIL; //Senha SMTP
                    $phpmailResposta->isHTML(true);
                    $phpmailResposta->setFrom(USER_EMAIL, "Innova Click");  //Remetemte
                    $phpmailResposta->addAddress($email, $nome);  //Destinatário
                    $phpmailResposta->Subject = "Resposta - ".$assunto;
 
                    $phpmailResposta->msgHTML("$nome <br>
                                Em breve retornaremos seu contato. <br>
                                Mensagem: $mensagem <br>
                                Em caso de dúvidas entre em contato pelo número <br>
                               
                                (11)94002-8922");
                    $phpmailResposta->AltBody="$nome \n
                                Em breve retornaremos seu contato. \n
                                Mensagem: $mensagem \n
                                Em caso de dúvidas entre em contato pelo número \n
                               
                                (11)976848944";
                    $phpmailResposta->send();                      
                }catch(Exception $e){
                    $dados = array(
                        'mensagem' => 'Não foi possível enviar o e-mail. Por favor, tente mais tarde',
                        'status' => 'erro',
                        'nome' => $nome,
                        'email' => $email,
                        'telefone' => $tel,
                        'mensagem' => $mensagem
                    );
                    error_log('Erro ao enviar o e-mail'.$phpmail->ErrorInfo);
                    $this->carregarViews('contato',$dados);
                }
            }
            
        }else{
            $dados = array();
            $this ->carregarViews('contato',$dados); 
        }
    }
}