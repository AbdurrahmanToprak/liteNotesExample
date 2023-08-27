@extends('front.layouts.app')
@section('content')
<a class="btn btn-primary" href="{{route('notes_create')}}">Not Oluştur</a>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@endsection

