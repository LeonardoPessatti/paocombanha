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
        <script type= "text/javascript" src="jquery-1.4.1.min.js"> </script>
        <script type= "text/javascript">
            $(document).ready(function() {
                function update() {
                    $.ajax({
                        type: 'POST',
                        url: 'time.php',
                        timeout: 1000,
                        success: function(data) {
                           $("#timer").html("Horário do servidor: "+data); 
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
                CKEDITOR.replace( 'editor-post' ); 
            </script>  
            </div>
            <div id="inputs">
                <!--Input do Título-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">wb_incandescent</i>
                    <input id="titulo" type="text" class="validate">
                    <label for="icon_prefix">Título do post</label>
                </div>
                <!--Input da Descriçao-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">assistant_photo</i>
                    <input id="descricao" type="text" class="validate">
                    <label for="icon_prefix">Descrição do post</label>
                </div>
                <!--Input das tags-->
                <div class="input-field col s6">
                    <i class="material-icons prefix">list</i>
                    <textarea id="tags" class="materialize-textarea"></textarea>
                    <label for="icon_prefix">Tags do post (separadas por ;)</label>
                </div>
                
                <!--Input para a imagem-->
                 <div class="file-field input-field">
                <div class="btn">
                  <span><i class="medium material-icons left">publish</i>Imagem</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Selecione aqui o cabeçalho do post">
                </div>
                </div>
                
               <div id="info">     
                    <div id="timer"> </div>
                    <p>Autor:Leonardo Pessatti</p>
               </div>
                <!--Submit-->
                <button class="waves-effect waves-large btn" id="submit" type="submit" name="action">Salvar novo Post!<i class="large material-icons left"></i></button>
            </div>
        </form>
    </body>
</html>
<?php
//$editor = 1;//$_POST['editor'];
$titulo = $_POST['titulo'];
$descricao= $_POST['descricao'];
$tags= $_POST['tags'];
$conteudo= $_POST['editor-post'];

echo $editor_data;

$autor = 0;
include 'server.php';
mysqli_set_charset($link, "utf8");
if (!is_null($editor)) {

    ++$autor;
    if ($autor == 6) {
        $autor = 1;
    }
    $con = "INSERT INTO  `posts` (`autor_id`, `titulo`, `descricao`, `conteudo`, `data`) VALUES ('" . $editor . "', '".$titulo."', '".$descricao."', '".$conteudo."', '2017-05-08 20:21:22');";

    echo $con;
    $query = mysqli_query($link, $con);
    
    if ($query) {
        echo "Notícia inserida com sucesso!";
    } else {
        echo "Não foi possível inserir a notícia, tente novamente.<br>Dados sobre o erro:" . mysql_error($query);
    }
} else{
?>
<script language="javascript" type="text/javascript">

Materialize.toast(<span>I am toast content</span>, 5000);
</script>
<?php
}
?>