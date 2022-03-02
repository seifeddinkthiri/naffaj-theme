<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package naffaj
 */

get_header();
?>


	<main id="primary" class="mb-16" style="background: url('<?php echo get_template_directory_uri() . '/assets/bg.png'  ?>' ) no-repeat; background-size:100% 100%; padding:25px">
		<div class="max-w-5xl mx-auto ">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'partials/content', get_post_type() );
				?>

				<div class="mb-8 flex-row md:flex-col gap-4">
					<?php
					the_post_navigation(
						array(
							'prev_text' => '<div class=" p-4 shadow-md  mt-4"><span >' . esc_html__( 'السابق: ', 'naffaj' ) . '</span> <span class="font-semibold mr-2">%title</span></div>',
							'next_text' => '<div class=" p-4 shadow-md mt-4"><span >' . esc_html__( 'التالي: ', 'naffaj' ) . '</span> <span class="font-semibold mr-2">%title</span></div>',
						)
					);
					?>
				</div>

				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
