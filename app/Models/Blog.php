<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getlink(){
        return url('/blog/'.$this->slug);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }




    public static function lastN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('id','desc')->take($n)->get();
    }

    public static function trandinN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }


    public static function popularN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }

    public static function featuredN($n){
        return Blog::query()
            ->where('tags', 'LIKE', "%featured %")
            ->where('lang',config('app.locale'))
            ->orderBy('id','desc')

            ->get();

    }




}
