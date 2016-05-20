<?php 
/*
Template Name: Contato
*/
get_header(); ?>


<div class="wrapper" id="page-wrapper">

    <div  id="content" class="container">

        <div class="row">

            <div id="primary" class="col-md-8 content-area">

               <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                    <?php
                            // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

            </main><!-- #main -->

        </div><!-- #primary -->

        <div class="col-md-offset-1 col-md-3">
            <div class="contatos m-t-3">
                <h6 class="font-weight-bold">Sede administrativa</h6>
                <hr>
                <p>Rua do Riachuelo nº 43<br>
                Centro – Lapa, Rio de Janeiro – RJ.<br>
                Hospital da Ordem Terceira do Carmo <br>
                Tel.: (21) 2507-2440 / (21) 3861-8954<br><br>
                <small>Atendimento ambulatorial das 7:00 as 17:00 horas de segunda a sexta feira e sábado de 7:00 às 12:00 horas<br>
                Atendimento Emergencial durante 24 horas</small></p>

                <br>

                <h6 class="font-weight-bold">Filial</h6>
                <hr>
                <p>Icaraí, Niteroi – RJ.<br>
                Hospital Centrocardio<br>
                Tel.: (21) 2189-9160<br><br>
                <small>Atendimento de emergências e ambulatorial durante 24 horas</small></p>
            </div>
        </div>

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>


