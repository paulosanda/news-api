<?php

namespace App\Action;

use Illuminate\Support\Facades\Http;

class GetArticles
{
    private $uri;
    private $key;

    public function __construct($uri = null, $key = null)
    {
        $this->uri = env('NEWS_API_URI');
        $this->key = env('NEWS_API_KEY');
    }

    public function execute($endpoint, $subject)
    {
        $articles = Http::get($this->uri . $endpoint . '?' . $subject . '&apiKey=' . $this->key)->json();

        return $articles;
    }
}
