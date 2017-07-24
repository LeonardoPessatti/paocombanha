<?php
/*
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 */
error_reporting(E_ALL ^ E_NOTICE);
include 'lib.php';
$time = date('d/m/Y h:i:s');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Novo Post</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script type= "text/javascript" src="jquery-1.4.1.min.js"></script>
        <script type= "text/javascript">
            $(document).ready(function () {
                function update() {
                    $.ajax({
                        type: 'POST',
                        url: 'time.php',
                        timeout: 1000,
                        success: function (data) {
                            $("#timer").html("Horário do servidor: " + data);
                            window.setTimeout(update, 1000);
                        },
                    });
                }
                update();
            });
        </script>
        <style>
            /*            html{
                            background-color: #e6e6ff;
                        }*/
            #editor{
                width: 70%;
                background-color: "blue";
            }
            #inputs{
                width: 26%;
                margin-left: 72%;
                position: absolute;
                height: 98%;
                top: 0%;
                font-family: 'Lobster', cursive;
                font-size: 2em;
            }
            #submit{
                width: 98%;
                height: 15%;
                position: absolute;
                bottom: 0;
                right: 1%;
                border-radius: 2%;
                font-size: 3em;
                font-family: 'Lobster', cursive;
                font-size: 2em;
                line-height: 120%;
            }
            input{
                font-size: 1.5em;
            }
            #info{
                font-size: 0.6em;
            }

        </style>
    </head>
    <body>
        <form method="post">
            <div id="editor">
                <textarea id="editor-post" name="editor-post">
                </textarea> 
                <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace('editor-post');
                </script>  
            </div>
            <div id="inputs">
                <!--Input do Título-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">wb_incandescent</i>
                    <input id="titulo" name="titulo" type="text" class="validate">
                    <label for="icon_prefix">Título do post</label>
                </div>
                <!--Input da Descriçao-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">assistant_photo</i>
                    <input id="descricao" name="descricao" type="text" class="validate">
                    <label for="icon_prefix">Descrição do post</label>
                </div>
                <!--Input das tags-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">list</i>
                    <textarea id="tags" name="tags" class="materialize-textarea"></textarea>
                    <label for="icon_prefix">Tags do post (separadas por ;)</label>
                </div>

                <!--Input para a imagem-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">publish</i>
                    <input id="cabecalho" name="cabecalho" type="text" class="validate">
                    <label for="icon_prefix">Selecione aqui o cabeçalho do post</label>
                </div>

                <!--Submit-->
                <button class="waves-effect waves-large btn" id="submit" type="submit" name="action">Salvar novo Post!<i class="large material-icons left"></i></button>
            </div>

            <div id="info">     
                <div id="timer"> </div>
                <p>Autor:Leonardo Pessatti</p>
            </div>
        </form>
    </body>
</html>
<?php
//$editor = 1;//$_POST['editor'];
$titulo = null;
$descricao = null;
$tags = null;
$cabecalho = null;
$conteudo = null;

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$tags = $_POST['tags'];
$cabecalho = $_POST['cabecalho'];
$conteudo = htmlentities(urlencode($_POST['editor-post']));

$editor = 1;

if ($titulo != null and $descricao != null and $tags != null and $cabecalho != null and $conteudo != null) {
    include 'server.php';
    mysqli_set_charset($link, "utf8");

    $con = "INSERT INTO  `posts` (`autor_id`, `titulo`, `descricao`, `conteudo`, `data`, `preview`) VALUES ('" . $editor . "', '" . $titulo . "', '" . $descricao . "', '" . addslashes($conteudo) . "', '" . date('Y/m/d h:i:s') . "', '" . $cabecalho . "');";

    echo '<h4>Estatísticas para nerds:</h4><br>';
    echo 'TAGS: ' . $tags . '<br><br>';
    echo 'CABEÇALHO: ' . base64_decode($cabecalho) . '<br><br>';
    echo 'CONTEUDO: ' . $conteudo . '<br><br>';
    echo 'CONSULTA: ' . $con . '<br><br>';
    $query = mysqli_query($link, $con);
    if ($query != null and $query != 0 and $query != '') {
        echo $query;
        echo 'ID POST: ' . mysqli_insert_id($link) . '<br><br>';
        $lastPostId = mysqli_insert_id($link);

        //Verifica se há tags.
        if (strlen($tags) > 0) {
            //Divide-as em um array.
            $tags = explode(';', $tags);
            //Verifica individualmente se já existem.
            echo'<br>-----------------------<br>';
            for ($i = 0; $i <= count($tags); $i++) {
                if (strlen($tags[$i]) > 0) {
                    $idTagExists = null;
                    $con = "SELECT COUNT(id) as conta,id FROM tags WHERE nome = '" . $tags[$i] . "' GROUP by id";
                    $query = mysqli_query($link, $con);
                    $linha = mysqli_fetch_array($query);
                    echo 'Existem ' . count($linha) . ' registros da tag \'' . $tags[$i] . '<br>';
                    if ($linha[conta] > 0) {
                        $idTagExists = $linha[id];
                        echo 'Tag \'' . $tags[$i] . '\' existente, retornando ' . count($linha) . ' resultado(s) com o(s) ID(s) ';
//                        print_r($linha);
                        for ($ii = 0; $ii <= count($linha[conta]); $ii++) {
                            echo $linha[id][$ii] . ', ';
                        }
                        echo 'já inseridos.<br>';
                    } else {
                        $con = "INSERT INTO `tags` (`nome`) VALUES ('" . $tags[$i] . "');";
                        $query = mysqli_query($link, $con);
                        echo 'Tag \'' . $tags[$i] . '\' inserida.<br>';
                        echo'ID TAG: ' . mysqli_insert_id($link) . '<br><br>';
                        $idTagExists = mysqli_insert_id($link);

                        if ($query) {
                            
                        }
                    }

                    $con = "SELECT count(id) as conta FROM tag_post where id_tag= '" . $idTagExists . "' and id_post= '" . $lastPostId . "'";
                    $query = mysqli_query($link, $con);
                    $linha = mysqli_fetch_array($query);
                    if ($linha[conta] > 0) {
                        echo 'Tag \'' . $tags[$i] . '\' já relacionada com o post ' . $linha[conta] . ' vez.<br>';
                    } else {
                        if ($idTagExists != null) {
                            echo'<br>INSERINDO RELAÇÃO TAG/POST<br>';
                            $con = "INSERT INTO `tag_post` (`id_tag`,`id_post`) VALUES ('" . $idTagExists . "','" . $lastPostId . "');";


                            $query = mysqli_query($link, $con);
                            if ($query) {
                                echo'ID TAG/POST: ' . mysqli_insert_id($link) . '<br><br>';
                            }
                        }
                    }
                    echo'<br>-----------------------<br>';
                }
            }
        }
        echo "Notícia inserida com sucesso!";
    } else {
        echo "Não foi possível inserir a notícia, tente novamente.<br>Dados sobre o erro:" . mysql_error($query);
    }
}else{
    echo 'Aguardando preenchimento do Formulário.';
}
?>