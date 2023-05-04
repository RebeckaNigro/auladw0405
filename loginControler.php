<?php
//Busca sessão do usuário, ou cria nova caso ainda não exista.
require('./model/utils.php');

function logar (){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    //acertou login e senha
    if(try2login($login, $senha)){
        /*cria entrada logado nas variáveis de sessao e armazena o login*/
        $_SESSION['logado'] = $login;
        //sucesso, redireciona para menu
        header('Location: ./view/menu.php');
    }
    else{//errou
        //redireciona para login novamente passando msg de erro
        $msg = 'Login ou senha incorretos';
        header("Location: ./view/login.php?msg=$msg");
    }
}
?>