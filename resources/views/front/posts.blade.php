@extends('front.layouts.app')

@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<!-- blog-area start -->
        <section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">

                    @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                <img src="{{ $post->photo->file }}" alt="" width="345px" height="282px" />
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> {{ $post->user->name }}</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i>{{ $post->count }}</a></li>
                                    </ul>
                                </div>
                                <h3><a href="blog.html">{{ $post->title }}</a></h3>
                                <p>{!! str_limit($post->body, 100) !!}</p>
                                <a href="{{ route('post', $post->id)}}" class="btn-style">Дэлгэрэнгүй</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
                <div class="row">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
        <!-- blog-area end -->

@endsection