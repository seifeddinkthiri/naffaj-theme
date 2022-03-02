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
                        <ul class="md:flex items-center">
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">من نحن </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">خدماتنا </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">الجامعات </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">فريق العمل </a></li>
                            <li class="md:mr-6 cursor-pointer pt-4 lg:py-0"><a href="javascript:void(0)" class="focus:outline-none focus:underline hover:text-gray-500">تواصل معنا </a></li>
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
            </div>
        </div>


</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
