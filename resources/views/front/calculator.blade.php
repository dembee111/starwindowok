@extends('front.layouts.app')

@section('slider')

@include('front.layouts.partials.jumbotron')

@endsection


@section('content')

<section class="calculate mt-100 mb-100">
           <div class="container">
            @if(Session::has('created_order'))
                     <div class="alert alert-success" role="alert">                     
                           
                          {{ session('created_order') }}
                            
                     </div>
                 @endif
             <div class="row mb-100">
                    <div class="col-md-7 col-sm-10  col-xs-12 wow fadeInUp">
                        <div class="section-title section-title2">
                            <h2>Тооцоолол хийх</h2>
                            <p>Та өөрийн сонирхсон цонхны загварыг сонгон захиалага өгөх боломжтой</p>
                        </div>
                    </div>
                </div>
                
               <div class="row justify-content.sm-center">
                    <div class="col-md-2 col-sm-12">
                        
                   
                       <div class="tab">
                             <div class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" id="icon-window-type" viewBox="0 0 24 33">
                                      <path d="M0 0v33h24V0H0zm22 31H2V2h20v29z"></path>
                                    </svg>
                                </span>
                             </div>

                               <div class="tablinks" onclick="openCity(event, 'Paris')">
                                <span>
                                <svg xmlns="http://www.w3.org/2000/svg" id="icon-window-type-2" viewBox="0 0 30 33">
                                  <path d="M0 0v33h30V0H0zm2 31V2h12v29H2zm26 0H16V2h12v29z"></path>
                                </svg>
                                </span>
                              </div>
                               

                               <div class="tablinks" onclick="openCity(event, 'Berlin')">
                                   <span>
                                       <svg xmlns="http://www.w3.org/2000/svg" id="icon-window-type-6" viewBox="0 0 30 45">
                                          <path d="M0 0v45h16V31.9h14V0H0zm14 43H2V2h12v41zm14-13H16V2h12v28z"></path>
                                        </svg>
                                   </span>
                               </div>
                     
                        </div>
                     </div>
                     <div class="col-md-10">
                         
                     
                       <div id="London" class="tabcontent">
                              <!-- Left Column / Headphones Image -->
                                  <div class="left-column">
                                    <img  data-image="black" src="{{ asset('assets2/images/1window/p.jpg')}}" alt="Энгийн">
                                    <img  data-image="blue" src="{{ asset('assets2/images/1window/po.jpg')}}" alt="2онгойлттой">
                                    <img  data-image="red" class="isactive" src="{{ asset('assets2/images/1window/g.jpg')}}" alt="Битүү">

                                    <!--=======meteriin heseg ======-->

                                    <div class="window-image__size width">
                                        <span><p id="londonwidth">1300</p>
                                        <div class="window-image__size-block">mm</div></span>
                                     </div>

                                     <div class="window-image__size height">
                                        <span>
                                            <p id="londonheight">1460</p>
                                        <div class="window-image__size-block" >mm</div></span>
                                     </div>

                                     
                                  </div>
                                  <!-- Right Column -->
                                  <div class="right-column">
                                    <!-- Product Description -->
                                    <div class="product-description">
                                      <span>Star Window
                                      </span>
                                      <h1>Тооцоолуур
                                      </h1>
                                     
                                      <p> Та өөрийн хүссэн загвараа сонгон захиалага хийх боломжтой, хэрвээ таны хайж буй загвар байхгүй бол захиалгийн менежерүүдэд хандана уу!
                                      </p>
                                     
                                    </div>
                                    <!-- Product Configuration -->
                                    <div class="product-configuration">
                                      <!-- Product Color -->
                                      <div class="product-color">
                                        <span>Цонхны хэмжээсээ оруулна уу
                                        </span>
                                        <div class="color-choose">
                                          <div>
                                             <input type="number" id="inputwidth1" name="width" value="1300">

                                          </div>

                                          <div>
                                             <input type="number" id="inputheight1" name="height" value="1460">
                                             
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Cable Configuration -->
                                      <div class="cable-config">
                                        <span>Цонхны загвараа сонгоно уу!
                                        </span>
                                        <div class="cable-choose">
                                          <button type="button" data-image="red" id="red" name="color" value="red" checked>Битүү</button>
                                          <button type="button" data-image="black" id="black" name="color" value="black">Энгийн
                                          </button>
                                          <button type="button" data-image="blue" id="blue" name="color" value="blue" >2 онгойлттой
                                          </button>
                                        </div>
                                        <a href="#">Энэ үнэ дээр захиалгийн төлбөр нэмэгдэнэ
                                        </a>
                                      </div>
                                    </div>
                                    <!-- Product Pricing -->
                                    <div class="product-price">
                                      <span>225.000төг
                                      </span>
                                      <button class="agree-btn cart-btn">Баталгаажуулах
                                      </button>
                                    </div>
                                  </div>
                                  <!------right-column------>
                                 
                            </div>
                            <!-- 2 ongoilttoi  -->

                            <div id="Paris" class="tabcontent">
                              <!-- Left Column / Headphones Image -->
                                  <div class="left-column">
                                    <img data-image="g_g" class="twoactive" src="{{ asset('assets2/images/2window/g_g.jpg')}}" alt="Битүү-Битүү">
                                    <img data-image="g_o" src="{{ asset('assets2/images/2window/g_o.jpg')}}" alt="Битүү-Дээшээ">
                                    <img data-image="g_p" src="{{ asset('assets2/images/2window/g_p.jpg')}}" alt="Битүү-Энгийн">
                                    <img data-image="g_po" src="{{ asset('assets2/images/2window/g_po.jpg')}}" alt="Битүү-2онгойлттой">
                                    <img data-image="o_g" src="{{ asset('assets2/images/2window/o_g.jpg')}}" alt="">
                                    <img data-image="o_o" src="{{ asset('assets2/images/2window/o_o.jpg')}}" alt="">
                                    <img data-image="o_p" src="{{ asset('assets2/images/2window/o_p.jpg')}}" alt="">
                                    <img data-image="o_po" src="{{ asset('assets2/images/2window/o_po.jpg')}}" alt="">
                                    <img data-image="p_g" src="{{ asset('assets2/images/2window/p_g.jpg')}}" alt="Энгийн-Битүү">
                                    <img data-image="p_o" src="{{ asset('assets2/images/2window/p_o.jpg')}}" alt="">
                                    <img data-image="p_p" src="{{ asset('assets2/images/2window/p_p.jpg')}}" alt="Энгийн-Энгийн">
                                    <img data-image="p_po" src="{{ asset('assets2/images/2window/p_po.jpg')}}" alt="Энгийн-2онгойлттой">
                                    <img data-image="po_g" src="{{ asset('assets2/images/2window/po_g.jpg')}}" alt="2онгойлттой-Битүү">
                                    <img data-image="po_o" src="{{ asset('assets2/images/2window/po_o.jpg')}}" alt="">
                                    <img data-image="po_p" src="{{ asset('assets2/images/2window/po_p.jpg')}}" alt="2онгойлттой-Энгийн">
                                    <img data-image="po_po" src="{{ asset('assets2/images/2window/po_po.jpg')}}" alt="2онгойлттой-2онгойлттой">
                                    
                                    <!--=======meteriin heseg ======-->

                                    <div class="window-image__size width">
                                        <span><p id="pariswidth">1300</p>
                                        <div class="window-image__size-block">mm</div></span>
                                     </div>

                                     <div class="window-image__size height">
                                        <span>
                                            <p id="parisheight">1460</p>
                                        <div class="window-image__size-block" >mm</div></span>
                                     </div>

                                  </div>
                                  <!-- Right Column -->
                                  <div class="right-column">
                                    <!-- Product Description -->
                                    <div class="product-description">
                                      <span>Star Window
                                      </span>
                                      <h1>Тооцоолуур
                                      </h1>
                                   
                                      <p> Та өөрийн хүссэн загвараа сонгон захиалага хийх боломжтой, хэрвээ таны хайж буй загвар байхгүй бол захиалгийн менежерүүдэд хандана уу!
                                      </p>
                                
                                    </div>
                                    <!-- Product Configuration -->
                                    <div class="product-configuration">
                                      <!-- Product Color -->
                                      <div class="product-color">
                                        <span>Өнгө өө сонгоно уу
                                        </span>
                                           <div class="color-choose">
                                              <div>
                                                 <input type="number" id="inputwidth2" name="width" value="1300">

                                              </div>

                                              <div>
                                                 <input type="number" id="inputheight2" name="height" value="1460">
                                                 
                                              </div>
                                            </div>
                                      </div>
                                      <!-- Cable Configuration -->
                                      <div class="cable-config1">
                                        <span>Цонхны загвараа сонгоно уу!
                                        </span>
                                        <div class="cable-choose">
                                         <label for="sel1">Зүүн тал:</label>
                                          <select class="form-control" id="sel1">
                                              <option data-image="g_g" id="g_g" name="color" value="Битүү" selected>Битүү</option>
                                              <option data-image="p_g" id="p_g" name="color" value="Энгийн">Энгийн</option>
                                              <option data-image="po_g" id="po_g" name="color" value="2-онгойлттой">2 онгойлттой</option>


                                          </select>
                                          <label for="sel2">Баруун тал:</label>
                                          <select class="form-control" id="sel2">
                                              <option data-image="g_g" id="g_g" name="color" value="Битүү" selected>Битүү</option>
                                              <option data-image="g_p" id="g_p" name="color" value="Энгийн">Энгийн</option>
                                              <option data-image="g_o" id="g_o" name="color" value="2-онгойлттой">2 онгойлттой</option>

                                          </select>

                                      </div>
                                        <a href="#">Энэ үнэ дээр захиалгийн төлбөр нэмэгдэнэ
                                        </a>
                                      </div>
                                    </div>
                                    <!-- Product Pricing -->
                                    <div class="product-price">
                                      <span>225.000төг
                                      </span>
                                      <button class="agree-btn1 cart-btn">Баталгаажуулах
                                      </button>
                                    </div>
                                  </div>
                                  <!------right-column------>
                            </div>


                             <div id="Berlin" class="tabcontent">
                              <!-- Left Column / Headphones Image -->
                            
                                   <div class="left-column">
                                    

                                    <img data-image="g" src="{{ asset('assets2/images/onewithBalcon/g.jpg')}}" alt="Хаалгатай-битүү">
                                    <img data-image="o" src="{{ asset('assets2/images/onewithBalcon/o.jpg')}}" alt="Хаалгатай-Дээшээ">
                                    <img data-image="p" class="withactive" src="{{ asset('assets2/images/onewithBalcon/p.jpg')}}" alt="Хаалгатай-Энгийн">
                                    <img data-image="po" src="{{ asset('assets2/images/onewithBalcon/po.jpg')}}" alt="Хаалгатай-2онгойлттой">

                                    <!--=======meteriin heseg ======-->

                                    <div class="window-image__size width">
                                        <span><p id="berlinwidth">1300</p>
                                        <div class="window-image__size-block">mm</div></span>
                                     </div>

                                     <div class="window-image__size height">
                                        <span>
                                            <p id="berlinheight">1460</p>
                                        <div class="window-image__size-block" >mm</div></span>
                                     </div>

                                  </div>
                                  <!-- Right Column -->
                                  <div class="right-column">
                                    <!-- Product Description -->
                                    <div class="product-description">
                                      <span>Star Window
                                      </span>
                                      <h1>Тооцоолуур
                                      </h1>
                                      <p> Та өөрийн хүссэн загвараа сонгон захиалага хийх боломжтой, хэрвээ таны хайж буй загвар байхгүй бол захиалгийн менежерүүдэд хандана уу!
                                      </p>
                                    </div>
                                    <!-- Product Configuration -->
                                    <div class="product-configuration">
                                      <!-- Product Color -->
                                      <div class="product-color">
                                        <span>Өнгө өө сонгоно уу
                                        </span>
                                        <div class="color-choose">
                                          <div>
                                            
                                             <input class="form-control" type="number" id="inputwidth3" name="width" value="1300">

                                          </div>

                                          <div>
                                             
                                             <input class="form-control" type="number" id="inputheight3" name="height" value="1460">
                                             
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Cable Configuration -->
                                      <div class="cable-config2">
                                        <span>Цонхны загвараа сонгоно уу!
                                        </span>
                                        <div class="cable-choose">
                                          <button type="button" data-image="g" id="g" name="color" value="g" checked>Битүү</button>
                                          <button type="button" data-image="p" id="p" name="color" value="p">Энгийн
                                          </button>
                                          <button type="button" data-image="o" id="o" name="color" value="o" >Дээшээ
                                          </button>
                                          <button type="button" data-image="po" id="po" name="color" value="po" >2 онгойлттой
                                          </button>
                                        </div>
                                        <a href="#">Энэ үнэ дээр захиалгийн төлбөр нэмэгдэнэ
                                        </a>
                                      </div>
                                    </div>
                                    <!-- Product Pricing -->
                                    <div class="product-price">
                                      <span>225.000төг
                                      </span>
                                      <button class="agree-btn2 cart-btn">Баталгаажуулах
                                      </button>
                                    </div>
                                  </div>
                                  <!------right-column------>
                            </div>
                     </div>
                    
               </div>
           </div>
       </section>
      
            <section class="my-section">
              
              <div class="container">
                 
              <ul>
                <li class="selected">
                 <div class="row order-section">
                    <div class="col-md-2">
                       <div class="my-order-img text-center">
                          <img src="{{ asset('assets2/images/1window/g.jpg')}}" class="selectedpic" width="150px" height="auto">
                       </div>
                    </div>

                    <div class="col-md-6">
                      <div class="my-order-list">
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>                            
                                <th scope="col">Загвар</th>
                                <th scope="col">Хэмжээс</th>
                                <th scope="col">Үнэ</th>
                                <th scope="col">Ширхэг</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>                          
                                <td class="type" value="">Энгийн 1 цонх битүү</td>
                                <td class="size">1300 х 1460mm</td>
                                <td class="price">850,000 төг</td>
                                <td><input id="quan_window" class="form-control" type="number" name="" value="1"></td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 text-center my-col-4">
                      <button id="btn2" class="btn btn-primary"><i class="fa fa-clone fa-1x"></i>&nbsp;Хувилах</button> 
                      <button id="btn4" class="btn btn-danger"><i class="fa fa-trash fa-1x"></i>&nbsp;Устгах</button> 
                      <button id="selectedOrder" data-toggle="modal" data-target="#largeModal" class="btn btn-success"><i class="fa fa-plus fa-1x"></i>&nbsp;Захиалах</button> 
                     {{--  <button id="btn2"><i class="fa fa-clone fa-2x"></i></span>
                      <a id="btn4"><i class="fa fa-trash fa-2x"></i></span> --}}

                    </div>
                 </div>
                  </li>
                </ul>

              </div>
           </section>
       
       


       <!--Zahialaga manager-->
        <section class="team-area team-area2 mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-10 col-xs-12 wow fadeInUp mt-60">
                        <div class="section-title section-title2">
                            <h2>Захиалгийн менежер</h2>
                            @block('calculator-manager-text', 'calculator Our text')
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

  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Захиалгийн хэсэг</h4>
      </div>
      <div class="modal-body">
  
         <form method="POST" action="{{ route('order.store')}}" >
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Имэйл хаяг</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Имэйл" required oninvalid="this.setCustomValidity('Та имэйл хаягаа оруулна уу')"
    oninput="this.setCustomValidity('')">
          </div>

          <div class="form-group">
            <label for="exampleInputText1">Утасны дугаар</label>
            <input type="number" name="phone" class="form-control" id="exampleInputText1" placeholder="Дугаар" required oninvalid="this.setCustomValidity('Та Утасны дугаараа оруулна уу')"
    oninput="this.setCustomValidity('')">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Нэр</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Нэр" required oninvalid="this.setCustomValidity('Та Өөрийн нэрээ оруулна уу')"
    oninput="this.setCustomValidity('')">
          </div>

          <div class="form-group">
            <label for="exampleInputAddress1">Хүргэлтийн хаяг</label>
            <input type="text" name="order_address" class="form-control" id="exampleInputAddress1" placeholder="Хаяг" required oninvalid="this.setCustomValidity('Та бараа хүлээн авах хаягаа оруулна уу')"
    oninput="this.setCustomValidity('')">
          </div>

          <div class="form-group">
            <label for="exampleInputType1">Цонхны загвар</label>
            <input type="text" name="window_type" class="form-control" id="exampleInputType1" readonly value="">
          </div>

          <div class="form-group">
            <label for="exampleInputSize1">Цонхны Хэмжээс</label>
            <input type="text" name="window_size" class="form-control" id="exampleInputSize1" readonly  value="">
          </div>

          <div class="form-group">
            <label for="exampleInputPrice1">Үнэ</label>
            <input type="text" name="window_price" class="form-control" id="exampleInputPrice1" readonly  value="">
          </div>

          <div class="form-group">
            <label for="exampleInputQuantity1">Ширхэг тоо</label>
            <input type="number" name="window_quantity" class="form-control" id="exampleInputQuantity1" readonly  value="">
          </div>


        
          
          
   
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Болих</button>
        <button type="submit" class="btn btn-primary">Захиалах</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection


@section('scripts')

    @include('front.layouts.scripts.script')



@endsection

