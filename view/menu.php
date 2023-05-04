<?php 
  require('./../model/utils.php');
  acessVerify();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <style>
        nav,div{ border: 1px solid silver;
        padding: 10px;}
        .door{text_align: right;}
        a{text-decoration: none, color: red;}
    </style>
</head>

<body>
    <h1>Deliciosos Cookies &#127850;</h1>
    <nav>
        <div class="door">
        <a href="./../loginControler.php" >Sair &#128682</a>
        </div>
        <div>
            <a href="#">Cadastrar</a>
        </div>
        <div>
            <a href="#">Listar</a>
        </div>

    </nav>

</body>

</html>