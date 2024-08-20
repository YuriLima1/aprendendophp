<?php

require_once 'includes/db_connect.php';


if (isset($_POST['register'])) {

    if (empty($_POST['jogos'])) {
        echo "Selecione um produto para continuar o processo de compra.";
    } else {

        $nome_prod = $_POST['jogos'];

        $sql = "INSERT INTO pedidos (nome_prod) VALUES ('$jogos')";

        if ($con->query($sql) === TRUE) {
            echo "Produtos enviados para pagina de confirmar pedidos!";
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
    <title>Produtos | Level UP</title>
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <link rel="shortcut icon" href="multimidia/Produto.png" type="image/x-icon">
</head>
<body>
    
    <?php
    require_once 'header.php'; 
    ?>

    <h1> SELECIONE SEU JOGO LOGO ABAIXO </h1>

    <form action="" method="post">

        Call of Duty Vanguard:
        <input type="checkbox" name="jogos" value="Call of Duty Vanguard" id="call"> <br>

        Metro 2033:
        <input type="checkbox" name="jogos" value="Metro 2033" id="metro"> <br>

        Grand Theft Auto V:
        <input type="checkbox" name="jogos" value="Grand Theft Auto V" id="gta5"> <br>

        The Legend of Zelda: Tears of the Kingdom:
        <input type="checkbox" name="jogos" value="The Legend of Zelda" id="zelda"> <br>

        Super Mario Bros Wonder:
        <input type="checkbox" name="jogos" value="Super Mario Bros" id="mario"> <br>

        <br>
        <input type="submit" value="Enviar Pedido">

        <a href="pedidos.php"> Finalizar o pedido</a>

    </form>

</body>
</html>