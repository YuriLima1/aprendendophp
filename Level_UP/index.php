<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level UP & Lan House</title>
    <link rel="shortcut icon" href="multimidia/Inicio.png" type="image/x-icon">
    <link rel="stylesheet" href="estilos/estilos.css">

</head>

<style>

body {
  background-color: gray;
}

#titulo {
  text-align: center;
  font-style: italic;
}

#intro {
    text-align: center, justify;
    font-size: 30px;
}

#link1, #link2, #link3 {
  color: black;
  font-size: 30px;
  font-style: italic;
}

#field {
  border-color: black;
  border-radius: 35px;
  border-width: 5px;
  background-color: white;
}

</style>

<body>

<?php
include_once 'header.php';
?>

<legend> <h1 id="titulo"> BEM VINDO A LOJA DE JOGOS COMPANY HOUSE </h1> </legend>
<fieldset id='field'>

<p id="intro">Aqui nos trabalhamos ao maximo para dar o melhor atendimento para nossos clientes
e fornecemos os melhores jogos da regiao. Agradecemos aqueles que escolheram a nossa loja</p>

<h2>Logo abaixo estão as apginas para criar seu cadastro, selecionar seu jogo e confirmar o pedido</h2>

<br>

<a href="cliente.php" id="link1"> CRIE SEU CADASTRO AQUI </a>  <br>
<br>
<a href="produtos.php" id="link2"> SELECIONE SEU PRODUTO AQUI </a> <br>
<br>
<a href="pedidos.php" id="link3"> CONFIRME AS INFORMAÇÕES DE ENTREGA AQUI </a> <br>

</fieldset>

</div>

<br>
<br>
<br>

<?php
include_once 'footer.php';
?>
    
  
</body>
</html>