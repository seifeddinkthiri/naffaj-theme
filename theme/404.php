<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package naffaj
 */

get_header();
?>

	<main id="primary">

		<section>
			<header>
				<h1 class="entry-title"></h1>
			</header>

			<!-- component -->
<!-- MDI Icons -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<!-- Page Container -->
<div class="flex items-center justify-center min-h-screen bg-white py-48">
    <div class="flex flex-col">

        <!-- Error Container -->
        <div class="flex flex-col items-center">
            <div class="text-primary font-bold text-7xl">
                404
            </div>

            <div class="font-bold text-3xl xl:text-7xl lg:text-6xl md:text-5xl mt-10">
			<?php esc_html_e( 'عذرا! الصفحة غير موجودة.', 'naffaj' ); ?>
            </div>

            <div class="text-gray-400 font-medium text-sm md:text-xl lg:text-2xl mt-8">
				الصفحة التي تبحث عنها لا يمكن العثور عليها..
            </div>
        </div>


    </div>
</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
