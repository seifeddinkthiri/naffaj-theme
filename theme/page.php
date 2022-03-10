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


			endwhile; // End of the loop.
			?>


		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
