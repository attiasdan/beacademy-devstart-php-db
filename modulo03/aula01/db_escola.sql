-- Para criar uma base de dados --
CREATE DATABASE db_escola;

-- selecionar uma base de dados --
USE db_escola;

CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);
CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    matricula VARCHAR(10) NOT NULL,
    curso_id INT(11) NOT NULL
);
CREATE TABLE tb_curso (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    carga_horaria INT(5) NOT NULL
);
CREATE TABLE tb_disciplina (
    nome VARCHAR(100) NOT NULL,
    carga_horaria INT(5) NOT NULL,
    curso_id INT(11) NOT NULL
);


-- inserir dados --
INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Alessandro', 'ale@email.com', '1234567891'
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES (
    'Daniel', 'dan@email.com', '1234567892'
);

-- selecionar dados --
SELECT * FROM tb_professor;

INSERT INTO tb_aluno (nome, email, cpf, matricula)
VALUES (
    'Joãozinho', 'john@email.com', '1234567893', '454567'
);
INSERT INTO tb_aluno (nome, email, cpf, matricula)
VALUES (
    'Mariazinha', 'maria@email.com', '1234567894', '474789'
);