@extends('front.layouts.app')

@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<!-- about-area start -->
    <section class="about-area ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="about-img black-opacity">
                        <img src="{{ asset('assets2/images/star/about.jpg')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="about-wrap">
                        <h3>ТАНИЛЦУУЛГА</h3>
                        @block('about-text', 'About Our text')
                        <p>Манай байгууллага 2003 онд байгуулагдаж 2004 оноос эхлэн цонх хаалганы үйлдвэрлэл явуулж
                            байгаа бөгөөд Монгол Улсын нийслэл Улаанбаатар хот төдийнгүй орон нутагт баригдаж байгаа
                            барилгуудын цонхны үйлдвэрлэлд ихээхэн хувь нэмэр оруулж 2014 оноос эхлэн “WINDOW MARKET”
                            дэлгүүрээ нээн ажилуулсан. WINDOW MARKET дэлгүүр нь цонх хаалга үйлдэрлэгчиддээ Турк улсын
                            Fornax болон Pikasan брендийг нийлүүлж эхэлсэн нь цонхны үйлдвэрлэл, худалдаа эрхэлдэг
                            жижиг дунд үйлдвэрлэгч, борлуулагч /21 аймаг болон УБ дахь харилцагч нийт 160 гаруй/ нарыг
                            стандартын шаардлага хангасан чанартай цоож, түгжээ, тоноглолоор ханган ажиллаж ижил төстэй
                            үйлдвэрүүдтэй хамтран ажиллах боломжийг олгосон. 2016 оны 4-р сард хэрэглэгчиддээ ойртох
                            зорилгоор барилгын материалын салбар дэлгүүрээ 100-н айл дахь “Зөгийн үүр”
                            худалдааны төвд мөн 2017 оны 5-р сард Дархан хотын Хаш худалдааны төвд салбараа
                            нээн ажиллуулж байна.
                        </p>
                        @endblock


                        <ul>
                            @block('about-li', 'About Our text')
                            <li>Турк улсын Fornax болон Pikasan брендийг нийлүүлж эхэлсэн нь цонхны үйлдвэрлэл</li>
                            <li> Цонхны их биеийн материал / PVC/ нь полимер / хоолны
                                давс ба нефтийн бүтээгдэхүүний нийлмэлээс/ бүрддэг учир ямар ч аюулгүй
                                бөгөөд байгаль орчинд огт хор нөлөөгүй юм.</li>
                            <li> PVC цонх, хаалганы их биеүд нь темпартурын ямар ч нөхцөлд өөрийн чанараа алддаггүй
                            </li>
                            <li>Тухайн үйлдвэрлэгч нь бүтээгдэхүүндээ 5 жилийн баталгаат хугацаа өгдөг</li>
                            @endblock
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->

    <!-- brand-area start -->
    <section class="brand-area bg-img-2 black-opacity ptb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp">
                    <div class="section-title section-title2">
                        <h2>БРЭНДҮҮД</h2>
                        @block('about-brand-text', 'About Our text')
                        <p>Window market дэлгүүр нь БНТУлсын FORNAX брендийн цонх, хаалганы цоож тоноглол мөн Турк улсын
                            “PIKASAN” брэндийн жийрэг резин,
                            ОХУлсын KRAUSS брендийн бэлдэц болон Монгол Улсын эх орны бренд “PROFECTION” брендийн
                            бэлдэц, БНХАУ “SILANDE” брэндийн битүүмжлэлийн цавуу,
                            ОХУлсын “BAZIS” брендийн суурилалтын хөөс зэрэг брендийг цонх хаалга үйлдвэрлэгч нартаа
                            борлуулж нийлүүлдэг билээ. </p>
                        @endblock
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="brand-active">
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/2.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/3.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/4.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/5.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/6.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="brand-wrap">
                            <a href="#">
                                <img src="{{ asset('assets2/images/star/brand/7.png')}}" alt="">
                            </a>
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
                                <h3><a href="#">Цонхны амалгаа</a></h3>
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
                                <h3><a href="#">Цонхны тавцан</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- team-area end -->
    <!-- featured-area start -->
    <div class="featured-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
                    <div class="section-title text-center">
                        <h2>БИДНИЙ ТҮҮХЭН ЗАМНАЛ</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="featured-wrap">
                        <ul>
                            <li class="wow fadeInLeft" data-wow-delay=".1s">
                                <h3>2003</h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="assets2/images/featured/1.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <h4>Цонх хаалганы үйлдвэрлэл</h4>
                                        <p>Манай байгууллага 2003 онд байгуулагдаж 2004 оноос эхлэн цонх хаалганы
                                            үйлдвэрлэл явуулж байна.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-delay=".2s">
                                <h3>2014</h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="assets2/images/featured/2.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <h4>WINDOW MARKET</h4>
                                        <p>WINDOW MARKET дэлгүүр нь цонх хаалга үйлдэрлэгчиддээ Турк улсын Fornax болон
                                            Pikasan брендийг нийлүүлж эхэлсэн нь цонхны үйлдвэрлэл, худалдаа эрхэлдэг
                                            жижиг дунд үйлдвэрлэгч, борлуулагч /21 аймаг болон УБ дахь харилцагч нийт
                                            160 гаруй/ нарыг стандартын шаардлага хангасан чанартай цоож, түгжээ,
                                            тоноглолоор ханган ажиллаж ижил төстэй үйлдвэрүүдтэй хамтран ажиллах
                                            боломжийг олгосон. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-delay=".3s">
                                <h3>2016 </h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="assets2/images/featured/3.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <h4>“Зөгийн үүр” худалдааны төвд</h4>
                                        <p>2016 оны 4-р сард хэрэглэгчиддээ ойртох зорилгоор барилгын материалын салбар
                                            дэлгүүрээ 100-н айл дахь “Зөгийн үүр” худалдааны төвд шинэ салбар дэлгз</p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInRight" data-wow-delay=".4s">
                                <h3>2017</h3>
                                <div class="featured-content">
                                    <div class="featured-img">
                                        <img src="assets2/images/featured/4.jpg" alt="" />
                                    </div>
                                    <div class="featured-info">
                                        <h4>Дархан хотын Хаш худалдааны төвд</h4>
                                        <p>2017 оны 5-р сард Дархан хотын Хаш худалдааны төвд салбараа нээн ажиллуулж байна.</p>
                                    </div>
                                </div>
                            </li>
                  
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-area end -->

@endsection