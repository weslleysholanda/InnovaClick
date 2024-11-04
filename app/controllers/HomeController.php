<?php 

class HomeController extends Controller{
    public function index(){
        $dados = array();

        $dados['mensagem'] = 'Bem-vindo ao InnovaClick';
        $dados['nome'] = 'Weslley';

        $this ->carregarViews('home',$dados);
    }
}