
<?php
    include_once 'db_connect.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
    include_once 'psl-config.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.

    $error_msg = ""; // Vai inicializar a variável da mensagem de erro

    if(isset($_POST['username'], $_POST['email'], $_POST['p'])) { // Garanti que o formulário com os 3 campos foram enviados corretamente antes de executalo.
        // Limpa e valida os dados passados em
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); // Remove as tags HTML e caracteres especiais que podem ser usadas em ataques XSS (Cross-Site Scripting).
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); // Remove todos os caracteres ilegais de um endereço de e-mail, só deixando as caracteres válidas.
        $email = filter_var($email, FILTER_VALIDATE_EMAIL); // Garanti que qualquer alteração adicional no valor do e-mail seja sanitarizada.
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Verifica se o endereço de e-mail fornecido é válido. Se não for, ele adiciona a mensagem de erro.
        // Email inválido
        $error_msg .= '<p class="error">O endereço de email digitado não é válido</p>'; // Mensagem de erro que é usado para exibir erros de usuários.
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING); // Com o valor enviado no campo 'p' o filtro vai remover qualquer código potencialmente prejudicial, armazenando o resultado na variável '$password'.
    if(strlen($password) != 128) {
        // A senha com hash deve ter 128 caracteres.
        // Caso contrário, algo muito estranho está acontecendo
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    // O nome de usuário e a validade da senha foram conferidas no lado cliente.
    // Não deve haver problemas nesse passo já que ninguém ganha
    // violando essas regras.
    //

    $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1"; // Essas duas linhas de código seleciona o id de um membro da tabela members onde o email corresponde a um valor específico. 
    $stmt = $mysqli->prepare($prep_stmt);

    if($stmt) { // Verifica se a declaração preparada foi criada com sucesso.
        $stmt->bind_param('s', $email); // Liga o valor da variável $email ao marcador de posição ? na declaração SQL.
        $stmt->execute(); // Executa a declaração SQL preparada.
        $stmt->store_result(); // Armazena o conjunto de resultados da consulta.

        if($stmt->num_rows == 1) { // Verifica se um e-mail já está cadastrado no banco de dados antes de permitir que um novo usuário se registre com esse e-mail. 
            // Um usuário com esse email já existe
            $error_msg .= '<p class="error">A user with this email address already exists.</p>'; // Se um usuário com esse e-mail já existe, está mensagem de erro é exibida.
        }
    }else {
        $error_msg .= '<p class="error">Database error</p>'; // Se a condição (num_rows == 1) não for atendida, esta linha vai adicionar uma mensagem de erro com á variável '$error_msg'.
    }
    // LISTA DE TAREFAS:
    // Precisamos bolar soluções para quando o usuário não tem
    // direito a se registra, verificando que tipo de usuário está tentando
    // realizar a operação.

    if(empty($error_msg)) {
        // Crie um salt aleatório
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // Crie uma senha com salt
        $password = hash('sha512', $password . $random_salt);

        // Inserir o novo usuário no banco de dados
        if($insert_stmt = $mysqli->prepare("INSERT INTO members (username, email,
        password, salt) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $username, $email, $password, $random_salt);
            // Executar a tarefa pré-estabelecida.
            if(! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT'); // Vai indicar que houve um problema ao tentar inserir os dados de registro no banco de dados.
            }
        }
        header('Location: ./register_success.php'); // Se o registro for bem-sucedido o usuário vai ser renderizado para a página de register_success.php.
    }
 }