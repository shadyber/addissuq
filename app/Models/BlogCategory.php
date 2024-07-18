<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
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
        return url('/category/'.$this->slug);
    }


    public static function allCategories(){
        return BlogCategory::all();
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

}
