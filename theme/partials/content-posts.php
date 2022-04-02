<!-- Section: Design Block -->
<article class="mb-12 text-gray-800">


		<?php
	  		if (has_post_thumbnail()){
        		the_post_thumbnail('',array('class' => 'w-full shadow-lg rounded-lg mb-6 img-thumbnail h-64 object-cover', 'loading' => 'lazy')) ;
      		} else {
   		?>
			<img class="w-full shadow-lg rounded-lg mb-6 img-thumbnail h-32 object-cover	"  src="<?php echo get_template_directory_uri() ?>/img/no-thumbnail.png" alt="" loading="lazy">
		<?php
			}
      	?>


	<div class="flex items-center mb-6">

		<div>
			<span> نشر في <u><?php the_time('F j, Y') ?></u>  </span>

		</div>
	</div>

	<a  href="<?php the_permalink() ?>"  class="font-bold text-xl mb-6"><?php the_title() ?></a>

	<p>
		<?php echo the_excerpt() ?>
	</p>
</article>
