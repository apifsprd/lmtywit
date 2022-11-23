@extends('dashboard.layouts.main')

@section('content')
    <section class="section py-5">
        <div class="row">
            <div class="col-8">
                <div class="card mb-3" style="background-color: #03A9F4">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                            <h4 style="color: white">Hello! {{ Auth::user()->name }}</h4>
                            <p style="color: white">Selamat datang kembali, apa yang sedang kamu pikirkan? yuk tulis isi pikiran mu atau teruskan tulisan kamu sebelumnya </p>
                            <a href="/dashboard/posts/create" class="btn btn-success">Buat tulisan baru</a>
                            <a href="/dashboard/posts" class="btn btn-primary">Selesaikan draft</a>
                          </div>
                      </div>
                      <div class="col-md-4" style="max-height: 150px; overflow:hidden">
                            <img src="/img/undraw.png" alt="" style="width: 100%">
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-4">

            </div>
        </div>
    </section>
@endsection
