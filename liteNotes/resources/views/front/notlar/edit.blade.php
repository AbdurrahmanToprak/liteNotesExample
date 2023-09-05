@extends('front.layouts.master')
@section('content')
    <h1>Güncelleme Sayfası</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>  {{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('notes_update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$note->id}}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input type="text" name="title" value="{{$note->title}}" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$note->content}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

@endsection

