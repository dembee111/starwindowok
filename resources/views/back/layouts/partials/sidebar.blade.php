<aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets2/images/logo/logo-white.png') }}" width="70%" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{ $user->photo ? $user->photo->file : asset('images/1561520309avatar.jpg') }}" alt="John Doe"/>
                    </div>
                    <h4 class="name">{{ $user->name }}</h4>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Гарах</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        

                        <li class="active">
                            <a href="{{ url('/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Эхлэл</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Мэдээлэл
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('posts.create') }}">
                                        <i class="fas fa-sign-in-alt"></i>Мэдээ нэмэх</a>
                                </li>
                                <li>
                                    <a href="{{ route('posts.index') }}">
                                        <i class="fas fa-table"></i>Мэдээний жагсаалтr</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-address-book"></i>Хэрэглэгч
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                             
                                <li>
                                    <a href="{{ route('customer.index')}}">
                                        <i class="fas fa-align-justify"></i>Хэрэглэгчийн жагсаалтr</a>
                                </li>
                                
                            </ul>
                        </li>


                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Ажилтаны хэсэг
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('users.create')}}">
                                        <i class="fas fa-user-plus"></i>Ажилтан нэмэх</a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index')}}">
                                        <i class="fas fa-user"></i>Ажилтаны жагсаалтr</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-cart"></i>Захиалгийн хэсэг
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="{{ route('order.index')}}">
                                        <i class="fas fa-list-ul"></i>Шинэ захиалага</a>
                                        <span class="inbox-num">{{ $newOrders }}</span>
                                </li>

                                <li>
                                    <a href="{{ route('oldorder')}}">
                                        <i class="fas fa-user"></i>Гүйцэтгэсэн захиалага</a>
                                </li>
                                
                            </ul>


                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-settings"></i>Тохируулага
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="{{ route('socials.index')}}">
                                        <i class="fas fa-list-ul"></i>Сошиал тохируулага</a>
                                </li>

                                <li>
                                    <a href="{{ route('medias.index')}}">
                                        <i class="fas fa-images"></i>Медиа зураг тохируулага</a>
                                </li>

                                 <li>
                                    <a href="{{ route('medias.create')}}">
                                        <i class="fas fa-images"></i>Медиа зураг нэмэх</a>
                                </li>

                                <li>
                                    <a href="{{ route('contents.index')}}">
                                        <i class="fas fa-file-word"></i>Контент тохируулага</a>
                                </li>
                                
                            </ul>


                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-eye"></i>Системийн Log
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                                <li>
                                    <a href="{{ route('logs')}}">
                                        <i class="fas fa-eye"></i>Системийн log</a>
                                </li>                               
                                
                            </ul>


                        </li>
                       
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        