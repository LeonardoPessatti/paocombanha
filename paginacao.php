<?php 
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 */


$numPosts = mysqli_fetch_array(mysqli_query($link, 'SELECT NUMPOSTS FROM vw_count_posts_ativos'));
echo $numPosts[NUMPOSTS].'<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>'.$limit;





    // Organização em páginas
    ++$offset;
    ++$offset;
    //A tabela é utilizada afim de ajudar na organização dos elementos
?>
<div id="paginacao" class="row">
    <table class="col s12 m8 l7 offset-l3 offset-s0 offset-m2">
        <tr> <td id="lefttd" class="col s4 m3 l2"><h2><a href="index.php?pagina=<?php $offset?>">Anterior </a></h2></td>'
            
            <td style="padding: 0;"><ul class="pagination" class="col s4 m3 l3 "  style="height: 130%;">
                    <?php
//                    Código que define como o Materialize deve se portar
//                    Os indicadores se portam de maneira diferente caso a página seja menor que 3
                    
                    if ($pagina < 3) {
//                        Serão 5 indicadores de páginas alterando, devemos impedir que páginas fantasma como 0 ou -1 apareçam
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i==1){
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php><h4>$i</h4></a></li>";
                            }
//                    O indicador altera a sua classe para 'active' se estiver mostrando a página atual
                            elseif ($i == $pagina) {
                                echo "<li style=\"height: 130%;\" class=active><a href=index.php?pagina=".$offset=+$i."><h4>$i</h4></a></li>";
                            } else {
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php?pagina=".$offset=+$i."><h4>$i</h4></a></li>";
                            }
                        }
                    }
                    else  {
//                        Caso estejamos além da página 3, estaremos mostrando 2 páginas a frente e 2 atrás da atual
//                            echo $i*.' <total i> '.$i.' limit> '.$limit;
                        for ($i = $pagina-2; $i <= $pagina+2; $i++) {
                            if($i*$limit<=$numPosts){
                            if ($i==1){
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php><h4>$i</h4></a></li>";
                            }
                            elseif ($i == $pagina) {
                                echo "<li style=\"height: 130%;\" class=active><a href=index.php?pagina=".$offset=+$i."><h4>$i</h4></a></li>";
                            } else{
                               // echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php?pagina=".$offset=+$i."><h4>$i</h4></a></li>";
                            }
                            }
                        }
                    }
                    
                    ?>
                </ul></td>

            <?php
                if ($pagina > 2) {
                    echo ('<td id="righttd" class="col s4 m3 l2 offset-l3 offset-s0 offset-m2"><h2><a href="index.php?pagina='.--$pagina .'"> Próximo</a></h2></td>');
                }
                elseif($pagina == 2) {
                    echo ('<td id="righttd" class="col s4 m3 l2"><h2><a href="index.php"> Próximo</a></h2></td>');
                }
                unset($offset);
            ?>
        </tr>
    </table>
    <br><br>
</div>
