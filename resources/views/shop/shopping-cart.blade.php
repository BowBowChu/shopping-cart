@extends('layouts.master')

@section('title')
  Laravel Shopping Cart
@endsection      


@section('content')
   @if(Session::has('cart'))
  <div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <ul class="list-group">
      	 @foreach($products as $product)
      	 <li class="list-group-item">
                                <span class="badge">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="label label-success">{{ $product['price'] }}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
                                        <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
                                    </ul>
                                </div>
                            </li>
        @endforeach
    </ul>
     </div>
  </div>


   <div class="row">
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <strong> Total :{{$totalPrice }} </strong>
   </div>


   </div>
    <hr>
   <div class="row">
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    郵寄寄送
    </label>
    </div>
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    宅配/快遞 
    </label>
    </div>
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    用郵局快捷貨到付款
    </label>
    </div>
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    到取貨付款(到門市取貨時才付款)
    </label>
    </div>
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    到取貨付款(到門市取貨時才付款)
    </label>
    </div>
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    貨到付款
    </label>
    </div>

     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <a href="{{ route('checkout') }}" type="button" class="btn btn-success"> Checkout </a>
   </div>
   </div>
   @else
  <div class="row">
     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
     <h2> No Item in Cart</h2>
   </div>
   </div>
   @endif

@endsection    