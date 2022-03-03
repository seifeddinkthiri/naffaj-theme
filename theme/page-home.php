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
    style="background: url('<?php echo get_template_directory_uri() . '/assets/bg.png'  ?>' ) no-repeat; background-size:100% 100%;padding:25px">
    <div class="hero flex md:flex-row flex-col items-center md:pt-16">
        <div class="md:px-24">
            <img class="w-fit" src="<?php echo get_template_directory_uri() . '/assets/students.png'  ?>" alt="">
        </div>

        <div>
            <h2 class="text-4xl font bold text-primary leading-relaxed  	">
                الموقع الأول المختص بالدراسة في مصر لطلاب السودان
            </h2>
            <div class="md:mt-6">
                <button class="border border-primary rounded text-sm text-white px-3 py-3 bg-primary  mr-1"> سجل
                    الآن</button>
                <button class="border rounded text-sm px-3 py-3 bg-secondary text-primary border-secondary mr-1">
                    خدماتنا</button>
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
                <p class="font-normal text-base leading-8  mt-6">نفاج مصر هي وكالة للخدمات الجامعية نجحت في كسب اعتماد
                    واسع من قبل العديد من الجامعات والمعاهد المصرية . تختص في مجال الخدمات الجامعية والاستشارات
                    الأكاديمية وتتنوع خدماتها لتشمل إلحصول علي القبولات الجامعية ومتابعة إصدار التأشيرات والاقامات
                    الدراسية واستقبال الطلاب الوافدين من المطار وتنسيق أمور التسجيل والسكن الجامعي .
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
                        <h5 class="title-font text-base font-semibold">مهمة نفاج</h5>
                    </div>
                    <p class="mr-12 text-gray-200">
                        تقدم نفاج عبر خبراءها الأكاديميين استشارات أكاديمية عالية الجودة للطلاب المتقدمين عبرها لمواصلة
                        دراساتهم في الجامعات والمعاهد المصرية بما يتلاءم مع مؤهلات المتقدم ورغباته الدراسية.. <a
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


    <div class="mt-24 px-8 max-w-screen-xl mx-auto">
        <h2 class="text-2xl font-bold w-full text-center mb-12">المدونة</h2>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 px-4">

            <!-- Section: Design Block -->
            <article class="mb-32 text-gray-800">
                <img src="https://mdbootstrap.com/img/new/slides/198.jpg" class="w-full shadow-lg rounded-lg mb-6"
                    alt="" />

                <div class="flex items-center mb-6">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-full ml-2 h-8"
                        alt="" loading="lazy" />
                    <div>
                        <span> نشر <u>15.07.2020</u> بواسطة </span>
                        <a href="#!" class="font-medium">أحمد جمال</a>
                    </div>
                </div>

                <h3 class="font-bold text-xl mb-6">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج </h3>

                <p>
                    سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                    دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينت رأتاتيس ايت
                </p>
            </article>

            <!-- Section: Design Block -->
            <article class="mb-32 text-gray-800">
                <img src="https://mdbootstrap.com/img/new/slides/200.jpg" class="w-full shadow-lg rounded-lg mb-6"
                    alt="" />

                <div class="flex items-center mb-6">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-full ml-2 h-8"
                        alt="" loading="lazy" />
                    <div>
                        <span> نشر <u>15.07.2020</u> بواسطة </span>
                        <a href="#!" class="font-medium">أحمد جمال</a>
                    </div>
                </div>

                <h3 class="font-bold text-xl mb-6">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج </h3>

                <p>
                    سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                    دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينت رأتاتيس ايت
                </p>
            </article>

            <!-- Section: Design Block -->
            <article class="mb-32 text-gray-800">
                <img src="https://mdbootstrap.com/img/new/slides/199.jpg" class="w-full shadow-lg rounded-lg mb-6"
                    alt="" />

                <div class="flex items-center mb-6">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-full ml-2 h-8"
                        alt="" loading="lazy" />
                    <div>
                        <span> نشر <u>15.07.2020</u> بواسطة </span>
                        <a href="#!" class="font-medium">أحمد جمال</a>
                    </div>
                </div>

                <h3 class="font-bold text-xl mb-6">لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج </h3>

                <p>
                    سيت يتبيرسبايكياتيس يوندي أومنيس أستي ناتيس أيررور سيت فوليبتاتيم أكيسأنتييوم
                    دولاريمكيو لايودانتيوم,توتام ريم أبيرأم,أيكيو أبسا كيواي أب أللو أنفينت رأتاتيس ايت
                </p>
            </article>



        </div>
    </div>

    <!-- Logo -->


    <div class="bg-gray-100 rounded mx-auto pt-16">
        <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
            <h1 tabindex="0"
                class="focus:outline-none xl:text-3xl md:text-3xl text-xl text-center text-gray-800 font-extrabold mb-5 pt-4">
                Partnerships with Coveted Brands</h1>
            <p tabindex="0"
                class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-600 font-normal xl:w-10/12 xl:mx-auto">
                Our success has come from being committed to the property and investing in the development of the
                product to maximize sales. At the same time and maintaining the integrity.</p>
        </div>
        <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-gray-200 xl:pb-10 pb-16 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/adidas-dark.png"
                    alt="Adidas" role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-gray-200 xl:pb-10 pb-16 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/channel-dark.png"
                    alt="Chanel" role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-gray-200 xl:pb-10 pb-16 pt-4 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/nike-dark.png" alt="Nike"
                    role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-gray-200 xl:pb-10 pb-16 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/toyota-dark.png"
                    alt="Toyota" role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/gs1-dark.png" alt="GS1"
                    role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/berry-dark.png"
                    alt="BlackBerry" role="img" />
            </div>
            <div class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/min-dark.png" alt="Mini"
                    role="img" />
            </div>
            <div
                class="w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                <img tabindex="0" class="focus:outline-none" src="https://cdn.tuk.dev/assets/honda-dark.png" alt="Honda"
                    role="img" />
            </div>
        </div>
    </div>


    <!-- CTA -->

    <div class="dark:bg-gray-900">
        <section class="mx-auto container w-full py-36">
            <div class="flex flex-col justify-center items-center">
                <div
                    class="md:text-3xl text-4xl font-black text-center text-gray-800 dark:text-white leading-snug lg:w-3/4">
                    <h2 class="leading-normal ">فريقنا مستعد للاجابة على كل تساؤلاتك.</h2>
                </div>
                <div class="flex justify-center items-center mt-16">
                    <button
                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-800 hover:opacity-90 w-48 h-12 text-lg text-white bg-primary rounded">تواصل
                        منا الآن</button>
                </div>
            </div>
        </section>
    </div>


</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
