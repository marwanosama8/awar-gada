<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductsCollResourses;
use App\Http\Resources\ProductsResources;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    public function productsGrid()
    {
        $products = Product::find(1);
        return  ProductsResources::collection(Product::all()->take(10));
    }

    public function featureProd()
    {
         $products = Product::latest()->take(1)->get();
        return ProductsResources::collection($products);
    }
}
