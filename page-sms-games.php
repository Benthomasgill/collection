<?php

/**
 * Template Name: sms-games
 *
 * @package WordPress
 * @subpackage Default_Theme
 */


get_header();


?>

	<main id="primary" class="site-main container">
	<?php get_template_part('inc/hero-images'); ?>	

	<div class="body-content">


		<!--/ Start Content /-->
		<div role="main" itemprop="text">
		<div class="ct-flex">
		<?php
			$args = array( 'post_type' => 'sms_games', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			$totalPrice = 0; 
			
			while ( $loop->have_posts() ) : $loop->the_post();
			the_title();
			$game = get_field('game_details');


			echo '<div class="entry-content">';
				the_content(); ?>
				<div class="ct-1-4">
					<p><?php echo $game['value']; ?></p>
					<img alt="<?php echo the_title() ?>" src="<?php echo $game['cover_art'] ?>" />
				</div>

				<?php
			echo '</div>';

			$totalPrice += floatval($game['value']);
			endwhile; 			?>
			</div>
			<p><?php echo $totalPrice ?></p>



		</div>	


	</div>			
	</main><!-- #main -->

<?php
get_footer();
