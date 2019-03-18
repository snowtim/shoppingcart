<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	
	protected function index() {
		$products = Product::all();

		return view('shop.index', compact('products'));
	}
}
