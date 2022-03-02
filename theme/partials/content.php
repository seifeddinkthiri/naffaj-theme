<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package naffaj
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="mb-8">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-2xl font-bold mt-12 mb-2">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-2xl font-bold mt-16 mb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div>
				<?php
				naffaj_posted_on();
				naffaj_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php naffaj_post_thumbnail(); ?>

	<div class="entry-content leading-8">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'أكمل القراءة<span> "%s"</span>', 'naffaj' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'naffaj' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer>
		<?php naffaj_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
