<?php

class Controller{
    public function carregarViews($view, $dados = array()){
        //Importar variáveis ​​para a tabela de símbolos atual de uma matriz
        extract($dados);

        require '../app/views/' . $view . '.php';
    }
}