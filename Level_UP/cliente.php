<?php
require_once 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="shortcut icon" href="multimidia/Cadastro.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/style.css" type="text/css">
</head>

<style>

body {
    background-color: grey;
}

.texto_form {
    font-size: 30px;
    font-style: oblique;
}

#text_box {
    width: 300px;
    height: 40px;
    font-size: 20px;
    border: 3px solid;
    border-color: black;
    border-radius: 7px;
    border-width: 2px;
}

fieldset {
    background-color: white;
    border-color: black;
    border-radius: 20px;
    border-width: 3px;
    margin: 250px;
}

hr {

    border-color: black;
    border-width: 2px;

}

.cadastrar {
    background-color: white;
    padding: 12px 20px;
    font-size: 20px;
    transition: background-color 0.3s ease;
    border-radius: 4px;
    cursor: pointer;
    color: black;
}

</style>

<body>

<?php
include_once 'header.php';
?>
    <form action="" method="post" name="registration_form">
    <fieldset>
        <legend> Registro </legend>

    <div class="texto_form">

        Nome: <br> 
        <input type="text" name="nome" placeholder="Digite seu nome" id="text_box"> <br>
        <br>
        Telefone: <br>
        <input type="tel" name="celphone" placeholder="xx xx-xxxxxxxxx" id="text_box"> <br>
        <br>
        Rua: <br>
        <input type="text" name="rua" placeholder="Digite sua rua" id="text_box"> <br>
        <br>
        Cidade: <br>
        <input type="text" name="cidade" placeholder="Digite sua cidade" id="text_box"> <br>
        <br>

        <hr>

        Qual seu gênero: <br>

        <hr>

        <br>
        Masculino <br>
        <input type="radio" name="genero" id="masculino" value="masculino"> <br>
        Feminino <br>
        <input type="radio" name="genero" id="feminino" value="feminino"> <br>
        Prefiro não dizer <br>
        <input type="radio" name="genero" id="nao_dizer" value="nao_dizer"> <br>

        <br>

        <hr>

        <br>

        Selecione o seu CPF ou CNPJ: <br>
        <br>
        CPF/Cliente <br>
        <input type="radio" name="cpf_cnpj" id="cpf" value="cpf"> <br>
        <br>
        CNPJ/Jurídico <br>
        <input type="radio" name="cpf_cnpj" id="cnpj" value="cnpj"> <br>
        <br>

        <?php
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

        <br>
        <input type="submit" name="register" value="Cadastrar-se" class="cadastrar">

        <br>
        <br>

        <p>Deseja voltar para o <a class="aqui" href="index.php">Inicio</a></p>

    </div>

    </fieldset>
    </form>

    <br>
    <br>
    <br>

<?php
include_once 'footer.php';
?>

</body>
</html>