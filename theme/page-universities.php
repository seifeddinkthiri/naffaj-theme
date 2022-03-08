<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package naffaj
 */

get_header();
?>

<section class="heading w-full text-center py-24">
    <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">الجامعات</h2>
    <div class="w-12 h-2 bg-primary mx-auto mt-6 rounded-full"></div>
</section>


<main id="primary " class="2xl:container mx-auto mt-8">

    <div class="mt-16">

        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-16 px-4">

			<?php
				$args = array(
					'post_type' => 'university',
				);
				$query = new WP_Query( $args );
				if ($query->have_posts()){ // check if there's posts
					while($query->have_posts()){ // while throught posts
						$query->the_post();
						get_template_part( 'partials/content', 'universities' );

					} // end while
				} // end if

			?>


        </div>

		<div class="home-pagination my-12 w-full text-center">
			<?php
				the_posts_pagination(array(
					'screen_reader_text' =>' ',
					'prev_text'          =>'<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
											</svg>' ,
					'next_text'          =>'<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
											</svg>' ,
				));
			?>
		</div>
    </div>
</main>

<?php
//get_sidebar();
get_footer();
