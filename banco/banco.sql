create database administradores;
use administradores;

create table users(
    id int auto_increment primary key not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(50) not null
);

create table alunos(
    id int auto_increment primary key not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    idade int not null,
    endereco varchar(100) not null,
    telefone varchar(50) not null,
    mensalidade varchar(15) not null,
    inscricao date not null,
    sexo varchar(20) not null
);