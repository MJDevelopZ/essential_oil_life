<?php
/**
 * Template for displaying the content on the contact us page. 
 *@package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">

		<?php the_post_thumbnail( 'dazzling-featured', array( 'class' => 'thumbnail' )); ?>

		<h1 class="entry-title "><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<hr class="section-divider">
	
</article><!-- #post-## -->
