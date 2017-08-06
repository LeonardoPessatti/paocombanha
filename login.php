<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
</head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<?php
session_start();
$login = $_POST['login'];
$keyword = $_POST['senhaa'];
$logout = $_GET['logout'];
echo $logout;
//$keyword= $senha;
include 'server.php';
include 'lib.php';


if (isset($logout) and isset($_SESSION[sechon])) {
    logout();
} elseif (!isset($_SESSION['sechon'])) {
    $con = 'SELECT id,nome FROM vw_autor WHERE login= \'' . $login . '\' and senha= \'' . $keyword . '\'';
    $query = mysqli_query($link, $con);
    $linha = mysqli_fetch_array($query);
    if (count($linha) > 0 and isset($login)) {
        echo ' <script> log = confirm(\'Bem-vindo ' . $linha[nome] . ', esse é mesmo o seu nome?\');'
                . 'if(log){'
                . 'window.location.href = "'.$redirect.'";'
                . '}else{'
                . 'window.location.href = "login.php?logout=true";'
                . '}</script>';
        $_SESSION['sechon'] = [
            "id" => $linha[id],
            "user" => $linha[nome],
            "hr" => date('d/m/Y hh:i:s'),
        ];
        header('Location:' . $redirect);
        echo 'CASA DO CARALHO';
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
        </head>

        <body>
        <head>
            <style>
                body {
                    display: flex;
                    min-height: 100vh;
                    flex-direction: column;
                    overflow: hidden;
                }

                main {
                    flex: 1 0 auto;
                }

                body {
                    background: #fff;
                }

                .input-field input[type=date]:focus + label,
                .input-field input[type=text]:focus + label,
                .input-field input[type=email]:focus + label,
                .input-field input[type=password]:focus + label {
                    color: #e91e63;
                }

                .input-field input[type=date]:focus,
                .input-field input[type=text]:focus,
                .input-field input[type=email]:focus,
                .input-field input[type=password]:focus {
                    border-bottom: 2px solid #e91e63;
                    box-shadow: none;
                }
            </style>
        </head>

        <body>
            <div class="section"></div>
            <main>
                <center>
                    <!--<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />-->
                    <div class="section"></div>
                    <!--                    <h5 class="indigo-text">LeonardoPessatti.com.br</h5>
                                        <img src="http://m.memegen.com/o6i6hi.jpg">-->
                    <div class="section"></div>

                    <div class="container">
                        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                            <form class="col s12" method="post">
                                <div class='row'>
                                    <div class='col s12'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='text' name='login' id='login' />
                                        <label for='login'>Digite seu login</label>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='password' name='senhaa' id='senhaa' />
                                        <label for='senhaa'>Digite sua senha</label>
                                    </div>
                                    <label style='float: right;'>
                                        <a class='pink-text' onclick="Materialize.toast('Se fodeu', 4000)"><b>Esqueceu sua senha? (seu mongol)</b></a>
                                    </label>
                                </div>

                                <br />
                                <center>
                                    <div class='row'>
                                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                    <a class="btn" onclick="Materialize.toast('Tu não merece, seu inútil.', 4000)">Eu também quero criar uma conta!</a>
                    <!--<a href="#!">Create account</a>-->
                </center>
            </main>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        </body>

    </html>


    </body>
    </html>

    <?php
} elseif (isset($_SESSION['sechon'])) {
//    header('Location:' . $redirect);
    echo' <a class = "btn" href= "login.php?logout=true">Logout</a>';
    print_r($_SESSION['sechon']);
    echo' <br> ';
    print_r($linha);
    echo' <br> ';
    print_r($query);
}
?>