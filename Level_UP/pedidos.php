<?php
include_once 'includes/db_connect.php';

echo "<div class='container'>";

$sql    = "SELECT * FROM cliente";
$result = $con->query($sql);
if( $result->num_rows > 0) 
?>

    <h2> of all Users </h2>
    <table class="table table-bordered table-striped">
            <tr>
                    <td>nome_cli</td>
                    <td>telefone</td>
                    <td>rua</td>
                    <td>cidade</td>
                    <td>cpf</td>
                    <td width="70px">EDIT</td>
            </tr>
     
        <?php
        while( $row = $result->fetch_assoc()) {
                echo "<form action='' method='POST'>";    
                echo "<input type='hidden' value='". $row['user_id']."' name='userid'/>";
                echo "<tr>";
                echo "<td>".$row['nome_cli']. "</td>";
                echo "<td>".$row['telefone']. "</td>";
                echo "<td>".$row['rua']. "</td>";
                echo "<td>".$row['cidade']. "</td>";
                echo "<td>".$row['cpf']. "</td>";
                echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
                echo "</tr>";
                echo "</form>";
        } 
        ?>
        </table>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido | Level UP</title>
    <link rel="stylesheet" href="Style/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/estilos.css" type="text/css">
    <link rel="shortcut icon" href="multimidia/Pedido.png" type="image/x-icon">
</head>
<body>

    <?php
    require_once 'header.php'; 
    ?>

<fieldset>
    <legend>Revise suas informações</legend>

    <ul>
        <li><?php echo "Nome:"; ?></li>
        <li><?php echo "Telefone:"; ?></li>
        <li><?php echo "Rua:"; ?></li>
        <li><?php echo "Cidade:"; ?></li>
        <li><?php echo "CPF:"; ?></li>
    </ul>

</fieldset>

    <?php
    require_once 'footer.php';
    ?>
</body>
</html>