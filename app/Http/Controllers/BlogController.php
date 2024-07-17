<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$post = Post::whereSlug($slugString)->get();
        //
        //$post = Post::findBySlug($slugString);
        //
        //$post = Post::findBySlugOrFail($slugString);
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
        //use \Cviebrock\EloquentSluggable\Services\SlugService;
        //
        //$slug = SlugService::createSlug(Post::class, 'slug', 'My First Post');
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
