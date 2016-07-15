<?php get_template_part('widget-templates/footerfull'); ?>

<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer.png" class="img-fluid">

<div class="wrapper" id="wrapper-footer">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="footer-top-img"></div>
                
                <footer id="colophon" class="site-footer" role="contentinfo">

                <div class="widgets-footer">
                    <div class="col-md-3">
                        <div class="logo-footer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.png" alt="Logo Laboratório Biomédico" class="img-fluid">
                        </div>
                        <p class="text-md-center">(21) 2507-2440</p>
                    </div>
                    <div class="col-md-3">
                        <div class="widget-item-footer">
                            <?php dynamic_sidebar('footer-01');?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget-item-footer">
                            <?php dynamic_sidebar('footer-02');?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Unidades</h4>
                        <ul>
                            <li><a href="<?php bloginfo('home');?>/unidades/">Centro - Lapa</a></li>
                            <li><a href="<?php bloginfo('home');?>/unidades/">Centro - Castelo</a></li>
                            <li><a href="<?php bloginfo('home');?>/unidades/">Gamboa</a></li>
                            <li><a href="<?php bloginfo('home');?>/unidades/">Madureira</a></li>
                            <li><a href="<?php bloginfo('home');?>/unidades/">Niterói</a></li>
                        </ul>
                    </div>
                </div>

                    <div class="clearfix"></div>

                    <div class="site-info">
                        <p>2016 © Laboratório Biomédico LTDA - Desenvolvido pela <a href="http://www.nitdesign.com.br" target="_blank">NITDESIGN</a></p>
                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->
        
    </div><!-- container end -->
    
</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</div><!-- quadro end -->

</body>

</html>
