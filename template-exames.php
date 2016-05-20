<?php 

/*
Template Name: Exames
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
                    <li <?php if( $var == 'A' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'A') ) ?>">A</a></li>
                    <li <?php if( $var == 'B' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'B') ) ?>">B</a></li>
                    <li <?php if( $var == 'C' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'C') ) ?>">C</a></li>
                    <li <?php if( $var == 'D' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'D') ) ?>">D</a></li>
                    <li <?php if( $var == 'E' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'E') ) ?>">E</a></li>
                    <li <?php if( $var == 'F' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'F') ) ?>">F</a></li>
                    <li <?php if( $var == 'G' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'G') ) ?>">G</a></li>
                    <li <?php if( $var == 'H' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'H') ) ?>">H</a></li>
                    <li <?php if( $var == 'I' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'I') ) ?>">I</a></li>
                    <li <?php if( $var == 'J' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'J') ) ?>">J</a></li>
                    <li <?php if( $var == 'K' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'K') ) ?>">K</a></li>
                    <li <?php if( $var == 'L' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'L') ) ?>">L</a></li>
                    <li <?php if( $var == 'M' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'M') ) ?>">M</a></li>
                    <li <?php if( $var == 'N' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'N') ) ?>">N</a></li>
                    <li <?php if( $var == 'O' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'O') ) ?>">O</a></li>
                    <li <?php if( $var == 'P' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'P') ) ?>">P</a></li>
                    <li <?php if( $var == 'Q' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'Q') ) ?>">Q</a></li>
                    <li <?php if( $var == 'R' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'R') ) ?>">R</a></li>
                    <li <?php if( $var == 'S' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'S') ) ?>">S</a></li>
                    <li <?php if( $var == 'T' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'T') ) ?>">T</a></li>
                    <li <?php if( $var == 'U' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'U') ) ?>">U</a></li>
                    <li <?php if( $var == 'V' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'V') ) ?>">V</a></li>
                    <li <?php if( $var == 'W' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'W') ) ?>">W</a></li>
                    <li <?php if( $var == 'X' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'X') ) ?>">X</a></li>
                    <li <?php if( $var == 'Y' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'Y') ) ?>">Y</a></li>
                    <li <?php if( $var == 'Z' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'Z') ) ?>">Z</a></li>
                    <li <?php if( $var == '1' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'1') ) ?>">1</a></li>
                    <li <?php if( $var == '2' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'2') ) ?>">2</a></li>
                    <li <?php if( $var == '3' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'3') ) ?>">3</a></li>
                    <li <?php if( $var == '5' ) echo 'class="select"'; ?>><a href="<?php echo add_query_arg( array('var'=>'5') ) ?>">5</a></li>
                </ul>
            </div>

            </main><!-- #main -->

        </div><!-- #primary -->

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->



<?php get_footer(); ?>