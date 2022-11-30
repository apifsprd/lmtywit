@extends('main.layouts.main')

@section('content')
 <!-- heropost -->
 <div class="row py-3">
    <div class="col">
      <div class="heropost card border-0 mb-3">
        <div id="img">
          <img
            src="{{asset('storage/' . $posts[0]->image)}}"
            class="card-img-top"
            alt="image"
          />
        </div>
        <div class="card-body">
          <h3 class="card-title text-center">
            <a href="/post/{{$posts[0]->slug}}">{{$posts[0]->title}}</a>
          </h3>

          <p class="text-center text-muted">
            {{\Carbon\Carbon::parse($posts[0]->published_at)->diffForHumans()}} by {{$posts[0]->user->name}}
          </p>

          <p class="card-text text-center">
            {{$posts[0]->excerpt}}
          </p>

          <p class="text-center">
            <a href="/post/{{$posts[0]->slug}}">Baca selengkapnya &rarr;</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- /heropost -->

@foreach ($posts->skip(1) as $post)
<div class="posts row py-3">
    <div class="col-4">
      <div id="img">
        <img
          src="{{asset('storage/' . $post->image)}}"
          class="card-img-top"
          alt="image"
        />
      </div>
    </div>
    <div class="col-8 align-self-center">
      <h4 id="title">
        <a href="/post/{{$post->slug}}">
            {{$post->title}}
        </a>
      </h4>
      <p>{{\Carbon\Carbon::parse($post->published_at)->diffForHumans()}} by {{$post->user->name}}</p>
    </div>
  </div>
@endforeach

<div class="d-flex justify-content-center py-2">
    {{$posts->links()}}
</div>

@endsection