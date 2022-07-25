@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
    <div class="prodct">
        <img src="{{asset($product->image)}}" class="product-img" />
        <div class="product__content-header">
            <div class="product__name">{{$product->}}</div>
            <!-- /.product__name -->
        </div>
        <!-- /.product__content-header -->
    </div>
    <!-- /.prodct -->
</div>
