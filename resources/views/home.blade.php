@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <button class="mb-2 btn btn-sm btn-primary">Yeni Post Ekle</button>
                <div class="card">
                    <div class="card-header">{{ __('Blog Postlarım') }}</div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blog_posts as $post)
                        <tr>
                            <th scope="row">{{$post->blog_post_id}}</th>
                            <td>{{$post->title}}</td>
                            <td><a href="{{route('post', $post->blog_post_id)}}">{{$post->content}}</a></td>
                            <td>{{$post->category->name}}</td>
                            <td><a class="btn btn-sm btn-danger m-1" href="{{route('delete_post', $post->blog_post_id)}}">Delete Post</a> <a class="btn btn-sm btn-info m-1" href="{{route('update_post', $post->blog_post_id)}}">Update Post</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
