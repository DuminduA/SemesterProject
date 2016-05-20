<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class request_test extends TestCase
{



    public function test_signup()
    {
        $this->visit('/request')
            ->type('book1', 'name')
            ->type('kk', 'describe')
            ->type('0714352771', 'phone')
            ->type('123456', 'password1')
            ->type('123456', 'password2')
            ->type('abcd', 'Address1')
            ->type('abcd', 'Address2')
            ->type('abcd', 'Address3')
            ->type('abcd', 'address4')
            ->press('submit')
            ->seePageIs('/searchItem');
    }





















}
