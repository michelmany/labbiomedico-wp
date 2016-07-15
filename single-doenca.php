<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container">

        <div class="row">
        
            <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                
                <main id="main" class="site-main" role="main">


<div class="centralizador">
	
	<div class="conteudo">
		<div class="conteudo-exame fltleft">
	

			<?php
				if(have_posts()) : while(have_posts()) : the_post();
					$custom = get_post_custom();
			
					echo '<h2 class="entry-title">'. get_the_title() .'</h2>';
					the_content();
				
				endwhile; endif;
			?>
		</div>
	


		<div class="clr">&nbsp;</div>
	</div>
	
	<div class="margin-exame">
		<a href="javascript:history.go(-1)" class="voltar-exames">VOLTAR</a>
	</div>
	
</div>


                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <?php # get_template_part('sidebar'); ?>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>

