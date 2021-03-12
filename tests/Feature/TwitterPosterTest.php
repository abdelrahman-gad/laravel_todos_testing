<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;
use App\Todo;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TodoPostToTwitter;
class TwitterPosterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function _post_to_twitter_is_being_called()
    {
        $this->mock(TwitterPoster::class)->shouldReceive('forUser->post')->once();
        $todo = factory(Todo::class)->create();
        $todo->user->notify(new TodoPostToTwitter($todo));
    }
}
