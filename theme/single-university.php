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


<main id="primary" class="my-24 text-gray-800 max-w-screen-xl mx-auto">
    <div class=" flex lg:flex-row flex-col mb-16 relative gap-8">
        <div class="min-w-fit">
            <div class="flex gap-4 items-center">
                <img class="mb-3 w-24 h-24 rounded" src="<?php echo get_field('logo')['url']; ?>"
                    alt="<?php get_the_title() ?>">
                <div>
                    <h1 class="text-3xl font-bold"><?php the_title() ?></h1>
                    <p class="text-xl mt-4"><?php the_field('en_name') ?></p>
                </div>
            </div>


            <div class="mt-6 px-4 w-full py-6 border-t border-gray-100">
                <div class="grid grid-cols-2 text-xs gap-8">
                    <div class="">
                        <h4 class="font-semibold text-gray-600 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <Span class="mr-2">المكان</Span>
                        </h4>
                        <p class="mt-2 mr-7"><?php the_field( "location" );?></p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-gray-600 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <Span class="mr-2">التأسيس</Span>
                        </h4>
                        <p class="mt-2 mr-7"><?php the_field( "date_of_establishment" );?></p>
                    </div>
                </div>

                <div class="grid grid-cols-2 text-xs gap-8 mt-6">
                    <div class="">
                        <h4 class="font-semibold text-gray-600 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <Span class="mr-2">النوع</Span>
                        </h4>
                        <p class="mt-2 mr-7"><?php the_field( "type" );?></p>
                    </div>

                    <div>
                        <h4 class="font-semibold text-gray-600 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <Span class="mr-2">عدد المشاهدات</Span>
                        </h4>
                        <p class="mt-2 mr-7"><?php echo wpp_get_views($post->ID); ?></p>
                    </div>
                </div>
            </div>

        </div>

		<div class="leading-loose">
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
			?>
		</div>
    </div>

	<div>
		<?php
			$query = new WP_Query(array(
				'post_type' => 'university',
				'category__in' => wp_get_post_categories(get_the_ID()),
				'post__not_in' => array(get_the_ID()),
				'posts_per_page' => 3,
				'orderby' => 'date',
			));
			if ($query->have_posts()){
		?>
			<h3 class="text-xl mb-24"> جامعات مشابهة</h3>
		<?php } ?>
		<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-x-6 gap-y-16 px-4">

		<?php
			if ($query->have_posts()){ // check if there's posts
				while($query->have_posts()){ // while throught posts
					$query->the_post();
					get_template_part( 'partials/content', 'universities' );

				} // end while
			} // end if

		?>


	</div>

	</div>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
