<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>', '<p>For more information on how to become a Wellness Advocate or to purchase the oils from this post please visit: <span id="web_link"><?php the_field('doterra_shop_link') ?>','</span></p></footer>' ); ?>
	<p class="entry_footer">For more information on how to become a Wellness Advocate or to purchase the oils from this post please visit: <span id="web_link"><?php the_field('doterra_store_link') ?></span></p>
</article><!-- #post-## -->
