<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class signin_form_test extends TestCase
{


    public function test_signup()
    {
        $this->visit('/signup')
            ->type('d@g.com', 'email')
            ->type('123456', 'password')
            ->press('submit')
            ->seePageIs('/searchItem');
    }

    public function test_display_home(){


        $response = $this->call('POST','/signinform');
        $this->assertRedirectedTo('/searchItem');
    }


























}
