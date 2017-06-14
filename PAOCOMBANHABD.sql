/* 
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 */
/**
 * Author:  Leonardo
 * Created: 13/06/2017
 */

CREATE VIEW vw_posts AS 
select a.id, a.titulo, a.preview, a.descricao, a.conteudo, a.data, a.ativo, b.id as autor_id, b.nome, b.descricao as descricao_autor, b.cor
from posts a JOIN autor b ON A.autor_id = B.id
order by a.id desc