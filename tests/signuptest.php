<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class signuptest extends TestCase
{


    public function test_signup()
    {
        $this->visit('/signup')
            ->type('dumindu', 'first_name')
            ->type('Akalanka', 'last_name')
            ->type('121', 'quantity')
            ->type('22/12/2016', 'due')
            ->press('submit')
            ->seePageIs('/searchItem');
    }

    public function test_display_home(){


         
            $this->call('POST','/signup');
        $this->assertRedirectedTo('/searchItem');
    }

























}
