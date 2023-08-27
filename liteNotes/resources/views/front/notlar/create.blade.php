@extends('front.layouts.app')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach($errors->all() as $error)
                        <li>  {{$error}}</li>
                        @endforeach
                </ul>
        </div>
    @endif

    <form action="{{route('notes_store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input type="text" name="title" class="form-control" placeholder="Lütfen Not Başlığı Giriniz" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik</label>
            <textarea name="content" class="form-control" placeholder="Lütfen Not İçeriğini Giriniz " id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>

@endsection

