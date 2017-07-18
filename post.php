<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author     : Leonardo Pessatti <lpessatti@gmail.com>
 */
include 'server.php';

echo $post;
$con = 'SELECT * FROM `VW_POSTS` WHERE id= ' . $post;
$query = mysqli_query($link, $con);
$linha = mysqli_fetch_array($query);
mysqli_set_charset($link, "utf8");

// Inacabado
?>

    <div class="col s10 m8 l6 ">
        <article>
            <header>
                <h1><a href="#"><?php echo $linha[titulo]; ?></a></h1>
                <p>Postado por <?php echo $linha[nome]; ?> ás <?php echo date( 'H:i:s',strtotime($linha[data])); ?> do dia <?php echo date( 'd-m-y',strtotime($linha[data])); ?></p>
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
                        
                        <div class="row">

          <div class="card blue-grey darken-1">
              <div class="card-content white-text" style="background-color: <?php echo $linha[cor]; ?>">
              <span class="card-title"><a href="index.php?autor=<?php echo $linha[autor_id]; ?>"><?php echo $linha[nome]; ?></a></span>
              <p><?php echo $linha[descricao_autor]; ?></p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>

      </div>
            </ul>
        </article>
    </div>
