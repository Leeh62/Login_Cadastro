<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\Login_Cadastro\css\login.css?v=<?php echo time();?>">
    <title>Login</title>
</head>
<body>
    <div class="dados-login">
        <h2>Login</h2>

        <div class="input-box">
            <input type="text" class="input-usuário" required autocomplete="off">
            <label class="label-input">E-mail</label>
        </div>

        <div class="input-box">
            <input type="password" class="input-usuário" required autocomplete="off">
            <label class="label-input">Senha</label>
        </div>

        <a href="#" class="redef-senha">Esqueci minha senha</a>

        <button type="submit" name="submit" id="submit">Entrar</button> 

        <p>Não possui conta?<a href="#" class="cadastre-se">Cadastre-se</a></p>
        
    </div>
</body>
</html>