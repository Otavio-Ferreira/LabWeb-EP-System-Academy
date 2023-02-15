create database administradores;
use administradores;

create table users(
    id int auto_increment primary key not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(50) not null
);