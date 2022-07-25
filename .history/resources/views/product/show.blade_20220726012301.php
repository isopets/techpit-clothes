@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
    <div class="prodct">
        <img src="{{asset($product->image)}}" class="product-img" />
        <div class="product__content-header">
            <div class="product__name">{{$product->name}}</div>
            <!-- /.product__name -->
            <div class="product__price">\{{number_format()}}</div>
            <!-- /.product__price -->
        </div>
        <!-- /.product__content-header -->
    </div>
    <!-- /.prodct -->
</div>
