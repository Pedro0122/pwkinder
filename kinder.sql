CREATE DATABASE BD_kider;

USE BD_kider;

CREATE TABLE conta(
login int,
senha varchar(80),
nome varchar (80),
email varchar(80),
telefone int(14)
);

CREATE TABLE newsletter(
email varchar(80)
);

CREATE TABLE pergunta(
nomeC varchar(80),
nomeP varchar (80),
email varchar(80),
idade int(3),
mensagem varchar(1000)
);

CREATE TABLE professor(
nomeP varchar(80),
escola varchar (80),
formacao varchar(80),
tempoE varchar(25),
turnoD varchar(500)
);

