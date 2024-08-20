<?php
require_once 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Produtos | Level UP & Lan House</title>
    <link rel="shortcut icon" href="multimidia/Prateleira.png" type="image/x-icon">
    <link rel="stylesheet" href="Style/style.css" type="text/css">
</head>
<body>

    <?php

    // Deletar produto
    if (isset($_POST['delete'])) {
        $sql = "DELETE FROM produtos WHERE id_prod = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $_POST['id_prod']);

        if ($stmt->execute()) {
            echo "<h1 id='deletado'><strong>Produto</strong> desabilitado com sucesso</h1>";
        } else {
            echo "<h1 id='erro'><strong>Erro ao desabilitar o produto</strong></h1>";
        }
        $stmt->close();
    }

    // Editar produto
    if (isset($_POST['edit'])) {
        $id_prod = $_POST['id_prod'];
        $nome_prod = $_POST['nome_prod'];
        $preco = $_POST['preco'];
        $q_estoque = $_POST['q_estoque'];
        $fornecedor = $_POST['fornecedor'];

        $sql = "UPDATE produtos SET nome_prod = ?, preco = ?, q_estoque = ?, fornecedor = ? WHERE id_prod = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sdsdi", $nome_prod, $preco, $q_estoque, $fornecedor, $id_prod);

        if ($stmt->execute()) {
            echo "<h1 id='editado'><strong>Produto</strong> editado com sucesso</h1>";
        } else {
            echo "<h1 id='erro'><strong>Erro ao editar o produto</strong></h1>";
        }
        $stmt->close();
    
    $sql = "SELECT * FROM produtos";
    $result = $mysqli->query($sql);
    }
    ?>

    <h2>Administração de Produtos</h2>
    <table border="2" class="tabelapra">
        <tr>
            <th>Id do Produto</th>
            <th>Nome do Produto</th>
            <th>Preço</th>
            <th>Quantidade em Estoque</th>
            <th>Fornecedor</th>
            <th width="70px">Delete</th>
            <th width="70px">Edit</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ( $row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<form action='' method='POST'>";
                echo "<input type='hidden' value='" . $row['id_prod'] . "' name='id_prod' />";
                
                echo "<td>" . $row['id_prod'] . "</td>";
                echo "<td><input type='text' name='nome_prod' value='" . $row['nome_prod'] . "' /></td>";
                echo "<td><input type='text' name='preco' value='" . $row['preco'] . "' /></td>";
                echo "<td><input type='text' name='q_estoque' value='" . $row['q_estoque'] . "' /></td>";
                echo "<td><input type='text' name='fornecedor' value='" . $row['fornecedor'] . "' /></td>";
                
                echo "<td><input type='submit' name='delete' value='Disable' class='delete' style='cursor: pointer;' /></td>";
                echo "<td><input type='submit' name='edit' value='Edit' class='edit' style='cursor: pointer;' /></td>";
                
                echo "</form>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Nenhum produto encontrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>