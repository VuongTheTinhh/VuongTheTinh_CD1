<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product_detailController extends Controller
{
    public function index()
    {
        return view('frontend.product_detail');
    }
}
