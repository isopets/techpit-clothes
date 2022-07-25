@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
    <div class="prodct">
        <img src="{{asset($product->image)}}" class="product-img" />
        div.product__content-header>div.product__name{{{$product->}}}
    </div>
    <!-- /.prodct -->
</div>
