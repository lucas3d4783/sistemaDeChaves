CREATE DATABASE sistemaDeChaves;
USE sistemaDeChaves;

CREATE TABLE professor(
    id int not null auto_increment primary key,
    sala varchar(10),
    ativo tinyint(1),
    nome varchar(45),
    sobrenome varchar(75),
    dataNascimento varchar(10),
    email varchar(75),
    fone varchar(15)
);

CREATE TABLE porteiro(
    id int not null auto_increment primary key,
    nome varchar(45),
    sobrenome varchar(75),
    dataNascimento varchar(10),
    email varchar(75),
    fone varchar(15)
);

CREATE TABLE aluno(
    id int not null auto_increment primary key,
    idProfessor int not null,
    ativo tinyint(1), 
    nome varchar(45),
    sobrenome varchar(75),
    dataNascimento varchar(10),
    email varchar(75),
    fone varchar(15),
    foreign key (idProfessor) references professor (id)
);

CREATE TABLE chave(
    id int not null auto_increment primary key,
    descricao varchar(75) not null,
    alocada tinyint(1) 
);

CREATE TABLE aula(
    id int not null auto_increment primary key,
    descricao varchar(75) not null,
    idAluno int,
    idProfessor int,
    idChave int not null,
    idPorteiro int not null,
    data varchar(10) not null,
    hora varchar(5) not null,
    dataE varchar(10),
    horaE varchar(5),
    foreign key (idAluno) references aluno (id),
    foreign key (idProfessor) references professor (id),
    foreign key (idPorteiro) references porteiro (id),
    foreign key (idChave) references chave (id)
);

insert into professor (sala, ativo, nome, sobrenome, dataNascimento, email, fone) 
values ('108F', true, 'joão', 'silva', '20/10/1882', 'joao@gmail.com', '55991851218');
insert into professor (sala, ativo, nome, sobrenome, dataNascimento, email, fone) 
values ('100F', true, 'pedro', 'rosa', '29/10/1991', 'pedro@gmail.com', '519999999');
insert into professor (sala, ativo, nome, sobrenome, dataNascimento, email, fone) 
values ('200F', false, 'marcos', 'rizzete', '30/10/1999', 'marcos@gmail.com', '331545151');

insert into aluno (idProfessor, ativo, nome, sobrenome, dataNascimento, email, fone) 
values (1 , true, 'joao', 'menezes', '13/10/1999', 'joaofas@gmail.com', '215848412');
insert into aluno (idProfessor, ativo, nome, sobrenome, dataNascimento, email, fone) 
values (1 , true, 'patrícia', 'rosario silva', '11/10/1999', 'paty@gmail.com', '215845122');

insert into porteiro ( nome, sobrenome, dataNascimento, email, fone) 
values ('maincon', 'potter', '13/10/1999', 'maicon@gmail.com', '21215181');
insert into porteiro ( nome, sobrenome, dataNascimento, email, fone) 
values ('ricardo', 'eletro', '12/10/1999', 'ricardo@gmail.com', '21215181');

insert into chave (descricao) values ('sala 108f'), ('sala 109f'), ('sala 110f'), ('sala 118f');