create database loja_bd;

use loja_bd;

create table produto(
	cod_prod int not null auto_increment,
    nome varchar(45),
    quantidade int(3),
    preco float,
    primary key (cod_prod)
);

select * from produto;