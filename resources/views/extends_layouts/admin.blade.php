<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Admin - MuSecondBlog</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<div class="admin-nav">
    <a href="{{ route('blog.index') }}" class="home-icon">
        <i class="fa fa-home"></i>
    </a>
    <a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i> </a>
</div>
<header>

    <div class="container">
        <h1>Admin - MySecondBlog</h1>
    </div>
</header>
<main class="container">

    @include('admin.posts.message')

    @yield('content')
</main>
<footer>
    <div class="container">
        &copy; {{ date('Y') }} | CVO De verdieping
    </div>
</footer>

</body>
</html>