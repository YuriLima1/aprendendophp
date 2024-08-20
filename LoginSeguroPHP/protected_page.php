<?php
    include_once 'includes/db_connect.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
    include_once 'includes/functions.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.

    sec_session_start(); // Inicia uma sessão com medidas de segurança adicionais.
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Secure Login: Protected Page</title> <!-- O texto vai aparecer na aba do navegador. -->
            <link rel="stylesheet" href="styles/main.css" /> <!-- Vincula uma folha de estilo externa (CSS) ao documento HTML atual. -->
        </head>
        <body>
            <?php if(login_check($mysqli) == true) : ?> <!-- Utiliza uma estrutura de controle para verificar se á condição é verdadeira e depois vai executar. -->
                <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p> <!-- Vai exibir uma mensagem de 'Welcome', ultilizando o nome de usuário armazenado na sessão atual. -->
                <p>
            Esta é uma pagina protegina para servir de exemplo. Para acessá-la, os usuários devem
            ter feito o login. Em dado momento, também verificaremos o papel que o usuário está
            desempenhado para que possamos determinar o tipo de usuário que está autorizado a 
            acessar a página.
                </p>
                <p>Return to <a href="index.php">login page</a></p> <!-- Este parágrafo vai permitir que os usuários volte para a página de login. -->
              <?php else: ?>
                <p>
                    <span class="error">Você não tem autorização para acessar está página.</span> <!-- Mostra uma mensagem de erro para o usuário. -->
            Please <a href="index.php">login</a>. <!-- Cria um link que permite ao usuário acessar a página de login. -->
                </p>
              <?php endif; ?> <!-- Uma forma abreviada de fechar uma estrutura de controle (if). -->
        </body>
    </html>