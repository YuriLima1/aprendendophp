<?php
    include_once 'db_connect.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
    include_once 'functions.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
 
    sec_session_start(); // Inicia uma sessão com medidas de segurança adicionais.
 
    if(isset($_POST['email'], $_POST['p'])) {  // Verifica se as chaves 'email' e 'p' estão definidas na matriz $_POST.
        $email = $_POST['email']; // Atribui o valor da chave 'email' á variável $email.
        $password = $_POST['p']; // The hashed password.
 
    if(login($email, $password, $mysqli) == true) {  // 
        // Login com sucesso 
        header('Location: ../protected_page.php'); // Se o login for bem-sucedido vai enviar o cabeçalho HTTP para o navegador e indica uma redireção para a URL especificada.
    }else { // Especifica um bloco de código que será executado se a condição (if) for falsa. 
        // Falha de login 
        header('Location: ../index.php?error=1'); // Por outro lado, se o login falhar vai enviar o cabeçalho HTTP para o navegador. (Location: ../index.php?error=1): Redirenciona o navegador para a página (index.php) e adiciona um parâmetro de consulta chamada 'error=1'.
    }
    }else { // Vai corresponder a um (if) externo. Fora do segundo (if).
    // As variáveis POST corretas não foram enviadas para esta página. 
    echo 'Invalid Request'; // Se o usuário for redirecionado para (index.php) com (error=1) vai exibir a mensagem 'Invalid Request'.
}