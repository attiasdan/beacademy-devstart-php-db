USE db_escola;

-- inserir 1 registro --
INSERT INTO tb_professor(nome, email, cpf)
VALUES ('Chiquim das Tapiocas', 'chiquim@email.com', '12312312345');

INSERT INTO tb_professor(nome, email, cpf)
VALUES
('Zezim das Rapaduras', 'zezim@email.com', '12312312311'),
('Maria das Rapaduras', 'mariarapadura@email.com', '12312312315'),
('Luiza das Rapaduras', 'luiza@email.com', '12312312317');

-- Excluir 1 registro --
DELETE FROM tb_professor WHERE id='2';

-- Excluir todos da tabela --
delete from tb_professor;

-- editar dados de 1 registo --
update tb_professor
   set nome='Luiza da Caucaia'
 where cpf='12312312317';

 -- editar dados de todos os registros --
 update tb_professor
    set nome='Francisco';

-- selecionar todos os dados da table tb_professor --
SELECT * FROM tb_professor WHERE id='5';

-- selecionar alguns dados de todos os professores --
select nome, cpf
  from tb_professor;