<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customTheme
 */

get_header();


?>

	<main id="primary" class="site-main container">
	<?php get_template_part('inc/hero-images'); ?>	

	<div class="body-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!--/ Start Content /-->
		<div role="main" itemprop="text">
			<?php 
			do_action( 'before_the_content' );
			the_content();
			do_action( 'after_the_content' ); 
				
			
			/* Blog
                if(is_page('blog')) {
                    get_template_part('inc/blog');
                }
            */
			
			
			?>
		</div>	

	<?php endwhile; endif; ?>
	</div>			
	</main><!-- #main -->

<?php
get_footer();
