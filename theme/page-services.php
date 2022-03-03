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
            <div class="container px-5 pb-24 mx-auto">
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


    <section>
        <div class="
          relative
          items-center
          w-full
          py-24
          mx-auto
          md:px-12
          lg:px-16
          max-w-7xl
        ">
            <div class="px-5 overflow-hidden divide-y  rounded-xl lg:px-0">
                <div class="flex flex-wrap items-end justify-start w-full bg-gray-50">
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <h2 class="
                    mb-4
                    text-sm
                    font-medium
                    tracking-widest
                    text-neutral-600
                    uppercase
                  "> Sponsorships </h2>
                            <ul class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <div class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <div class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-normal
                      tracking-tight
                      text-gray-500
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-gray-300
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4 lg:ml-auto">
                        <div class="relative flex flex-col h-full p-8">
                            <strong class="
                    flex
                    items-end
                    mx-auto
                    text-3xl
                    font-black
                    leading-none
                    text-neutral-600
                  ">
                                <span>$10 </span>
                            </strong>
                            <div class="mt-2">
                                <button role="button" class="
                      w-full
                      items-center
                      block
                      px-10
                      py-3.5
                      text-base
                      font-medium
                      text-center text-blue-600
                      transition
                      duration-500
                      ease-in-out
                      transform
                      border-2 border-white

                      rounded-xl
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-gray-500
                      bg-white
                    "> Buy Now </button>
                            </div>
                            <p class="mx-auto mt-6 text-xs text-gray-500"> Only once within 6 months </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap items-end justify-start w-full bg-white">
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <h2 class="
                    mb-4
                    text-sm
                    font-medium
                    tracking-widest
                    text-neutral-600
                    uppercase
                  "> Sponsorships </h2>
                            <ul class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <ul class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4">
                        <div class="relative flex flex-col h-full p-8">
                            <ul class="space-y-4">
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>Newsletter's Top.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1 Newsletter Issue.
                                </li>
                                <li class="
                      flex
                      items-center
                      mb-2
                      text-base
                      font-medium
                      leading-relaxed
                      text-neutral-600
                    ">
                                    <span class="
                        inline-flex
                        items-center
                        justify-center
                        flex-shrink-0
                        w-5
                        h-5
                        ml-2
                        text-white
                        bg-black
                        rounded-full
                      ">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3"
                                            viewBox="0 0 24 24">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg> </span>1.6k+ Readers.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full xl:w-1/4 md:w-1/4 lg:ml-auto">
                        <div class="relative flex flex-col h-full p-8">
                            <strong class="
                    flex
                    items-end
                    mx-auto
                    text-3xl
                    font-black
                    leading-none
                    text-blue-600
                  ">
                                <span>$50 </span>
                            </strong>
                            <div class="mt-2">
                                <button role="button" class="
                      flex
                      items-center
                      justify-center
                      w-full
                      px-10
                      py-4
                      text-base
                      font-medium
                      text-center text-white
                      transition
                      duration-500
                      ease-in-out
                      transform
                      bg-blue-600
                      rounded-xl
                      hover:bg-blue-700
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-blue-500
                    "> Buy Now </button>
                            </div>
                            <p class="mx-auto mt-6 text-xs text-gray-500"> Only once within 6 months </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php
//get_sidebar();
get_footer();
