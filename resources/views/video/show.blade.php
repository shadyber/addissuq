<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <img class="mr-4 w-16 h-16 rounded-full" src="{{$video->user->profilePhotoUrl}}" alt="{{$video->user->name}}">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$video->user->name}}</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">{{$video->user->name}}</p>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$video->created_at->diffForHumans()}}</time></p>
                                </div>
                            </div>
                        </address>
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">

                            {{$video->title}}
                        </h1>
                    <div class="m-4 p-4">


                        <iframe width="100%"
                                height="315"
                                src="https://www.youtube.com/embed/{{$video->videoId}}?start=5"
                                frameborder="0"
                                allow="accelerometer;
                                     autoplay;
                                     encrypted-media;
                                      gyroscope;
                                       picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    </header>




                    {!!$video->detail !!}



                    <section class="not-format">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                        </div>
                        <form class="mb-6">
                            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="6"
                                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                          placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit"
                                    class="btn btn-dark">
                                Post comment
                            </button>
                        </form>




                    </section>
                </article>
            </div>
        </main>

        <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800">
            <div class="px-4 mx-auto max-w-screen-xl">
                <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach(\App\Models\Blog::popularN(4) as $bl)
                        <article class="max-w-xs">
                            <a href="/blog/{{$bl->slug}}">
                                <img src="{{$bl->thumb}}" class="mb-5 rounded-lg" alt="{{$bl->title}}">
                            </a>
                            <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                                <a href="#">{{$bl->title}}</a>
                            </h2>
                            <p class="mb-4 text-gray-500 dark:text-gray-400">{{ substr(strip_tags($bl->detail),0,64) }}</p>

                        </article>
                    @endforeach


                </div>
            </div>
        </aside>



    </div>
</x-app-layout>
