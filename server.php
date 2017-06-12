<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 */
$servidor= '127.0.0.1';
$banco= 'paocombanha';
$usuario= 'root';
$senha= '';
$link= mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Erro ao logar no BD");
$db= mysqli_select_db($link,$banco);
mysqli_set_charset($link, "utf8");
