@extends('front.layouts.master')
@section('content')

        <a class="btn btn-primary" href="{{route('notes_create')}}">Not Oluştur</a><br><br>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

        @if($notes->count() > 0)
            @foreach($notes as $note)
                <div class="bg-white border-bottom shadow-sm ~bg-body rounded-3 mb-3 p-3">

                        <h2 class="font-bold text-2xl" style="color:#1f2937">{{$note->title}}</h2>
                        <p class="mt-3">{{Str::limit($note->content,100)}}</p>
                        <span class="block fs-6 text-muted mt-3 mb-3 opacity-75">{{$note->updated_at->diffForHumans()}}</span>
                       <div class="d-flex justify-content-end">
                           <a class="btn btn-success" href="{{route('notes_show',$note->id)}}">Detayları Görüntüle</a>
                       </div>


                </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{$notes->links()}}
            </div>

        @else
            <div class="alert alert-danger">
                Henüz Not Kaydetmediniz.
            </div>
        @endif

@endsection

