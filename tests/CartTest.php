<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartTest extends TestCase
{

    public function test_display_cart_page(){

        $response =$this->call('GET','/Pages_my/PlaceOrder');
        var_dump($response->getContent());  ///get the cart HTML Page

    }
    public function test_display_ThankYou_page(){

        $response =$this->call('GET','/Pages_my/ThankYou');

        var_dump($response->getContent());  ///get the ThankYou HTML Page

    }

    public function testRemovebtn(){ //test remove items button from cart

        $this->visit('/Pages_my/PlaceOrder')
            ->press('Remove')
            ->see("Cart");
    }

    public function testproceedOdr(){ //test ProceedOrder button in Cart

        $crawler =$this->client->request('GET','/Pages_my/UpdateOrder2');

        $found =$crawler->filter("body:contains('Thank you. It is a pleasure to help you
        ')");  ///get the Edit Order HTML Page

        $this->assertGreaterThan(0,count($found));
    }


















}


