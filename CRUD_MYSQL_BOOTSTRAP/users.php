<?php
require_once 'connect.php'; // Vai garantir que o 'connect.php' seja incluido apenas uma vez e depois vai gerenciar as conexões com o banco de dados.
require_once 'header.php'; // Vai garantir que o 'header.php' seja incluido apenas uma vez e depois vai permitir a reutilização do layout de um cabeçalho em varias paginas.
echo "<div class='container'>"; // Gera e imprime um elemento <div> com a classe CSS container.
if( isset($_POST['delete'])) {
        $sql = "DELETE FROM users WHERE user_id=". $_POST['userid'];
        if($con->query($sql) === TRUE) {
                echo "<div class='alert alert-success'>Successfully delete user</div>";
        }
}
// Verifica se um formulário foi submetido via método POST com um campo chamado "delete". 
// Se o formulário foi submetido dessa maneira, o código executa uma operação de exclusão SQL para remover um usuário específico da tabela users.

$sql    = "SELECT * FROM users"; // Seleciona todos os registros da tabela users.
$result = $con->query($sql); // Realiza a execução de uma consulta SQL definida na variável $sql utilizando a conexão ativa com o banco de dados representada pelo objeto $con.
if( $result->num_rows > 0) // Verifica se uma consulta SQL retornou um ou mais resultados da tabela do banco de dados.
{ 
        ?>
        <h2>List of all Users</h2>
        <table class="table table-bordered table-striped"> <!-- Define uma tabela HTML com bordas em todas as células e listras zebradas alternadas nas linhas, utilizando classes CSS de um framework como Bootstrap. -->
                <tr>
                        <td>Firstname</td>
                        <td>Lastname</td>
                        <td>Address</td>
                        <td>Contact</td>
                        <td width="70px">Delete</td>
                        <td width="70px">EDIT</td>
                </tr>
        <?php
        while( $row = $result->fetch_assoc()) { // Iterar sobre os resultados de uma consulta SQL que retornou múltiplas linhas de dados da tabela do banco de dados.
                echo "<form action='' method='POST'>";      //added
                echo "<input type='hidden' value='". $row['user_id']."' name='userid'/>";
    //added
                echo "<tr>";
                echo "<td>".$row['firstname']. "</td>";
                echo "<td>".$row['lastname']. "</td>";
                echo "<td>".$row['address']. "</td>";
                echo "<td>".$row['contact']. "</td>";
                echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>"; 
                echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
                echo "</tr>";
                echo "</form>";//added
        } 
        ?>
        </table>
<?php
}
else
{
    echo "<br><br>No Record Found";
}
?>
</div>
<?php
require_once 'footer.php'; // Inclui um arquivo chamado 'footer.php' na página atual e com isso criara um rodapé.