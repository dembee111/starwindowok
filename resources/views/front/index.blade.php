@extends('front.layouts.app')


@section('slider')

@include('front.layouts.partials.slider')

@endsection


@section('content')

<!--card heseg-->
          <section class="blog-area ptb-140 bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-10  col-xs-12 wow fadeInUp">
                        <div class="section-title section-title2">
                            <h2>Зөвлөгөө</h2>
                            @block('main-text', 'Index Posts text')
                               <p>Вакум хаалга, цонхны арчилгаа зөвлөгөө ашиглалтын талаарх мэдээлэл.</p>
                            @endblock
                            
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach($posts as $post)
                        <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                            <div class="blog-wrap">
                                <div class="blog-img">
                                    <img src="{{ $post->photo->file }}" alt="" width="345px" height="282px"/>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>{{ $post->user->name }}</a></li>
                                            <li><a href="#"><i class="fa fa-comment"></i>{{ $post->count }}</a></li>
                                            
                                        </ul>
                                    </div>
                                    <h3><a href="blog.html">{{ $post->title }}</a></h3>
                                    <p>{!! str_limit($post->body, 100) !!} </p>
                                    <a href="{{ route('post', $post->id)}}" class="btn-style">Дэлгэрэнгүй</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <section class="about-area pb-140 about-area2 mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 wow fadeInLeft">
                        <div class="about-wrap">
                            <h2>Биднийг сонгосноор</h2>
                            @block('ads-text1', 'Index Our Advantage')
                               <p>Бид хэрэглэгч таньд чанартай, найдвартай, түргэн шуурхай үйлчилгээг хүргэхдээ байнга таатай байх болно.</p>
                            @endblock
                            @block('ads-text2', 'Index Our Advantage')
                            <p>Манай хамт олон энэ салбартаа анхдагчдын нэг бөгөөд олон жилийн ажлын туршлага бүүтээлч хамт олны хүчээр бид таньд давуу талыг олгодог билээ. Үүнд:</p>
                            @endblock
                            <ul>
                                @block('ads-li', 'Index Our Advantage li')
                                <li>Олон жилийн туршлага бүтээлч хамт олон.</li>
                                <li>Бид зөвхөн дэлхийд тэргүүлэгч шилдэг технологиудыг ашигладаг.</li>
                                <li>Дэлхийд зөвшөөрөгдсөн стандартууд.</li>
                                <li>Бид энэ салбартаа анхдагчдын нэг.</li>
                                <li>Уян хатан үнийн санал.</li>
                                <li>Чанартай засвар, суурьлуулалтын үйлчилгээ.</li>
                                <li>Мэргэшисэн найрсаг бүтээлч хамт олон.</li>
                                @endblock
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 wow fadeInRight">
                        <div class="row mt-60">
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items mb-30">
                                    <i class="fa fa-diamond"></i>
                                    <h3>Олон жилийн туршлага бүтээлч хамт олон</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items mb-30">
                                    <i class="fa fa-briefcase"></i>
                                    <h3>Дэлхийд Зөвшөөрөгдсөн Стандартууд</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12 col">
                                <div class="about-items mb-30">
                                    <i class="fa fa-bookmark"></i>
                                    <h3>Уян Хатан Үнийн Санал</h3>
                                </div>
                            </div><div class="col-sm-6 col-xs-12 col">
                                <div class="about-items">
                                    <i class="fa fa-database"></i>
                                    <h3>Чанартай найдвартай бүтээгдэхүүн</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-area  parallax black-opacity wow fadeInUp"  data-speed="5" data-bg-image="assets2/images/bg/video_back.jpg">
            <h2 class="hidden">Video area</h2>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="video-wrap text-center">
                                    <a href="https://www.youtube.com/watch?v=-gxDGYAzjIg" class="video-popup" >
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



              <!-- team-area start -->
    <section class="team-area ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title text-center">
                        <h2>ЦОНХНЫ ЦОГЦ ШИЙДЭЛ </h2>
                        <p>Бүгдийг нэг дороос</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('assets2/images/star/team/1.jpg')}}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3><a href="#">Хуванцар хүрээтэй цонх,хаалга</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('assets2/images/star/team/2.jpg')}}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3><a href="#">Mеталл хүрээтэй цонх, хаалга</a>
                                    <h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('assets2/images/star/team/3.jpg')}}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3><a href="#">Цонхны амалгаа</br>&nbsp;</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="{{ asset('assets2/images/star/team/4.jpg')}}" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3><a href="#">Цонхны тавцан</br>&nbsp;</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- team-area end -->
        

        

        <!-- brand-area start -->
    <section class="brand-area bg-img-2 black-opacity ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp">
                    <div class="section-title section-title2">
                        <h2>Хамтрагч байгуулагууд</h2>
                        @block('vendor-text', 'Index Our vendor text')
                        <p>Манай компани 2003 оноос хойш 200 гаруй жижиг том төсөл хөтөлбөрүүдэд өөрсдийн бараа бүтээгдэхүүнээ суурьлуулж гүйцэтгэсэн байна. Та ч мөн бидэнтэй хамтран ажиллах бүрэн боломжтой юм. </p>
                        @endblock
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="brand-active">
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/buyan-2.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/buyant-ukhaa.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/crystall-1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/crystal-town.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/hatad-villa-1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/mandakh1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/portfolio/tsoba-1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

        <!--Zahialaga manager-->
        <section class="team-area team-area2 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp mt-60">
                        <div class="section-title section-title2">
                            <h2>Захиалгийн менежер</h2>
                            @block('manager-text', 'Index Our manager text')
                            <p>Та манай захиалгийн менежерүүдтэй утсаар болон имэйл, сошиал гээд бүхий сувгаар холбогдож түргэн шуурхай үйлчлүүлэх боломжтой.</p>
                            @endblock
                        </div>
                    </div>
                </div>
                <div class="row">



                    @if(count($managers) > 0)
                       @foreach($managers as $manager)
                             <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                                <div class="team-wrap2">
                                    <div class="team-img">
                                        <img src="{{ $manager->photo->file }}" alt="" />
                                        <div class="overlay">
                                            <h3>{{ $manager->name }}</h3>
                                            <span>Менежер</span>
                                            <ul>
                                                <li><p>Утас: {{ $manager->phone->phone }}</p></li>
                                                <li><p>имэйл: {{ $manager->email }}</p></li>
                                            </ul>
                                                
                                                
                                            
                                            <ul>
                                                @foreach($social as $s)
                                                <li><a href="{{ $s->url }}"><i class="fa fa-{{ $s->name }}"></i></a></li>
                                                
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="team-content">
                                        <h3>{{ $manager->name }}</h3>
                                        <p>Менежер</p>
                                    </div>
                                </div>
                            </div>

                       @endforeach

                    @else
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".1s">
                        <div class="team-wrap2">
                            <div class="team-img">
                                <img src="{{ asset('assets2/images/team/1.jpg') }}" alt="" />
                                <div class="overlay">
                                    <h3>Б. Ганбаяр</h3>
                                    <span>Менежер</span>
                                    <ul>
                                        <li><p>Утас: 91113455</p></li>
                                        <li><p>имэйл: nyambayar@gmail.com</p></li>
                                    </ul>
                                        
                                        
                                    
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3>Б. Ганбаяр</h3>
                                <p>Менежер</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                        <div class="team-wrap2">
                            <div class="team-img">
                                <div class="overlay">
                                    <h3>Б. Ганбаяр</h3>
                                    <span>Менежер</span>
                                    <ul>
                                        <li><p>Утас: 91113455</p></li>
                                        <li><p>имэйл: nyambayar@gmail.com</p></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ asset('assets2/images/team/2.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <h3>Б. Ганбаяр</h3>
                                <p>Менежер</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp"  data-wow-delay=".3s">
                        <div class="team-wrap2">
                            <div class="team-img">
                                <div class="overlay">
                                    <h3>Б. Ганбаяр</h3>
                                    <span>Менежер</span>
                                    <ul>
                                        <li><p>Утас: 91113455</p></li>
                                        <li><p>имэйл: nyambayar@gmail.com</p></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ asset('assets2/images/team/3.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <h3>Б. Ганбаяр</h3>
                                <p>Менежер</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                         <div class="team-wrap2">
                            <div class="team-img">
                                <div class="overlay">
                                    <h3>Б. Ганбаяр</h3>
                                    <span>Менежер</span>
                                    <ul>
                                        <li><p>Утас: 91113455</p></li>
                                        <li><p>имэйл: nyambayar@gmail.com</p></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <img src="{{ asset('assets2/images/team/3.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <h3>Б. Ганбаяр</h3>
                                <p>Менежер</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>

@endsection