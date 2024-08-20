<?php
    include_once 'functions.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.

    sec_session_start(); // Inicia uma sessão com medidas de segurança adicionais.

    // Desfaz todos os valores da sessão
    $_SESSION = array();
    
    // Obtém os parâmetros da sessão
    $params = session_get_cookie_params();

    // Deleta o cookie em uso.
    setcookie(session_name(),
        '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]);

    // Destrói a sessão
    session_destroy();
    header('Location: ../index.php');