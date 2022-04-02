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
    <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">من نحن </h2>
	<div class="w-12 h-2 bg-primary mx-auto mt-6 rounded-full"></div>
</section>


<section id="primary " class="md:container mx-auto mt-8">



    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">

        <div class="flex lg:flex-row flex-col lg:gap-8 sm:gap-10 gap-12 items-center">
            <div class="w-full lg:w-6/12">
                <p class="font-normal text-sm leading-3 text-primary cursor-pointer pb-2">من نحن</p>
                <h2 class="w-full font-bold lg:text-3xl text-2xl lg:leading-10 leading-9">نفاج مصر هي وكالة للخدمات
                    الجامعية </h2>
                <p class="font-normal text-base leading-8 text-gray-600 mt-4">نجحت نفاج في كسب اعتماد واسع من قبل العديد
                    من
                    الجامعات والمعاهد المصرية تختص في مجال الخدمات الجامعية والاستشارات الأكاديمية وتتنوع خدماتها لتشمل
                    إلحصول علي القبولات الجامعية ومتابعة إصدار التأشيرات والاقامات الدراسية واستقبال الطلاب الوافدين من
                    المطار وتنسيق أمور التسجيل والسكن الجامعي .
                    نفاج مملوكة لشركة DPR Arabia الاستشارية التي تعمل في مجال استشارات العلاقات العامة الرقمية وقطاع
                    التعليم والسفر والترفيه وهي شركة مسجلة في العاصمة البريطانية لندن ولها افرع في مدينة القاهرة
                    والاسكندرية بجمهورية مصر العربية ولها مقر اقليمي في الخرطوم عاصمة جمهورية السودان </p>
            </div>
            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/RjNH7QB/Rectangle-122-1.png"
                    alt="people discussing on board" />
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/16fPqrg/Rectangle-122-2.png"
                    alt="people discussing on board" />
                <img class="sm:hidden block w-full" src="https://i.ibb.co/Jxhpxh6/Rectangle-122.png"
                    alt="people discussing on board" />
            </div>
        </div>

        <div class="w-full mt-16 lg:mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 lg:gap-12 gap-10">



                <div class="flex p-4 shadow-md">

                    <div class="">
                        <p class="font-semibold  text-xl lg:leading-6 leading-5 text-gray-800">سر الاسم</p>
                        <p class="mt-2 font-normal text-base leading-6 text-gray-600"> نفاج كلمة باللهجة السودانية "
                            بتشديد حرف الفاء " تعني البوابة الصغيرة التي يتواصل عبرها الجيران في الحي.</p>
                    </div>

                </div>

                <div class="flex p-4 shadow-md">

                    <div class="">
                        <p class="font-semibold  text-xl lg:leading-6 leading-5 text-gray-800">رؤية نفاج</p>
                        <p class="mt-2 font-normal text-base leading-6 text-gray-600">Iتسعى منصة " نفاج مصر " لتكون
                            الوجهة الأولى والمعتمدة للراغبين في تحقيق الحصول على فرص دراسية مميزة بالمؤسسات
                            الاكاديمية المصرية.</p>
                    </div>

                </div>


            </div>
        </div>




        <div class="flex lg:flex-row flex-col md:gap-14 gap-16 justify-between lg:mt-20 mt-16 items-center">

            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="https://i.ibb.co/RjNH7QB/Rectangle-122-1.png"
                    alt="people discussing on board" />
                <img class="lg:hidden sm:block hidden w-full" src="https://i.ibb.co/16fPqrg/Rectangle-122-2.png"
                    alt="people discussing on board" />
                <img class="sm:hidden block w-full" src="https://i.ibb.co/Jxhpxh6/Rectangle-122.png"
                    alt="people discussing on board" />
            </div>



            <div class="w-full lg:w-6/12">
                <h2 class="font-bold lg:text-2xl text-3xl lg:leading-9 leading-7 text-gray-800">مهمة نفاج</h2>
                <p class="font-normal text-base leading-7 text-gray-600 mt-4 w-full ">تقدم نفاج عبر
                    خبراءها الأكاديميين استشارات أكاديمية عالية الجودة للطلاب المتقدمين عبرها لمواصلة دراساتهم في
                    الجامعات والمعاهد المصرية بما يتلاءم مع مؤهلات المتقدم ورغباته الدراسية. تعمل نفاج بعد استقبالها طلب
                    التقديم على ضمان إكتمال متطلبات الحصول على القبول الأكاديمي وتقديم الإرشادات للمتقدم بما يتوافق مع
                    المرحلة التعليمية المختارة والمؤسسة التعليمية المراد الإلتحاق بها. </p>
                <p class="font-normal text-base leading-7 text-gray-600 w-full mt-4">تعمل نفاج
                    أيضا على متابعة حالة طلب المتقدم لدى الادارة المركزية لشئون الوافدين من خلال مكاتبنا بمصر بشكل دوري
                    لضمان سير عملية تقييم الطلب دون أي عراقيل أو نقص في متطلبات التقديم ولضمان تسريع عملية استحصال
                    القبول.</p>

                <p class="font-normal text-base leading-7 text-gray-600 w-full  mt-4">لا تتوقف
                    خدماتنا عند استحصال القبول بنجاح, بل تمتد لتشمل تسهيل الحصول على الفيزا الطلابية وتجهيز ملف مطلوبات
                    الاقامة عند الوصول الي مصر ومحاولة حل مشاكلها إن طرأت. نتفهم أيضا حاجة الطالب لتأمين وصوله لمصر
                    بسهولة دون مواجهة صعوبات ولهذا فإن نفاج تقدم استشارات تتعلق بحجز تذاكر سفر بأسعار مناسبة وترتيب
                    الاستقبال من المطار عبر ممثليها كما نتابع بشكل يومي مع الطالب ومساعدته في تخليص إجراءات التسجيل بشكل
                    رسمي في المؤسسة الأكاديمية وحجز سكن يناسبه وفتح حساب بنكي وذلك عبر طاقم متخصص ذو خبرة عالية .</p>
            </div>







        </div>
    </div>






