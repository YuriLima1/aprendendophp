<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> CRUD</title>
    <link rel="stylesheet" type="text/css"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
            .box{
                    background: #f0f0f0; padding: 20px; }
    </style> </head>
<body>
<div class="container"> <!-- Cria uma divisão ou contêiner na página web. -->
    <nav class="navbar navbar-default"> <!-- Cria um elemento de navegação usando a tag <nav>. -->
        <div class="container-fluid"> <!-- Cria um contêiner de largura total que pode ser usado para organizar e estruturar o conteúdo da página de uma maneira que se adapta dinamicamente a diferentes tamanhos de tela. -->
            <div class="navbar-header"> <!-- Agrupa e organiza elementos iniciais da barra de navegação, especialmente aqueles relacionados à responsividade e á marca. -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <!-- Cria um botão de alternância (toggle button) que é comumente usado em barras de navegação responsivas. -->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> <!-- Esse botão permite que os usuários expandam ou colapsem a navegação em dispositivos móveis.-->
                <a class="navbar-brand" href="index.php">CRUD</a> <!-- Cria um link na barra de navegação que exibe o texto "CRUD". -->
                </div>
                <div id="navbar" class="navbar-collapse collapse"> <!-- Cria um contêiner que faz parte de uma barra de navegação responsiva. -->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="insert.php">Add User</a></li>
                        <li><a href="users.php">All Users</a></li>
                    </ul>
                    <!-- Cria uma lista de navegação dentro de uma barra de navegação, proporcionando links para diferentes páginas do site. -->
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </div>              