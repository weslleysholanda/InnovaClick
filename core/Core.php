<?php

class Core{
    //Método inicializar o processo de ROTAS
    public function executar(){
        $url = "/"; // tudo que estiver dentro da classe vai ser método e atributo
        //  var_dump($url);

        // Verificar se a variavel URL está definida na $_GET

        if(isset($_GET['url'])){

            $url .= $_GET['url'];
            // var_dump($url);
        }

        // Definindo um array para armazenar os parametros da URL
        $parametro = array();

        // verifica se a url não está vazia e não é apenas uma '/'
        if(!empty($url) && $url != '/'){
            // explode Retorna uma matriz de strings, cada uma das quais é uma substring string formada pela divisão em limites formados pela string

            $url = explode('/', $url);

            // array_shift Desloca um elemento do início do array
            array_shift($url);

            //ucfirst - Colocar a primeira leta em maiúscula
            $controladorAtual = ucfirst($url[0]) . 'Controller';

            array_shift($url);
            // var_dump($url);

            //isset - Determina se uma variável está declarada é diferente de null
            //empty - Determina se uma variável está vazia
            //Verificar se existe uma ação na URL
            if(isset($url[0]) && !empty($url[0])){
                $acaoAtual = $url[0];
                // var_dump("Nome da ação atual: " . $acaoAtual);
                array_shift($url);
            } else{
                $acaoAtual = 'index';
            }
            
            // count - Conta todos os elementos de um array ou de um objeto Countable
            if(count($url) > 0){
                $parametro = $url;
            }
        } else{
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
        }

        // Verificando se o arquivo do CONTROLLER existe e se o metodo existe
        if(!file_exists('../app/controllers/' . $controladorAtual . '.php') || !method_exists($controladorAtual, $acaoAtual)){
           
            //se não existir defina o controller como ErroController
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';
        }

        $controller = new $controladorAtual();

        // call_usar_func_array - Chama uma função de retorno com um array
        call_user_func_array(array($controller,$acaoAtual),$parametro);
    }
}