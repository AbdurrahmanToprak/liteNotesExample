<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Lite Nots</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary px-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('asset/image/note.jpg')}}" height="30">
            LiteNotes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                     <a class="nav-link active" aria-current="page" href="{{route('notes_index')}}">Notlarım</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link active" href="{{route('notes_create')}}">Oluştur</a>
                                 </li>

                              <!--  <li class="nav-item">
                                     <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                 </li>-->
                            <li class="nav-item dropdown ">
                                <a class="nav-link active dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}" >
                                            @csrf

                                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <div class="btn btn-success">
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        </div>
                            @if (Route::has('register'))
                            <div class="btn btn-success">
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            </div>
                            @endif


                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
<div class="container">

    <div class="mt-4">
        @yield('content')
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
