CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);
CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    value FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);
CREATE TABLE tb_users (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    cpf VARCHAR(11) NOT NULL UNIQUE,
    email VARCHAR(80)
);

INSERT INTO tb_category (name, description)
VALUES
('Informática', 'Produtos de Informatica e acessorias para computador'),
('Escritorio', 'Canetas, Cadernos, Folhas, etc'),
('Eletronicos', 'TVs, som portatil, caixas de som, etc');

INSERT INTO tb_product (name, description, photo, value, category_id, quantity, created_at)
VALUES
('Teclado 1', 'Teclado bla bla bla', 'https://http2.mlstatic.com/D_NQ_NP_981268-MLB47131047832_082021-O.webp', '199.89', 1, 50, '2022-05-10 09:30:34'),
('Teclado 2', 'Teclado bla bla bla', 'https://http2.mlstatic.com/D_NQ_NP_981268-MLB47131047832_082021-O.webp', '199.89', 1, 50, '2022-05-10 09:30:34'),
('Teclado 3', 'Teclado bla bla bla', 'https://http2.mlstatic.com/D_NQ_NP_981268-MLB47131047832_082021-O.webp', '199.89', 1, 50, '2022-05-10 09:30:34');


select * from tb_category;
