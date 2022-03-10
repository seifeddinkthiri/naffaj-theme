<!-- Section: Design Block -->
<!-- <article class="mb-32 text-gray-800">


    <?php
	  		if (has_post_thumbnail()){
        		the_post_thumbnail('',array('class' => 'w-full shadow-lg rounded-lg mb-6 img-thumbnail', 'loading' => 'lazy')) ;
      		} else {
   		?>
    <img class="w-full shadow-lg rounded-lg mb-6 img-thumbnail"
        src="<?php echo get_template_directory_uri() ?>/img/no-thumbnail.png" alt="" loading="lazy">
    <?php
			}
      	?>


    <div class="flex items-center mb-6">

        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-full ml-2 h-8" alt=""
            loading="lazy" />

        <div>
            <span> نشر <u><?php the_time('F j, Y') ?></u> بواسطة </span>
            <a href="#!" class="font-medium">أحمد جمال</a>
        </div>
    </div>

    <a href="<?php the_permalink() ?>" class="font-bold text-xl mb-6"><?php the_title() ?></a>

    <p>
        <?php echo the_excerpt() ?>
    </p>
</article> -->


<article class="bg-white rounded-lg border border-gray-200 ">

    <div class="flex flex-col items-center pb-10 pt-16 relative">
		<?php
			$imgurl = get_field('logo');
		?>
        <img class="mb-3 w-24 h-24 rounded-full absolute -top-12" src="<?php echo $imgurl['url']; ?>" alt="university logo">


        <h5 class="mb-1 text-xl font-medium text-gray-900 mt-2"><?php the_title() ?></h5>
        <span class="text-sm text-gray-500 "><?php the_field( "en_name" );?></span>
		<div class="mt-6 px-4 w-full py-6 border-t border-gray-100">
			<div class="grid grid-cols-2 text-xs gap-8">
				<div class="">
					<h4 class="font-semibold text-gray-600 flex">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
						</svg>
						<Span class="mr-2">المكان</Span>
					</h4>
					<p class="mt-2 mr-7"><?php the_field( "location" );?></p>
				</div>

				<div>
					<h4 class="font-semibold text-gray-600 flex">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
						</svg>
						<Span class="mr-2">التأسيس</Span>
					</h4>
					<p class="mt-2 mr-7"><?php the_field( "date_of_establishment" );?></p>
				</div>
			</div>

			<div class="grid grid-cols-2 text-xs gap-8 mt-6">
				<div class="">
					<h4 class="font-semibold text-gray-600 flex">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
						</svg>
						<Span class="mr-2">النوع</Span>
					</h4>
					<p class="mt-2 mr-7"><?php the_field( "type" );?></p>
				</div>

				<div>
					<h4 class="font-semibold text-gray-600 flex">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor">
							<path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
							<path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
						</svg>
						<Span class="mr-2">عدد المشاهدات</Span>
					</h4>
					<p class="mt-2 mr-7"><?php echo wpp_get_views($post->ID); ?></p>
				</div>
			</div>
		</div>
		<div class="px-8 mt-4 w-full box-border">
            <a href="<?php the_permalink() ?>"
                class="block py-3 px-6 text-xs min-w-full font-medium text-center text-primary bg-secondary rounded-lg hover:bg-primary hover:text-white focus:ring-4 focus:ring-blue-300 ">عرض المزيد</a>

		</div>
    </div>
</article>



