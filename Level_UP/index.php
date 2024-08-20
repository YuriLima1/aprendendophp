<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level UP & Lan House</title>
    <link rel="shortcut icon" href="multimidia/Inicio.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    require_once 'header.php'; 
    ?>

    <header class="cabeca">

    <h3> Home </h3>

    <hr>

    <h2> BEM-VINDO AO LEVEL UP </h2>

    <a href="cliente.php"> CRIE SEU FORMULARIO AQUI </a> <br>

    <a href="produtos.php"> SELECIONE SEU PRODUTO </a> <br>

    <a href="pedidos.php"> FINALIZE SEU PEDIDO AQUI</a> <br>

    </header>

    <main id="main">
        <hr> </hr>
        <h3>Sobre nós</h3>

      <p>Nós somos uma empresa nacional que está localizada em território do estado islâmico, nós trabalhamos com a premissa de trazermos melhor conforto e atendimento aos nossos clientes. Nós fazemos entregas para todos os países e continentes, com Entrega Express feita pelos nossos próprios entregadores, tal como a Kabalixinikov (Empresa de fretes).</p>
        <p>A Level UP tem como seu principal objetivo, a facilidade de ter os melhores jogos na palma da sua mão, no conforto de sua casa</p>
        <p> Chega de burocracia e tempo perdido com um atendimento chato, venha para a Level UP e pague mais barato!</p>
       
        <h4>Produtos em Destaque</h4>

        <div class="carousel">
  <input type="radio" name="carousel" id="slide1" checked>
  <input type="radio" name="carousel" id="slide2">
  <input type="radio" name="carousel" id="slide3">
  <div class="slides">
    <div class="slide">
      <img src="multimidia/prod1.png" alt="Slide 1">
    </div>
    <div class="slide">
      <img src="multimidia/prod2.png" alt="Slide 2">
    </div>
    <div class="slide">
      <img src="multimidia/prod3.png" alt="Slide 3">
    </div>
  </div>
  <div class="navigation">
    <label for="slide1"></label>
    <label for="slide2"></label>
    <label for="slide3"></label>
  </div>
  
</div>
</main>
    
    <?php
    require_once 'footer.php';
    ?>
  
</body>
</html>