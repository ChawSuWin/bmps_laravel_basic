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

    function productList(){
        $product_list=['Apple', 'Mango', 'Orange'];
        return view('product', ['products' => $product_list]);
    }

    function productDetail($product_id){
        return 'This is product for Product ID: '.$product_id;
    }
}