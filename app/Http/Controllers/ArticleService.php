<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleService extends Controller
{
    //

    public function createArticel(array $articleArray): Article
    {
        return Article::create([
            "title" => $articleArray["title"],
            "body" => $articleArray["body"],
            "image" => $articleArray["image"],
        ]);
    }

    public function uploadImage(Request $request): ?string
    {
        if($request->hasFile("image")){
            return $request->file("image")->store("image");
        }
        return null;
    }

}
