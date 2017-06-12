<!--
Código criado e pertencente exclusivamente a Leonardo Pessatti.
www.facebook.com/leopessatti
Created on : 29/03/2017, 20:48:08
Author     : Leonardo Pessatti <lpessatti@gmail.com>
-->
 <head>
        <meta charset="UTF-8">
        <title>Pão com Banha</title>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <style>
*{
    font-family: 'Lobster', cursive;
    padding: 0;
    margin: 0;
}
#error{
    width:100%;
    height:100%;
    width: auto;
    overflow: hidden;
}  
#error img{
    max-width:100%;;
    height: auto;
    z-index: 0;
}  
article{
    font-size:2em;
    width: 40%;
    height: 60%;
    background-color: rgba(0,0,0,0.8);
    z-index: 2;
    position: absolute;
    top:10%;
    left: 30%;
    color: white;
    text-align: center;
    padding-top: 10%;
    border-radius: 100%; /*(padrão)*/
    -moz-border-radius: 100%; /*(navegadores Flock e Firefox)*/
    -webkit-border-radius: 100%; /*(navegadores Chrome e Safari)*/
}
a{
    color:orange;
}
        </style>
    </head>
<div id="error">
    <img src="img/error.jpg">
    <article>
        <h1>Ops...</h1><br>
        <h3>Algo aqui definitivamente está errado.</h3><br>
        <p>
            Parece que algo errado não está certo.<br>
            Você pode voltar para a <a href="index.php">página principal</a> ou nos mandar um email informando o problema. :)
        </p>
    </article>
</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

