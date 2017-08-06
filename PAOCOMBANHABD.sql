/* 
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 */
/**
 * Author:  Leonardo
 * Created: 13/06/2017
 */

/*--AUTOR--*/
CREATE TABLE autor (
  id int(11) NOT NULL,
  nome varchar(45) NOT NULL,
  descricao varchar(1000) DEFAULT NULL,
  facebook varchar(50) DEFAULT NULL,
  twitter varchar(50) DEFAULT NULL,
  instagram varchar(50) DEFAULT NULL,
  linkedin varchar(50) DEFAULT NULL,
  site varchar(50) DEFAULT NULL,
  email varchar(50) DEFAULT NULL,
  whats varchar(50) DEFAULT NULL,
  telegram varchar(50) DEFAULT NULL,
  senha varchar(50) DEFAULT NULL,
  cor varchar(45) DEFAULT NULL
  avatar varchar(50) DEFAULT NULL
);

ALTER TABLE autor
  ADD PRIMARY KEY (id),
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;



/*--TAGS--*/
CREATE TABLE tags (
  id int(11) NOT NULL,
  nome varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE tags
  ADD PRIMARY KEY ('id'),
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

/*--POSTS--*/
CREATE TABLE posts (
  id int(11) NOT NULL,
  autor_id int(11) NOT NULL,
  titulo varchar(45) NOT NULL,
  preview varchar(200),
  descricao varchar(45) DEFAULT NULL,
  conteudo longtext NOT NULL,
  data datetime NOT NULL,
  ativo tinyint(1) NOT NULL DEFAULT '1'
)

ALTER TABLE posts
  ADD PRIMARY KEY ('id'),
  ADD KEY 'autor_id_idx' ('autor_id');

ALTER TABLE posts
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
  ADD CONSTRAINT 'autor_id' FOREIGN KEY ('autor_id') REFERENCES 'autor' ('id') ON DELETE NO ACTION ON UPDATE NO ACTION;

/*--TAG_POST--*/
CREATE TABLE tag_post (
  id int(11) NOT NULL,
  id_tag int(11) NOT NULL,
  id_post int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE tag_post
  ADD PRIMARY KEY ('id'),
  ADD KEY 'tags_tag_post_fk' ('id_tag'),
  ADD KEY 'posts_tag_post_fk' ('id_post'),
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0,
  ADD CONSTRAINT 'posts_tag_post_fk' FOREIGN KEY ('id_post') REFERENCES 'posts' ('id') ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT 'tags_tag_post_fk' FOREIGN KEY ('id_tag') REFERENCES 'tags' ('id') ON DELETE NO ACTION ON UPDATE NO ACTION;


/*--IMAGENS--*/
CREATE TABLE imagens (
  id int(11) NOT NULL,
  imagem longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE imagens
  ADD PRIMARY KEY ('id');


/*--VIEWS--*/

/*--VIEW POSTS--*/
CREATE VIEW vw_posts AS 
select a.id, a.titulo, a.preview, a.descricao, a.conteudo, a.data, a.ativo, b.id as autor_id, b.nome, b.descricao as descricao_autor, b.cor
from posts a JOIN autor b ON A.autor_id = B.id
order by a.id desc

/*--VIEW POSTS ATIVOS--*/
CREATE VIEW 'vw_count_posts_ativos'  AS  
select count('vw_posts'.'id') AS 'NUMPOSTS' 
from 'vw_posts' 
where ('vw_posts'.'ativo' = TRUE) ;

/*--VIEW TAGS--*/
CREATE VIEW 'vw_tags'  AS  
select 'a'.'id_post' AS 'id_post','a'.'id_tag' AS 'id_tag','b'.'nome' AS 'nome' 
from ('tag_post' 'a' join 'tags' 'b' on(('a'.'id_tag' = 'b'.'id'))) 
order by 'a'.'id_post' desc ;

/*--VIEW POSTS AUTOR--*/
CREATE VIEW 'vw_post_autor'  AS  
select 'a'.'id' AS 'post_id','b'.'id' AS 'id','b'.'nome' AS 'nome','b'.'descricao' AS 'descricao','b'.'cor' AS 'cor'
from ('vw_posts' 'a' join 'autor' 'b' on(('a'.'autor_id' = 'b'.'id'))) ;

/*--VIEW AUTOR--*/
CREATE VIEW vw_autor as
SELECT id, nome, descricao, avatar, facebook, twitter, instagram, linkedin, site, email, whats, telegram, senha, cor
FROM autor;


/*
---------POVOAMENTO

INSERT INTO 'autor' ('id', 'nome', 'descricao', 'cor') VALUES
(1, 'Autor 1', 'Fascinado por aviões.', 'blue'),
(2, 'Autor 2', 'Mestre em artes marciais.', 'black'),
(3, 'Autor 3', 'Fascinado por Répteis.', 'green'),
(4, 'Autor 4', 'Mestre em artes cênicas.', 'yellow'),
(5, 'Autor 5', 'Ninja das trevas.', 'purple');

-- INSERT INTO 'tag_post' ('id', 'id_tag', 'id_post') VALUES
-- (1, 2, 6),
-- (2, 2, 17),
-- (7, 2, 6),
-- (8, 2, 17),
-- (9, 1, 17),
-- (10, 3, 17),
-- (11, 1, 5),
-- (12, 2, 6),
-- (13, 2, 6);

-- INSERT INTO 'tags' ('id', 'nome') VALUES
-- (1, 'Testes'),
-- (2, 'Bobagens'),
-- (3, 'Devaneios'),
-- (4, 'Babaquices');
*/


-- /* 
--  * Código criado e pertencente exclusivamente a Leonardo Pessatti.
--  * www.facebook.com/leopessatti
--  */
-- /**
--  * Author:  Leonardo
--  * Created: 13/06/2017
--  */
-- 
-- /*--AUTOR--*/
-- CREATE TABLE autor (
--   id int(11) NOT NULL,
--   nome varchar(45) NOT NULL,
--   descricao varchar(45) DEFAULT NULL,
--   cor varchar(45) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- ALTER TABLE autor
--   ADD PRIMARY KEY (id),
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
-- 
-- 
-- /*--TAGS--*/
-- CREATE TABLE tags (
--   id int(11) NOT NULL,
--   nome varchar(45) DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- 
-- ALTER TABLE tags
--   ADD PRIMARY KEY (id),
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
-- 
-- /*--POSTS--*/
-- CREATE TABLE posts (
--   id int(11) NOT NULL,
--   autor_id int(11) NOT NULL,
--   titulo varchar(45) NOT NULL,
--   preview varchar(200),
--   descricao varchar(45) DEFAULT NULL,
--   conteudo longtext NOT NULL,
--   data datetime NOT NULL,
--   ativo tinyint(1) NOT NULL DEFAULT '1'
-- )
-- 
-- ALTER TABLE posts
--   ADD PRIMARY KEY (id),
--   ADD KEY autor_id_idx (autor_id);
-- 
-- ALTER TABLE posts
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0,
--   ADD CONSTRAINT autor_id FOREIGN KEY (autor_id) REFERENCES autor (id) ON DELETE NO ACTION ON UPDATE NO ACTION;
-- 
-- /*--TAG_POST--*/
-- CREATE TABLE tag_post (
--   id int(11) NOT NULL,
--   id_tag int(11) NOT NULL,
--   id_post int(11) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- 
-- ALTER TABLE tag_post
--   ADD PRIMARY KEY (id),
--   ADD KEY tags_tag_post_fk (id_tag),
--   ADD KEY posts_tag_post_fk (id_post),
--   MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0,
--   ADD CONSTRAINT posts_tag_post_fk FOREIGN KEY (id_post) REFERENCES posts (id) ON DELETE NO ACTION ON UPDATE NO ACTION,
--   ADD CONSTRAINT tags_tag_post_fk FOREIGN KEY (id_tag) REFERENCES tags (id) ON DELETE NO ACTION ON UPDATE NO ACTION;
-- 
-- 
-- /*--IMAGENS--*/
-- CREATE TABLE imagens (
--   id int(11) NOT NULL,
--   imagem longblob NOT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- 
-- ALTER TABLE imagens
--   ADD PRIMARY KEY (id);
-- 
-- 
-- /*--VIEWS--*/
-- 
-- /*--VIEW POSTS--*/
-- CREATE VIEW vw_posts AS 
-- select a.id, a.titulo, a.preview, a.descricao, a.conteudo, a.data, a.ativo, b.id as autor_id, b.nome, b.descricao as descricao_autor, b.cor
-- from posts a JOIN autor b ON a.autor_id = b.id
-- order by a.id desc
-- 
-- /*--VIEW POSTS ATIVOS--*/
-- CREATE VIEW vw_count_posts_ativos  AS  
-- select count(vw_posts.id) AS NUMPOSTS
-- from vw_posts 
-- where (vw_posts.ativo = TRUE) ;
-- 
-- /*--VIEW TAGS--*/
-- CREATE VIEW vw_tags  AS  
-- select a.id_post AS id_post,a.id_tag AS id_tag,b.nome AS nome 
-- from (tag_post a join tags b on((a.id_tag = b.id))) 
-- order by a.id_post desc ;
-- 
-- /*--VIEW POSTS AUTOR--*/
-- CREATE VIEW vw_post_autor  AS  
-- select a.id AS post_id,b.id AS id,b.nome AS nome,b.descricao AS descricao,b.cor AS cor
-- from (vw_posts a join autor b on((a.autor_id = b.id))) ;



/*
---------POVOAMENTO

INSERT INTO 'autor' ('id', 'nome', 'descricao', 'cor') VALUES
(1, 'Autor 1', 'Fascinado por aviões.', 'blue'),
(2, 'Autor 2', 'Mestre em artes marciais.', 'black'),
(3, 'Autor 3', 'Fascinado por Répteis.', 'green'),
(4, 'Autor 4', 'Mestre em artes cênicas.', 'yellow'),
(5, 'Autor 5', 'Ninja das trevas.', 'purple');

-- INSERT INTO 'tag_post' ('id', 'id_tag', 'id_post') VALUES
-- (1, 2, 6),
-- (2, 2, 17),
-- (7, 2, 6),
-- (8, 2, 17),
-- (9, 1, 17),
-- (10, 3, 17),
-- (11, 1, 5),
-- (12, 2, 6),
-- (13, 2, 6);

-- INSERT INTO 'tags' ('id', 'nome') VALUES
-- (1, 'Testes'),
-- (2, 'Bobagens'),
-- (3, 'Devaneios'),
-- (4, 'Babaquices');
*/