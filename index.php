<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content">


			<div id="content" class="row clearfix" role="main">
				<div class="col span_8_of_12">

					<?php if ( have_posts() ) : ?>
					
						<?php // Start the Loop ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); // Include the Post-Format-specific template for the content ?>
						<?php endwhile; ?>
					
						<?php quark_content_nav( 'nav-below' ); ?>
					
					<?php else : ?>
					
						<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

					<?php endif; // end have_posts() check ?>

				</div> <!-- /.col.span_8_of_12 -->
				<?php get_sidebar(); ?>
			</div> <!-- /#content.row -->
	
		</div> <!-- /#primary.site-content -->

<?php get_footer(); ?>