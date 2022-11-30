@extends('dashboard.layouts.main')

@section('content')
<section class="section py-3">
    <form action="/dashboard/posts/{{$post->slug}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <input class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title" id="title" value="{{old('title', $post->title)}}" autofocus>
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    @if($errors->any())
                    <div class="text-danger">
                        {{$errors->first()}}
                    </div>
                    @endif 
                </div>
                <div class="card-body">
                    @error('body')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{old('body', $post->body)}}">
                    <trix-editor input="body"></trix-editor>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-success btn-lg" type="submit" name="status" value="1"><i class="bi bi-send-fill"></i> Publish</button>
                        <button type="submit" class="btn btn-outline-secondary" name="status" value="0">Save to draft</button>
                    </div>
                    
                    <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
                    @if ($post->image)
                    <img src="{{asset('storage/' . $post->image)}}" alt="" class="img-preview img-fluid py-3">
                    @else
                        <img class="img-preview img-fluid py-3">
                    @endif
                    <img class="img-preview img-fluid py-3">
                    <input type="hidden" name="oldImage" value="{{$post->image}}">
                    <input class="form-control" name="image" type="file" id="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                    <div class="py-3">
                        <div class="form-floating">
                            <textarea
                              class="form-control @error('imgcaption') is-invalid @enderror"
                              name="imgcaption"
                              placeholder="Leave a comment here"
                              id="floatingTextarea"
                            >{{$post->imgcaption}}</textarea>
                            @error('imgcaption')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                            <label for="floatingTextarea">Image Caption</label>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>

  <script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
