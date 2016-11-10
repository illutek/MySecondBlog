<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <div class="container">
        <h1>My Second Blog</h1>
        <p>By PHP Framework Laravel</p>
    </div>
</header>
<section class="container">
    @yield('content')
</section>
<footer class="container margin-top">
    <div class="small">Herhaling MySimpleBlog - Extra Material design
        <a href="https://bootwatch.com/paper">Paper</a> - <a href="{{ route('admin.posts.index') }}">Admin</a>
    </div>
</footer>


</body>
</html>