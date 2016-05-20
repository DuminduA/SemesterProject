<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class search_items_test extends TestCase
{


    public function test_display_searchItem(){


        $response = $this->call('GET','/searchItem');
        $this->assertRedirectedTo('/searchItem');
    }






    public function testProceed_btn(){ //test remove items button from cart

        $this->visit('/searchItem')
            ->press('Proceed')
            ->see("/Pages_my/PlaceOrder");
    }



    public function testRequest_btn(){ //test remove items button from cart

        $this->visit('/searchItem')
            ->press('Request')
            ->see("/Pages_my/request");
    }



    public function test_search(){
        $this->visit('/searchItem')
            ->type('Item')
            ->select('Name')
            ->press('Search')
            ->see("Item");
    }

    public function test_search2(){
        $this->visit('/searchItem')
            ->type('Item')
            ->select('category')
            ->press('Search')
            ->see("Item");
    }















}
