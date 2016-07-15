<?php
get_header(); ?>

    <div class="wrapper" id="wrapper-index">
       
	   <div id="content" class="container">
            <h2 class="entry-title">Notícias</h2>

            <div class="row">

           
    	       <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                   
                     <main id="main" class="site-main" role="main">
                    
                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'loop-templates/content', get_post_format() );
                                ?>

                        <?php endwhile; ?>
                        
                        <?php understrap_paging_nav(); ?>
                        
                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        
                    <?php endif; ?>
                        
                    </main><!-- #main -->
                   
    	       </div><!-- #primary -->
        
            <?php get_sidebar(); ?>

            </div><!-- .row -->
           
       </div><!-- Container end -->
        
    </div><!-- Wrapper end -->

<?php get_footer(); ?>
