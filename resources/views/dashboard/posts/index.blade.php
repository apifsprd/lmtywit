@extends('dashboard.layouts.main')

@section('content')
<section class="section py-3">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success!</strong> {{session('success')}}.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <a href="/dashboard/posts/create" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Create new post</a>
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created at</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td width="60%">{{$post->title}}</td>
                                <td>{{date('M d, Y', strtotime($post->created_at));}}</td>
                                <td>
                                    @if ($post->status == 0)
                                    <span class="text-secondary fw-bold"><i class="bi bi-archive-fill"></i> Draft</span>
                                    @else
                                    <span class="text-success fw-bold"><i class="bi bi-send-check-fill"></i> Published</span><br>
                                    <small>at {{date('M d, Y', strtotime($post->published_at));}}</small>
                                    @endif
                                </td>
                                <td>
                                    <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning badge">Edit</a>
                                    @if ($post->status == 1)
                                    <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" name="status" value="0" class="btn btn-danger badge"> Hide</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    
        </div>
    </div>
</section>
@endsection
