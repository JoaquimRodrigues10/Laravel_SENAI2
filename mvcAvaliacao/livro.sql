CREATE DATABASE bibliotecaLaravel;
USE bibliotecaLaravel;

CREATE TABLE livro(
id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    autor VARCHAR(100),
    descricao VARCHAR(100),
    numeroPagina INT,
    dataPublicacao INT,
    create_at timestamp  null,
    updated_at timestamp null
);

CREATE TABLE editora(
editora_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cnpj VARCHAR(100),
    cidade VARCHAR(100),
    create_at timestamp  null,
    updated_at timestamp null
   
);

SELECT * FROM livro;

SELECT * FROM editora;