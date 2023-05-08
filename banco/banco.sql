create database administradores;
use administradores;

create table users(
    id int auto_increment primary key not null,
    nome varchar(50),
    email varchar(100),
    senha varchar(50),
    plano varchar(50),
    dataInicio varchar(20),
    dataFim varchar(20),
    codeConfirm varchar(30),
    situação varchar(20),
    fotoPerfil varchar(100)
);

create table adm(
    id int not null primary key auto_increment,
    email varchar(100) not null,
    senha varchar(30) not null
);

insert into adm (email, senha) values ('adimin@gmail.com', 'adimin123');