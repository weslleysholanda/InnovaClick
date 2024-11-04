<?php

//definindo url base da aplicação 
//define("BASE_URL") serve para criar uma constante de forma global
define("BASE_URL","http://localhost/innovaclick/");

//configuração de acesso banco 
// define("DB_HOST", "localhost"); //Host do sistema
// define("DB_NAME","mecanica");   //Nome da data base
// define("DB_USER","root");       //Usuario data base
// define("DB_PASS","");          //Senha data base 

//Sistema de autoload das classes

spl_autoload_register(function($classe){
    if(file_exists('../app/controllers/'. $classe . '.php')){
        require_once'../app/controllers/'. $classe .'.php';
    }

    if(file_exists('../app/models/'. $classe . '.php')){
        require_once'../app/models/'. $classe . '.php';
    }

    if(file_exists('../core/' . $classe . '.php')){
        require_once '../core/'. $classe . '.php';
    }
})
?>