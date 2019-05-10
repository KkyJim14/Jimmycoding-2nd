<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Product;

class UIViewController extends Controller
{
    public function ShowIndex() {
      $suggest_product = Product::where('product_suggest','1')->get();
      $discount_product = Product::where('product_discount','!=',null)->get();
      $new_product = Product::orderBy('updated_at','desc')->get();
      return view('index',[
                            'suggest' => $suggest_product,
                            'discount' => $discount_product,
                            'new' => $new_product,
                          ]);
    }

    //แสดงหน้า Login
    public function ShowLogin() {

      //เชคว่ามีการลอคอินรึยีง?
      if (session('user_log') == 1) {

        //ถ้ามี Redirect path root
        return redirect('/');
      }
      else {

        //ถ้าไม่มี เปิด view หน้า login
        return view('pages.member.login');
      }
    }

    //แสดงหน้า Register
    public function ShowRegister()  {

      //เชคว่ามีการลอคอินรึยีง?
      if (session('user_log') == 1) {
        //ถ้ามี Redirect path root
        return redirect('/');
      }
      else {
        //ถ้าไม่มี เปิด view หน้า Register
        return view('pages.member.register');
      }
    }

    public function ShowAboutus($locale) {
      App::setLocale($locale);
      return view('pages.about-us');
    }

    public function ShowCart()  {
      return view('pages.cart');
    }
}
