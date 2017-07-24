<?php
/**
 * CODIFICAÇÃO BASE 64
 *


$str = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==';
//echo base64_decode($str);
 echo '<img src="data:image/jpeg;base64,'.base64_decode($str).'"/>';
$image = 'img/bg_old.jpg';

// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents($image));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data: ' . mime_content_type($image) . ';base64,' . $imageData;

// Echo out a sample image
echo "<img src=\"$src\" alt=\"\" />";

/**
 * INCLUDE POST
 */

//$autor = 0;
//include 'server.php';
//mysqli_set_charset($link, "utf8");
//for ($i = 17; $i <= 30; $i++) {
//
//    ++$autor;
//    if ($autor == 6) {
//        $autor = 1;
//    }
//    $con = "INSERT INTO  `posts` (`autor_id`, `titulo`, `descricao`, `conteudo`, `data`) VALUES ('" . $autor . "', 'Teste " . $i . "', 'Descrição do Teste " . $i . "', 'Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.
//
//            Ai você fala o seguinte: <strong>\"- Mas vocês acabaram isso?\"</strong> Vou te falar: -\"Não, está em andamento!\" Tem obras que \"vai\" durar pra depois de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós \"podêmo fazê\"? 11, 12, 13, 14... Por que é que não?
//
//            Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!
//
//            No meu xinélo da humildade eu gostaria muito de ver o <strong>Neymar e o Ganso</strong>. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
//
//            Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.
//
//            <p>A população ela precisa da Zona Franca de Manaus, porque na Zona franca de Manaus, não é uma zona de exportação, é uma zona para o Brasil. Portanto ela tem um objetivo, ela evita o desmatamento, que é altamente lucravito. Derrubar arvores da natureza é muito lucrativo!</p>
//
//            ', '2017-05-08 20:21:22');";
//
//    echo $con;
//    $query = mysqli_query($link, $con);
//    
//    if ($query) {
//        echo "Notícia inserida com sucesso!";
//    } else {
//        echo "Não foi possível inserir a notícia, tente novamente.<br>Dados sobre o erro:" . mysql_error($query);
//    }
//}


/**
 * 
 */

/*
include 'server.php';
mysqli_set_charset($link, "utf8");

for ($i = 17; $i <= 30; $i++) {
    $con = 'UPDATE `posts` SET `descricao` = \'Descrição do Teste '. $i .' \', `conteudo` = \'Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no 
        pulso, examina, olha com carinho. Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade. 

            Ai você fala o seguinte: <strong>"- Mas vocês acabaram isso?"</strong> Vou te falar: -"Não, está em andamento!" Tem obras que "vaI" durar pra depois de 2010. Agora, 
            por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14... Por que é que não?

            Se hoje é o dia das crianças... Ontem eu disse: o dia da criança é o dia da mãe, dos pais, das professoras, mas também é o dia dos animais, sempre que você olha uma 
            criança, há sempre uma figura oculta, que é um cachorro atrás. O que é algo muito importante!

            No meu xinélo da humildade eu gostaria muito de ver o <strong>Neymar e o Ganso</strong>. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, 
            parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.

            Primeiro eu queria cumprimentar os internautas. -Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. E isso 
            significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.

            <p>A população ela precisa da Zona Franca de Manaus, porque na Zona franca de Manaus, não é uma zona de exportação, é uma zona para o Brasil. Portanto ela tem um objetivo, 
            ela evita o desmatamento, que é altamente lucravito. Derrubar arvores da natureza é muito lucrativo!</p>\' WHERE `posts`.`id` = '. $i .';';

    echo $con;
    $query = mysqli_query($link, $con);   
    
    if ($query) {
        echo "Notícia atualizada com sucesso!";
    } else {
        echo "Não foi possível atualizar a notícia, tente novamente.<br>Dados sobre o erro:" . mysql_error($query);
    }
}

?>
*/
echo urlencode('<br><iframe width="560" height="315" src="https://www.youtube.com/embed/D7ab595h0AU?ecver=1" frameborder="0" allowfullscreen></iframe>');