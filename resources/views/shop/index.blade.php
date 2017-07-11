@extends('layouts.master')

@section('title')
    Laravel Shopping Cart

@endsection

@section('content')

    @if(Session::has('success'))
     <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
       <div id="charge-message" class="alert-success">
         {{  Session::get('success') }}
       </div>
       </div>
    </div>
    @endif 
<br>
   

<div class="row">


 <div class="col-md-6 col-md-offset-3">
    <div class="input-group">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" id="search" name="search" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button type="button"  onclick="search()" class="btn btn-primary btn-md pull-right"  > <span class="glyphicon glyphicon-search" aria-hidden="true"> </span></button>
      </span>                               
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
 
</div><!-- /.row -->
<BR>



    @foreach($products->chunk(3) as $productChunk)
  <div class="row">
     @foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
      <div class="caption">
        <h3>{{ $product->title }}</h3>
        <p class="description ">{{ $product->description }}</p>
        <div class="clearfix"> 
          <div class="pull-left price">{{ $product->price }}</div>
            <a href="{{ route('product.addToCart',['id' =>$product->id]) }}" id="magicAnchor" name="" class="btn btn-success pull-right" role="button">Add to Cart</a>
        </div>
      </div>
    </div>
  </div>
    @endforeach
  </div>


<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div class="btn-toolbar" role="toolbar" aria-label="...">

        
 
      {!! $products->links(); !!}

</div>

  </div>
</div>


 @endforeach
@endsection