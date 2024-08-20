<?php
    include_once 'includes/register.inc.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
    include_once 'includes/functions.php'; // Vai incluir e avaliar o arquivo especificado durante a execução do script.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Secure Login: Registration Form</title> <!-- O texto vai aparecer na aba do navegador. -->
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link rel="stylesheet" href="styles/main.css" /> <!-- Vincula uma folha de estilo externa (CSS) ao documento HTML atual. -->
</head>
<ul>
    <!-- - Registration form to be output if the POST variables are not 
    set or if the registration script caused an error -->
    <h1>Register with us</h1> <!-- Uma linha de código que é feita para criar um cabeçalho nivel 1 que é a mais importante. -->
    <?php
        if(!empty($error_msg)) { 
            echo $error_msg;
        } // Vai verifica se o '$error_msg' não está vazio. Se '$error_msg' contém uma mensagem de erro, essa mensagem será exibida ao usuário.
    ?>
    <ul> <!-- Uma tabela não ordenada. -->
        <li>Os nomes de usuários devem conter apenas digitos, 
        letras maiúsculas e minúsculas e underlines ("_")</li> <!-- Representa um item de lista em uma tabela não ordenada. -->
        <li>Emails devem seguir um formato válido para email.</li>
        <li>As senhas devem ter no mínimo 6 caracteres.</li>
        <li>As senhas devem conter
            <ul>
                <li>Pelo menos uma letra maiúscula (A..Z)</li>
                <li>Pelo menos uma letra minúscula (a..z)</li>
                <li>Pelo menos um número (0..9)</li>
        </ul>
    </li>
    <li>Sua senha deve conferir exatamente</li> 
    </ul>
    <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
        method="post"
        name="registration_form"> <!-- Este formulário enviará os dados para o mesmo script PHP ($_SERVER['PHP_SELF']) que está sendo executado quando o formulário é exibido. -->
      
      Username: <input type="text"
        name="username"
        id="username" value="rodrigo"/><br> <!-- Cria um campo de texto onde os usuários podem inserir seu Nome de Usuário. -->
      Email: <input type="text" name="email" id="email" value="rodrigo@senac.com" /><br> <!-- Cria um campo de texto onde os usuários podem inserir seu endereço de e-mail. -->
      Password: <input type="password"
            name="password"
            id="password" value="$En4c2024"/><br> <!-- Cria um campo de texto oculto onde os usuários podem inserir sua senha. -->
      Confirm password: <input type="password"
                name="confirmpwd"
                id="confirmpwd" value="$En4c2024"/><br> <!-- Cria um campo de texto oculto onde os usuários podem inserir sua senha novamente. -->
      <input type="button"
        value="Register"
        onclick="return regformhash(this.form,
                        this.form.username,
                        this.form.email,
                        this.form.password,
                        this.form.confirmpwd);" /> <!-- Cria um botão clicavel chamado 'Register' para registrar todos os textos que foram preenchidos. -->
    </form>
    <p>Return to the <a href="index.php">login page</a>.</p> <!-- Este parágrafo vai permitir que os usuários volte para a página de login. -->
</body>
</html>