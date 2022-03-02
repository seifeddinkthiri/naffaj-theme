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
<div id="page" >


	<header id="masthead">


		<!-- <nav id="site-navigation">
			<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'naffaj' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> -->

		<div class="text-gray-100 bg-primary py-3 ">
			<div class="md:container md:mx-auto md:flex justify-between items-center">
				<div class="md:pr-32">
					<button class="border border-white rounded-full text-sm px-3 py-1 hover:bg-secondary hover:text-primary hover:border-primary "> سجل الآن</button>
					<button class="border border-white rounded-full text-sm px-3 py-1 hover:bg-secondary hover:text-primary hover:border-secondary mr-1"> كن وكيلنا</button>
					<button class="border rounded-full text-sm px-3 py-1 bg-secondary text-primary border-secondary mr-1"> متابعة طلب التسجيل</button>
				</div>
				<div class="text-sm flex gap-4">
					<a href="#" class="flex items-center
					">
						<span>02132252002552</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor">
							<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
						</svg>
					</a>
					<a href="#" class="flex items-center
					">
						<span>saif@leemcode.com</span>
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-secondary" viewBox="0 0 20 20" fill="currentColor">
							<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
							<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
						</svg>
					</a>
				</div>
			</div>
		</div>

		<!-- <nav class="flex justify-between md:container mx-auto pt-4">
			<div class="logo">
				<img class="w-24" src="<?php echo get_template_directory_uri() . '/assets/logo.png'  ?>" alt="">
			</div>
			<ul>
				<li></li>
			</ul>
		</nav> -->

		<div class="md:container  mx-auto mt-2">
			<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
				<div class=" flex flex-wrap justify-between items-center">

					<a href="/" class="flex absolute bg-white  top-0">
						<img class="w-24" src="<?php echo get_template_directory_uri() . '/assets/logo.png'  ?>" alt="">
					</a>

					<div></div>

					<button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
						<span class="sr-only">Open main menu</span>
						<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
						<svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
					</button>

					<div class="hidden w-full md:block md:w-auto" id="mobile-menu">
						<ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
							<li>
								<a href="#" class="block py-2 pl-4 pr-3 text-white bg-blue-700 rounded md:bg-transparent md:text-primary md:p-0 dark:text-white" aria-current="page">الرئيسية</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">جامعاتنا</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">مدارسنا</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">السكن الطلابي</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">معادلة لشهادات</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">خدماتنا</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">المدونة</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">من نحن</a>
							</li>
							<li>
								<a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">اتصل بنا</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>


		</div>




	</header><!-- #masthead -->
