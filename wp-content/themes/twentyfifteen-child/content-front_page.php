<?php
/**
 * The template used for displaying front-page content
 *
 * @package WordPress
<<<<<<< HEAD
 * @subpackage Twenty_Fifteen_Child
=======
 * @subpackage Twenty_Fifteen
>>>>>>> e20c142dd07548bfd84524916946a32b36f6b337
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

<<<<<<< HEAD
		<a href="http://localhost:35555/home/" class="frontPageEnter">Enter</a>
=======
		<a href="http://localhost:51391/home/" class="frontPageEnter">Enter</a>
>>>>>>> e20c142dd07548bfd84524916946a32b36f6b337
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
