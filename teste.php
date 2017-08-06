<?php
include 'lib.php';
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
//echo urldecode('%3Cp%3ESempre+fui+inseguro+em%26nbsp%3B%26quot%3Bachar+que+sei%26quot%3B+algo.+Saber+como+o+bagulho+funciona+na+teoria+mas+nunca+ter+posto+em+pr%26aacute%3Btica.+Isso+se+aplica+a+estrutura+que+voc%26ecirc%3B+v%26ecirc%3B+%28e+a+que+n%26atilde%3Bo+v%26ecirc%3B%29+aqui.+Sempre+achei+interessante+desenvolvimento+pra+web%2C+embora+nunca+tenha+tido+muita+experi%26ecirc%3Bncia%2C+umas+duas+mat%26eacute%3Brias+na+faculdade+que+o+professor+levava+nas+coxas%2C+um+%3Ca+href%3D%22http%3A%2F%2Fwww.jsdb.com.br%22%3Esite%3C%2Fa%3E+ou+%3Ca+href%3D%22http%3A%2F%2Fwww.ghmoveisplanejados.com.br%22%3Eoutro%3C%2Fa%3E+pro+com%26eacute%3Brcio+em+geral+aqui+%3Cs%3Edo+vilarejo%3C%2Fs%3E%26nbsp%3Bda+%3Ca+href%3D%22https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FRio_do_Oeste%22%3Ecidade%3C%2Fa%3E%26nbsp%3Be+alguns+formul%26aacute%3Brios+e%26nbsp%3Brelat%26oacute%3Brios+l%26aacute%3B+pro+%3Ca+href%3D%22http%3A%2F%2Ffrigorificoelgolli.com.br%22%3Efrigor%26iacute%3Bfico+no+qual+eu+trabalhava%3C%2Fa%3E%26nbsp%3Bem+PHP.%26nbsp%3BNa+verdade%2C+quando+comecei+no+frigor%26iacute%3Bfico%2C+%3Cem%3Es%26oacute%3B+sabia+que+queria+algo+relacionado+a+tecnologia%3C%2Fem%3E+pra+fazer+depois+do+ensino+m%26eacute%3Bdio%2C+foi+ali%2C+quebrando+um+galho+entre+formatar+um+computador+e+trocar+a+senha+de+algum+roteador%2C+sem+saber+direito+que+era+o+NetBeans+e+sem%26nbsp%3Bsaber+pra+onde+eu+mandava+o+fonte+quando+clicava+em+%26quot%3Bfazer+upload%26quot%3B+na+aba+Projetos%26nbsp%3Bque+me+interessei+pelo+funcionamento+da+coisa%2C+fazendo+tabelas+simples+em+html+mostrando+resultados+de+consultas+ainda+mais+simples+no+banco+de+dados+da+empresa%2C+e+apanhando+pra+fazer+a+conex%26atilde%3Bo+funcionar+sem+saber+direito+oque+%26quot%3B%3Ca+href%3D%22http%3A%2F%2Fo-que-significa.blogspot.com.br%2F2011%2F03%2Fquery.html%23.WXUozIjyuUk%22%3Equery%3C%2Fa%3E%26quot%3B+queria+dizer.%26nbsp%3B%26nbsp%3BInclusive%2C+j%26aacute%3B+vinha+recebendo+sugest%26otilde%3Bes+de+fazer+Engenharia+da+Computa%26ccedil%3B%26atilde%3Bo+na+Udesc+de+Ibirama+vindas+de+um+dos+meus+tios+-+que+at%26eacute%3B+hoje+%26eacute%3B+a+minha%26nbsp%3Brefer%26ecirc%3Bncia+m%26aacute%3Bxima+em+rela%26ccedil%3B%26atilde%3Bo+a+desenvolvimento%2C+mesmo+tendo+conhecido+e+aprendido+muito+com+v%26aacute%3Brios+outros+programadores+incrivelmente+capazes+na+faculdade+e+no+trabalho.%3Cbr+%2F%3E%0D%0AAcabei+fazendo+Sistemas+de+Informa%26ccedil%3B%26atilde%3Bo+na+Unidavi%2C%26nbsp%3B%3Cs%3Equase+a+mesma+coisa%2C%3C%2Fs%3E%26nbsp%3Bmas+%26nbsp%3B%26eacute%3B+uma+decis%26atilde%3Bo+da+qual+eu+n%26atilde%3Bo+me+arrependo%2C+exceto+talvez+quando+%3Cs%3Epenso+que+vou+morrer+pobre%3C%2Fs%3E%26nbsp%3Bvejo+outros+programadores+trocando+seus+sistemas+homologados+depois+de+meses%28se+n%26atilde%3Bo+anos%29+de+suor+%26aacute%3Brduo+por+vale-transporte%2C+tal+qual+uma+crian%26ccedil%3Ba+da+periferia+vendendo%26nbsp%3Bp%26atilde%3Bo+com+mortadela+na+sa%26iacute%3Bda+da+escola%2C+aceitando+qualquer+papel-moeda+paralelo.+Em+compensa%26ccedil%3B%26atilde%3Bo%2C%26nbsp%3Bvejo+outros+corrigindo%2F+atualizando%2F+incrementando+fontes+%26quot%3Bprontos%26quot%3B+e+tendo+sucesso+com+bem+menos+trabalho%2C+al%26eacute%3Bm+das%26nbsp%3B%3Ca+href%3D%22https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FVale_do_Sil%25C3%25ADcio%22%3EStartups+do+Vale%3C%2Fa%3E%2C+fonte+de+inspira%26ccedil%3B%26atilde%3Bo+pra+diversas+%26aacute%3Breas%2C+pequenas+empresas+inovadoras+que+geralmente+d%26atilde%3Bo+muito+certo+-+a+ponto+de+existir+um+termo+espec%26iacute%3Bfico+para+aquelas+que+valem+mais+de+1+bilh%26atilde%3Bo%2C+os%26nbsp%3B%3Ca+href%3D%22http%3A%2F%2Fg1.globo.com%2Fmundo%2Fblog%2Fhelio-gurovitz%2Fpost%2Fos-unicornios-do-vale-do-silicio.html%22%3EUnic%26oacute%3Brnios%3C%2Fa%3E%26nbsp%3B-+como+o+%3Ca+href%3D%22https%3A%2F%2Fwww.uber.com%2Fpt-BR%2F%22%3EUber%3C%2Fa%3E%2C+o%26nbsp%3B%3Ca+href%3D%22https%3A%2F%2Fwww.spotify.com%2Fbr%2F%22%3ESpotify%3C%2Fa%3E%2C%26nbsp%3Ba+gloriosa%26nbsp%3B%3Ca+href%3D%22http%3A%2F%2Fwww.spacex.com%2F%22%3ESpacex%3C%2Fa%3E%26nbsp%3Be+v%26aacute%3Brias+%3Ca+href%3D%22https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FList_of_unicorn_startup_companies%22%3Eoutras%3C%2Fa%3E.%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3EEnfim%2C+decidi+que+queria+aprender+como+essa+porra+funciona+de+cima+a+baixo.+Se+ficasse+bom%2C+talvez+cobrasse+uns+R%2450%2C00+no+Mercado+Livre+pelo+fonte+completo+e+pelo+banco+de+dados.+Mas+pra+aprender+direito%2C+n%26atilde%3Bo+poderia+usar+nenhum+framework%2C+api%2C+projeto+do+GitHub%2C+nada.+Mal+e+porcamente+usei+%3Ca+href%3D%22http%3A%2F%2Fmaterializecss.com%2F%22%3EMaterialize%3C%2Fa%3E%26nbsp%3Bpro+front-end%2C+na+verdade%2C+quase+tudo+aqui+%26eacute%3B+baseado+nos+cards+do+Materialize%2C+j%26aacute%3B+sofri+o+suficiente+com+css+puro+na+minha+vida.%26nbsp%3B%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3E%3Cimg+alt%3D%22YES.+REALLY+AWESOME.%22+src%3D%22http%3A%2F%2Fi.imgur.com%2FNOVS4yO.jpg%22+style%3D%22height%3A375px%3B+width%3A700px%22+%2F%3E%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3EComo+imaginei%2C+n%26atilde%3Bo+houveram+grandes+dificuldades+al%26eacute%3Bm+da+pagina%26ccedil%3B%26atilde%3Bo+e+das+tags.%3Cbr+%2F%3E%0D%0AAs+tags+pra+cada+post.+Uma+relac%26atilde%3Bo+infernal.+Eu+tentei+fazer+uma+procedure+no+MySQL%2C+que+iria+verificar+a+exist%26ecirc%3Bncia+de+cada+uma+delas+no+banco%2C+se+ela+j%26aacute%3B+n%26atilde%3Bo+estivesse+l%26aacute%3B%2C+seria+inclu%26iacute%3Bda%2C+e+depois%2C+verificar+se+a+rela%26ccedil%3B%26atilde%3Bo+dela+com+o+post+existe+entre+as+rela%26ccedil%3B%26otilde%3Bes+no+banco%2C+se+n%26atilde%3Bo%2C+relacionaria+ambos.+Teria+feito+isso+com+facilidade+em+SQLServer+ou+Firebird%2C+mas+o+MySQL+n%26atilde%3Bo+presta%2C+desculpe.+Por+mais+que+copiasse+a+sintaxe+de+uma+procedure+pronta+que+diz+%26quot%3BOl%26aacute%3B%2C+mundo%21%26quot%3B+da+internet%2C+meu%26nbsp%3B%3Ca+href%3D%22https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FPhpMyAdmin%22%3EPhpMyAdmin%3C%2Fa%3E%26nbsp%3Bretornava+erro+logo+ap%26oacute%3Bs+o+primeiro+BEGIN.+Pensei+%26quot%3Bah%2C+foda-se%2C+fa%26ccedil%3Bo+no+php+mesmo+em+10+min+ta+pronto.%26quot%3B%2C+e+assim+se+fez.%26nbsp%3BTalvez+um+dia+eu+consiga+%28+quando+tudo+parecer+em+paz%2C+isso+vai+irromper+na+minha+mente%2C+tal+qual+uma+baleia+jubarte+subindo+como+um+torpedo+gigante+das+profundezas+das+fossas+marianas+com+uma+lula+colossal+na+boca%26nbsp%3Batingindo+um+barco+pesqueiro%2C%26nbsp%3Be+ent%26atilde%3Bo+eu+vou+precisar+voltar+e+dar+jeito+nisso%29+mas+at%26eacute%3B+me+tornar+%3Ca+href%3D%22https%3A%2F%2Fwww.significados.com.br%2Fphd%2F%22%3EPhD%3C%2Fa%3E%26nbsp%3Bem+algo%2C+tenho+bastante+coisa+pra+me+ocupar.+Ent%26atilde%3Bo+provavelmente+vai+ficar+assim.+Aplica%26ccedil%3B%26atilde%3Bo+pequena%2C+fun%26ccedil%3B%26atilde%3Bo+pequena%2C+n%26atilde%3Bo+vai+dar+problema.%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3E%3Cimg+alt%3D%22MySQL+in+a+nutshell%22+src%3D%22http%3A%2F%2Fi.imgur.com%2FKAZaExh.png%22+style%3D%22height%3A1068px%3B+width%3A478px%22+%2F%3E%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3EAp%26oacute%3Bs+popular+um+banco+de+dados+com+cerca+de+300+testes%2C+creio+ter+conseguido+uma+estrutura+interessante%2C+no+m%26iacute%3Bnimo%26nbsp%3B%3Cem%3Eutiliz%26aacute%3Bvel.%26nbsp%3B%3C%2Fem%3EE+qual+melhor+maneira+de+testar+algo+se+n%26atilde%3Bo+na+pr%26aacute%3Btica%3F%26nbsp%3B%3Cbr+%2F%3E%0D%0ADe+in%26iacute%3Bcio%2C+temos+uma+interface+pra+inserir+um+post+novo%2C+uma+p%26aacute%3Bgina+pra+visualizar+um+post+espec%26iacute%3Bfico%2C+uma+p%26aacute%3Bgina+inicial+que+mostra+os+mais+recentes%2C+um+sistema+de+pagina%26ccedil%3B%26atilde%3Bo+simples%2C+cadastro+de+tags%2C+autores%2C+posts%2C+imagens...+E+algumas+outras+coisas.%26nbsp%3BEssas+coisas+simples+e+indispens%26aacute%3Bveis%2C+tem+muita+coisa+que+quero%26nbsp%3Bincluir+ainda.+Pretendo+largar+isso+na+m%26atilde%3Bo+de+mais+algu%26eacute%3Bm%2C+algum+leigo+de+prefer%26ecirc%3Bncia%2C+pra+testar+de+maneira+mais+efetiva%2C+evitando+o+%3Ca+href%3D%22http%3A%2F%2Fstudylatenights.blogspot.com.br%2F2017%2F06%2Fabordagem-de-teste-sobre-inducao-e.html%22%3Ecaminho+feliz%3C%2Fa%3E.%26nbsp%3B%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3E%3Cspan+style%3D%22font-size%3A18px%22%3E%3Cem%3E%26quot%3BMas+por+que+um+blog%3F%26quot%3B%3C%2Fem%3E%3C%2Fspan%3E%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3EN%26atilde%3Bo+sabia+exatamente+o+que+desenvolver.+Simples+assim.+Fora+que+sempre+me+interessei+pela+linguagem+cronista+muitas+vezes+usada.+Um+belo+exemplo%2C+%26eacute%3B+o%26nbsp%3B%3Ca+href%3D%22http%3A%2F%2Ftwitter.com%2Fizzynobre%22%3EIzzy+Nobre%3C%2Fa%3E%26nbsp%3Be+%26nbsp%3Bseu+site%26nbsp%3B%3Ca+href%3D%22http%3A%2F%2Fhbdia.com%2F%22%3EHoje+%26eacute%3B+um+bom+dia%3C%2Fa%3E%2C+que+acompanho+faz+anos.%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3E%3Cimg+alt%3D%22Hoje+%C3%A9+um+bom+dia%22+src%3D%22http%3A%2F%2Fi.imgur.com%2FjgZuwDx.png%22+style%3D%22height%3A352px%3B+width%3A700px%22+%2F%3E%3C%2Fp%3E%0D%0A%0D%0A%3Cp%3ESe+considerar+que+posso+postar+oque+der+na+telha%2C+perfeito%21+Conte%26uacute%3Bdo+vai+ter%2C+mais+autores+tamb%26eacute%3Bm%2C+mesmo+que+ningu%26eacute%3Bm+entre%2C%26nbsp%3B%3Cstrong%3Eessa+porra+VAI+funcionar+e+VAI+ter+conte%26uacute%3Bdo.%3C%2Fstrong%3E%26nbsp%3B%3C%2Fp%3E%0D%0A');
//$repl= str_replace("<a", "<a target=\"blank\" ",'<body><p>Sempre fui inseguro em&nbsp;"achar que sei" algo. Saber como o bagulho funciona na teoria mas nunca ter posto em prática. Isso se aplica a estrutura que você vê (e a que não vê) aqui. Sempre achei interessante desenvolvimento pra web, embora nunca tenha tido muita experiência, umas duas matérias na faculdade que o professor levava nas coxas, um <a href="http://www.jsdb.com.br">site</a> ou <a href="http://www.ghmoveisplanejados.com.br">outro</a> pro comércio em geral aqui <s>do vilarejo</s>&nbsp;da <a href="https://pt.wikipedia.org/wiki/Rio_do_Oeste">cidade</a>&nbsp;e alguns formulários e&nbsp;relatórios lá pro <a href="http://frigorificoelgolli.com.br">frigorífico no qual eu trabalhava</a>&nbsp;em PHP.&nbsp;Na verdade, quando comecei no frigorífico, <em>só sabia que queria algo relacionado a tecnologia</em> pra fazer depois do ensino médio, foi ali, quebrando um galho entre formatar um computador e trocar a senha de algum roteador, sem saber direito que era o NetBeans e sem&nbsp;saber pra onde eu mandava o fonte quando clicava em "fazer upload" na aba Projetos&nbsp;que me interessei pelo funcionamento da coisa, fazendo tabelas simples em html mostrando resultados de consultas ainda mais simples no banco de dados da empresa, e apanhando pra fazer a conexão funcionar sem saber direito oque "<a href="http://o-que-significa.blogspot.com.br/2011/03/query.html#.WXUozIjyuUk">query</a>" queria dizer.&nbsp;&nbsp;Inclusive, já vinha recebendo sugestões de fazer Engenharia da Computação na Udesc de Ibirama vindas de um dos meus tios - que até hoje é a minha&nbsp;referência máxima em relação a desenvolvimento, mesmo tendo conhecido e aprendido muito com vários outros programadores incrivelmente capazes na faculdade e no trabalho.<br>
//Acabei fazendo Sistemas de Informação na Unidavi,&nbsp;<s>quase a mesma coisa,</s>&nbsp;mas &nbsp;é uma decisão da qual eu não me arrependo, exceto talvez quando <s>penso que vou morrer pobre</s>&nbsp;vejo outros programadores trocando seus sistemas homologados depois de meses(se não anos) de suor árduo por vale-transporte, tal qual uma criança da periferia vendendo&nbsp;pão com mortadela na saída da escola, aceitando qualquer papel-moeda paralelo. Em compensação,&nbsp;vejo outros corrigindo/ atualizando/ incrementando fontes "prontos" e tendo sucesso com bem menos trabalho, além das&nbsp;<a href="https://pt.wikipedia.org/wiki/Vale_do_Sil%C3%ADcio">Startups do Vale</a>, fonte de inspiração pra diversas áreas, pequenas empresas inovadoras que geralmente dão muito certo - a ponto de existir um termo específico para aquelas que valem mais de 1 bilhão, os&nbsp;<a href="http://g1.globo.com/mundo/blog/helio-gurovitz/post/os-unicornios-do-vale-do-silicio.html">Unicórnios</a>&nbsp;- como o <a href="https://www.uber.com/pt-BR/">Uber</a>, o&nbsp;<a href="https://www.spotify.com/br/">Spotify</a>,&nbsp;a gloriosa&nbsp;<a href="http://www.spacex.com/">Spacex</a>&nbsp;e várias <a href="https://en.wikipedia.org/wiki/List_of_unicorn_startup_companies">outras</a>.</p>
//
//<p>Enfim, decidi que queria aprender como essa porra funciona de cima a baixo. Se ficasse bom, talvez cobrasse uns R$50,00 no Mercado Livre pelo fonte completo e pelo banco de dados. Mas pra aprender direito, não poderia usar nenhum framework, api, projeto do GitHub, nada. Mal e porcamente usei <a href="http://materializecss.com/">Materialize</a>&nbsp;pro front-end, na verdade, quase tudo aqui é baseado nos cards do Materialize, já sofri o suficiente com css puro na minha vida.&nbsp;</p>
//
//<p><img alt="YES. REALLY AWESOME." src="http://i.imgur.com/NOVS4yO.jpg" ></p>
//
//<p>Como imaginei, não houveram grandes dificuldades além da paginação e das tags.<br>
//As tags pra cada post. Uma relacão infernal. Eu tentei fazer uma procedure no MySQL, que iria verificar a existência de cada uma delas no banco, se ela já não estivesse lá, seria incluída, e depois, verificar se a relação dela com o post existe entre as relações no banco, se não, relacionaria ambos. Teria feito isso com facilidade em SQLServer ou Firebird, mas o MySQL não presta, desculpe. Por mais que copiasse a sintaxe de uma procedure pronta que diz "Olá, mundo!" da internet, meu&nbsp;<a href="https://pt.wikipedia.org/wiki/PhpMyAdmin">PhpMyAdmin</a>&nbsp;retornava erro logo após o primeiro BEGIN. Pensei "ah, foda-se, faço no php mesmo em 10 min ta pronto.", e assim se fez.&nbsp;Talvez um dia eu consiga ( quando tudo parecer em paz, isso vai irromper na minha mente, tal qual uma baleia jubarte subindo como um torpedo gigante das profundezas das fossas marianas com uma lula colossal na boca&nbsp;atingindo um barco pesqueiro,&nbsp;e então eu vou precisar voltar e dar jeito nisso) mas até me tornar <a href="https://www.significados.com.br/phd/">PhD</a>&nbsp;em algo, tenho bastante coisa pra me ocupar. Então provavelmente vai ficar assim. Aplicação pequena, função pequena, não vai dar problema.</p>
//
//<p><img alt="MySQL in a nutshell" src="http://i.imgur.com/KAZaExh.png"></p>
//
//<p>Após popular um banco de dados com cerca de 300 testes, creio ter conseguido uma estrutura interessante, no mínimo&nbsp;<em>utilizável.&nbsp;</em>E qual melhor maneira de testar algo se não na prática?&nbsp;<br>
//De início, temos uma interface pra inserir um post novo, uma página pra visualizar um post específico, uma página inicial que mostra os mais recentes, um sistema de paginação simples, cadastro de tags, autores, posts, imagens... E algumas outras coisas.&nbsp;Essas coisas simples e indispensáveis, tem muita coisa que quero&nbsp;incluir ainda. Pretendo largar isso na mão de mais alguém, algum leigo de preferência, pra testar de maneira mais efetiva, evitando o <a href="http://studylatenights.blogspot.com.br/2017/06/abordagem-de-teste-sobre-inducao-e.html">caminho feliz</a>.&nbsp;</p>
//
//<p><span style="font-size:18px"><em>"Mas por que um blog?"</em></span></p>
//
//<p>Não sabia exatamente o que desenvolver. Simples assim. Fora que sempre me interessei pela linguagem cronista muitas vezes usada. Um belo exemplo, é o&nbsp;<a href="http://twitter.com/izzynobre">Izzy Nobre</a>&nbsp;e &nbsp;seu site&nbsp;<a href="http://hbdia.com/">Hoje é um bom dia</a>, que acompanho faz anos.</p>
//
//<p><img alt="Hoje é um bom dia" src="http://i.imgur.com/jgZuwDx.png"></p>
//
//<p>Se considerar que posso postar oque der na telha, perfeito! Conteúdo vai ter, mais autores também, mesmo que ninguém entre,&nbsp;<strong>essa porra VAI funcionar e VAI ter conteúdo.</strong>&nbsp;</p>');
//
//echo $repl.'<br>';
//
//echo urlencode($repl);
//print_r (parse_url('ESTÁ VIVO!'));
//echo urldecode('img%2Fprofiles%2Fautor1.jpg');

logout();