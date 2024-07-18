<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\BlogCategory;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();
        $itemsandblog=array();

        Item::get()->each(function (Item $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/item/{$post->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });

        Blog::get()->each(function (Blog $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/blog/{$post->slug}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });



        BlogCategory::get()->each(function (BlogCategory $post) use ($postsitmap) {

            $postsitmap->add(
                Url::create("/blogcategory/{$post->id}")
                    ->setPriority(0.9)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        });




        foreach (Blog::all() as $item){
            $itemsandblog[]= env('app_url').'/blog/'.$item->slug;
        }



        $fp = fopen(public_path('sitemap.txt'), 'w');

        foreach ($itemsandblog as $line){
            fwrite($fp, print_r($line, TRUE));
            fwrite($fp,"\n");
        }


        fwrite($fp,env('app_url')."/about \n");
        fwrite($fp,env('app_url').'/register'."\n");
        fwrite($fp,env('app_url').'/login'."\n");
        fwrite($fp,env('app_url').'/home'."\n");
        fwrite($fp,env('app_url').'/contact'."\n");
        fwrite($fp,env('app_url').'/faq'."\n");
        fwrite($fp,env('app_url').'/search'."\n");



    }
}
