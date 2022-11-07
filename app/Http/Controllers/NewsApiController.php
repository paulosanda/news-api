<?php

namespace App\Http\Controllers;

use App\Action\GetArticles;

class NewsApiController extends Controller
{
    public function get_tech_news()
    {
        $endpoint = '/top-headlines';
        $subject = 'sources=techcrunch';

        $articles = app(GetArticles::class)->execute($endpoint, $subject);
        // dd($articles['articles']);
        return view('news', compact('articles'));
    }
}
