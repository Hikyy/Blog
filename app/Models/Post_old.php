<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post_old
{

    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;

    }

    public static function all()
    {
        // $files =  File::files(resource_path("post/"));
        // return array_map(fn($file) => $file ->getContents(), $files);

        return cache()->rememberForever('posts.all', function(){

            return collect(File::files(resource_path("post")))
            ->map(fn($file) =>YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
    
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
                ))
            ->sortBy('date');

        });


    }

    public static function find($slug)
    {
    //     if(! file_exists($path = resource_path("post/{$slug}.html"))){
    //         throw new ModelNotFoundException();
    //     }

    // return cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));

    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
     
    }

    public static function findorFail($slug)
    {



    $post = static::find($slug);

    if(! $post){
        throw new ModelNotFoundException();
    }

    return $post;
     
    }
}