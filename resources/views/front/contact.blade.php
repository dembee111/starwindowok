@extends('front.layouts.app')


@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<!-- contact-area start -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-wrap form-style">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            <br/>
                                        @endforeach
                                   
                                </div>
                            @endif

                            @if(Session::has('created_customer'))
                                 <div class="alert alert-success" role="alert">                     
                                       
                                      {{ session('created_customer') }}
                                        
                                 </div>
                             @endif
                            <h3>Санал хүсэлт</h3>
                            <div class="cf-msg"></div>
                            <form action="{{ route('public.insert')}}" method="POST" id="cf">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="number" placeholder="Утас" id="fname" name="phone">
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="email" placeholder="Имэйл" id="email" name="email">
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" placeholder="Нэр" id="fname" name="name">
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <input type="text" placeholder="Гарчиг" id="title" name="title">
                                    </div>
                                    <div class="col-xs-12">
                                        <textarea class="contact-textarea" placeholder="Текст" id="msg" name="text"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <button type="submit" class="cont-submit btn-contact">Зурвас Илгээх</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-wrap">
                            <ul>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    @block('contact-phone-text', 'contact Our text')
                                    <p>(+976) &nbsp;99114533</p>
                                    <p>(+976) &nbsp;91113334</p>
                                    @endblock                                    
                                </li>
                                <li>
                                    
                                    <i class="fa fa-envelope"></i>
                                    @block('contact-mail-text', 'contact Our text')
                                    <p>ganbayarbold@gmail.com</p>
                                    <p>bold11@gmail.com</p>
                                    @endblock
                                </li>
                                <li>
                                    
                                    <i class="fa fa-fax"></i>
                                    @block('contact-homephone-text', 'contact Our text')
                                    <p>(+976) 70120306</p>
                                    <p>(+976) 70120306</p>
                                    @endblock
                                </li>
                                <li>
                                    
                                    <i class="fa fa-location-arrow"></i>
                                    @block('contact-address-text', 'contact Our text')
                                    УБ-хот ХУД 4-хороо, үйлдвэрчиний гудамж 10073
                                    @endblock
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-area end -->

        <!-- quote-area start -->
        <div class="quote-area bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-12">
                        <div class="quote-wrap">
                            <h2>Бүтээгдэхүүн үйлчилгээтэй холбоотой үнийн санал авах бол энд дарна уу!</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="quote-wrap text-right">
                            <a href="contact.html">Үнийн санал</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quote-area end -->

@endsection
@section('scripts')

    @include('front.layouts.scripts.googlemap')

@endsection