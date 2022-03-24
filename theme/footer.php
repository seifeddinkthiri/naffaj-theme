<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naffaj
 */

?>

<footer id="colophon">

</footer><!-- #colophon -->

<footer class="text-center bg-tertiary text-white" id="colophon">
<div class="bg-linear-pink-invert py-12 px-4">
            <div tabindex="0" aria-label="footer" class="focus:outline-none mx-auto container flex flex-col items-center justify-center">
                <div tabindex="0" aria-label="prodify logo" role="img">
					<img class="w-32" src="<?php echo get_template_directory_uri() . '/assets/white.png'  ?>" alt="logo">
                </div>
                <div class="text-white flex flex-col md:items-center f-f-l ">
                    <!-- <h1 tabindex="0" class="focus:outline-none text-2xl font-black">Build. Review. Ship.</h1> -->
                    <!-- <div class="md:flex items-center md:mt-10 text-base text-color f-f-l">
                        <h2  class="text-white md:mr-6 pb-4 md:py-0 cursor-pointer">نفاج مصر هي وكالة للخدمات الجامعية نجحت في كسب اعتماد واسع من قبل العديد من الجامعات والمعاهد المصرية </h2>
                        <h2  class="cursor-pointer"><a class="focus:outline-none focus:underline hover:text-gray-700" href="javascript:void(0)">License</a> </h2>
                    </div> -->
                    <div class="my-6 text-sm text-color f-f-l">
                        <ul class="md:flex items-center md:flex-row-reverse">
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/about" class="focus:outline-none focus:underline hover:text-gray-500">من نحن </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/services" class="focus:outline-none focus:underline hover:text-gray-500">خدماتنا </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/universities" class="focus:outline-none focus:underline hover:text-gray-500">الجامعات </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/about#team" class="focus:outline-none focus:underline hover:text-gray-500">فريق العمل </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="/contact" class="focus:outline-none focus:underline hover:text-gray-500">تواصل معنا </a></li>
                            <li class="cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">قدم طلبك </a></li>
                        </ul>
                    </div>

                </div>
                <div class="w-9/12 h-0.5 bg-gray-100 rounded-full"></div>
                <!-- <div class="flex justify-between items-center pt-12">
                    <a href="javascript:void(0)" class="hover:shadow-lg mr-4 focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600" aria-label="download on the app store"><div class="">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg2.svg" alt="download on the app store">
                    </div></a>
                    <button  class="hover:shadow-lg focus:outline-none rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-gray-600" aria-label="get it on google play"></a>
                    <div>
                      <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/simple_center_aligned_with_logo-svg3.svg" alt="get it on google play">
                    </div>
                    </button>
                </div> -->
				<div class="text-sm text-color mt-8 f-f-l">
					<p tabindex="0" class="focus:outline-none">© <?php echo date('Y') ?> جميع الحقوق محفوظة -
					<a class="text-white" href="https://naffajegypt.com/">نفاج</a></p>
				</div>

				<div class="mx-auto flex mt-3 gap-2">
					<a href="https://www.facebook.com/NaffajEgypt" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook w-6 h-6"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
						</svg>
					</a>

					<a href="https://twitter.com/naffajegypt" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z"></path>
						</svg>
					</a>

					<a href="https://www.instagram.com/naffajegypt/" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<rect x="4" y="4" width="16" height="16" rx="4"></rect>
							<circle cx="12" cy="12" r="3"></circle>
							<line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
						</svg>
					</a>
				</div>
            </div>
        </div>


</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	function closeMenu(){
		let menu = document.getElementById('mobile-menu');
		menu.classList.add('hidden');
	}

	function openMenu(){
		let menu = document.getElementById('mobile-menu');
		menu.classList.remove('hidden');
	}

	function switchAccordion(el){
		let content = el.querySelector("p");
		let icon = el.querySelector("span");
		if(content.classList.contains("max-h-0")){
			content.classList.remove('max-h-0' ,'p-0');
			content.classList.add('max-h-fit', 'p-8', 'border-t', 'border-gray-200');
			icon.classList.add('text-gray-400' ,'bg-gray-200');
			icon.classList.remove('text-white' ,'bg-primary');
			icon.innerHTML =
				`<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                            </svg>`
				;
		}else {
			content.classList.add('max-h-0', 'p-0');
			content.classList.remove('max-h-fit' , 'p-8', 'border-t', 'border-gray-200');
			icon.classList.remove('text-gray-400' ,'bg-gray-200');
			icon.classList.add('text-white' ,'bg-primary');
			icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>`;
		}
	}
</script>
</body>

</html>
