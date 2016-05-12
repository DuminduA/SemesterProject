<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;

class Cart extends Model
{
    public $CartItems= array(1,2);
    private $TotalPrice;
    private $TotalItems;

}
