<?php 
    session_start();
    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        include_once('config.php');// acessa

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro.usuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

           header('Location: sistema.php'); 
        }
    }
    else{
        header('Location: login.php'); // não acessa
    }



?>