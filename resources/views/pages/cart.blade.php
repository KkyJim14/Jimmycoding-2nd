@extends('layouts.master')

@section('content')
<h1>Cart</h1>
@if(session('mycart'))
@foreach(session('mycart') as $show_cart)
{{$show_cart['name']}}
{{$show_cart['qty']}}
@endforeach
@endif
@endsection
