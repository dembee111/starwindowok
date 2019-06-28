@extends('front.layouts.app')

@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<!-- .service-area start -->
        <section class="service-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets2/images/service/1.jpg')}}" alt="" />
                            </div>
                            <div class="service-content">
                                <h3>Төв оффис</h3>
                                <ul>
                                    <li><i class="fa fa-fax"></i>
                                    <p>(+976) 70120306</p></li>

                                     <li>
                                        <i class="fa fa-phone"></i>
                                        <p>(+976) &nbsp;99114533</p>
                                       
                                    </li>

                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <p>ganbayarbold@gmail.com</p>
                                        
                                    </li>

                                    <li>
                                        <i class="fa fa-location-arrow"></i>
                                        <p>УБ-хот ХУД 4-хороо, үйлдвэрчиний гудамж 10073</p>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets2/images/branch/zugii.jpg')}}" alt="" />
                            </div>
                            <div class="service-content">
                                <h3>Зөгийний үүр</h3>
                                <ul>
                                    <li><i class="fa fa-fax"></i>
                                    <p>(+976) 70120306</p></li>

                                     <li>
                                        <i class="fa fa-phone"></i>
                                        <p>(+976) &nbsp;99114533</p>
                                        
                                    </li>

                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <p>ganbayarbold@gmail.com</p>
                                        
                                    </li>

                                    <li>
                                        <i class="fa fa-location-arrow"></i>
                                        <p>УБ-хот ХУД 4-хороо, үйлдвэрчиний гудамж 10073</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="service-wrap mb-30">
                            <div class="service-img">
                                <img src="{{ asset('assets2/images/branch/hash.jpg')}}" alt="" />
                            </div>
                            <div class="service-content">
                                <h3>Хаш худалдааны төв</h3>
                                <ul>
                                    <li><i class="fa fa-fax"></i>
                                    <p>(+976) 70120306</p></li>

                                     <li>
                                        <i class="fa fa-phone"></i>                                 
                                        <p>(+976) &nbsp;91113334</p>
                                    </li>

                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <p>ganbayarbold@gmail.com</p>
                                        
                                    </li>

                                    <li>
                                        <i class="fa fa-location-arrow"></i>
                                        <p>УБ-хот ХУД 4-хороо, үйлдвэрчиний гудамж 10073</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- .service-area end -->

            <section class="prallex-area black-opacity parallax ptb-180 wow fadeInUp"  data-speed="3" data-bg-image="assets2/images/bg/video_back.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="prallex-wrap text-center">
                            <h2><i class="fa fa-quote-left"></i>Бидний эрхэм зорилго бол Хөгжлийн төлөө хамтдаа.<i class="fa fa-quote-right"></i></h2>
                            <span><i class="fa fa-long-arrow-left"></i>  StarWindow ххк <i class="fa fa-long-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

