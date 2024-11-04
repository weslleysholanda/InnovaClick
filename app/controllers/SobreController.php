<?php

class SobreController extends Controller{
    public function index(){
        $dados = array();

        $dados['titulo'] = 'Sobre Nós - InnovaClick';
        $this ->carregarViews('sobre',$dados);
    }
}