<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \DB::table('blog_categories')->insert([
            'title' => 'News',
            'photo' => '/assets/images/bg/news.png',
            'slug' => 'news',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Software',
            'photo' => '/assets/images/bg/software.png',
            'slug' => 'software',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'AI',
            'photo' => '/assets/images/bg/ia.png',
            'slug' => 'ai',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Security',
            'photo' => '/assets/images/bg/security.png',
            'slug' => 'security',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Cyber',
            'photo' => '/assets/images/bg/cyber.png',
            'slug' => 'cyber',
        ]);
    }
}
