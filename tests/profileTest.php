<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class profileTest extends TestCase
{

    public function test_display_myprofile(){

        $crawler =$this->client->request('GET','/profile');

        $found =$crawler->filter("body:contains('Full Name')");  ///get the Edit Order HTML Page

        $this->assertGreaterThan(0,count($found));

    }
    
    public function test_edit(){


        $this->call('POST','/profile');
        $this->assertRedirectedTo('/profile');
    }


















}
