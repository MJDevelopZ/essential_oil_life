<?php
/**
 * The template for displaying the front page
 *
 * @package WordPress
<<<<<<< HEAD
 * @subpackage Twenty_Fifteen_Child
=======
 * @subpackage Twenty_Fifteen
>>>>>>> e20c142dd07548bfd84524916946a32b36f6b337
 * @since Twenty Fifteen 1.0
 */

get_header('secondary'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content-front_page' );

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(''); ?>
