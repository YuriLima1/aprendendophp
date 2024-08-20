<?php
    include_once 'includes/db_connect.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
    include_once 'includes/functions.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.

    sec_session_start(); // Inicia uma sessão com medidas de segurança adicionais.

    if(login_check($mysqli) == true) { // Verifica se função (login_check) for chamada com o parâmetro ($mysqli), vai retorna 'true'.
        $logged = 'in'; // O usuário está logado.
    }else {
        $logged = 'out'; // O usuário não está logado. 
    } 
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Secure login: Log In</title> <!-- O texto vai aparecer na aba do navegador. -->
            <link rel="stylesheet" href="styles/main.css" /> <!-- Vincula uma folha de estilo externa (CSS) ao documento HTML atual. -->
            <script type="text/JavaScript" src="js/sha512.js"></script>
            <script type="text/JavaScript" src="js/forms.js"></script>
        </head>
        <body>
            <?php
            if(isset($_GET['error'])) { // Verifica se o parâmetro 'error' está presente na URL.
                echo '<p class="error">Erro ao fazer login!</p>'; // Se o parâmetro 'error' estiver presente na URL, vai aparecer a mensagem na página.
            }
            ?>
            <form action="includes/process_login.php" method="post" name="login_form"> <!-- Ira enviar os dados inseridos pelo usuário para o arquivo "process_login.php" quando for submetido usando o método POST. O formulário é identificado pelo nome "login_form". -->
                Email: <input type="text" name="email" /> <!-- Cria um campo de texto onde os usuários podem inserir seu endereço de e-mail. -->
                Password: <input type="password" 
                        name="password" 
                        id="password"/> <!-- Cria um campo de texto oculto onde os usuários podem inserir sua senha. -->
                <input type="button" 
                    value="Login" 
                    onclick="formhash(this.form, this.form.password);" /> <!-- Cria um botão clicavel, chamado 'Login', que será inserido a mensagem (Logado com sucesso). -->
            </form>
            <p>If you don't have a login, please <a href="register.php">register</a></p> <!-- Se você não possuir um login, você vai ser renderizado para a página de Registro -->
            <p>If you are done, please <a href="includes/logout.php">log out</a>.</p> <!-- Se você tiver terminado o registro, você sera renderizado para a página de Login. -->
            <p>You are currently logged <?php echo $logged ?>.</p> <!-- Aqui você já vai estar conectado. -->
        </body>
    </html>