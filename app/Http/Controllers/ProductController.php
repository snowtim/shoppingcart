<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

use Session;

class ProductController extends Controller
{
	
	protected function index() {
		$products = Product::all();

		return view('shop.index', compact('products'));
	}

	protected function getAddToCart(Request $request, $id) {
		$product = Product::find($id);
		$oldCart = Session::has('cart') ? Session::get('cart') : null;
		$cart = new Cart($oldCart);
		$cart->add($product, $product->id);

		$request->session()->put('cart', $cart);
		//dd($request->session()->get('cart'));
		return redirect('/');
	}

	protected function shoppingcart() {
		if(!Session::has('cart')) {
			return view('shop.shoppingcart', ['products' => null]);
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		return view('shop.shoppingcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
	}

	protected function pay() {
		if(!Session::has('cart')) {
			return view('shop.shoppingcart');
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		$total = $cart->totalPrice;
		return view('shop.pay', ['total' => $total]);
	}

	protected function paypost() {
		
	}
}
