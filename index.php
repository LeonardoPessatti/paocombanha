<!DOCTYPE html>
<!--
    Se esse negócio funcionar, esse código é criado e pertencente exclusivamente a Leonardo Pessatti.
    Se não funcionar, não sei quem fez.
www.facebook.com/leopessatti
Created on : 29/03/2017, 20:48:08
Author     : Leonardo Pessatti <lpessatti@gmail.com>
-->
<?php
include 'lib.php';
include 'server.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pão com Banha</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!--<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="banner" class="row">
            <div class="col s10 m8 l6 offset-l3 offset-s1 offset-m2 bannercontent">
                <h1><a href="index.php">Pão com Banha</a></h1>
                <h3>Motherfucking, Incredibly Awesome</h3>
            </div>
        </div>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $post = $_GET['post'];
        $tag = $_GET['tag'];
        $autor = $_GET['autor'];
        if ($post) {
            include 'post.php';
        } else {
            include 'content.php';
            include 'paginacao.php';
        }
        include 'left.php';
        include 'right.php';
        include 'footer.php';
        ?>
    </body>
</html>
