<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function index(){
        $products = DB::table('products')
        ->get();
       return view('products.index', compact('products'));
    }

    public function create(){
       return view('products.create');
    }

    public function store(Request $request){
       dd($request->all());
    }
}

