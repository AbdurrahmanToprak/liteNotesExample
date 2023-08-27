@extends('front.layouts.master')
@section('content')
    <div class="container">
        <div class="row flex-wrap:nowrap">
            <div class="col-md-4 pt-4">
                <h1 style="color:#0f6674">Notlarınızı Oluşturun...</h1>
                <img src="{{asset('asset/image/note.png')}}" height="200px">
            </div>
            <div class="col-4 pt-4">
                <h1 style="color:#0f6674">Kaydedin...</h1>
                <img src="{{asset('asset/image/kayıt.png')}}" height="200px">
            </div>
            <div class="col-4  pt-4">
                <h1 style="color:#0f6674">Ve Listeleyin.</h1>
                <img src="{{asset('asset/image/list.jpg')}}" height="200px">
            </div>
        </div>
    </div>

@endsection
