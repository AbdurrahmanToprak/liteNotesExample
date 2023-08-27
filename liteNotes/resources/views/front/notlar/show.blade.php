@extends('front.layouts.master')
@section('content')
    <div class="container">

            @foreach($notes as $note)
                <div class="row">
                    <div class="col-md-12 border-bottom">
                        <h1 style="color:#1f2937">{{$note->title}}</h1>
                        <p>{{$note->content}}</p><br>
                        <p><a class="btn btn-primary" href="#">Detayları Görüntüle</a></p>
                    </div>
                </div><br><br>

            @endforeach
    </div>
@endsection
