create database produtoLaravel;
use produtoLaravel;

CREATE TABLE Produtos(
id INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255),
    quantidade INT,
    preco DOUBLE,
    created_at timestamp null,
    update_at timestamp null
);

SELECT * FROM produtos;