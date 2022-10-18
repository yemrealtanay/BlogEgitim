@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('home')}}" class="mb-2 btn btn-sm btn-primary">Geri Dön</a>
                <div class="card">
                    <div class="card-header">{{ __('Postum') }}</div>

                    <h1>{{$blog_post->title}}</h1>
                    <p>{{$blog_post->content}}</p>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
