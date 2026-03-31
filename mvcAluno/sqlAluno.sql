create database alunoLaravel;
use alunoLaravel;

create TABLE alunos(

    turmaid INT auto_increment primary KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    created_at timestamp null,
    updated_at timestamp null
);

Create table Turmas (
id INT auto_increment primary KEY,
    numSala int not null,
    serie varchar(255) null,
    created_at timestamp null,
    updated_at timestamp null
);

alter table Alunos
add column turma_id int null,
add constraint fk_alunos_turma
foreign key (turma_id) references turma(id) on delete set null;

SELECT * FROM Turmas;
