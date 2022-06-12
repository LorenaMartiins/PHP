create database bd_alunos;
use bd_alunos;

create table alunos(
	cod_aluno int not null auto_increment,
    nome varchar(45),
    idade int,
    periodo varchar(10),
    turma varchar(10),
    primary key (cod_aluno)
);

select * from alunos;