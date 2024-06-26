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
    <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">اتصل بنا</h2>
    <div class="w-12 h-2 bg-primary mx-auto mt-6 rounded-full"></div>
</section>


<main id="primary " class=" mt-8"
    style="background: url('<?php echo get_template_directory_uri() . '/assets/bg.png'  ?>' ) no-repeat; background-size:100% 100%;">
    <div class="max-w-7xl mx-auto">


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.0078042179157!2d31.19880171523108!3d30.06531078187468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458411667ba29fd%3A0xb9d313df52922730!2s5%20Dr%20Hegazy%2C%20Mit%20Akaba%2C%20Agouza%2C%20Giza%20Governorate%2C%20Egypt!5e0!3m2!1sen!2stn!4v1648746318901!5m2!1sen!2stn" height="400" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="container mx-auto py-16">
            <div class="lg:flex">
                <div class="xl:w-2/5 lg:w-2/5 bg-primary py-16 xl:rounded-br rounded-tr rounded-tl xl:rounded-tl-none">
                    <div class="xl:w-5/6 xl:px-0 px-8 mx-auto">
                        <h1 class="xl:text-3xl text-2xl pb-4 text-white font-bold">تواصل معنا</h1>
                        <p class="text-lg text-white pb-8 leading-relaxed font-normal lg:pl-4">هل لديك استفسار حول خدماتنا؟ هل أنت مهتم بالشراكة معنا؟ هل لديك بعض الاقتراحات أو تريد فقط أن تقول مرحبًا؟ فقط اتصل بنا. نحن هنا لخدمتك.</p>
                        <div class="flex pb-4 items-center">
                            <div aria-label="phone icon" role="img">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg1.svg"
                                    alt="phone" />

                            </div>
                            <p class="pl-4 text-white text-base">0999910161</p>
                        </div>
                        <div class="flex items-center">
                            <div aria-label="email icon" role="img">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact_indigo-svg2.svg"
                                    alt="email" />

                            </div>
                            <p class="pl-4 text-white text-base">info@naffajegypt.com</p>
                        </div>
                        <p class="text-lg text-white pt-10 tracking-wide">
<b>				مكتب القاهرة:	</b>
	المهندسين 5 شارع الدكتور حجازي متفرع من وادي النيل
                            <br />
							<b class="mt-2 inline-block">				مكتب الخرطوم:	</b>
							اركويت مربع 47 مبنى رقم 275 الطابق الثاني
                        </p>

                    </div>
                </div>
                <div class="xl:w-3/5 lg:w-3/5 bg-gray-200 h-full pt-5 pb-5 xl:pl-5 xl:pr-0 rounded-tl rounded-bl">
					<div class="bg-white py-4 px-8 rounded-tl rounded-bl text-right">
						<h1 class="xl:text-3xl text-2xl pb-4 font-bold mt-8 mb-4">ارسل رسالتك الآن</h1>
						<?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]'); ?>
					</div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
//get_sidebar();
get_footer();
