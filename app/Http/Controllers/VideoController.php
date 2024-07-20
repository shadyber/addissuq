<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos=Video::paginate(9);
        return view('video.index')->with(['videos'=>$videos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

Auth::check();
$user=Auth::user();
if($user==null){
    return redirect()->route('login');
}
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        auth()->check();
        $lastvideo=  Video::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Video::class,'slug',$request->title.$request->_token),

                'tags'=>$request->input('tags'),
                'url'=>$request->input('url'),
                'lang'=>'en',
                'videoId'=>$request->input('videoId'),
                'iframe'=>$request->input('iframe'),
                'thumb_small'=>$request->input('thumb_small'),
                'thumb_big'=>$request->input('thumb_big'),

                'user_id'=>auth()->user()->id,

                'blog_category_id'=>$request->input('blog_category_id'),
            ]
        );


        $users=User::all();
        foreach ($users as $user){
            //    $user->Notify(new VideoCreatedNotification($lastvideo));
        }

        return redirect()->back()->with('success','Article Created Succusfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $video=Video::where('slug',$slug)->first();
        $video->visit++;
        $video->save();

        SEOMeta::setTitle('Addissuq :  '.$video->title);
        SEOMeta::setDescription(' '.strip_tags($video->detail));
        SEOMeta::setCanonical('https://addissuq.com/blog/'.$video->slug);
        SEOMeta::addMeta('article:published_time', $video->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $video->category->title, 'property');
        SEOMeta::addKeyword($video->tags);

        OpenGraph::setDescription(' '.$video->detail.' tags: '.$video->tags);
        OpenGraph::setTitle('Welcome To Addissuq Addissuq :'.strip_tags($video->detail));
        OpenGraph::setUrl('https://addissuq.com/blog/'.$video->slug);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($video->small_thumb);


        TwitterCard::setTitle('Addissuq'.$video->title);
        TwitterCard::setSite('@LuizVinicius73');


        return view('video.show')->with('video',$video);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
