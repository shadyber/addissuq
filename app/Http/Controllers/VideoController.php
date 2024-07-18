<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vidos= Video::where('lang',config('app.locale'))->orderBy('id','desc')->paginate(9);
        return view('video.index')->with(['videos'=>$vidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
