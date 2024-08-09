<?php
require_once 'includes/db_connect.php';
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

<style>
 body {
    background-color: grey;
 }

 legend {
    font-size: 50px;
    text-align: center;
    font-style: oblique;
 }

 fieldset {
    background-color: white;
    border-width: 3px;
    border-radius: 4px;
    border-color: black;
    padding: 50px;
    margin: 120px;
 }

 #prod_itens {
    width: 200px;
    border-style: solid;
    border-width: 5px;
    border-color: red;
    border-radius: 7px;
 }

.text_prod {
    font-size: 30px;
    font-style: oblique;
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

<form action="" method="post" name="register">
<fieldset>
<<<<<<< HEAD
    <legend>Selecione o seu produto:</legend>
=======
    <legend>SELECIONE SEU PRODUTO</legend>
>>>>>>> c3d46659954eb5d047c6520066a84e4e51006334

<div class="text_prod">
    <img src="multimidia/vanguard.webp" alt="vanguard" id="prod_itens">
    <br>
    Call of Duty Vanguard: R$300,50
    <input type="checkbox" name="jogos[]" value="Call of Duty Vanguard" id="Call of Duty Vanguard"> <br>

    <img src="multimidia/metro2033.jpg" alt="metro" id="prod_itens">
    <br>
    Metro 2033: R$75.00
    <input type="checkbox" name="jogos[]" value="Metro 2033" id="Metro 2033"> <br>
    <br>
    <img src="multimidia/gta5.jpg" alt="gta5" id="prod_itens">
    <br>
    Grand Theft Auto V: R$100.00
    <input type="checkbox" name="jogos[]" value="Grand Theft Auto V" id="Grand Theft Auto V"> <br>
    <br>
    <img src="multimidia/zelda.jpg" alt="zelda" id="prod_itens">
    <br>
    The Legend of Zelda: Tears of the Kingdom: R$350.00
    <input type="checkbox" name="jogos[]" value="The Legend of Zelda: Tears of the Kingdom" id="The Legend of Zelda: Tears of the Kingdom"> <br>
    <br>
    <img src="multimidia/mario.jpg" alt="mario" id="prod_itens">
    <br>
    Super Mario Bros Wonder: R$400.00
    <input type="checkbox" name="jogos[]" value="Super Mario Bros Wonder" id="Super Mario Bros Wonder"> <br>

    <?php
        if (isset($_POST['register'])) {

            if (empty($_POST['jogos'])) {
<<<<<<< HEAD
                echo "Por favor selecione pelo menos um produto";
=======
                echo "Por favor selecione pelo menor um produto";
>>>>>>> c3d46659954eb5d047c6520066a84e4e51006334
            } else {
        
                $iten_name = $_POST['jogos'];
        
<<<<<<< HEAD
                $sql = "INSERT INTO pedidos (iten_name) VALUES ('$iten_name')";
=======
                $sql = "INSERT INTO pedidos (iten_name) VALUES ('$jogos')";
>>>>>>> c3d46659954eb5d047c6520066a84e4e51006334
        
                if ($con->query($sql) === TRUE) {
                    echo "Produto escolhido com sucesso";
                } else {
                    echo "Erro: . $con->error . ";
                }
            }
        }
        ?>

</div>
<br>
<input type="submit" value="Enviar Pedido" class="cadastrar">
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