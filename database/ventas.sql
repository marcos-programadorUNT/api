drop database if exists ventas;
create database ventas;
use ventas;
create table categorias(
id int auto_increment,
categoria varchar(50),
primary key(id));
insert into categorias(categoria) values('ABARROTES');
insert into categorias(categoria) values('FRUTAS');
insert into categorias(categoria) values('LICORES');
