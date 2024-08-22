create database hotel;
use hotel;
create table usuarios (
id INT auto_increment primary key,
usuario varchar(20) not null,
senha varchar(20) not null);
insert into usuarios (usuario, senha)
values ('cesar','1234');
select * from usuarios;