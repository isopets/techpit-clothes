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
    <div class="container"><a class="navbar-brand"  href="{{route('product.index')}}">{{config('app.name', 'Laravel')}}"></a> <!-- /.navbar-brand -->
    a.fas <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    </div>
    <!-- /.container -->
</nav>
</body>
</html>
