create database biblioteca;


create table Administrador(
    Nome varchar(100), 
    CPF int(100),
    ID int(100),
    Senha varchar(100) primary key not null
);


create table Aluno(
    Nome varchar(100), 
    RA int(100),
    ID int(100),
    Senha varchar(100) primary key not null
);


create table Romance(
    titulo varchar(100), 
    autor varchar(100) primary key not null
);


create table Quadrinho(
    titulo varchar(100), 
    autor varchar(100) primary key not null
);



create table Conto(
    titulo varchar(100), 
    autor varchar(100) primary key not null
);


create table Cronica(
    titulo varchar(100), 
    autor varchar(100) primary key not null
);

create table Classicos(
    titulo varchar(100), 
    autor varchar(100) primary key not null
);

create table Outros(
    titulo varchar(100), 
    autor varchar(100) primary key not null
); 