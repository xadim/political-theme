<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="separatorPost"></div>
	<div class="row">
		<div class="container">
			  <div class="col-lg-12">    
			  <div class="post">	
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
//					$time = the_time();
					the_title( '<h2>', '</h2>' );
					the_time('<\d\i\v \c\l\a\s\s\="\d\a\t\e\b\l\o\c">F jS, Y g:i a </\d\i\v>' );
					//the_time() 
					if ( has_post_thumbnail() ) {
						echo '<img src="'.the_post_thumbnail().'" class="img-responsive">';
					}
					echo "<div class='excerpt'>";
						the_excerpt( );
					echo '</div>';
					the_content();
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

						// Previous/next post navigation.
						twentyfourteen_post_nav();

						// If comments are open or we have at least one comment, load up the comment template.
						//if ( comments_open() || get_comments_number() ) {
						//	comments_template();
						//}
					endwhile;
				?>
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
