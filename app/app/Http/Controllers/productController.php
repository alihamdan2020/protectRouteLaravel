<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PhpParser\Node\Stmt\Return_;

class productController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('index',['products'=>$products]);
    }

    public function create(){
        return view('create');
    } 
    public function store(){
        $product=new Product();
        $product->productName=request('productName');
        $product->productPrice=request('productPrice');
        $product->save();
        Return REDIRECT('/');

    }
}
