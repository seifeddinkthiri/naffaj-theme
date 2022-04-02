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

<div
    style="padding:25px">
    <div class="hero flex lg:flex-row flex-col items-center md:pt-16">
        <div class="sm:px-32 md:px-24 lg:w-1/2 flex justify-center items-center relative">
			<div class=" md:w-96 md:h-96 w-60 h-60  absolute bg-primary rounded-full md:right-16 md:-top-12 top-0 right-0 bg-opacity-30"></div>
            <div class="  md:w-96 md:h-96 w-60 h-60 absolute bg-secondary rounded-full md:left-0 md:-bottom-12 bottom-0 left-0 bg-opacity-30"></div>
            <img class="sm:max-w-sm sm:w-auto w-9/12 object-cover	rounded-lg z-10 relative md:right-10" src="<?php echo get_template_directory_uri() . '/assets/cover1.jpg'  ?>" alt="">
        </div>

        <div class="lg:text-right text-center mt-8 lg:mt-0 relative">
        <div class="hidden lg:block z-10 lg:w-96 lg:h-96 w-60 h-60 absolute bg-gray-200 rounded-full md:left-16 md:bottom-4 bottom-12 left-12 bg-opacity-30"></div>
            <h2 class="z-20 relative text-4xl font bold text-primary leading-relaxed  	">
                الموقع الأول المختص بالدراسة في مصر لطلاب السودان
            </h2>
            <div class="mt-6">
                <button class="border border-primary rounded text-sm text-white px-3 py-3 bg-primary  mr-1"> سجل
                    الآن</button>
                <a href="/services" class="border rounded text-sm px-3 py-3 bg-secondary text-primary border-secondary mr-1">
                    خدماتنا</a>
            </div>
        </div>
    </div>
</div>



