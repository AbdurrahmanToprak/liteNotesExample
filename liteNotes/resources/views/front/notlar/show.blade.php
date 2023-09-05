@extends('front.layouts.master')
@section('content')


        <div class="bg-white p-3 rounded-3">
            <h2 >{{$note->title}}</h2>
            <p class="pt-3">{{$note->content}}</p>
            <span class="block fs-6 text-muted mt-3 opacity-75">{{$note->updated_at->diffForHumans()}}</span>
            <div class="d-flex justify-content-end">
                <a class="btn btn-info mb-3 " href="#">Güncelle</a>
            </div>
        </div>

@endsection