</section>

<!-- Team -->
<section dir="rtl" class="relative w-full bg-white text-gray-800" id="team">
    <div class="absolute inset-0 w-full h-full opacity-25 sm:opacity-50 overflow-hidden">
        <svg viewBox="0 0 150 350" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            class="absolute top-0 right-0 w-auto h-full opacity-75">
            <defs>
                <path d="M0 0h50v50H0z"></path>
                <path d="M0 0h50v50H0z"></path>
                <path d="M0 0h150v150H0z"></path>
            </defs>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g>
                    <g fill="#3B82F6" fill-rule="nonzero">
                        <path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z"></path>
                    </g>
                    <g transform="translate(0 100)">
                        <mask fill="#fff">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <path d="M25 0c13.807 0 25 11.193 25 25S38.807 50 25 50H0V0h25z" fill="#F9C7FF"
                            mask="url(#mask-2)"></path>
                    </g>
                    <g transform="translate(100 100)">
                        <mask fill="#fff">
                            <use xlink:href="#path-3"></use>
                        </mask>
                        <path d="M25 25c13.807 0 25-11.193 25-25H0c0 13.807 11.193 25 25 25z" fill="#93FFFD"
                            fill-rule="nonzero" mask="url(#mask-4)"></path>
                    </g>
                    <g transform="translate(0 200)">
                        <mask fill="#fff">
                            <use xlink:href="#path-5"></use>
                        </mask>
                        <path d="M75 75c0 41.421 33.579 75 75 75V0c-41.421 0-75 33.579-75 75z" fill="#421984"
                            fill-rule="nonzero" mask="url(#mask-6)"></path>
                    </g>
                </g>
            </g>
        </svg>
        <svg viewBox="0 0 150 150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            class="absolute top-0 left-0 w-auto h-full opacity-30">
            <defs>
                <path d="M0 0h50v50H0z"></path>
                <path d="M0 0h50v50H0z"></path>
            </defs>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="matrix(-1 0 0 1 150 0)">
                    <g transform="translate(0 25)" fill="#93FFFD" fill-rule="nonzero">
                        <path d="M25 0C11.193 0 0 11.193 0 25h50C50 11.193 38.807 0 25 0z"></path>
                    </g>
                    <path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" transform="translate(100)"
                        fill="#FF642D"></path>
                    <g transform="translate(0 100)">
                        <mask fill="#fff">
                            <use xlink:href="#path-1"></use>
                        </mask>
                        <path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="#B3EBFF"
                            mask="url(#mask-2)"></path>
                    </g>
                    <g transform="translate(100 200)">
                        <mask fill="#fff">
                            <use xlink:href="#path-3"></use>
                        </mask>
                        <path d="M25 50C11.193 50 0 38.807 0 25S11.193 0 25 0h25v50H25z" fill="##7A8AF3"
                            mask="url(#mask-4)"></path>
                    </g>
                </g>
            </g>
        </svg>
    </div>
    <div class="relative w-full px-4 pt-16 pb-16 mx-auto bg-top bg-cover max-w-6xl lg:py-24 lg:pb-32">
        <div class="max-w-xl mb-10 ml-auto mr-auto bg-top bg-cover md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <p class="font-normal text-sm leading-3 text-primary cursor-pointer pb-2">فريق العمل</p>
            <div
                class="max-w-2xl mb-6 ml-auto mr-auto  tracking-tight text-gray-800 bg-top bg-cover sm:text-2xl md:mx-auto">
                <p
                    class="inline max-w-lg text-3xl font-bold leading-none tracking-tight text-gray-800 sm:text-3xl md:mx-auto">
                    لدينا فريق رائع من الأفراد الفريدين
                </p>
            </div>
            <p class="text-base text-gray-700 md:text-lg">
                هؤلاء هم الأشخاص الرائعون الذين يجعلوننا متميز ومختلفين عن
                المنافسين. نحن فريق من الأفراد المهتمين والموهوبين.
            </p>
        </div>
        <div
            class="grid gap-10 row-gap-8 ml-auto mr-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/moadh.jpeg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">معاذ كرشوم</p>
                    <p class="text-sm text-gray-600">مستشار أكاديمي</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/chaima.jpg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">شيماء كمال </p>
                    <p class="text-sm text-gray-600">مستشار أكاديمي</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/ghofran.jpg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">غفران ابراهيم</p>
                    <p class="text-sm text-gray-600">مستشار أكاديمي</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/kalimat.jpg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">د. كلمات العطايا</p>
                    <p class="text-sm text-gray-600">مستشار أكاديمي</p>
					<p class="text-sm text-gray-600">مدير مكتب القاهرة</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/sahar.jpg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">سحر سيف الدين</p>
                    <p class="text-sm text-gray-600">مستشار أكاديمي</p>
					<p class="text-sm text-gray-600">مدير مكتب الخرطوم</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/team/sajda.jpg'  ?>"
                    class="object-cover w-20 h-20 ml-4 rounded-full shadow" />
                <div class="relative">
                    <p class="text-lg font-bold text-gray-800">سجدة عبد العزيز الشيخ</p>
                    <p class="text-sm text-gray-600">مستشار سفر وسياحة</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
//get_sidebar();
get_footer();
