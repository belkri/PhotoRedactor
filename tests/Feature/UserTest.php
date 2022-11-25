<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_main_page_shows_all_users()
    {
        $this->get('/')->assertSee("Show all Users");

    }
    public function test_main_page_show_users_one_by_one()
    {
        $this->get('/')->assertSee("Show User number 6");

    }
}
