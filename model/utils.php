<?php
//valores de logine senha desejados 
//(futuramente, buscaremos do BD)
const LOGIN_DESEJADO = 'alexandre';
const SENHA_DESEJADA = '22';

function try2login($login, $senha){
    return ($login == LOGIN_DESEJADO && $senha == SENHA_DESEJADA);
}


?>