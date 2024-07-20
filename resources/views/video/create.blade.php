<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">



                <form method="post" action="/video" class="ajaxform" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="videoId" id="videoId" value="xxx">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="url  ">{{__('Video')}} Url:  </label>
                    <div class="col-sm-10"><small> Ctrl + V to Past</small>
                        <input type="url"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  id="url" name="url" placeholder="Video Url" onchange="getVideo();">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="title">{{__('Title')}}:</label>
                    <div class="col-sm-10">
                        <input type="text" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  id="title" name="title" placeholder="{{__('Enter')}} {{__('Title')}}" required>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label col-sm-2" for="detail">Detail Text</label>
                    <div class="col-sm-10">
                <textarea  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  id="detail" name="detail" placeholder="{{__('Enter')}} {{__('Detail')}}" required>
                </textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="blog_category_id">{{__('Category')}}:</label>
                    <div class="col-sm-10">
                        <select name="blog_category_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"  name="blog_category_id">
                            @foreach(\App\Models\BlogCategory::allCategories() as $category)
                                <option value="{{$category->id}}">{{__($category->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

               <input type="hidden" value="en">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="tags">Tags #:</label>
                    <div class="col-sm-10">
                        <input type="text"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" id="tags" name="tags" placeholder="Put a Tags for Search Purpose">
                    </div>
                </div>

                <input type="hidden" class="form-control" id="thumb_small" name="thumb_small" placeholder="Video Thumbnile">



                <input type="hidden" class="form-control" id="thumb_big" name="thumb_big" placeholder="Video Thumbnile Big">

                <input type="hidden" id="iframe" name="iframe">

                <div class="form-group">

                        <button type="submit" class="btn btn-dark bg-blend-darken form-control-color">Submit</button>

                </div>
           </form>



                <script>
                    $(document).ready(function(){

                        $('.ajaxform').submit(function(e){
                            e.preventDefault();
                            var url=$(this).attr("action");
                            var method=$(this).attr("method");

                            $.ajax({
                                url: url,
                                type: method,
                                data:  new FormData(this),
                                contentType: false,
                                cache: true,
                                processData:false,
                                beforeSend: function(){


                                },
                                success: function(data)
                                {
                                    $(this).find("button[type='submit']").prop('hidden',true);

                                },
                                error: function(err)
                                {

                                }
                            });
                        });
                    });


                    function jQ_append(id_of_input, text){

                        document.getElementById(id_of_input).value = text;
                    }

                    function getVideoId(url){
                        if(url.indexOf('?') != -1 ) {
                            var query = decodeURI(url).split('?')[1];
                            var params = query.split('&');
                            for(var i=0,l = params.length;i<l;i++)
                                if(params[i].indexOf('v=') === 0)
                                    return params[i].replace('v=','');
                        } else if (url.indexOf('youtu.be') != -1) {
                            return decodeURI(url).split('youtu.be/')[1];
                        }
                        return null;
                    }

                    function getVideo(){


                        var url=document.getElementById('url').value;

                        var vid=getVideoId(url);

                        var thumb_small='https://i3.ytimg.com/vi/'+vid+'/mqdefault.jpg';

                        var thumb_big='https://i3.ytimg.com/vi/'+vid+'/maxresdefault.jpg';

                        var iframe='<iframe width="100%"  src="https://www.youtube.com/embed/'+vid+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

                        jQ_append('videoId', vid);

                        jQ_append('thumb_small', thumb_small);
                        jQ_append('thumb_big', thumb_big);
                        jQ_append('iframe', iframe);
                        document.getElementById("preview").innerHTML=iframe;
                    }
                </script>
            </div>
        </div>
    </div>
</x-guest-layout>
