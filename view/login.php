<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="./../loginControler.php" method="post">
        <input name="login" required type="text" placeholder="Login">
        <input name="senha" required type="password" placeholder="Senha">
        
        <div style="color:red">
            <?php
                //isset verifica se uma variável existe
                if( isset($_GET['msg'])){
                    echo $_GET['msg'];
                }
            ?>
        </div>
        
        <div style="margin: 10px;">
            <button>
                Login &#127850;
            </button>
        </div>
    </form>
</body>
</html>