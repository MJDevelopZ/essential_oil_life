<?php
/**
 * The template for displaying content on the home page.
 *
 *
 * @package dazzling child theme
 */

get_header(); ?>
<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout', 'no entry' ); ?>">
		<main id="main" class="site-main" role="main">

			<!--Alter the query to show the most recent 5 blog posts-->
			<?php query_posts('posts_per_page=5'); ?>

			<?php
			//Start the loop.
			while ( have_posts() ) : the_post();

				//Include the home page content template.
				get_template_part( 'content-page_home');

			//End the loop.
			endwhile;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
