<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav mx-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">contact</a></li>



            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle"data-bs-toggle="dropdown">Blogs</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('blogs')}}" class="dropdown-item">All Blogs</a></li>

                    @foreach($categories as $category)
                    <li><a href="{{'$category-blog',['id'=> $category['id']]}}" class="dropdown-item">{{$category['name']}}</a></li>
                    @endforeach



                </ul>
            </li>



        </ul>
    </div>
</nav>

@yield('body')


<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
</body>
</html>

