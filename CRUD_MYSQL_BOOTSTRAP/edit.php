<?php
require_once 'connect.php'; // Vai garantir que o 'connect.php' seja incluido apenas uma vez e depois vai gerenciar as conexões com o banco de dados.
require_once 'header.php'; // Vai garantir que o 'header.php' seja incluido apenas uma vez e depois vai permitir a reutilização do layout de um cabeçalho em varias paginas.
?>
<div class="container">  <!-- Div com a classe 'container' que agrupa e estiliza elementos internos. -->
        <?php // O usuário envia o formulário.
            if(isset($_POST['update'])){ // Vai verificar se o botão ou campo 'update' está presente.
            if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']) )
            { // Se 'update' estiver presente, vai verificar se algum dos campos obrigatórios está vazio.
                echo "Please fillout all required fields";
                // Se algum campo estiver vazio, vai exibir a mensagem "Please fill out all required fields".
            }else{ 
                    $firstname = $_POST['firstname']; // Atribui o valor do campo 'firstname' do formulário à variável '$firstname'.
                    $lastname     = $_POST['lastname']; // Atribui o valor do campo 'lastname' do formulário à variável '$lastname'.
                    $address      = $_POST['address']; // Atribui o valor do campo 'address' do formulário à variável '$address'.
                    $contact      = $_POST['contact']; // Atribui o valor do campo 'contact' do formulário à variável '$contact'.
                    $sql = "UPDATE users SET firstname='{$firstname}', lastname = '{$lastname}', address = '{$address}', contact = '{$contact}' WHERE user_id=". $_POST['userid'];
                    // Cria uma string para atualizar os dados do usuário na tabela 'users'. 
                    if( $con->query($sql) === TRUE ){ // Executa a query usando o método query do objeto $con, que representa a conexão com o banco de dados.
                            echo "<div class='alert alert-success'>Successfully updated user</div>"; // Se a query foi executada com sucesso, vai exibir a mensagem de sucesso.
                    }else{
                            echo "<div class='alert alert-danger'>Error: There was an error while updating user info</div>"; // Se a query falhar, vai exibir a mensagem de erro.
                    }
                }
            }
            $id = isset($_GET['id']) ? (INT) $_GET['id'] : 0; // Verifica se o parâmetro 'id' foi passado no método 'GET' na URL, e depois vai converte o valor do parâmetro 'id' para um número inteiro.
            $sql = "SELECT * FROM users WHERE user_id={$id}"; // Seleciona todos os campos de um registro na tabela 'users' onde 'user_id' é igual ao valor de '$id'.
            $result = $con->query($sql); // Vai executar usando o método 'query' do objeto '$con', que vai representar a conexão com o banco de dados.
            if($result->num_rows < 1) { // Verifica se o número de linhas retornadas é menor que 1.
                    header('Location: index.php'); // Envia um cabeçalho ao navegador que vai redirecionar o usuário para 'index.php'.
                    exit; // Vai termina a execução imediatamente.
            }
            $row = $result->fetch_assoc(); // Vai buscar a próxima linha do resultado e depois vai armazena a linha como um 'array' associativo na variável '$row'.
            ?>
            <div class="row"> <!-- Cria uma linha para agrupar colunas dentro de um sistema de grade. -->
            <div class="col-md-6 col-md-offset-3"> <!--  Cria uma coluna que ocupa metade da linha e é centralizada no tamanho médio e superiores. -->
                    <div class="box"> <!-- Cria uma caixa que pode ter estilos específicos aplicados através da classe box. -->
                            <!-- Cria um cabeçalho estilizado com um ícone à esquerda e um formulário básico que permitirá ao usuário modificar informações de um usuário específico. -->
                            <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3>
                            <form action="" method="POST">
                                    <input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
                                    
                                    <label for="firstname">Firstname</label>
                                    <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control"><br>

                                    <label for="lastname">Lastname</label>
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control"><br>

                                    <label for="address">Address</label>
                                    <textarea rows="4" name="address" class="form-control"><?php echo $row['address']; ?></textarea><br>

                                    <label for="contact">Contact</label>
                                    <input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>" class="form-control"><br>
                                    <br>
                                    <input type="submit" name="update" class="btn btn-success" value="Update">
                            </form>
                    </div>
            </div>
            </div>
</div>
<?php
require_once 'footer.php'; // Inclui um arquivo chamado 'footer.php' na página atual e com isso criara um rodapé.