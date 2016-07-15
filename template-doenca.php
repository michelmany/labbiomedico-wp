<?php 

/*
Template Name: Doenças
*/

get_header(); ?>

<div class="wrapper" id="page-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="content-area">

               <main id="main" class="site-main" role="main">

                    <?php $var = (isset($_GET['var'])) ? $_GET['var'] : 'A'; ?>
                    <div class="lista">
                        <ul class="text-sm-center">                          
                            <a href="<?php echo add_query_arg( array('var'=>'A') ) ?>"><li <?php if( $var == 'A' ) echo 'class="select"'; ?>>A</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'B') ) ?>"><li <?php if( $var == 'B' ) echo 'class="select"'; ?>>B</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'C') ) ?>"><li <?php if( $var == 'C' ) echo 'class="select"'; ?>>C</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'D') ) ?>"><li <?php if( $var == 'D' ) echo 'class="select"'; ?>>D</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'E') ) ?>"><li <?php if( $var == 'E' ) echo 'class="select"'; ?>>E</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'F') ) ?>"><li <?php if( $var == 'F' ) echo 'class="select"'; ?>>F</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'G') ) ?>"><li <?php if( $var == 'G' ) echo 'class="select"'; ?>>G</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'H') ) ?>"><li <?php if( $var == 'H' ) echo 'class="select"'; ?>>H</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'I') ) ?>"><li <?php if( $var == 'I' ) echo 'class="select"'; ?>>I</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'J') ) ?>"><li <?php if( $var == 'J' ) echo 'class="select"'; ?>>J</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'K') ) ?>"><li <?php if( $var == 'K' ) echo 'class="select"'; ?>>K</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'L') ) ?>"><li <?php if( $var == 'L' ) echo 'class="select"'; ?>>L</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'M') ) ?>"><li <?php if( $var == 'M' ) echo 'class="select"'; ?>>M</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'N') ) ?>"><li <?php if( $var == 'N' ) echo 'class="select"'; ?>>N</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'O') ) ?>"><li <?php if( $var == 'O' ) echo 'class="select"'; ?>>O</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'P') ) ?>"><li <?php if( $var == 'P' ) echo 'class="select"'; ?>>P</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'Q') ) ?>"><li <?php if( $var == 'Q' ) echo 'class="select"'; ?>>Q</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'R') ) ?>"><li <?php if( $var == 'R' ) echo 'class="select"'; ?>>R</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'S') ) ?>"><li <?php if( $var == 'S' ) echo 'class="select"'; ?>>S</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'T') ) ?>"><li <?php if( $var == 'T' ) echo 'class="select"'; ?>>T</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'U') ) ?>"><li <?php if( $var == 'U' ) echo 'class="select"'; ?>>U</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'V') ) ?>"><li <?php if( $var == 'V' ) echo 'class="select"'; ?>>V</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'W') ) ?>"><li <?php if( $var == 'W' ) echo 'class="select"'; ?>>W</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'X') ) ?>"><li <?php if( $var == 'X' ) echo 'class="select"'; ?>>X</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'Y') ) ?>"><li <?php if( $var == 'Y' ) echo 'class="select"'; ?>>Y</li></a>
                            <a href="<?php echo add_query_arg( array('var'=>'Z') ) ?>"><li <?php if( $var == 'Z' ) echo 'class="select"'; ?>>Z</li></a>
                        </ul>
                    </div>

                    <div class="clearfix"></div><br>

                    <div>
                        
                        <ul class="lista-exames">
                            <?php
                                
                                $letra = ( isset($_GET['var']) ) ? substr($_GET['var'],0,1) : 'A';
                                
                                $query = "
                                        SELECT      *
                                        FROM        $wpdb->posts
                                        WHERE       $wpdb->posts.post_title LIKE '{$letra}%'
                                        AND         $wpdb->posts.post_type = 'doenca'
                                        AND         $wpdb->posts.post_status = 'publish'
                                        ORDER BY    $wpdb->posts.post_title ASC
                                ";
                                $exames = $wpdb->get_results($query);
                                
                            
                                /*$exames = new WP_query( array('post_type'=>'exame', 'post_status'=>'publish', 'orderby'=>'name', 'order'=>'ASC') );*/
                                // The Loop
                                /*if( $exames->have_posts() )while ( $exames->have_posts() ) : $exames->the_post(); $custom = get_post_custom();*/
                                if( count($exames)>0 ) foreach ( $exames as $exame ) :
                            ?>
                            
                            <li>
                                <a href="<?php echo get_permalink($exame->ID); ?>"><?php echo $exame->post_title; ?></a>
                            </li>
                            
                            
                            <?php 
                                endforeach;
                                else echo '<p>Nenhuma doença cadastrada começando por <i>"'. $_GET['var'] .'"</i></p>';
                            ?>
                        </ul>                      

                    </div>

                </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->



<?php get_footer(); ?>