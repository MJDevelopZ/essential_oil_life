<?php
/**
 * The template used for displaying page content on the front page
 * @package dazzling_child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
			<div class="frontPageEnter">
				<a href="http://localhost:35555/home">Enter</a>
			</div><!--.frontPageEnter -->
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->
