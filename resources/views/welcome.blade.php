<x-app-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">


                <div class="flex flex-col">
                    <div class="relative w-full py-[70px]">
                        <div class="container z-1">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4 justify-center">
                                <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                                    <div class=" w-full relative mb-10">
                                        <div class="flex-auto p-4">
                                            <div class="text-center mt-10">
                                                <h4 class="my-1 font-semibold text-[30px] md:text-[40px] dark:text-slate-200 mb-5 leading-12"> Welcome to AddisSuq </h4>
                                                <h6 class="text-gray-500 dark:text-gray-400 text-lg font-medium">Your Trusted destination for <br> Information</h6>

                                            </div>


                                            <form class="max-w-md mx-auto" method="get" action="/search">
                                                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                                <div class="relative">
                                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none p-3 mr-2">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                                        </svg>
                                                    </div>
                                                    <input type="search" id="default-search" name="key" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="      Search News, Videos..." required />
                                                </div>
                                            </form>

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
                                                <span class="font-medium">Today </span>: {{date('Y-M-d')}}
                                            </p>
                                        </div>
                                    </div>

                                    @foreach(\App\Models\Blog::lastN(9) as $blog)
                                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                                <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                                    <a href="/blog/{{$blog->slug}}">
                                                        <img src="{{$blog->photo}}" alt="" class="max-w-full h-auto rounded-xl"></a>
                                                </div><!--end col-->
                                                <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                                    <div class=" h-full flex flex-col p-3">
                                                        <div class="w-full block">
                                                            <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{$blog->category->title}}</span>
                                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2"> {{$blog->created_at->diffForHumans()}}</span>
                                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2 "> visited: {{$blog->visit}}</span>
                                                        </div>
                                                        <a href="/blog/{{$blog->slug}}" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                                            {{$blog->title}}
                                                        </a>

                                                        <p> {!! substr(strip_tags($blog->detail),0,256 )  !!}</p>
                                                        <div class="flex flex-wrap justify-between mt-auto">
                                                            <div class="flex items-center">
                                                                <div class="w-8 h-8 rounded">
                                                                    <a href="/blog/{{$blog->slug}}"> <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="{{\App\Models\User::find($blog->user_id)->profilePhotoUrl}}" alt="Author Photo" />
                                                                    </a></div>
                                                                <div class="ml-2">
                                                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-sm">
                                                                            {{\App\Models\User::find($blog->user_id)->name}}</h5></a>
                                                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">Addis Ababa, Ethiopia</p>
                                                                </div>
                                                            </div>
                                                            <a href="/blog/{{$blog->slug}}" class="block text-slate-500 dark:text-slate-400 hover:text-slate-600 underline decoration-1 decoration-dashed underline-offset-4  decoration-primary-500 font-medium  focus:outline-none self-center">Read More <i data-lucide="arrow-right" class="self-center inline-block ms-1 h-4 w-4"></i></a>
                                                        </div>
                                                    </div><!--end card-body-->
                                                </div><!--end col-->
                                            </div><!--end grid-->
                                        </div> <!--end card-->
                                    @endforeach

                                        <div class="text-center justify-items-center"><a href="/blog" class="text-center font-medium btn">Load More ... </a></div>

                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-12  md:col-span-12 lg:col-span-4 xl:col-span-3 ">
                                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                                        <span class="font-medium border-b border-dashed border-pink-400 dark:text-slate-200">Video Posts</span>
                                    </div>
                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">

                                        @foreach(\App\Models\Video::lastN(12) as $video)
                                            <div class="col-span-12 sm:col-span-12  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                                                <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                                                    <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                                            <a href="/video/{{$video->slug}}"> <img src="{{$video->thumb_small}}" alt="" class="max-w-full h-auto rounded-xl">
                                                            </a> </div><!--end col-->
                                                        <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                                            <div class=" h-full flex flex-col p-3">
                                                                <div class="w-full block">
                                                                    <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">{{$video->category->title}}</span>
                                                                    <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{$video->created_at->diffForHumans()}}</span>
                                                                </div>
                                                                <a href="#" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                                                    <a href="/video/{{$video->slug}}">  {{$video->title}}</a>
                                                                </a>
                                                            </div><!--end card-body-->
                                                        </div><!--end col-->
                                                    </div><!--end grid-->
                                                </div> <!--end card-->
                                            </div><!--end col-->
                                        @endforeach

                                    </div><!--end grid-->

                                </div><!--end col-->

                            </div><!--end inner-grid-->
                        </div><!--end container-->
                    </div><!--end section-->
                </div><!--end Main-->

        </div>
    </div>
</x-app-layout>
