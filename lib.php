<?php

/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 
function testeBD() {
    if (!server . $link) {
        echo "erro ao conectar ao banco de dados!";
        exit();
    } elseif (server . $link) {
        echo "Sucesso ao conectar ao banco de dados! <br>";
    }
}

function imgRedimSave($file) {
    $thumb = "img/thumbs/$imge";

    if (file_exists($thumb)) {
        $useimg = $thumb;
    } else {
        require( 'canvas.php' );
        $img = new canvas();
        $img->carrega($file)
                ->hexa('#FF005C')
                ->redimensiona(200, 100, 'preenchimento')
                ->grava($thumb, 100);
        exit;
    }
}

function imgRedim($diretorio) {
    $thumb = "img/thumbs/$imge";

    if (file_exists($diretorio)) {
        $useimg = $thumb;
    } else {
        require( 'canvas.php' );
        $img = new canvas();
        $img->carrega($file)
                ->hexa('#FF005C')
                ->redimensiona(200, 100, 'preenchimento')
                ->grava($thumb, 100);
        exit;
    }
}

function editor($cor) {
    echo' <textarea name="editor1"></textarea>
                <script>
                    var alturaEditor = screen.height*0.75;
                    CKEDITOR.replace( \'editor1\', {
                        language: \'pt\',
                        uiColor: \'' . $cor . '\',
                        height: alturaEditor
                    });
                </script>';
}

/**
 * De: http://blog.thiagobelem.net/removendo-acentos-de-uma-string-urls-amigaveis
 * @param type $string
 * @param type $slug
 * @return type
 *
function removeAcentos($string, $slug = false) {
    if (mb_detect_encoding($string . 'x', 'UTF-8, ISO-8859-1') == 'UTF-8') {
        $string = utf8_decode(strtolower($string));
    }
    $string = strtolower($string);
    // Código ASCII das vogais
    $ascii['a'] = range(224, 230);
    $ascii['e'] = range(232, 235);
    $ascii['i'] = range(236, 239);
    $ascii['o'] = array_merge(range(242, 246), array(240, 248));
    $ascii['u'] = range(249, 252);
    // Código ASCII dos outros caracteres
    $ascii['b'] = array(223);
    $ascii['c'] = array(231);
    $ascii['d'] = array(208);
    $ascii['n'] = array(241);
    $ascii['y'] = array(253, 255);
    foreach ($ascii as $key => $item) {
        $acentos = '';
        foreach ($item AS $codigo)
            $acentos .= chr($codigo);
        $troca[$key] = '/[' . $acentos . ']/i';
    }
    $string = preg_replace(array_values($troca), array_keys($troca), $string);
    // Slug?
    if ($slug) {
        // Troca tudo que não for letra ou número por um caractere ($slug)
        $string = preg_replace('/[^a-z0-9]/i', $slug, $string);
        // Tira os caracteres ($slug) repetidos
        $string = preg_replace('/' . $slug . '{2,}/i', $slug, $string);
        $string = trim($string, $slug);
    }
    return $string;
}
*/
function logout($redirect) {
    if (!$redirect) {
        $redirect = './';
    }
    $logout = true;
    session_start();
//$_SESSION['sechon'] = array();
    $_SESSION['sechon'] = session_destroy();
    session_destroy($_SESSION['sechon']);
    header('Location:' . $redirect);
}

function login($redirect) {
    if (!$redirect) {
        $redirect = './';
    }
    include_once 'login.php';
}
