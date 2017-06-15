<?php
/**
 * Código criado e pertencente exclusivamente a Leonardo Pessatti.
 * www.facebook.com/leopessatti
 * Created on : 29/03/2017, 20:48:08
 * Author: Leonardo Pessatti <lpessatti@gmail.com>
 */

/**
 * Definição de quantos posts ativos temos para serem considerados
 */
$numPosts = mysqli_fetch_array(mysqli_query($link, 'SELECT NUMPOSTS FROM vw_count_posts_ativos'));

/**
 * Definição de quantas páginas serão exibidas, 5 por padrão.
 */
$pg_visiveis=5;

// Organização em páginas
$offset + 2;
//A tabela é utilizada afim de ajudar na organização dos elementos
?>
<div id="paginacao" class="row">
    <table class="col s12 m8 l7 offset-l3 offset-s0 offset-m2">
        <tr> <td id="lefttd" class="col s4 m3 l2"><h2><a href="index.php?pagina=<?php $offset ?>">Anterior </a></h2></td>'
            <td style="padding: 0;"><ul class="pagination" class="col s4 m3 l3 "  style="height: 130%;">
                <?php
                /**
                 * Código que define como o Materialize deve se portar em relação a paginação.
                 * 
                 * Considerando que o mostrador indicará 2 páginas atrás, a atual e 2 a frente,
                 * incluindo um botão para retroceder e um para avançar.
                 * 
                 * EX:    POSTS RECENTES     2  3  |4|  5  6      POSTS ANTIGOS
                 * Considerando que estamos na página 4.
                 * 
                 */
                
                /**
                 * Os indicadores se portam de maneira diferente caso a página seja menor que 3. 
                 */
                if ($pagina <= 3) {
                    
                    for ($i = 1; $i <= $pg_visiveis; $i++) {
                        /**
                         * Devemos impedir que páginas fantasma
                         * que já ultrapassaram o número de resultados apareçam
                         */
                        if ($i <= ($numPosts[NUMPOSTS] / $limit) + 1) {
                            
                            /**
                             *  Devemos impedir que páginas fantasma 
                             * como 0 ou -1 apareçam
                             */
                            if ($i == 1) {
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php><h4>$i</h4></a></li>";
                            }
                            
                            /**
                             * O indicador altera a sua classe para 'active' se estiver mostrando a página atual
                             */
                            elseif ($i == $pagina) {
                                echo "<li style=\"height: 130%;\" class=active><a href=index.php?pagina=" . $offset = +$i . "><h4>$i</h4></a></li>";
                            } else {
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php?pagina=" . $offset = +$i . "><h4>$i</h4></a></li>";
                            }
                        }
                    }
                } 
                /**
                 * Os indicadores se portam de maneira diferente caso a página seja maior que 3. 
                 */
                else {
                    /**
                     * Caso estejamos além da página 3, estaremos mostrando 2 páginas a frente e 2 atrás da atual
                     */
                    for ($i = $pagina - floor(($pg_visiveis)/2); $i <= $pagina + floor(($pg_visiveis)/2); $i++) {
                        /**
                         * Devemos impedir que páginas fantasmas 
                         * que já ultrapassaram o número de resultados apareçam
                         */
                        if ($i <= ($numPosts[NUMPOSTS] / $limit) + 1) {
                            /**
                             *  Devemos impedir que páginas fantasma 
                             * como 0 ou -1 apareçam
                             */
                            if ($i == 1) {
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php><h4>$i</h4></a></li>";
                            } 
                            /**
                             * O indicador altera a sua classe para 'active' se estiver mostrando a página atual
                             */
                            elseif ($i == $pagina) {
                                echo "<li style=\"height: 130%;\" class=active><a href=index.php?pagina=" . $offset = +$i . "><h4>$i</h4></a></li>";
                            } else {
                                echo "<li style=\"height: 130%;\" class=waves-effect><a href=index.php?pagina=" . $offset = +$i . "><h4>$i</h4></a></li>";
                            }
                        }
                    }
                }
                ?>
                </ul></td>

                    <?php
                    if ($pagina > 2) {
                        echo ('<td id="righttd" class="col s4 m3 l2 offset-l3 offset-s0 offset-m2"><h2><a href="index.php?pagina=' . --$pagina . '"> Próximo</a></h2></td>');
                    } elseif ($pagina == 2) {
                        echo ('<td id="righttd" class="col s4 m3 l2"><h2><a href="index.php"> Próximo</a></h2></td>');
                    }
                    unset($offset);
                    ?>
        </tr>
    </table>
    <br><br>
</div>