<main id="primary ">


    <div class="md:container mx-auto my-8">
        <div class="pt-16">
            <div class="py-12 bg-gray-100 rounded">
                <div class="max-w-8xl mx-auto container">
                    <div tabindex="0" aria-label="group of cards"
                        class="focus:outline-none flex flex-wrap items-center justify-center sm:justify-between">
                        <div tabindex="0" aria-label="card 1"
                            class="focus:outline-none flex flex-col items-center py-6 md:py-0 px-6 w-full sm:w-1/2 md:w-1/4">
                            <div class="w-20 h-20 relative ml-6">
                                <div class="absolute top-0 right-0 bg-violet-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="text-white absolute bottom-0 left-0 bg-primary rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </div>
                            </div>
                            <h4 tabindex="0"
                                class="focus:outline-none text-lg font-medium leading-6 text-gray-800 text-center pt-5">
                                تحصيل القبولات الجامعية <br />
                                مجانا
                            </h4>
                        </div>
                        <div tabindex="0" aria-label="card 2"
                            class="focus:outline-none flex flex-col items-center py-6 md:py-0 px-6 w-full sm:w-1/2 md:w-1/4">
                            <div class="w-20 h-20 relative ml-6">
                                <div class="absolute top-0 right-0 bg-violet-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="text-white absolute bottom-0 left-0 bg-primary rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-certificate w-8 h-8"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                        <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path>
                                        <circle cx="6" cy="14" r="3"></circle>
                                        <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path>
                                    </svg>
                                </div>
                            </div>
                            <h4 tabindex="0"
                                class="focus:outline-none text-lg font-medium leading-6 text-gray-800 text-center pt-5">
                                توثيق الشهادات <br />
                                لدي الجهات الرسمية
                            </h4>
                        </div>
                        <div tabindex="0" aria-label="card 3"
                            class="focus:outline-none flex flex-col items-center py-6 md:py-0 px-6 w-full sm:w-1/2 md:w-1/4">
                            <div class="w-20 h-20 relative ml-6">
                                <div class="absolute top-0 right-0 bg-violet-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="text-white absolute bottom-0 left-0 bg-primary rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </div>
                            </div>
                            <h4 tabindex="0"
                                class="focus:outline-none text-lg font-medium leading-6 text-gray-800 text-center pt-5">
                                استشارات السكن <br />
                                الطلابي
                            </h4>
                        </div>
                        <div tabindex="0" aria-label="card 4"
                            class="focus:outline-none flex flex-col items-center py-6 md:py-0 px-6 w-full sm:w-1/2 md:w-1/4">
                            <div class="w-20 h-20 relative ml-6">
                                <div class="absolute top-0 right-0 bg-violet-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="text-white absolute bottom-0 left-0 bg-primary rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-certificate" width="30" height="30"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="15" cy="15" r="3"></circle>
                                        <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                        <path
                                            d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                        </path>
                                        <line x1="6" y1="9" x2="18" y2="9"></line>
                                        <line x1="6" y1="12" x2="9" y2="12"></line>
                                        <line x1="6" y1="15" x2="8" y2="15"></line>
                                    </svg>
                                </div>
                            </div>
                            <h4 tabindex="0"
                                class="focus:outline-none text-lg font-medium leading-6 text-gray-800 text-center pt-5">
                                معادلة الشهادات <br />
                                الجامعية
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" md:p-24 lg:p-32 p-16 mt-16">
        <div class="flex lg:flex-row flex-col lg:gap-16 sm:gap-10 gap-12 items-center">

            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/RjNH7QB/Rectangle-122-1.png"
                    alt="people discussing on board">
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/16fPqrg/Rectangle-122-2.png"
                    alt="people discussing on board">
                <img class="sm:hidden block w-full" src="https://i.ibb.co/Jxhpxh6/Rectangle-122.png"
                    alt="people discussing on board">
            </div>

            <div class="w-full lg:w-6/12">
                <p class="font-normal text-sm leading-3 text-primary cursor-pointer pb-2">من نحن</p>
                <h2 class="w-full font-bold lg:text-3xl text-2xl lg:leading-10 leading-9">عن نفاج </h2>
                <p class="font-normal text-base leading-8  mt-6">نفاج مصر هي وكالة للخدمات الجامعية نجحت في كسب اعتماد
                    واسع من قبل العديد من الجامعات والمعاهد المصرية . تختص في مجال الخدمات الجامعية والاستشارات
                    الأكاديمية وتتنوع خدماتها لتشمل إلحصول علي القبولات الجامعية ومتابعة إصدار التأشيرات والاقامات
                    الدراسية واستقبال الطلاب الوافدين من المطار وتنسيق أمور التسجيل والسكن الجامعي .
                </p>

                <p class="font-normal text-base leading-8  mt-6">نفاج مملوكة لشركة DPR Arabia الاستشارية التي تعمل في
                    مجال استشارات العلاقات العامة الرقمية وقطاع التعليم والسفر والترفيه وهي شركة مسجلة في العاصمة
                    البريطانية لندن ولها افرع في مدينة القاهرة والاسكندرية بجمهورية مصر العربية ولها مقر اقليمي في
                    الخرطوم عاصمة جمهورية السودان
                </p>



                <div class="mt-8">
                    <a href="/about" class="border rounded text-sm px-3 py-3 bg-primary text-white border-primary">
                        اقرأ أكثر</a>
                </div>


            </div>

        </div>
    </div>




    <div class="bg-primary text-white md:p-24 lg:p-32 p-16 mt-16">
        <div class="flex lg:flex-row flex-col lg:gap-16 sm:gap-10 gap-12 items-center">
            <div class="w-full lg:w-6/12">
                <p class="font-normal text-sm leading-3 text-primary cursor-pointer pb-2">من نحن</p>
                <h2 class="w-full font-bold lg:text-3xl text-2xl lg:leading-10 leading-9">نفاج مصر هي وكالة للخدمات
                    الجامعية </h2>
                <p class="font-normal text-base leading-8  mt-6">تقدم نفاج  عبر خبراءها الأكاديميين استشارات أكاديمية عالية الجودة للطلاب المتقدمين عبرها لمواصلة دراساتهم في الجامعات والمعاهد المصرية بما يتلاءم مع مؤهلات المتقدم ورغباته الدراسية. تعمل نفاج بعد استقبالها طلب التقديم على ضمان إكتمال متطلبات الحصول على القبول الأكاديمي وتقديم الإرشادات للمتقدم بما يتوافق مع المرحلة التعليمية المختارة والمؤسسة التعليمية المراد الإلتحاق بها.
                </p>

                <div>
                    <div class=" rounded flex p-4 h-full items-center mt-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-secondary w-6 h-6 flex-shrink-0 ml-4 bg-opacity-50"
                            viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <h5 class="title-font text-base font-semibold">رؤية نفاج</h5>
                    </div>
                    <p class="mr-12 text-gray-200">
                        تسعى منصة " نفاج مصر " لتكون الوجهة الأولى والمعتمدة للراغبين في تحقيق الحصول على فرص دراسية
                        مميزة بالمؤسسات الاكاديمية المصرية
                    </p>
                </div>

                <div>
                    <div class=" rounded flex p-4 h-full items-center mt-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3" class="text-secondary w-6 h-6 flex-shrink-0 ml-4 bg-opacity-50"
                            viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <h5 class="title-font text-base font-semibold">اسم نفاج</h5>
                    </div>
                    <p class="mr-12 text-gray-200">
					نفاج كلمة باللهجة السودانية " بتشديد حرف الفاء "  تعني البوابة الصغيرة التي يتواصل عبرها الجيران في الحي <a
                            href="/about" class="text-secondary"> + اقرأ أكثر</a>
                    </p>
                </div>

                <!-- <div class="mt-8">
				<button class="border rounded text-sm px-3 py-3 bg-secondary text-primary border-secondary mr-1">
                    اقرأ أكثر</button>
				</div> -->


            </div>
            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/RjNH7QB/Rectangle-122-1.png"
                    alt="people discussing on board">
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/16fPqrg/Rectangle-122-2.png"
                    alt="people discussing on board">
                <img class="sm:hidden block w-full" src="https://i.ibb.co/Jxhpxh6/Rectangle-122.png"
                    alt="people discussing on board">
            </div>
        </div>
    </div>

    <!--- Tesimonials --->

    <div class="lg:px-20 md:px-6 px-4 lg:py-24 py-12">
        <div class="flex flex-col items-center justify-center">
            <h1 class="lg:text-3xl text-2xl font-bold text-center text-gray-700">ماذا قالوا عنا</h1>
            <p class="text-base leading-6 mt-4 text-center text-gray-600 2xl:w-2/5 ">هذه بعض من آراء عملائنا الكرام
                وملاحظاتهم، وهناك الكثير..</p>
        </div>
        <div class="w-full lg:flex items-center gap-6 mt-10">
            <div class="lg:w-1/2">
                <div class="bg-white border rounded-md border-gray-200 relative sm:p-10 p-6">
                    <div>
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote w-8 h-8 text-primary"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
							<path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
						</svg>
                    </div>

                    <p class="text-base leading-6 text-gray-600 mt-4">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                        لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
                        على سبيل المثال ... او نماذج مواقع انترنت ...

                    </p>
                    <div class="absolute bottom-0 -mb-4 ml-10">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg2.svg" alt="sharp" />
                    </div>
                </div>
                <div class="flex items-center mt-7">
                    <div class="w-12 h-12 border border-primary rounded-full flex items-center justify-center">
                        <img src="https://i.ibb.co/R6WQhYj/Mask-Group.png" class="w-10 h-10 rounded-full"
                            alt="profile" />
                    </div>
                    <div class="flex flex-col items-start mr-4">
                        <p class="text-base font-semibold leading-4 text-gray-800">أسماء أسماء</p>
                        <p class="text-base leading-4 mt-2 text-center text-gray-600">طالبة صيدلة بجامعة الاسكندرية</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 lg:mt-0 mt-16">
                <div class="bg-white border rounded-md border-gray-200 relative sm:p-10 p-6">
                    <div>
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote w-8 h-8 text-primary"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
							<path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
						</svg>
                    </div>
                    <p class="text-base leading-6 text-gray-600 mt-4">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم
                        لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير
                        على سبيل المثال ... او نماذج مواقع انترنت ...

                    </p>
                    <div class="absolute bottom-0 -mb-4 ml-10">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/testimonials-4-svg2.svg" alt="sharp" />
                    </div>
                </div>
                <div class="flex items-center mt-7">
                    <div class="w-12 h-12 border border-primary rounded-full flex items-center justify-center">
                        <img src="https://i.ibb.co/C6bwf12/Mask-Group.png" class="w-10 h-10 rounded-full"
                            alt="profile" />
                    </div>
                    <div class="flex flex-col items-start mr-4">
                        <p class="text-base font-semibold leading-4 text-gray-800">أحمد أحمد</p>
                        <p class="text-base leading-4 mt-2 text-center text-gray-600">طالب طب بجامعة القاهرة</p>
                    </div>
                </div>
            </div>
        </div>
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

	<!-- FAQs -->
    <section class="bg-white ">
        <div class="container max-w-4xl px-6 py-10 mx-auto">
			<h2 class="lg:text-3xl text-2xl font-bold text-center text-gray-700">الأسئلة الشائعة</h2>

            <div class="mt-12 space-y-4">

				<?php
					$args = array(
						'post_type'=> 'faq',
						'order'    => 'ASC',
						'posts_per_page'   => -1,
					);

					$the_query = new WP_Query( $args );
					if ($the_query->have_posts()){ // check if there's posts
						while($the_query->have_posts()){ // while throught posts
							$the_query->the_post();
					?>
						<div class="border-2 border-gray-100 rounded-lg " onclick="switchAccordion(this)">
							<button class="flex items-center justify-between w-full p-8">
								<h3 class="font-semibold text-gray-700 "><?php the_title() ?></h3>

								<span class="transition-all text-white bg-primary rounded-full">
									<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
									</svg>
								</span>
							</button>

							<p class="transition-all text-sm text-gray-500  max-h-0 overflow-hidden ">
								<?php the_field( "answer" ); ?>
							</p>
						</div>
					<?php

						} // end while
					} // end if

				?>


            </div>
        </div>
    </section>

	 <!-- CTA -->

	 <div class="bg-primary mt-12 text-white px-6">
        <section class="mx-auto container w-full py-36">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="md:text-3xl text-4xl text-center  leading-snug lg:w-3/4">
                    <h2 class="leading-normal ">فريقنا مستعد للاجابة على كل تساؤلاتك.</h2>
                </div>
				<p class="mt-4 text-center">يكفيك الاستعانة بأحد من فريقنا لتبدأ مشوارك الأكاديمي بنجاح مهما كان استفسارك تأكد أننا نقدم لك الاستشارة مجاناً</p>

                <div class="flex justify-center items-center mt-16">
                    <a
						href="/contact"
                        class="focus:outline-none focus:ring-2 flex items-center justify-center focus:ring-offset-2 focus:ring-secondary hover:opacity-90 w-48 h-12 text-lg text-primary bg-secondary rounded">
						<span> تواصل معنا الآن </span>
					</a>
                </div>
            </div>
        </section>
    </div>


	<!-- CTA -->

	<!-- <div class="2xl:mx-auto 2xl:container md:px-20 px-4 md:py-12 py-9">
            <div class="relative rounded-md">
                <img src="https://i.ibb.co/SBpL1cK/pexels-aleksandar-pasaric-325185-1.png" alt="city view" class="w-full h-full rounded-md  object-center object-fill absolute sm:block hidden" />
                <img src="https://i.ibb.co/LQpxBsc/mobile.png" alt="city view" class="w-full h-full rounded-md absolute object-center object-fill sm:hidden" />
                <div class="text-xl relative z-20 bg-gradient-to-r from-blue-700 to-transparent w-full h-full  top-0 md:p-16 p-6 flex flex-col justify-between rounded-md ">
                    <div>
                        <h1 class="md:text-5xl text-3xl font-bold md:leading-10 leading-9 text-white sm:w-auto w-64">Act Before It’s Too Late!</h1>
                        <p class="text-lg leading-6 text-white xl:w-5/12 lg:w-8/12 md:w-10/12  2xl:pr-12 mt-4">A good idiom for kids is "It's raining cats and dogs." Kids know what both cats and dogs are from an early age.</p>
                    </div>
                    <div class="md:mt-12 mt-20">
                        <button class="text-base font-medium leading-4 text-indigo-700 bg-white sm:w-auto w-full rounded p-4 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-offset-2 focus:ring-white">Explore More</button>
                    </div>
                </div>
            </div>
        </div> -->


    <div class="mt-24 px-8 max-w-screen-xl mx-auto">
		<div class="flex flex-col items-center justify-center mb-10">
			<h1 class="lg:text-3xl text-2xl font-bold text-center text-gray-700">المدونة</h1>
			<p class="text-base leading-6 mt-4 text-center text-gray-600 2xl:w-2/5 ">اطلع على آخر مقالاتنا..</p>
		</div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 px-4">

		<?php
			$query = new WP_Query(array(
				'post_type' => 'post',
				'category__in' => wp_get_post_categories(get_the_ID()),
				'post__not_in' => array(get_the_ID()),
				'posts_per_page' => 3,
				'orderby' => 'date',
			));


			if ($query->have_posts()){ // check if there's posts
				while($query->have_posts()){ // while throught posts
					$query->the_post();
					get_template_part( 'partials/content', 'posts' );

				} // end while
			} // end if

		?>





        </div>
    </div>





</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
