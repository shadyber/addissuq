<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Addis Suq : The Ultimate Source of Information </title>
        <!-- Css -->
        <!-- Main Css -->
        <link rel="stylesheet" href="/assets/libs/icofont/icofont.min.css">
        <link rel="stylesheet" href="/assets/css/tailwind.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="/css/mdb.min.css" />


    </head>
    <body class="font-sans antialiased">


    <!-- leftbar-tab-menu -->
    <div class="h-full w-full">
        <!-- Code block starts -->
        <nav class="bg-white shadow block fixed right-0 left-0 z-10 py-4">
            <div class="mx-auto container px-6 py-0">
                <div class="flex items-center justify-between">
                    <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 rounded-md flex w-full sm:w-auto items-center sm:items-stretch justify-start sm:justify-start">
                        <div class="flex items-center">
                            <a href="/" class="logo">
                      <span>
                          <img src="/assets/images/logo-sm.png" alt="logo-small" class="logo-sm h-8 align-middle inline-block">
                      </span>

                    <span class="self-center">
                        <img src="/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-light hidden dark:inline-block ms-1 group-data-[sidebar=dark]:inline-block">
                        <img src="/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark inline-block dark:hidden ms-1 group-data-[sidebar=dark]:hidden">
                    </span>
                            </a>
                            </a>
                        </div>
                    </button>
                    <div class="flex">
                        <div class="ltr:me-2 ltr:md:me-4 rtl:me-0 rtl:ms-2 rtl:lg:me-0 rtl:md:ms-4">

                            <button id="toggle-theme" class="flex rounded-full md:me-0 relative">
                                <span class="me-2">Light</span>
                                <span data-lucide="moon" class="top-icon w-5 h-5 light "></span>
                                <span data-lucide="sun" class="top-icon w-5 h-5 dark hidden"></span>
                                <span class="ms-2">Dark</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="flex flex-col">
        <div class="relative w-full py-[70px]">
            <div class="container z-1">
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 justify-center">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                        <div class=" w-full relative mb-10">
                            <div class="flex-auto p-4">
                                <div class="text-center mt-10">
                                    <h4 class="my-1 font-semibold text-[30px] md:text-[40px] dark:text-slate-200 mb-5 leading-12">Blogs Section For Everyone</h4>
                                    <h6 class="text-gray-500 dark:text-gray-400 text-lg font-medium">Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</h6>
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end inner-grid-->
                <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-8 xl:col-span-9 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="flex justify-between">
                                <p class="dark:text-slate-200">
                                    <span class="font-medium border-b border-dashed border-pink-400">Latest Posts </span>
                                </p>
                                <p class="dark:text-slate-200">
                                    <span class="font-medium">Today </span>: 21 Augest 2023
                                </p>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="/assets/images/widgets/sm-3.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">Helth</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                        </div>
                                        <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                            This is a best Blogs card for your business template.
                                        </a>
                                        <div class="flex flex-wrap justify-between mt-auto">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded">
                                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="/assets/images/users/avatar-1.jpg" alt="logo" />
                                                </div>
                                                <div class="ml-2">
                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>
                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>
                                                </div>
                                            </div>
                                            <a href="" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div> <!--end card-->
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                    <img src="/assets/images/widgets/sm-1.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">Helth</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                        </div>
                                        <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                            This is a best Blogs card for your business template.
                                        </a>
                                        <div class="flex flex-wrap justify-between mt-auto">
                                            <div class="flex items-center">
                                                <div class="w-8 h-8 rounded">
                                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="/assets/images/users/avatar-1.jpg" alt="logo" />
                                                </div>
                                                <div class="ml-2">
                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">Fitbit Incorporation</h5></a>
                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>
                                                </div>
                                            </div>
                                            <a href="" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                            <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Related Posts</span>
                        </div>
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                            <img src="/assets/images/widgets/sm-2.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                            <div class=" h-full flex flex-col p-3">
                                                <div class="w-full block">
                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                                </div>
                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                    This is a best Blogs card for your.
                                                </a>
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                            <img src="/assets/images/widgets/sm-1.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                            <div class=" h-full flex flex-col p-3">
                                                <div class="w-full block">
                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                                </div>
                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                    This is a best Blogs card for your.
                                                </a>
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                            <img src="/assets/images/widgets/sm-3.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                            <div class=" h-full flex flex-col p-3">
                                                <div class="w-full block">
                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                                </div>
                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                    This is a best Blogs card for your.
                                                </a>
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                            <img src="/assets/images/widgets/sm-2.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                            <div class=" h-full flex flex-col p-3">
                                                <div class="w-full block">
                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                                </div>
                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                    This is a best Blogs card for your.
                                                </a>
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div> <!--end card-->
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                            <img src="/assets/images/widgets/sm-4.jpg" alt="" class="max-w-full h-auto rounded-xl">
                                        </div><!--end col-->
                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                            <div class=" h-full flex flex-col p-3">
                                                <div class="w-full block">
                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">Fashion</span>
                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">23 Aug 2023</span>
                                                </div>
                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                    This is a best Blogs card for your.
                                                </a>
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div> <!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->

                    </div><!--end col-->

                </div><!--end inner-grid-->
            </div><!--end container-->
        </div><!--end section-->
    </div><!--end Main-->

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="assets/libs/lucide/umd/lucide.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <script src="assets/js/app.js"></script>
    </body>
</html>
