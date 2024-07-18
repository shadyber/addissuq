<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::paginate(9);
        return view('blog.index')->with(['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('blog.create')->with(['category'=>BlogCategory::allCategories()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!Auth::user()->id==1){
            return redirect()->back()->with('error','You Don\'t Have This Permissions');
        }

        $request->validate([
            'title'=>'required',
            'detail'=>'required',
            'blog_category_id'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        if($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);        }

//dd($request);
        $lastblog=  Blog::create([
                'title'=>$request->input('title'),
                'detail'=>$request->input('detail'),
                'slug'=>SlugService::createSlug(Blog::class,'slug',$request->title.$request->_token),
                'photo'=>env('APP_URL').'/images/'.$imageName,
                'thumb'=>env('APP_URL').'/images/'.$imageName,
                'tags'=>$request->input('tags'),
                'lang'=>$request->input('lang'),

                'user_id'=>auth()->user()->id,

                'blog_category_id'=>$request->input('blog_category_id'),
            ]
        );


        $users=User::all();
        foreach ($users as $user){
            //  $user->Notify(new BlogCreatedNotification($lastblog));
        }

        return redirect()->back()->with('success','Article Created Succusfully!');



    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //$post = Post::whereSlug($slugString)->get();
        //
        //$post = Post::findBySlug($slugString);
        //
        //$post = Post::findBySlugOrFail($slugString);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
