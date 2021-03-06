<?php

namespace App\Events;

use App\Models\User;
use App\Models\Article;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ArticlePublishedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public  $user;
    public  $article;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Article $articel)
    {
        //
        $this->user = $user;
        $this->article = $articel;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
