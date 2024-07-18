<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
class Video extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'detail',
        'videoId',
        'url',
        'thumb_big',
        'thumb_small',
        'iframe',
        'slug',
        'lang',
        'tags',
        'user_id',
        'blog_category_id',
    ];




    public function getlink(){
        return url('/video/'.$this->slug);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }




    public static function lastN($n){
        return Video::where('lang',config('app.locale'))->orderBy('id','desc')->take($n)->get();
    }

    public static function trandinN($n){
        return Video::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }


    public static function popularN($n){
        return Video::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }

    public static function featuredN($n){
        return Video::query()
            ->where('tags', 'LIKE', "%featured %")
            ->where('lang',config('app.locale'))
            ->orderBy('id','desc')

            ->get();

    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

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
}
