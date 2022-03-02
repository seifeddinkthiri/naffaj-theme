<!-- Section: Design Block -->
<article class="mb-32 text-gray-800">


		<?php
	  		if (has_post_thumbnail()){
        		the_post_thumbnail('',array('class' => 'w-full shadow-lg rounded-lg mb-6 img-thumbnail', 'loading' => 'lazy')) ;
      		} else {
   		?>
			<img class="w-full shadow-lg rounded-lg mb-6 img-thumbnail"  src="<?php echo get_template_directory_uri() ?>/img/no-thumbnail.png" alt="" loading="lazy">
		<?php
			}
      	?>


	<div class="flex items-center mb-6">

		<img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-full ml-2 h-8"
                        alt="" loading="lazy" />

		<div>
			<span> نشر <u><?php the_time('F j, Y') ?></u> بواسطة </span>
			<a href="#!" class="font-medium">أحمد جمال</a>
		</div>
	</div>

	<a  href="<?php the_permalink() ?>"  class="font-bold text-xl mb-6"><?php the_title() ?></a>

	<p>
		<?php echo the_excerpt() ?>
	</p>
</article>
