<?php
//valores de logine senha desejados 
//(futuramente, buscaremos do BD)
const LOGIN_DESEJADO = 'alexandre';
const SENHA_DESEJADA = '22';

session_start();


//retorna true, caso o login e senha estejam corretos.retorna falso caso contrario//
function try2login($login, $senha){
    return ($login == LOGIN_DESEJADO && $senha == SENHA_DESEJADA);
}

function acessVerify(){
$path = 'http://'.$_SERVER['SERVER_NAME'].'/cookies/view/login.php';
    if ( !isset($_SESSION['logado']) ){
        header('Location: ./login.php?msg=Acesso Negado');
        exit();
    }
}
function isPostRequest(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isGetRequest(){
   return $_SERVER['REQUEST_METHOD'] == 'GET';

}

?>