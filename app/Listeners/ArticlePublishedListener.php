<?php

namespace App\Listeners;

use App\Events\ArticlePublishedEvent;
use App\Http\Controllers\ArticleService;

class ArticlePublishedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */


    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ArticlePublishedEvent  $event
     * @return void
     */
    public function handle(ArticlePublishedEvent $event, ArticleService $service)
    {
        $service->ArticlePublishedEmail($event->user, $event->article);
    }
}
