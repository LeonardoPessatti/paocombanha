<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 */
function testeBD(){
   	if(!server.$link){
		echo "erro ao conectar ao banco de dados!";
		exit();
	}
	elseif(server.$link){
		echo "Sucesso ao conectar ao banco de dados! <br>";
	} 
}

function imgRedimSave($file){
    $thumb = "img/thumbs/$imge";

    if (file_exists($thumb)) {
        $useimg = $thumb;
    } else {
        require( 'canvas.php' );
        $img = new canvas();
        $img->carrega( $file )
        ->hexa( '#FF005C' )
        ->redimensiona( 200, 100, 'preenchimento' )
        ->grava($thumb,100);
        exit;
    }
}
function imgRedim($diretorio){
    $thumb = "img/thumbs/$imge";

    if (file_exists($diretorio)) {
        $useimg = $thumb;
    } else {
        require( 'canvas.php' );
        $img = new canvas();
        $img->carrega( $file )
        ->hexa( '#FF005C' )
        ->redimensiona( 200, 100, 'preenchimento' )
        ->grava($thumb,100);
        exit;
    }
}
function editor($cor){
   echo' <textarea name="editor1"></textarea>
                <script>
                    var alturaEditor = screen.height*0.75;
                    CKEDITOR.replace( \'editor1\', {
                        language: \'pt\',
                        uiColor: \''.$cor.'\',
                        height: alturaEditor
                    });
                </script>';
}
