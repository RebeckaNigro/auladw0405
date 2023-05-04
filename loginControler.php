<?php
//Busca sessão do usuário, ou cria nova caso ainda não exista.
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

//acertou login e senha
if( $login == LOGIN_DESEJADO && $senha == SENHA_DESEJADA){
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

?>