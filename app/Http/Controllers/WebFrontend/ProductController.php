<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function productPage($product_id, $shop_id){
        return 'This is product page for product id '.$product_id.' of shop '.$shop_id.'.';
    }
}
