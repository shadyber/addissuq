<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Videos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg row">
                @foreach($videos as $video)
                    <div class="col-md-6 col-span-6 sm:col-span-6  md:col-span-6 lg:col-span-12 xl:col-span-12 ">
                        <div class="bg-white dark:bg-gray-800/40 backdrop-blur-2xl  rounded-2xl shadow-lg w-full relative p-4">
                            <div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-4 xl:col-span-4 ">
                                    <a href="/video/{{$video->slug}}"> <img src="{{$video->thumb_small}}" alt="" class="max-w-full h-auto rounded-xl"></a>
                                </div><!--end col-->
                                <div class="col-span-12 sm:col-span-6  md:col-span-6 lg:col-span-8 xl:col-span-8 ">
                                    <div class=" h-full flex flex-col p-3">
                                        <div class="w-full block">
                                            <span class="text-[12px] bg-green-500/10 text-green-500 dark:text-green-600 rounded font-medium py-0 px-2 inline-block mb-3">{{$video->category->title}}</span>
                                            <span class="text-slate-700 dark:text-slate-300 font-medium text-xs ms-2">{{$video->created_at->diffForHumans()}}</span>
                                        </div>
                                        <a href="/video/{{$video->slug}}" class="text-lg font-semibold  text-gray-600 dark:text-slate-200 block leading-5 truncate hover:underline hover:underline-offset-[4px]">
                                            {{$video->title}}
                                        </a>
                                    </div><!--end card-body-->
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div> <!--end card-->
                    </div><!--end col-->
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

