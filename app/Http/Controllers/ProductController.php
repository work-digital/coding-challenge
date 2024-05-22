<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function get()
    {
        $products = Product::all();
        return response()->json($products);
    }
}
