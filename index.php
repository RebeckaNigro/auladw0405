<?php
require('./model/utils.php');

//se já está logado, manda para menu
if ( isset($_SESSION['logado'])  ){
    //redireciona para menu, pois já está logado
    header('Location: ./view/menu.php');
}
else{
    //redireciona para login.php
    header('Location: ./view/login.php');
}


