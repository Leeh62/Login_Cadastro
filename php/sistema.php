<?php 
    session_start();
    print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    else{
        $_logado = $_SESSION['email'];
       
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="\Login_Cadastro\img\gatinha.png" type="image">
    <title>Sistema</title>
</head>
<body>
    <h1>Acessou o sistema</h1>
</body>
</html>