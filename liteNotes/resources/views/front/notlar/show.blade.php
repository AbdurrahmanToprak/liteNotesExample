@extends('front.layouts.master')
@section('content')


        <div class="bg-white p-3 rounded-3 ">
            <h2 >{{$note->title}}</h2>
            <hr>
            <p class="pt-3 " style="word-break: break-all">{{$note->content}}</p>
            <span class="block fs-6 text-muted mt-3 opacity-75 ">{{$note->updated_at->diffForHumans()}}</span>
            <div class="d-flex justify-content-end">
                    <a class="btn btn-info mb-3 " href="{{route('notes_edit',$note->uuid)}}">Güncelle</a>
                &ensp;
                <a class="btn btn-danger mb-3 " onclick="return confirm('Emin misiniz?')" href="{{route('notes_delete',$note->uuid)}}">Sil</a>

            </div>
        </div>

@endsection
