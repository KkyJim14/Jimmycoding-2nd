<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function CartProcess($product_id) {
      $cart = session('mycart');

        $product = Product::find($product_id);

        if (isset($cart[$product->product_id])) {
          $cart[$product->product_id]['qty']++;

          session(['mycart' => $cart]);

          return redirect()->back();
        }
        else {
          $cart[$product->product_id] = [
            'id' => $product->product_id,
            'name' => $product->product_name,
            'qty' => 1,
          ];

          session(['mycart' => $cart]);

          return redirect()->back();
        }
    }
}
