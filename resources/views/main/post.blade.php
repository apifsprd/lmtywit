@extends('main.layouts.main')

@section('content')
<section class="artikel py-5">
    <div class="row">
      <div class="col text-center">
        <h1 id="title">
            {{$post->title}}
        </h1>
        <p class="text-center">{{\Carbon\Carbon::parse($post->published_at)->diffForHumans()}} by {{$post->user->name}}</p>
      </div>
    </div>
    <div class="row mt-4">
      <div id="imgpost">
        <img
          src="{{asset('storage/' . $post->image)}}"
          alt="image"
        />
      </div>
      <p class="text-muted mt-3 text-center">Gambar : {{$post->imgcaption}}</p>
    </div>
    <div class="row">
        <div class="col text">
            {!! $post->body !!}
        </div>
    </div>
  </section>

  <h5 id="more" class="mb-3">Tulisan lainnya dari {{$post->user->name}}</h5>
  @if (count($posts) > 0)
  @foreach ($posts as $postt)
    <div class="row">
        <div class="col mb-3">
        <div class="card">
            <div class="card-body">
            <a href="/post/{{$postt->slug}}"
                ><h5 class="card-title">
                    {{$postt->title}}
                </h5></a
            >
            <small class="text-muted"
                >{{\Carbon\Carbon::parse($postt->published_at)->diffForHumans()}} by {{$postt->user->name}}</small
            >
            </div>
        </div>
        </div>
    </div>
  @endforeach
  @else
  <div class="row">
    <div class="col">
      <div class="card p-5">
        <p class="text-center">
          Saat ini, belum ada tulisan lain dari {{$post->user->name}} <br />
          <a href="/" style="text-decoration: underline"
            >&larr; Baca tulisan lain di #lmtywit</a
          >
        </p>
      </div>
    </div>
  </div>
  @endif

        
    </div>
</div>
@endsection