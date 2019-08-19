@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">{{$post->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{$post->body}}
                </div>
                <div class="card-footer text-muted">
                        {{$post->created_at}}
                        <span class="float-right">{{$post->author}}</span>
                </div>
            </div>
            <br>
            @endforeach

        </div>
    </div>
</div>
@endsection
