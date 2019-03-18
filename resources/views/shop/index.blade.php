@extends('layouts.master')

@section('title')
	Laravel Shopping Cart
@endsection

@section('content')
@foreach($products->chunk(3) as $productchunk)
  <div class="row">
    @foreach($productchunk as $product)
      <div class="col-sm-6 col-md-4">
        <div class="card" style="width: 12rem;">
          <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $product->title }}</h5>
              <p class="card-text">{{ $product->description }}</p>
            <div class="clearfix">
              <div class="pull-left price">${{ $product->price }}</div>
            </div>
              <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
      </div>
    @endforeach
  </div>
@endforeach
@endsection