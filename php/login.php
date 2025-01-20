<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\Login_Cadastro\css\login.css?v=<?php echo time(); ?>">
    <link rel="icon" href="\Login_Cadastro\img\gatinha.png" type="image">
    <title>Login</title>
</head>

<body>
    <form action="testeLogin.php" method="POST">
    <div class="dados-login">

        <a href="index.php" class="voltar"><img src="\Login_Cadastro\img\desfazer.png" alt="voltar"></a>

        <h2>Login</h2>

        <div class="input-box">
            <input type="text" class="input-usuário" name="email" required autocomplete="off">
            <label class="label-input">E-mail</label>
        </div>

        <div class="input-box">
            <input type="password" class="input-usuário" name="senha" required autocomplete="off">
            <label class="label-input">Senha</label>
        </div>

        <a href="#" class="redef-senha">Esqueci minha senha</a>

        <input type="submit" name="submit" id="submit" class="entrar">

        <p>Não possui conta?<a href="formulario.php" class="cadastre-se">Cadastre-se</a></p>

    </div>
    </form>

</body>
</html>