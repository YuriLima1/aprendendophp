<?php
require_once 'connect.php'; // Vai garantir que o 'connect.php' seja incluido apenas uma vez e depois vai gerenciar as conexões com o banco de dados.
require_once 'header.php'; // Vai garantir que o 'header.php' seja incluido apenas uma vez e depois vai permitir a reutilização do layout de um cabeçalho em varias paginas.
?>
<div class="container"> <!-- Div com a classe 'container' que agrupa e estiliza elementos internos. -->
    <?php
    if(isset($_POST['addnew'])){
            if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['address']) || empty($_POST['contact']) ){
                echo "Please fillout all required fields";
                // Verifica se um formulário foi enviado via método POST (isset($_POST['addnew'])) e se todos os campos obrigatórios foram preenchidos .
            }else{
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $address = $_POST["address"];
                    $contact = $_POST["contact"];
                    $sql = "INSERT INTO users(firstname, lastname, address, contact) VALUES ('$firstname', '$lastname', '$address', '$contact')";
                    if( $con->query($sql) === TRUE ){
                            echo "<div class='alert alert-success'>Successfully added new user</div>";
                    }else{
                            echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
                    }
                    // Realiza a inserção de dados de um formulário HTML em uma tabela MySQL chamada users.
            }
    }
    ?>
    <div class="row"> <!-- Cria uma linha para agrupar colunas dentro de um sistema de grade. -->
    <div class="col-md-6 col-md-offset-3"> <!--  Cria uma coluna que ocupa metade da linha e é centralizada no tamanho médio e superiores. -->
            <div class="box">  <!-- Cria uma caixa que pode ter estilos específicos aplicados através da classe box. -->
                    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3> <!-- Cria um cabeçalho <h3> que inclui um ícone e texto. -->
                    <form action="" method="POST">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control"><br>

                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control"><br>

                            <label for="address">Address</label>
                            <textarea rows="4" name="address" class="form-control"></textarea><br>

                            <label for="contact">Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control"><br>
                            <br>
                            <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                    </form>
            </div>
    </div>
    </div>
</div>
<?php
require_once 'footer.php'; // Inclui um arquivo chamado 'footer.php' na página atual e com isso criara um rodapé.