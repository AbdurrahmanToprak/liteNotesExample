@extends('front.layouts.master')
@section('nav')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
@endsection
