<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookReservationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function a_book_can_be_added_to_the_library()
    {
        $response = $this->post('/books',[
            'title' =>'book title one',
            'author' => 'book author one'
        ]);

        $response->assertOk();
        $this->assertCount(1 , Book::all());
    }
}
