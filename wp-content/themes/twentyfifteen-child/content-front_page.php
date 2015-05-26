<?php
/**
 * The template used for displaying front-page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen_Child
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<div class="entry-content">
		<?php the_content() ?>

		<a href="http://localhost:35555/home/" class="frontPageEnter">Enter</a>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
