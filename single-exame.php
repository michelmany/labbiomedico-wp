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
			?>
			
				<?php echo '<h2 class="entry-title">'. get_the_title() .'</h2>' ?>
				
				<p><strong>Código: </strong> <?php echo $custom['codigo'][0]; ?></p>
				<p><strong>Material: </strong> <?php echo $custom['material'][0]; ?></p>
				<p><strong>Sinônimo: </strong> <?php echo $custom['sinonimo'][0]; ?></p>
				<p><strong>Volume: </strong> <?php echo $custom['volume'][0]; ?></p>
				<p><strong>Método: </strong> <?php echo $custom['metodo'][0]; ?></p>
				<p><strong>Volume Lab: </strong> <?php echo $custom['volume-lab'][0]; ?></p>
				<p><strong>Rotina: </strong> <?php echo $custom['rotina'][0]; ?></p>
				<p><strong>Resultado: </strong> <?php echo $custom['resultado'][0]; ?></p>
				<p><strong>Temperatura: </strong> <?php echo $custom['temperatura'][0]; ?></p>
				<p><strong>Coleta: </strong> <?php echo $custom['coleta'][0]; ?></p>
				<p><strong>Código SUS: </strong> <?php echo $custom['codigo-sus'][0]; ?></p>
				<p><strong>Código CBHPM: </strong> <?php echo $custom['codigo-cbhpm'][0]; ?></p>
				<p><strong>Interpretação: </strong> <?php echo get_the_content(); ?></p>
				<p><strong>Referência: </strong> <?php echo $custom['referencia'][0]; ?></p>
			<?php 
				endwhile;
				endif;
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