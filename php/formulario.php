<?php 

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data-nasc'];
        $senha = $_POST['senha'];

        mysqli_select_db($conexao, 'cadastro');

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome_completo, email, telefone, sexo, data_nascimento, senha) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nascimento', 'senha')");
    }
         
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\Login_Cadastro\css\formulario.css?v=<?php echo time(); ?>">
    <title>Cadastro</title>
</head>
<body>
    <form action="formulario.php" method="POST" class="formulário">

        <a href="index.php" class="voltar"><img src="\Login_Cadastro\img\desfazer.png" alt="voltar"></a>
        <h2>Cadastre-se</h2>

        <div class="input-box">
            <input type="text" name="nome" id="nome" class="input-usuário" required>
            <label class="label-input">Nome completo</label>
        </div>

        <div class="input-box">
            <input type="text" name="email" id="email" class="input-usuário" required>
            <label class="label-input">E-mail</label>
        </div>

        <div class="input-box">
            <input type="text" name="telefone" id="telefone" class="input-usuário" required>
            <label class="label-input">Telefone</label>
        </div>

        <p class="gênero">Sexo:</p>

        <div class="input-gênero">
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label>
        </div>

        <div class="input-gênero">
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="feminino">Masculino</label>
        </div>

        <div class="input-gênero">
            <input type="radio" name="genero" id="outro" value="outro" required>
            <label for="feminino" >Outro</label>
        </div>

        <div class="box-data">
            <label for="data-nasc" class="label-data">Data de nascimento:</label>
            <input type="date" name="data-nasc" id="data-nasc" class="input-data" required>
        </div>

        <div class="input-box">
            <input type="text" name="senha" id="senha" class="input-usuário" required>
            <label class="label-input">Senha</label>
        </div>

        <button type="submit" name="submit" id="submit">Cadastrar</button>

    </form>
</body>
</html>