<?php
    $error = filter_input(INPUT_GET, 'err', $filter = FILTER_SANITIZE_STRING); // Vai obter o valor 'err', aplicando o filtro de sanitização de string que 
                                                                               // remove possiveis elementos prejudicais e armazena o resultado da variável '$error'.

    if(! $error) { // Aqui aparecerá uma mensagem de erro na sua tela.
        $error = 'Oops! An unknown error happened.';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Error</title> <!-- O texto vai aparecer na aba do navegador. -->
        <link rel="stylesheet" href="styles/main.css" /> <!-- Vincula uma folha de estilo externa (CSS) ao documento HTML atual. -->
    </head>
    <body>
        <h1>There was a problem</h1> <!-- Uma linha de código que é feita para criar um cabeçalho nivel 1 que é a mais importante. -->
        <p class="error"><?php echo $error; ?></p> <!-- Se a variável '$error' não estiver definida ou estiver vazia, 
                                                   este código vai estar presente no HTM e também não vai ter nenhum texto dentro dele. -->
    </body>
</html>