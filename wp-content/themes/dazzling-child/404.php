<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package dazzling
 */

get_header(); ?>

	<div id="content" class="site-content container">
		<div id="primary" class="content-area col-sm-12 col-md-8">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<div class="page-image">
							<image id="doTerra-image" src="http://localhost/essential_oil_life/wp-content/uploads/2015/06/doTerra1.jpg" />
						</image>
						<h1 class="page-title"><?php _e( 'Something is wrong!', 'dazzling' ); ?></h1>
						<h2 class="page-sub-title"><?php _e( 'I bet we can find an oil for that!', 'dazzling' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'To help us find an oil, try using the search bar, a recent post, or return to the home screen.', 'dazzling' ); ?></p>

						<?php get_search_form(); ?>

						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>