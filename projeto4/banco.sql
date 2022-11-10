create database projeto4;
use projeto4;
create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(40) not null,
    email varchar(40) not null,
    telefone varchar(14) not null,
    dtcadastro date
);
insert into cliente values
(null,'ana','ana@gmail.com','2222-3333','2002-11-09');

select* from cliente;
