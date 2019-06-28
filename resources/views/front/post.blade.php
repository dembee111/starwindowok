@extends('front.layouts.app')

@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<!-- blog-details-area start -->
        <section class="blog-details-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="blog-details-wrap">
                            <div class="blog-details-img">
                                <img src="{{ $post->photo->file }}" width="100%" alt="">
                            </div>
                            <div class="blog-details-content">
                                <h3>{{ $post->title }}</h3>
                                <hr>
                                <div class="blog-meta">
                                    <span><i class="fa fa-user"></i> {{ $post->user->name }}</span>
                                    <span><i class="fa fa-comment"></i>&nbsp;уншисан {{ $post->count }}</span>
                                    
                                </div>
                                <p>{!! $post->body !!}</p>
                                <hr>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <aside class="right-sidebar">
                            <div class="search-sidebar mb-30">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Хайлт">
                                    <button type="button" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="category-wrap mb-30">
                                <h3 class="sidebar-title">Үндсэн цэс</h3>
                                <ul>
                                    <li><a href="{{ route('home')}}">Эхлэл</a></li>
                                    <li><a href="{{ route('about')}}">Бидний тухай</a></li>
                                    <li><a href="{{ route('service')}}">Бүтээгдэхүүн</a></li>
                                    <li><a href="{{ route('calculator')}}">Тооцоолуур</a></li>
                                    <li><a href="{{ route('posts')}}">Мэдээлэл</a></li>
                                    <li><a href="{{ route('contact')}}">Холбоо барих</a></li>
                                    
                                </ul>
                            </div>
                            <div class="related-post mb-30">
                                <h3 class="sidebar-title">Холбоотой мэдээлэл</h3>
                                <ul>
                                    @foreach($posts as $post)
                                    <li class="related-post-items">
                                        <div class="post-img" style="margin-right: 10px;">
                                            <a href="{{ route('post', $post->id)}}"><img src="{{ $post->photo->file }}" width="100px" height="100px" alt=""></a>
                                        </div>
                                        <div class="post-info">
                                            <a href="{{ route('post', $post->id)}}">{{ $post->title }}</a>
                                            <p>{{ $post->created_at }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>
                           
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->

@endsection