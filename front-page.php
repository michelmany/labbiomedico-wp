<?php get_header(); ?>

<div class="wrapper" id="page-wrapper">

        <div class="container">

            <section class="row top-page">

                <div class="col-md-8 col-xs-12">
                    <section id="slider">
                        <?php if ( function_exists( 'easingslider' ) ) { easingslider( 35 ); } ?>
                    </section>
                </div>

                <div class="col-md-3 col-md-offset-1">
                    <div class="result-exames">
                        <h4>Resultado de exames</h4>
                        <a href="http://biomedico.ddns.net:9090/" target="_blank" title="Resultados de exames">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/exames.png" alt="Resultado de exames" class="img-fluid">
                        </a>
                    </div>

                    <div class="agendamento-coleta">
                        <h4>Pré-agendamento de coleta</h4>
                        <a href="#" title="Pré-agendamento de coleta">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/coleta.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </section>

            <section class="row atalhos">

                <div class="col-md-4">
                    <a href="<?php bloginfo('home'); ?>/menu-de-exames/">
                        <div class="icon1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/widget1.png" alt="">
                            <h5>Menu de exames</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?php bloginfo('home'); ?>/novos-exames/">
                        <div class="icon2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/widget2.png" alt="">
                            <h5>Novos exames</h5>
                        </div>                  
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="<?php bloginfo('home'); ?>/menu-de-doencas/">
                        <div class="icon3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/widget3.png" alt="">
                            <h5>Menu de doenças</h5>
                        </div>                  
                    </a>
                </div>

            </section>

            <section class="ultimas-noticias">
            
                <h4>Últimas Notícias</h4>

                <hr>


                <div class="space"></div>

                <?php $the_query = new WP_Query( 'posts_per_page=2' ); ?>
  
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                
                    <div class="col-md-6">
                        <div class="col-md-3 col-sm-12">
                            <?php echo get_the_post_thumbnail( $post->ID, 'large img-fluid' ); ?> 
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(__('(more…)')); ?></p>
                        </div>
                    </div>

                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
                                               
         





                



            </section>

        </div>

</div>

<?php get_footer(); ?>