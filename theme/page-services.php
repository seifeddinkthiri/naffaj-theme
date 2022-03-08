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
    <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">خدماتنا</h2>
    <div class="w-12 h-2 bg-primary mx-auto mt-6 rounded-full"></div>
</section>


<main id="primary " class=" mt-8">
    <div class="max-w-7xl mx-auto">
        <section class="text-gray-600 body-font">
            <div class="container px-5 pb-12 mx-auto">
                <!-- <div class="text-center mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">Raw Denim
                        Heirloom Man Braid</h1>
                    <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Blue bottle crucifix vinyl
                        post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing
                        banh mi pug.</p>
                </div> -->
                <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">تحصيل القبولات الجامعية مجانا</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">توثيق الشهادات لدي الجهات الرسمية</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">استشارات السكن الطلابي</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">معادلة الشهادات الجامعية</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">التأشيرات والاقامات الطلابية</span>
                        </div>
                    </div>
                    <div class="p-2 sm:w-1/2 w-full">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">متابعة فتح الحسابات البنكية</span>
                        </div>
                    </div>

                    <div class="p-2 sm:w-1/2 w-full mx-auto">
                        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="3" class="text-primary w-6 h-6 flex-shrink-0 ml-4" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                            <span class="title-font font-medium">تسويق البرامج التدريبية والزمالات المهنية</span>
                        </div>
                    </div>
                </div>
                <button
                    class="flex mx-auto mt-16 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">Button</button>
            </div>
        </section>
    </div>



    <section class="px-6 xl:px-0 bg-gray-100">
        <div class="lg:py-20 py-12 px-6 mx-auto container">
            <div class="flex flex-col lg:items-center justify-center w-full">
                <h1 class="font-semibold text-gray-700 text-2xl md:text-4xl">اختر الأنسب لك.</h1>
                <p class="mt-2.5 lg:w-1/2 lg:text-center text-lg text-gray-700">لكي نوفر عليك الكثير من المصاريف
                    والكثير من المجهودات يقوم فريقنا بجمع كل المستلزمات التي تحتاج اليها ضمن باقات شاملة فقط عليك اختيار
                    واحدة منها وفق احتياجاتك. </p>
            </div>
            <div class="flex items-center justify-center w-full">
                <div class="pt-14">
                    <div class="container mx-auto">

                        <div class="flex flex-wrap mb-12 justify-between sm:justify-center -mx-6">
                            <div class="w-full xl:w-1/3 lg:w-1/3 md:w-1/2 sm:w-1/2 mb-4 px-6">
                                <div class="py-5 px-4 bg-white border border-gray-200shadow rounded-lg ">
                                    <h2 class="text-xl text-primary font-semibold mb-8">الباقة الفضية</h2>
                                    <ul class="flex flex-col mb-6">
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">متابعة التقديم عبر موقع ادرس في مصر</p>
                                        </li>
                                        <li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">دفع الرسوم</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">الحصول على الترشيح المبدئي</p>
                                        </li>

                                    </ul>
                                    <p class="text-base text-primary text-center relative pl-3">
                                        <span class="text-2xl font-semibold">مجانا</span>
                                    </p>
                                    <button
                                        class="mt-5 w-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150 ease-in-out rounded text-primary px-8 text-base font-semibold py-3">قدم طلبك</button>
                                </div>
                            </div>
                            <div class="w-full xl:w-1/3 lg:w-1/3 md:w-1/2 sm:w-1/2 mb-4 px-6">
                                <div class="py-5 px-4 bg-primary border border-gray-200 shadow rounded-lg ">
                                    <h2 class="text-xl text-white font-semibold mb-8">الباقة الذهبية</h2>
                                    <ul class="flex flex-col mb-6">
                                        <li class="flex items-center mb-2.5">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks text-secondary flex-shrink-0 ml-4 w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M7 12l5 5l10 -10"></path>
											<path d="M2 12l5 5m5 -5l5 -5"></path>
										</svg>
                                            <p class="text-secondary text-base font-semibold">جميع مميزات الباقة الفضية</p>
                                        </li>
                                        <li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">إرسال الشهادات والاوراق الاصلية</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">عمل التوثيقات من السفارة والخارجية المصرية</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">تسليم الملف لأدارة الوافدين</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">إستلام افادة القبول النهائي</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">استشارات السفر والحصول على افضل الاسعار</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">إستقبال في مطار القاهرة</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-white w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-white text-base font-normal">استشارات السكن الطلابي</p>
                                        </li>
                                    </ul>
                                    <p class="text-base text-white text-center relative pl-3">
                                        <span class="font-light text-lg">$</span>
                                        <span class="text-2xl font-semibold">200</span>
                                    </p>
                                    <button
                                        class="mt-5 w-full text-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary focus:ring-white transition duration-150 ease-in-out rounded bg-white hover:bg-gray-100 px-8 py-3 text-base font-semibold">قدم طلبك</button>
                                </div>
                            </div>
                            <div class="w-full xl:w-1/3 lg:w-1/3 md:w-1/2 sm:w-1/2 mb-4 px-6">
                                <div class="py-5 px-4 bg-white border border-gray-200shadow rounded-lg">
                                    <h2 class="text-lg text-primary font-semibold mb-8">الباقة البرونزية</h2>
                                    <ul class="flex flex-col mb-6">
										<li class="flex items-center mb-2.5">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checks text-primary flex-shrink-0 ml-4 w-6 h-6" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
											<path d="M7 12l5 5l10 -10"></path>
											<path d="M2 12l5 5m5 -5l5 -5"></path>
										</svg>
                                            <p class="text-primary text-base font-semibold">جميع مميزات الباقة الذهبية</p>
                                        </li>
                                        <li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">تجهيز ملف التأشيرة وضمان الحصول عليها في اسرع وقت</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">الحصول على رقم هاتف</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">متابعة تسجيل الجامعة</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">متابعة ملف الاقامة</p>
                                        </li>
										<li class="flex items-center mb-2.5">
											<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 w-5 h-5 flex-shrink-0 ml-4" viewBox="0 0 20 20" fill="currentColor">
												<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
											</svg>
                                            <p class="text-gray-700 text-base font-semibold">فتح الحساب البنكي والحصول على بطاقة فيزا</p>
                                        </li>
                                    </ul>
                                    <p class="text-base text-primary text-center relative pl-3">
                                        <span class="font-light text-lg">$</span>
                                        <span class="text-2xl font-semibold">400</span>
                                    </p>
                                    <button
                                        class="mt-5 w-full bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150 ease-in-out rounded text-primary px-8 text-base font-semibold py-3">قدم طلبك</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<section class="">
	<div class="lg:py-20 py-12 px-6 mx-auto container">

		<div class="flex flex-col lg:items-center justify-center w-full">
			<p class="mt-2.5 lg:w-1/2 lg:text-center text-base text-primary mb-10">
			* الباقات اعلاه لاتشمل الرسوم الحكومية
			</p>
		</div>


			<table class="table text-gray-600 border-separate space-y-6 mx-auto lg:w-1/2 w-full text-sm rounded-lg">
				<thead class="bg-gray-100 text-gray-600">
					<tr>
						<th class="p-3">الخدمة</th>
						<th class="p-3 ">الرسوم بالجنيه المصري</th>

					</tr>
				</thead>
				<tbody>
					<tr class="bg-gray-100">

						<td class="p-4 ">
						توثيق الشهادات
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>

					<tr class="bg-gray-100">

						<td class="p-4">
						الترشيح المبدئي
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>

					<tr class="bg-gray-100">

						<td class="p-4">
						حداثة المؤهل
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>

					<tr class="bg-gray-100">

						<td class="p-4">
						القبول النهائي
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>

					<tr class="bg-gray-100">

						<td class="p-4">
						اعادة ترشيح
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>

					<tr class="bg-gray-100">

						<td class="p-4">
						لم الشمل
						</td>
						<td class="p-3 font-bold">

						</td>

					</tr>



				</tbody>
			</table>


	</div>

	</section>





</main>

<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+2),
	tr th:nth-child(n+2) {
		border-radius: .625rem 0   0 .625rem;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: 0 .625rem  .625rem 0 ;
	}
</style>

<?php
//get_sidebar();
get_footer();
