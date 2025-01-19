<?php 

    $host = 'Localhost';
    $database = 'cadastro';
    $username = 'root';
    $password = '';

    $conexao = new mysqli($host, $username, $password, $password);

    if($conexao->connect_errno)
    {
        echo 'Erro';
    }
    else
    {
        echo 'Conexão efetuada com sucesso.';
    }
?>