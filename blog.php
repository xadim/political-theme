<?php
/*
Template Name: Blog
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

<div class="separator"></div>
<section>
    <div class="row item">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		query_posts(array(
			'post_type'      => 'post', // You can add a custom post type if you like
			'paged'          => $paged,
			'posts_per_page' => 6,
			'category' => 2
		));

		if ( have_posts() ) : ?>

		<?php  $x=0; while ( have_posts() ) : the_post(); ?>
			
				<div class="content-section-<?php if ($x % 2){echo 'b';}else{echo'a';}?>">
     				<div class="container">
					<div class="col-lg-4 col-sm-6">
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('medium');
						}
					?>
					</div>
		            <div class="col-lg-8 col-sm-6 item-text">  
		            	<div class="item-text-in">  
							<h2>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							<p class="leads">
								<?php the_excerpt(); ?>
							</p>
							<p class="learn-more"><div class="button"><a href="<?php the_permalink() ?>">Full article</a></div></p>
						</div>
					</div>
				</div>
			</div>	
			<?php 
				$x++;
				endwhile; 
			?>
			<div class="blog-pagination">
				<?php my_pagination(); ?>
			</div>
			<?php endif; ?>
	</div>
</section>
<?php
get_footer();
?>