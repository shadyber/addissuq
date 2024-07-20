<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
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


        SEOMeta::setTitle('Addissuq : Latest News and Information About Crypto Airdrops , Fashion, Sport , Technology , Poletics , Entertainment  ');
        SEOMeta::setDescription('Latest News and Information About Crypto Airdrops , Fashion, Sport , Technology , Poletics , Entertainment  hamster , tapswap, notcoin, telegram, pixelverse, ai, ton,wallet,crypto');
        SEOMeta::setCanonical('https://addissuq.com/blog');

        OpenGraph::setDescription('Latest News and Information About Crypto Airdrops , Fashion, Sport , Technology , Poletics , Entertainment  hamster , tapswap, notcoin, telegram, pixelverse, ai, ton,wallet,crypto');
        OpenGraph::setTitle('Welcome To Addissuq Addissuq : Latest News and Information About Crypto and Air Drops July ');
        OpenGraph::setUrl('https://addissuq.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Addissuq');
        TwitterCard::setSite('@LuizVinicius73');

        return view('blog.index')->with(['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            if(!Auth::user()->id==1) {
                return redirect()->back()->with(['error'=>'You Dont Have a permission to access this page or file ']);
            }
        }

        return view('blog.create')->with(['category'=>BlogCategory::allCategories()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            if(!Auth::user()->id==1) {
                return redirect()->back()->with(['error'=>'You Dont Have a permission to access this page or file ']);
            }
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
    public function show( $slug)
    {
        $blog = Blog::where('slug','LIKE', $slug)->get();
        $blog=$blog[0];
        //$post = Post::whereSlug($slugString)->get();
        //
        //$post = Post::findBySlug($slugString);
        //

        $blog->visit++;
        $blog->save();
        SEOMeta::setTitle('Addissuq :  '.$blog->title);
        SEOMeta::setDescription(' '.strip_tags($blog->detail));
        SEOMeta::setCanonical('https://addissuq.com/blog/'.$blog->slug);
        SEOMeta::addMeta('article:published_time', $blog->created_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', $blog->category->title, 'property');
        SEOMeta::addKeyword($blog->tags);

        OpenGraph::setDescription(' '.$blog->detail.' tags: '.$blog->tags);
        OpenGraph::setTitle('Welcome To Addissuq Addissuq :'.$blog->detail);
        OpenGraph::setUrl('https://addissuq.com/blog/'.$blog->slug);
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::addImage($blog->photo);


        TwitterCard::setTitle('Addissuq'.$blog->title);
        TwitterCard::setSite('@LuizVinicius73');


        if(!$blog==null){
            return view('blog.show')->with(['blog'=>$blog]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            if(!Auth::user()->id==1) {
                return redirect()->back()->with(['error'=>'You Dont Have a permission to access this page or file ']);
            }
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            if(!Auth::user()->id==1) {
                return redirect()->back()->with(['error'=>'You Dont Have a permission to access this page or file ']);
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }else{
            if(!Auth::user()->id==1) {
                return redirect()->back()->with(['error'=>'You Dont Have a permission to access this page or file ']);
            }
        }


    }
}
