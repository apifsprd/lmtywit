@extends('main.layouts.main')

@section('content')
<div class="row py-5 text-center">
    <div class="col">
        <h1 id="title">{{$post->title}}</h1>
        <p class="text-muted">{{\Carbon\Carbon::parse($post->published_at)->diffForHumans()}} by <a href="/posts?author={{$post->user->username}}">{{$post->user->name}}</a></p>
        <div class="image py-3">
            <img src="{{asset('storage/' . $post->image)}}" alt="">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="article">
            {!! $post->body !!}
        </div>
    </div>
</div>

<div class="row py-5">
        <h4 class="py-3">Tulisan lainnya</h4>
    <div class="col">
        @foreach ($posts as $postt)
        <div class="row">
            <div class="col mb-3">
            <div class="card">
                <div class="card-body">
                <a href="/post/{{$postt->slug}}"><h4 class="card-title">{{$postt->title}}</h4></a>
                <p class="card-text">{{$postt->excerpt}}</p>
                <small class="text-muted">{{\Carbon\Carbon::parse($postt->published_at)->diffForHumans()}} by <a href="">{{$postt->user->name}}</a></small>
                </div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection