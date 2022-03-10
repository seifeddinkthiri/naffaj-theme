<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package naffaj
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-language" content="ar">
	<meta name="keywords" content="الدراسة في مصر, نفاج مصر, للخدمات الجامعية, الجامعات والمعاهد المصرية, لطلاب السودان">

	<meta name="description" content="نفاج مصر هي وكالة للخدمات الجامعية نجحت في كسب اعتماد واسع من قبل العديد من الجامعات والمعاهد المصرية . تختص في مجال الخدمات الجامعية والاستشارات الأكاديمية وتتنوع خدماتها لتشمل إلحصول علي القبولات الجامعية ومتابعة إصدار التأشيرات والاقامات الدراسية واستقبال الطلاب الوافدين من المطار وتنسيق أمور التسجيل والسكن الجامعي .">

	<meta name="robots" content="index, follow">

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/assets/favicon.png'  ?>" sizes="16x16">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">
	<?php wp_head(); ?>

	<style>
		*{
			font-family: 'Noto Kufi Arabic', sans-serif;
		}
	</style>
</head>

<body <?php body_class(); ?> dir="rtl">
<?php wp_body_open(); ?>
<div id="page" class="relative">


	<header id="masthead">




		<div class="text-gray-100 bg-primary py-3 ">
			<div class="lg:container lg:mx-auto flex justify-between items-center lg:flex-row flex-row-reverse">
				<div class="lg:pr-32 lg:inline-block hidden">
					<button class="border border-white rounded-full text-sm px-3 py-1 hover:bg-secondary hover:text-primary hover:border-primary "> سجل الآن</button>
					<!-- <button class="border border-white rounded-full text-sm px-3 py-1 hover:bg-secondary hover:text-primary hover:border-secondary mr-1"> كن وكيلنا</button> -->
					<button class="border rounded-full text-sm px-3 py-1 bg-secondary text-primary border-secondary mr-1"> متابعة طلب التسجيل</button>
				</div>
				<div class="text-sm flex sm:flex-row flex-col sm:gap-4 gap-2">
					<a href="#" class="md:flex hidden items-center">
						<span>02132252002552</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor">
							<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
						</svg>
					</a>
					<a href="#" class="md:flex hidden items-center">
						<span>saif@leemcode.com</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor">
							<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
							<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
						</svg>
					</a>

					<button data-collapse-toggle="mobile-menu" onclick="openMenu()" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg lg:hidden hover:text-secondary focus:outline-none focus:ring-2 focus:ring-secondary " aria-controls="mobile-menu-2" aria-expanded="false">
						<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
						<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					</button>
				</div>
			</div>
		</div>

		<!-- <nav class="flex justify-between lg:container mx-auto pt-4">
			<div class="logo">
				<img class="w-24" src="<?php echo get_template_directory_uri() . '/assets/logo.png'  ?>" alt="">
			</div>
			<ul>
				<li></li>
			</ul>
		</nav> -->

		<div class="lg:container  mx-auto mt-2">
			<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
				<div class=" flex flex-wrap justify-between items-center">

					<a href="/" class="flex absolute bg-white z-10 top-0">
						<img class="lg:w-24 w-20" src="<?php echo get_template_directory_uri() . '/assets/logo.png'  ?>" alt="">
					</a>

					<div></div>



					<div class="z-30 lg:z-0 hidden  lg:min-h-fit min-w-full min-h-screen top-0  right-0 bg-white lg:static fixed lg:block lg:w-auto" id="mobile-menu">
						<button data-collapse-toggle="mobile-menu" onclick="closeMenu()" type="button" class=" absolute left-1 top-2 inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " >
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
							</svg>
						</button>
						<ul class="flex flex-col-reverse mt-4 lg:flex-row-reverse lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium">

							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">قدم طلبك</a>
							</li>
							<li>
								<a href="/contact" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">اتصل بنا</a>
							</li>
							<li>
								<a href="/universities" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0  ">الجامعات</a>
							</li>
							<li>
								<a href="/services" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">الخدمات</a>
							</li>
							<li>
								<a href="/blog" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">المدونة</a>
							</li>
							<li>
								<a href="/about" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">من نحن</a>
							</li>
							<li>
								<a href="/" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary lg:p-0 ">الرئيسية</a>
							</li>
						</ul>

						<a href="#" class="md:hidden flex items-center pr-4 mt-6">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 text-primary" viewBox="0 0 20 20" fill="currentColor">
								<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
							</svg>
							<span>02132252002552</span>

						</a>
						<a href="#" class="md:hidden flex items-center pr-4 mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 text-primary" viewBox="0 0 20 20" fill="currentColor">
								<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
								<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
							</svg>
							<span>saif@leemcode.com</span>

						</a>
					</div>
				</div>
			</nav>


		</div>




	</header><!-- #masthead -->
