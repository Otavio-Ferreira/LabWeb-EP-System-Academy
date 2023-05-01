create database administradores;
use administradores;

create table users(
    id int auto_increment primary key not null,
<<<<<<< Updated upstream
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
=======
    nome varchar(50),
    email varchar(100),
    senha varchar(50),
    plano varchar(50),
    dataInicio varchar(20),
    dataFim varchar(20),
    codeConfirm varchar(30),
    situação varchar(20)
);

create table adm(
    id int not null primary key auto_increment,
    email varchar(100) not null,
    senha varchar(30) not null
);

insert into adm (email, senha) values ('adimin@gmail.com', 'adimin123');
>>>>>>> Stashed changes
