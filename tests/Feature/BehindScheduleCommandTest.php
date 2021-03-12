<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Todo;
use Illuminate\Support\Facades\Mail;



class BehindScheduleCommandTest extends TestCase
{
   
    use RefreshDatabase;
    public function test_command_is_emailing_users_for_pending_todos()
    {
       Mail::fake();
       factory(Todo::class)->create();
      
       $this->artisan('todos:behind-schedule');
      
       Mail::assertNothingSent();
    }
}
