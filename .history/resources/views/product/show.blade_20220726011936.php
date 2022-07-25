@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
    <div class="prodct">
        <img src="{{asset($product->image)}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
    </div>
    <!-- /.prodct -->
</div>
