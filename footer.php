<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customTheme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="ct-flex footer-container">
			<div class="ct-20">
				<ul>
					<li><strong>Footer Header 1</strong></li>
					<li>Footer item 1</li>
					<li>Footer item 2</li>
					<li>Footer item 3</li>
				</ul>
			</div>
			<div class="ct-20">	
				<ul>
					<li><strong>Footer Header 2</strong></li>
					<li>Footer item 1</li>
					<li>Footer item 2</li>
					<li>Footer item 3</li>
				</ul>
			</div>
			<div class="ct-20">	
				<ul>
					<li><strong>Footer Header 3</strong></li>
					<li>Footer item 1</li>
					<li>Footer item 2</li>
					<li>Footer item 3</li>
				</ul>
			</div>
			<div class="ct-20">	
				<ul>
					<li><strong>Footer Header 4</strong></li>
					<li>Footer item 1</li>
					<li>Footer item 2</li>
					<li>Footer item 3</li>
				</ul>
			</div>
			<div class="ct-20">	
				<p><?php echo primary_details()['business_name']; ?><br>
				<?php echo primary_details()['street_address']; ?>,<br>
				<?php echo primary_details()['suburb']; ?> <?php echo primary_details()['state']; ?> <?php echo primary_details()['postcode']; ?><br>
				Phone: <?php echo primary_details()['phone']; ?>
				</p>
			</div>
		</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'customtheme' ) ); ?>">

			</a>
			<span class="sep">© Copyright <?php echo date('Y'); ?>  | Custom Theme By <a href="http://benthomasgill.com.au">Ben Thomas-Gill</a></span>
		</div><!-- .site-info -->

		<!--/ Start Local Business Schema /-->
		<div itemscope itemtype="https://schema.org/LocalBusiness">
			<?php get_template_part('inc/footer/business-details'); ?> 
		</div>
		<!--/ End Local Business Schema /-->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
