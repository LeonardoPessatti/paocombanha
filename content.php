<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 */
//Resultados por página
$limit = 5;
//Tabela do banco
$tabela = 'posts';
//Define e manipula o offset como necessário
$offset = $_GET['pagina'];
$pagina = $_GET['pagina'];
--$offset;
if (!$offset) {
    $offseta = 0;
}
$offseta = $offset * $limit;

if($tag){
$conPosts = 
'select 
DISTINCT id,
titulo,
preview,
descricao,
conteudo,
data,
id_post,
id_tag,
a.nome 
from vw_posts a join vw_tags b on a.id=b.id_post 
where b.nome=\''.$tag.'\'
order by id desc';
}

elseif($autor){
$conPosts = 
'select 
DISTINCT id,
titulo,
preview,
descricao,
conteudo,
data,
autor_id, 
a.nome, 
descricao_autor, 
cor
from vw_posts a
where autor_id=\''.$autor.'\'
order by id desc
LIMIT ' . $offseta . ',' . $limit;
} else{
$conPosts = 'select * from vw_posts LIMIT ' . $offseta . ',' . $limit;
}
$posts = mysqli_query($link, $conPosts);
?>    


    <!-- Post -->

    <?php
//Montagem das miniaturas dos posts em si
    while ($linha = mysqli_fetch_array($posts)) {
        ?>

            <div class="card large card-reveal card-panel" style="height: 37em; padding-bottom: 1.5em;  background-color: rgb(539, 534, 513);">
                <div class="card-image">
                    <img src=" <?php echo urldecode($linha[preview]); ?>" alt=\"\" />
                    <span class="card-title" style="text-shadow: 2px 2px 2px white;"><a href="index.php?post=<?php echo $linha[id] ?> "><h2><?php echo $linha[titulo]; ?></h2></a></span>
                </div>
                <div class="card-content"  style="margin-bottom: -30%; text-align: justify" >
                    <h5 style="margin-top: 0"><?php echo $linha[descricao]; ?></h5>
                    <p><?php echo substr(urldecode($linha[conteudo]), 0, 800) .' ... <a href="index.php?post='.$linha[id].'">Continue Lendo</a>'; ?></p>
                    <p></p>
                </div>
                <div class="card-action" style="padding: 0.5% 0 0.5% 0;">
                    <table>
                        <tr >
                            <td>
                                <p style="padding: 0; margin: 0">Postado por <?php echo $linha[nome]; ?><br> ás <?php echo date( 'H:i:s',strtotime($linha[data])); ?> do dia <?php echo date( 'd-m-y',strtotime($linha[data])); ?></p>
                            </td>
                            <td>
                                <div id="social">
                                    <a href="http://www.facebook.com/leopessatti" target="parent"> <img src="img/facebook.png"/> </a>
                                    <a href="https://twitter.com/LeoPessatti" target="parent"> <img src="img/twitter.png"/> </a>
                                    <a href="https://twitter.com/LeoPessatti" target="parent"> <img src="img/insta.png"/> </a>
                                    <a href="https://twitter.com/LeoPessatti" target="parent"> <img src="img/linkedin.png"/> </a>
                                    <a href="https://plus.google.com/u/0/115983505734612118081/about" target="parent"> <img src="img/g+.png"/> </a>
                                </div>
                            </td>
                        </tr> 
                    </table>
                </div>
            </div>        

        <?php
    }
    ?>


