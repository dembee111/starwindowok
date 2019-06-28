<footer>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12  col wow fadeInUp" data-wow-delay=".1s">
							<div class="footer-widget footer-logo">
                                <h1>Star window</h1>
                                <p>Таньд түргэн шуурхай чанартай үйлчлэх нь бидний үүрэг билээ.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i> (+976) 70120306</li>
                                    <li><i class="fa fa-envelope"></i> starwindow@gmail.com</li>
                                </ul>
							</div>
						</div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget footer-menu">
                                <h2>Үндсэн цэс</h2>
                                <ul>
                                    <li><a href="{{ route('home')}}">Эхлэл</a></li>
                                    <li><a href="{{ route('about')}}">Бидний тухай</a></li>
                                    <li><a href="{{ route('service')}}">Бүтээгдэхүүн</a></li>
                                    <li><a href="{{ route('calculator')}}">Тооцоолуур</a></li>
                                    <li><a href="{{ route('posts')}}">Мэдээлэл</a></li>
                                    <li><a href="{{ route('contact')}}">Холбоо барих</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".3s">
                            <div class="footer-widget instagram-wrap">
                                <h2>Сошиал холбоос</h2>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/1.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/2.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/3.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/4.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/5.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('assets2/images/instagram/6.jpg')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 col wow fadeInUp" data-wow-delay=".4s">
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            <br/>
                                        @endforeach
                                   
                                </div>
                            @endif

                          
                            <div class="footer-widget quick-contact">
                                <h2>Зурвас илгээх</h2>
                                <form action="{{ route('public.insert')}}" method="POST">
                                    @csrf
                                    <input type="number" name="phone" placeholder="дугаар">
                                    <input type="email" name="email" placeholder="имэйл">
                                    <input type="hidden" name="name" value="unknown">
                                    <input type="hidden" name="title" value="unknown">
                                    <textarea name="text" id="massage" cols="30" rows="10" placeholder="текст"></textarea>
                                    <button type="submit" name="button" class="btn-style">Илгээх</button>
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <div class="footer-bottom text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                           
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>

 Зохиогчийн эрх хуулиар хамгаалагдсан | &nbsp;
 <i class="fa fa-code" aria-hidden="true"></i>
 <a href="http://www.gegeensoft.mn" target="_blank" style="color: white;">
     Gegeensoft ххк
 </a>

                        </div>
                    </div>
                </div>
            </div>
		</footer>