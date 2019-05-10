@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>สินค้าแนะนำ</h1><hr>
    </div>
  </div>
  <div class="row">
    @foreach($suggest as $show_suggest)
    <div class="col-3">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show_suggest->product_name}}</h5>
          <p class="card-text">{{$show_suggest->product_price}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <h1>สินค้าลดราคา</h1><hr>
    </div>
    <div class="row">
      @foreach($discount as $show_discount)
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$show_discount->product_name}}</h5>
            <p class="card-text">{{$show_discount->product_price}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <h1>สินค้ามาใหม่</h1><hr>
    </div>
    <div class="row">
      @foreach($new as $show_new)
      <div class="col-3">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$show_new->product_name}}</h5>
            <p class="card-text">{{$show_new->product_price}}</p>
            <a class="btn btn-primary" href="/cart/{{$show_new->product_id}}">Take in Cart</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
