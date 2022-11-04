<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;


class ProdukController extends Controller
{
    public function index(){
        // dd($requset->all());die();
        //$type = LaundryType::orderBy('name', 'ASC')->get();
        //$produk = Product::all();
        /**
         
        return response()->json([
            'success' => 1,
            'message' => 'Get Produk Berhasil',
            'produks' => $produk
        ]);
         
         */

        $produk = Product::with('category')->orderBy('name', 'ASC')->get();
        return response()->json([
            'success' => 1,
            'message' => 'Get Produk Berhasil',
            'produks' => $produk
        ]);


    }
}