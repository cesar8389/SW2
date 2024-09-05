create database hotel;
use hotel;
create table usuarios (
id INT auto_increment primary key,
usuario varchar(20) not null,
senha varchar(20) not null);

insert into usuarios (usuario, senha)
values ('cesar','1234');

use hotel;
create table clientes (
id INT auto_increment primary key,
nome varchar(50) not null,
email varchar(30) not null,
telefone varchar(11) not null,
cpf varchar(11) not null,
datanascimento date not null);

select * from clientes;
