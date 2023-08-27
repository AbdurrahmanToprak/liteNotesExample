@extends('front.layouts.master')
@section('content')

        <a class="btn btn-primary" href="{{route('notes_create')}}">Not Oluştur</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif

    <div class="container">
        <div class="col-12">
            <table id="notestable" class="table table-hover">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Başlık</td>
                    <td>Not</td>
                </tr>
                @foreach($notes as $note)
                    <tr>
                        <td>{{$note->id}}</td>
                        <td>{{$note->title}}</td>
                        <td>{{$note->content}}</td>
                        <td>
                            <a class="btn btn-primary" href="#">Detay</a>
                        </td>
                    </tr>

                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

