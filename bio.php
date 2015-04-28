<?php
/*
Template Name: Bio
*/

/**
 * MARY KATE CARY
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://MARYKATECARY.com
 *
 * @package WordPress
 * @subpackage MARYKATECARY
 * @since MARY KATE CARY
 */

get_header(); 
?>

    <div class="row bio_page">
		<?php

		query_posts('page_id=480');

		if ( have_posts() ) : ?>

		<?php  $x=0; while ( have_posts() ) : the_post(); ?>
			
<div class="">
    <div class="inner">
        <div class="row">
            <div class="col-lg-6 pro-portrait">
                <img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/mary-kate-cary-professional.png">
            </div>
            <div class="col-lg-6">
                <div class="intro-message">
                  <div class="espace"></div>
              <h2>
                <?php the_title(); ?>
              </h2>
              <p class="leads">
                <?php the_content(); ?>
              </p>
                  
                </div>
            </div>
            <div class="col-lg-6 mobile-portrait">
                <img class="img-responsive" src="http://marykatecary.com/wp-content/themes/MARYKATECARY/img/mary-kate-cary-professional.png" alt="Female speechwritter">
            </div>
        </div>

    </div>

</div>	
			<?php 
				$x++;
				endwhile; 
			?>
			<?php endif; ?>
	</div>
<?php
get_footer();
?>