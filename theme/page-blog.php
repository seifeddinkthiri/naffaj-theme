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
    <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">المدونة</h2>
    <div class="w-12 h-2 bg-primary mx-auto mt-6 rounded-full"></div>
</section>


<main id="primary " class="2xl:container mx-auto mt-8">

    <div class="mt-16">

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 px-4">

			<?php
				$args = array(
					'post_type'=> 'posts',
					'areas'    => 'painting',
					'order'    => 'ASC'
				);

				$the_query = new WP_Query( $args );
				if (have_posts()){ // check if there's posts
					while(have_posts()){ // while throught posts
						the_post();
						get_template_part( 'partials/content', 'posts' );

					} // end while
				} // end if

			?>

			<div class="home-pagination mb-5 mt-3">
				<?php
				the_posts_pagination(array(
					'screen_reader_text' =>' ',
					'next_text'          =>'<i class="fas fa-angle-right"></i>' ,
					'prev_text'          =>'<i class="fas fa-angle-left"></i>'
				));
				?>
			</div>



        </div>
    </div>
</main>

<?php
//get_sidebar();
get_footer();
