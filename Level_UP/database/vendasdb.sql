CREATE TABLE cliente (
    id_cli INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome_cli VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    genero VARCHAR(30) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    cpf VARCHAR(20) NOT NULL
);

CREATE TABLE produtos (
    id_prod INT AUTO_INCREMENT PRIMARY KEY,
    nome_prod VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    q_estoque INT NOT NULL,
    fornecedor VARCHAR(100) NOT NULL
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_cli INT NOT NULL,
    iten_name VARCHAR(60) NOT NULL,
    data_ped DATE NOT NULL,
    forma_pag VARCHAR(50) NOT NULL,
    val_total DECIMAL(10, 2) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    FOREIGN KEY (id_cli) REFERENCES cliente(id_cli)
);

CREATE TABLE itens_pedidos (
    id_item INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_pedido INT NOT NULL,
    id_prod INT NOT NULL,
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido),
    FOREIGN KEY (id_prod) REFERENCES produtos(id_prod)
);