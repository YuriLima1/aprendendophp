<?php
require_once 'includes/db_connect.php';

if (isset($_POST['register'])) {

    if (empty($_POST['nome']) || empty($_POST['celphone']) || empty($_POST['rua']) || empty($_POST['cidade']) || empty($_POST['cpf_cnpj'])) {
        echo "Por favor, preencha todos os campos obrigatórios.";
    } else {

        $nome_cli = $_POST['nome'];
        $telefone = $_POST['celphone'];
        $rua = $_POST['rua'];
        $genero = $_POST['genero'];
        $cidade = $_POST['cidade'];
        $cpf = $_POST['cpf_cnpj'];

        $sql = "INSERT INTO cliente (nome_cli, telefone, rua, genero, cidade, cpf) VALUES ('$nome_cli', '$telefone', '$rua', '$genero', '$cidade', '$cpf')";

        if ($con->query($sql) === TRUE) {
            echo "<div class='alert alert-success'>Usuário registrado com sucesso!</div>";
        } else {
            echo "Erro: . $con->error . ";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente | Level UP</title>
    <link rel="shortcut icon" href="multimidia/Cadastro.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <style>
        * {
            text-align: center;
        }
        form {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 95%;
            border: 2px solid black;
            border-radius: 20px;
            margin-top: 2%;
            margin-bottom: 2%;
            margin-right: 30%;
            margin-left: 30%;
        }
        legend {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body>
    
    <?php
    require_once 'header.php'; 
    ?>

    <form action="" method="post" name="registration_form">
        <br>
        <legend>Cadastrar-se</legend>
        <br>
        Nome: <br> 
        <input type="text" name="nome" placeholder=""><br>
        <br>
        Telefone: <br>
        <input type="tel" name="celphone" placeholder="" maxlength="15" required><br>
        <br>
        Cidade: <br>
        <input type="text" name="cidade" placeholder=""><br>
        <br>
        Rua: <br>
        <input type="text" name="rua" placeholder=""><br>
        <br>
        <label for="genero">Gênero:</label><br>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" id="feminino" name="genero" value="feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" id="outro" name="genero" value="nao">
        <label for="outro">Outro</label><br>
        <br>
        Selecione o seu CPF ou CNPJ: <br>
        <br>
        CPF/Cliente <br>
        <input type="radio" name="cpf_cnpj" id="cpf" value="cpf"> <br>
        <br>
        CNPJ/Jurídico <br>
        <input type="radio" name="cpf_cnpj" id="cnpj" value="cnpj"> <br>
        <br>
        <input type="submit" name="register" value="Cadastrar">
        <br><br>
        <p>Deseja voltar para o <a class="aqui" href="index.php">Inicio</a></p>

    </form>

    <?php
    require_once 'footer.php';
    ?>

</body>
</html>