<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package naffaj
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			naffaj_posted_on();
			naffaj_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php naffaj_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php naffaj_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
