<?php

/* 
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 */

$conPosts = 
'select 
DISTINCT id,
autor_id,
titulo,
preview,
descricao,
conteudo,
data,
id_post,
id_tag,
nome 
from vw_posts a join vw_tags b on a.id=b.id_post 
where b.nome=\''.$tag.'\'';

$posts = mysqli_query($link, $conPosts);
?>    

<div id="content">
    <!-- Post -->

    <?php
//Montagem das miniaturas dos posts em si
    while ($linha = mysqli_fetch_array($posts)) {
        $text = substr($linha[conteudo], 0, 400) . '...';
        $src = 'data: image/png;charset=utf-8;base64, "' . $linha[preview] . '"';
        ?>
        <div class="row">
            <div class="card large col s10 m8 l6 offset-l3 offset-s1 offset-m2">
                <div class="card-image">
                    <img src="data: image/jpg;charset=utf-8;base64, <?php echo $linha[preview]; ?>" alt=\"\" />
                    <span class="card-title" style="text-shadow: 2px 2px 2px white;"><a href="index.php?post=<?php echo $linha[id] ?> "><h2><?php echo $linha[titulo]; ?></h2></a></span>
                </div>
                <div class="card-content truncate" style="margin-bottom: -30%;" >
                    <p><?php echo $text; ?></p>
                </div>
                <div class="card-action">
                    <a href="index.php?post=<?php echo $linha[id] ?> ">Continue Lendo</a>
                </div>
            </div>        
        </div>  
        <?php
    }
    echo '"' . $linha[preview] . '"';
    ?>

</div>
