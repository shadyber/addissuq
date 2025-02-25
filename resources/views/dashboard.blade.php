<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @foreach(\App\Models\Blog::lastN(9) as $blog)
                    <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4 mb-4">
                        <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6  md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                <img src="{{$blog->photo}}" alt="" class="max-w-full h-auto rounded-xl">
                            </div><!--end col-->
                            <div class="col-span-12 sm:col-span-6  md:col-span-8 lg:col-span-8 xl:col-span-8 ">
                                <div class=" h-full flex flex-col p-3">
                                    <div class="w-full block">
                                        <span class="text-[12px] bg-pink-500/10 text-pink-500 dark:text-pink-600 rounded font-medium py-1 px-2 inline-block mb-3">{{$blog->category->title}}</span>
                                        <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2"> {{$blog->created_at->diffForHumans()}}</span>
                                    </div>
                                    <a href="#" class="text-[20px] md:text-3xl lg:text-3xl xl:text-[32px] leading-[30px] mb-5 md:mb-0 font-spectral font-semibold  text-gray-800 dark:text-slate-200 block">
                                        {{$blog->title}}
                                    </a>

                                    <p> {!! substr(strip_tags($blog->detail),0,256 )  !!}</p>
                                    <div class="flex flex-wrap justify-between mt-auto">
                                        <div class="flex items-center">
                                            <div class="w-8 h-8 rounded">
                                                <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="{{\App\Models\User::find($blog->user_id)->profilePhotoUrl}}" alt="Author Photo" />
                                            </div>
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
            </div>
        </div>
    </div>
</x-app-layout>
