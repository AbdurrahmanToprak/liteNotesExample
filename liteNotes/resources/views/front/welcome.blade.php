@extends('front.layouts.master')
@section('content')
    @if(!Auth::check())
    <div class="container">
        <div class="generic-wrapper flex w-full flex-col justify-center text-center">
            <h1 style="color:#0f6674">Tame your work, organize your life</h1>
            <p>Remember everything and tackle any project with your notes, tasks, and schedule all in one place.</p>
            <a class="btn btn-success rounded-sm text-center py-3 px-12 lg:px-20 bg-accent text-white hover:bg-accent-light mt-10 mb-4 self-center" href="/register">
                <span class="align-content-center">Sign Up</span>
            </a> <br>
            <span>Already have an account?
                <a style="color: green" href="/login">Log In</a>
            </span>
        </div>
    </div>
    @endif
    @if(Auth::check())
            <h2 style="color:#0f6674">Merhaba {{Auth::user()->name}}!</h2>
    @endif
    <hr>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                        <h4 class="my-0 font-weight-normal"style="color:#0f6674">Notlarınızı Oluşturun...</h4>
                </div>
                <div class="card-body">
                    <img src="{{asset('asset/image/note.png')}}" height="200px">
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal" style="color:#0f6674">Kaydedin...</h4>
                </div>
                <div class="card-body">
                    <img src="{{asset('asset/image/kayıt.png')}}" height="200px">
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal" style="color:#0f6674">Ve Listeleyin.</h4>
                </div>
                <div class="card-body">
                    <img src="{{asset('asset/image/list.jpg')}}" height="200px">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
