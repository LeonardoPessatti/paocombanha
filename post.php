<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author     : Leonardo Pessatti <lpessatti@gmail.com>
 */
include 'server.php';

echo $post;
$con = 'SELECT * FROM `posts` WHERE id= ' . $post;
$query = mysqli_query($link, $con);
$linha = mysqli_fetch_array($query);
mysqli_set_charset($link, "utf8");

// Inacabado
?>
<div class="row">
    <div class="col s10 m8 l6 offset-l3 offset-s1 offset-m2">
        <article>
            <header>
                <h1><a href="#"><?php echo $linha[titulo]; ?></a></h1>
                <p>Postado por <?php echo $linha[autor_id]; ?></p>
                <img src="img/placeholder.jpg" alt="" /></a>
                <h5><?php echo $linha[descricao]; ?></h5>
            </header>
            <p><?php echo $linha[conteudo].'<br> AHOYYY MARUJOS,<br>'; ?> aaa</p>
            <ul class="actions">

                tags:
                    <?php
                    $conTag = 'SELECT nome FROM vw_tags where id_post=' . $linha[id];
                    $queryTags = mysqli_query($link, $conTag);
                    $numTags = mysqli_num_rows($queryTags);
                    for ($i = 1; $tags = mysqli_fetch_array($queryTags); $i++) {
                        ?>
                        <a href="index.php?tag=<?php echo $tags[nome]; ?>"><?php echo $tags[nome]; ?></a>    
                        <?php
                        if ( $numTags > $i) {
                            echo ', ';
                        }
                    }
                    ?>
            </ul>
        </article>
    </div>
</div>