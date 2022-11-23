@extends('main.layouts.main')

@section('content')
{{-- HEROPOST ======================================================================== --}}
<div class="row py-3">
    <div class="col">
        <div class="card border-0 mb-3">
            <div style="max-height: 250px; overflow:hidden">
                <img src="{{asset('storage/' . $posts[0]->image)}}" class="card-img-top" alt="image">
            </div>
            <div class="card-body">
                <h3 class="card-title text-center"><a href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a></h3>

                <p class="text-center text-muted">{{\Carbon\Carbon::parse($posts[0]->published_at)->diffForHumans()}} by <a href="/posts?author={{$posts[0]->user->username}}">{{$posts[0]->user->name}}</a></p>

                <p class="card-text text-center">{{$posts[0]->excerpt}}</p>
            </div>
        </div>
    </div>
</div>
{{-- END HEROPOST ======================================================================== --}}

@foreach ($posts->skip(1) as $post)
<div class="row py-3">
    <div class="col">
        <div class="card post mb-5 border-0">
        <div class="row g-0">
            <div class="col-3" style="overflow: hidden">
            <img src="{{asset('storage/' . $post->image)}}" alt="images">
            </div>
            <div class="col-9">
            <div class="card-body p-4">
                <a href="/post/{{$post->slug}}"><h5 class="card-title">{{$post->title}}</h5></a>
                <p class="card-text">{{$post->excerpt}}</p>
                <p class="card-text"><small class="text-muted">{{\Carbon\Carbon::parse($post->published_at)->diffForHumans()}} by <a href="/posts?author={{$post->user->username}}">{{$post->user->name}}</small></p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endforeach

<div class="d-flex justify-content-center py-2">
    {{$posts->links()}}
</div>

@endsection