<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
</head>
<body>

    <div class="container-fluid header-container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <nav class="header-nav py-4 d-flex justify-content-between"> 
                    <ul class="d-flex align-items-center">
                        <li><a href="/" class="p-3">Home</a></li>
                        <li><a href="{{route('dashboard')}}" class="p-3">Dashboard</a></li>
                        <li><a href="{{route('posts')}}" class="p-3">Post</a></li>
                    </ul>
                    <ul class="d-flex flex-wrap align-content-center" >
                        @auth
                            <li class="d-flex"><a href="" class="p-3">{{auth()->user()->name}}</a></li>
                            <li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="header-btn p-3">Logout</button>
                                </form>
                            </li>
                        @endauth
                        @guest                    
                            <li><a href="{{route('login')}}" class="p-3">Login</a></li>
                            <li><a href="{{route('register')}}" class="p-3">Register</a></li>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>