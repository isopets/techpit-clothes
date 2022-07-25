<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品一覧 | {{ config('app.name', 'Laravel')}}</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand"  href="{{route('product.index')}}">{{config('app.name', 'Laravel')}} </a>
    <a class="fas fa-shopping-cart" href="#"></a>
    </div>
</nav>
</body>
<div class="jumbotron top-img">
    <p class="text-center text-white top-img-text">{{config('app.name', 'Laravel')}}</p>
</div>
<div class="container"><div class="top__title text-center">All Products</div>
<div class="row">@foreach ($produ</div>
<!-- /.row -->
<!-- /.top__title text-center --></div>
<!-- /.container -->
</html>
