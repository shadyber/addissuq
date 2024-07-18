<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Video;
use Illuminate\Http\Request;

class SearchController extends Controller
{


    public function  search(Request $request){
        //   $_key=$_GET['key'];
        $blogs = Blog::where('title', 'like', '%' . request('key') . '%')->where('detail', 'like', '%' . request('key') . '%')-> get();
        $videos = Video::where('title', 'like', '%' . request('key') . '%')->where('detail', 'like', '%' . request('key') . '%')-> get();

        return view('search')->with(['blogs'=>$blogs,'videos'=>$videos]);

    }
}
