@extends('main.layouts.main')

@section('content')
<section class="about py-5">
    <div class="row text-center">
      <div class="col">
        <img
          src="/img/apfsprd.jpg"
          alt=""
          class="rounded-circle img-thumbnail"
        />
        <h4 class="mt-3">Hi! &#128075;</h4>
        <h6>
          Iam Apif Supriadi (<a
            href="https://linktr.ee/apifsprd"
            target="_blank"
            rel="noopener noreferrer"
            >@apifsprd</a
          >)
        </h6>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-center">
          Lmtywit is my personal blog talking about anything interesting to me
          (<a href="https://linktr.ee/apifsprd" target="_blank" rel="noopener noreferrer"
            >@apifsprd</a
          >) thats why I named lmtywit, a sort of "Let me tell you what I
          think", thanks for coming n enjoy read~
        </p>
      </div>
    </div>

    <div class="row">
      <div class="card">
        <div class="card-body text-muted text-center">
          This blog was created using laravel
        </div>
      </div>
    </div>
  </section>
@endsection