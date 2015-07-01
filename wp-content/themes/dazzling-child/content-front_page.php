<?php
/**
 * The template used for displaying page content on the front page
 * @package dazzling_child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<header class="entry-header page-header">
		<h1 class="front-title"> <?php the_title(); ?> </h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<ul class="monthly-specials">
				
				<?php 
					$image_1 = get_field('image_1');
					$image_1_link = get_field('image_1_link');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
					$image_4 = get_field('image_4');
					$size = 'small';

				?>

				<li class="individual-monthly-specials" id="image-1"?>
					<figure>
						<?php if ($image_1 == true) { ?>
							<?php echo '<a href="<?php echo $image_1_link; ?>" target="_blank">' . wp_get_attachment_image($image_1, $size) . '</a>' ;
						} ?>
					</figure>
				</li>

				<li class="individual-monthly-specials" id="image-2"?>
					<figure>
						<?php if ($image_2 == true) { ?>
							<?php echo '<a href="<?php echo $image_2_link; ?>" target="_blank">' . wp_get_attachment_image($image_2, $size) . '</a>' ;
						} ?>
					</figure>
				</li>

				<li class="individual-monthly-specials" id="image-3"?>
					<figure>
						<?php if ($image_3 == true) { ?>
							<?php echo '<a href="<?php echo $image_3_link; ?>" target="_blank">' . wp_get_attachment_image($image_3, $size) . '</a>' ;
						} ?>
					</figure>
				</li>

				<li class="individual-monthly-specials" id="image-4"?>
					<figure>
						<?php if ($image_4 == true) { ?>
							<?php echo '<a href="<?php echo $image_4_link; ?>" target="_blank">' . wp_get_attachment_image($image_4, $size) . '</a>' ;
						} ?>
					</figure>
				</li>
		
		</ul><!--.monthly-specials-->
	</div><!-- .entry-content -->
</article><!-- #post-## -->