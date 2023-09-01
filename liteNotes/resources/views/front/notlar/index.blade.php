@extends('front.layouts.master')
@section('content')

        <a class="btn btn-primary" href="{{route('notes_create')}}">Not Oluştur</a><br><br>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        @foreach($notes as $note)
            <div class="card mt-3">

                <div class="card-header">
                    <h1 style="color:#1f2937">{{$note->title}}</h1>
                </div>

                    <div class="card-body">
                            <p>{{$note->content}}</p><br>
                            <p><a class="btn btn-success" href="#">Detayları Görüntüle</a></p>
                    </div>
            </div>
        @endforeach
@endsection

