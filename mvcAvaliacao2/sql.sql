create database produtoLaravel;
use produtoLaravel;

create table produtos(
    id int auto_increment primary key,
    nome varchar(100),
    quantidade int,
    preco varchar(100),
    data varchar(100),
    created_at timestamp null,
    updated_at timestamp null
);

ALTER TABLE produtos;

ALTER TABLE produtos
ADD COLUMN detalhes_id INT,
ADD CONSTRAINT fk_produtos_detalhes
FOREIGN KEY (detalhes_id) REFERENCES detalhesProduto(id);



create table detalhesProduto(
    id int auto_increment primary key,
    descricao varchar(255),
    created_at timestamp null,
    updated_at timestamp null
    
);

select * from produtos;
select * from detalhesProduto;