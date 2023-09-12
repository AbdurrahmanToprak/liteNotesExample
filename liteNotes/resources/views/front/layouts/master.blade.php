<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>Lite Nots</title>
</head>
<body style="background-color: #e2e2e2">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{\Illuminate\Support\Facades\Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div class="block fs-6 text-muted px-4 py-2 mt-3 opacity-75" style="font-size: small">
                                        {{ __('Manage Account') }}
                                    </div>
                                    <a class="dropdown-item " href="{{ route('profile.show') }}"> Profile </a>
                                    <div class="dropdown-divider"></div>

                                        <form method="POST" action="{{ route('logout') }}" >
                                            @csrf

                                            <a class="dropdown-item" style="color: red" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>

                                </div>
                            </li>
                        </ul>
                    @else

                        <div class="btn btn-success">
                        <a style="color: white" href="{{ route('login') }}" >Log in</a>
                        </div>
                            @if (Route::has('register'))
                            <div class="btn btn-success">
                                <a style="color: white" href="{{ route('register') }}">Register</a>
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
<hr>
<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{route('welcome')}}" class="nav-link px-2 text-muted">Ana Sayfa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hakkımızda</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 LiteNotes, Inc</p>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
