<?php
/*
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 */
?>

<!-- DESCOMENTE ESSE TRECHO CASO QUEIRA TESTAR A CLASSE SOZINHA
<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
</head>
<div class="container">
                <div class="row center">
                        <form  id="formMail" name="formMail" method="post" > action="http://www.jsdb.com.br"
                                <h1>Entre em contato</h1>
                                                        <input placeholder="Seu nome" name="nome" id="nome" type="text" class="validate" required="required">
                                                        <input placeholder="Seu e-mail" name="email" id="email" type="email" class="validate" required="required">
                                                        <textarea placeholder="Sua mensagem" name="mensagem" id="mensagem" class="materialize-textarea" required="required"></textarea>
                                                        <button class="btn waves-effect waves-light" style=" background-color: #00adef !important" type="submit" name="submit">Enviar</button>
                  </form>
                </div>
        </div>-->

<?php
error_reporting(E_ALL & ~E_NOTICE ^ E_WARNING);
date_default_timezone_set('America/Brasilia');
echo date_default_timezone_set('America/Brasilia');
$para = 'contato@jsdb.com.br';
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];
$assunto = 'Contato pelo site ' . $email;
$submit == $_POST['submit'];
$conteudo = 'Enviado por ' . $nome . ', email: ' . $email . ', ás ' . date("H:i:s") . '<br><br>' . $msg;

$headers = "Content-Type:text/html; charset=UTF-8";
$headers .= "From:  Contato Site JSDB<lpessatti@gmail.com.br>";
$headers .= "X-Sender:  <suporte@jsdb.com.br>";
$headers .= "X-Mailer: PHP  v" . phpversion();
$headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'];
$headers .= "Return-Path:  <" . $email . ">";


$patterns = array();
$patterns[0] = '\"';
$patterns[1] = '\'';
$patterns[2] = ';';
$replacements = array();
$replacements[0] = '\\"';
$replacements[1] = "\'";
$replacements[2] = '\;';
preg_replace($patterns, $replacements, $msg);


if (!empty($email)) {
    mail($para, $assunto, $conteudo, $headers);
    unset($email);
}
?>
