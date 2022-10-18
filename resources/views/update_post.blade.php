@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('home')}}" class="mb-2 btn btn-sm btn-primary">Geri Dön</a>
                <div class="card">
                    <div class="card-header">{{ __('Postum') }}</div>

                    <form action="{{route('post_update')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$blog_post->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Post Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" >{{$blog_post->content}}</textarea>
                        </div>
                        <input type="hidden" name="blog_post_id" value="{{$blog_post->blog_post_id}}">
                        <button class="btn btn-primary" type="submit">Update</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
