<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UpdateOrder_test extends TestCase
{


    public function test_display_updateOrder(){

        $response =$this->call('GET','/Pages_my/UpdateOrder');

        var_dump($response->getContent());  ///get the Update HTML Page

    }

    public function test_display_cancellationConfirm(){

        $crawler =$this->client->request('GET','/Pages_my/CancelButton/{btn_id}');
        $found=$crawler->filter("body:contains('Enter your password to cancel the order')"); ///get the Cancellation Confirm HTML Page

        $this->assertGreaterThan(0,count($found));
    }
    

    public function test_display_updateOrder2(){

        $crawler =$this->client->request('GET','/Pages_my/UpdateOrder2');

        $found =$crawler->filter("body:contains('Your Items of the Order You placed.')");  ///get the Edit Order HTML Page

        $this->assertGreaterThan(0,count($found));
    }

    public function test_Updatebutton(){ //test the Update Button in UpdateOrder

        $this->visit('/Pages_my/UpdateOrder')
            ->press('Update')
            ->see("Items");
    }

    public function test_Cancelbutton(){ // test the cancel oredr in the UPdateorder

        $this->visit('/Pages_my/UpdateOrder')
            ->press('Cancel')
            ->see("/Pages_my/cancellationConfirm");
    }



    public function test_password(){ //enter the correct password and check

        $this->visit('/Pages_my/CancelButton/{btn_id}')
            ->type('Auth::user->password','password')
            ->see("/Pages_my/confirmpassword");

    }



    public function test_wrong_password(){ //enter teh wrong password and check

        $this->visit('/Pages_my/CancelButton/{btn_id}')
            ->type('dhvshlcsda','password')
            ->see("/Pages_my/CancelButton/{btn_id}");

    }


    public function test_display_confirmpassword(){ //enter teh wrong password and check

        $response =$this->call('GET','/Pages_my/UpdateOrder2');

        var_dump($response->getContent());  ///get the Edit Order HTML Page

    }

    public function test_update(){ //Update order item nutton

        $this->visit('/Pages_my/UpdateOrder2')
            ->press('Update')
            ->see("/Pages_my/CancelButton/{btn_id}");

    }



    public function test_cancel(){ //remove order item button

        $this->visit('/Pages_my/UpdateOrder2')
            ->press('Remove')
            ->see("/Pages_my/CancelButton/{btn_id}");

    }








}
