<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function store(ArticleStoreRequest $request, ArticleService $service)
    {
        $image = $service->uploadImage($request);

        $article = $service->createArticel($request->validate()+["image" => $image]);

        return $article;
    }
}
