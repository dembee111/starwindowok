<header class="header-area">
            <div class="header-top my-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="header-top-left">
                                @block('intro-text', 'Танилцуулага текст дээд')
                                <p>Монголын номер нэг Вакум цонхны үйлдвэр</p>
                                @endblock
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="header-top-right text-right">
                                <ul>
                                    @foreach($social as $s)
                                        <li><a target="_blank" href="{{ $s->url }}"><i class="fa fa-{{ $s->name }}"></i></a></li>                                
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle my-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="logo ">                               
                                <a href=""><img src="{{ asset('assets2/images/logo/logo.png')}}" width="75%">
                                </a>
                            </div>                               
                                
                            </div>
                        
                        <div class="col-md-9 col-xs-12">
                            <div class="header-middle-right">
                                <ul>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>Даваа - Бямба (9AM - 6PM)</p>
                                            <span>Нямд амарна</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>Цахим хаяг</p>
                                            @block('intro-email', 'Танилцуулага имэйл дээд')
                                            <span>starwindow@gmail.com</span>
                                            @endblock
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-icon">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="contact-info">
                                            <p>Холбоо барих</p>
                                            @block('intro-phone', 'Танилцуулага утас дээд')
                                            <span> (+976) 70120306</span>
                                            @endblock
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom"  id="sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="hidden-md hidden-lg col-sm-8 col-xs-6">
                            <div class="logo">
                                <h1><a href="{{ route('home') }}">Starwindow</a></h1>
                            </div>
                        </div>
                        <div class="col-md-10 hidden-sm hidden-xs">
                            <div class="mainmenu">
                                <ul id="navigation">
                                    <li><a href="{{ route('home') }}">Эхлэл</a></li>
                                    <li><a href="{{ route('about') }}">Бидний тухай</a></li>
                                    <li><a href="{{ route('service') }}">Бүтээгдэхүүн</a></li>                                    
                                    <li><a href="{{ route('calculator') }}">Тооцоолуур</a></li>
                                    <li><a href="{{ route('posts') }}">Мэдээлэл</a></li>
                                    
                                    <li><a href="{{ route('contact')}}">Холбоо барих</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-3">
                            <div class="mainmenu text-right">
                                <ul id="navigation">
                                    <li>
                                    <a href="#">English <i class="fa fa-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="about.html">English</a></li>
                                            <li><a href="about2.html">Монгол</a></li>
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2 clear col-xs-3 hidden-md hidden-lg">
                            <div class="responsive-menu-wrap floatright"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>