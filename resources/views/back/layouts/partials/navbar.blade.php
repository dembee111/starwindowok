 <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="{{ asset('assets/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>

                                


                                <div class="header-button-item has-noti js-item-menu">

                                    <i class="zmdi zmdi-notifications"></i>
                                    @if(count($user->unreadNotifications) > 0)
                                       <span class="quantity">{{ count($user->unreadNotifications)}}</span>
                                    @endif
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>Таньд {{ count($user->unreadNotifications)}} зурвас ирсэн байна</p>
                                        </div>
                                        @foreach($user->unreadNotifications as $notification)
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>{{ $notification->data['data'] }}</p>
                                                <span class="date">{{ $notification->created_at }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        <div class="notifi__footer">
                                            <a href="{{ route('markRead')}}">Бүгдийг уншисан</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('contents.index')}}">
                                                <i class="zmdi zmdi-settings"></i>Контент Тохируулага</a>
                                        </div>

                                        <div class="account-dropdown__item">
                                            <a href="{{ route('socials.index')}}">
                                                <i class="zmdi zmdi-share"></i>Сошиал тохируулага</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('medias.index')}}">
                                                <i class="zmdi zmdi-collection-image"></i>Медиа тохируулага</a>
                                        </div>
                                        
                                    </div>
                                    <div class="account-dropdown__body">
                                        

                                        <div class="account-dropdown__item">
                                            <a href="{{ route('users.profile')}}">
                                                <i class="zmdi zmdi-account"></i>Профайл</a>
                                        </div>
                                       
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Гарах</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>