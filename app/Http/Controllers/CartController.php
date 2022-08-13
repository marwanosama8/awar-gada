<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addToCart(Request $request)
    {
        $data = $request->id;
        return $data;
    }
}
