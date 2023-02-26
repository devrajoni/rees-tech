<!-- Header Section Start -->
<div class="header-section">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">

            <!-- Header Logo (Header Left) Start -->
            <div class="header-logo col-auto">
                <a href="{{ route('backend.dashboard') }}">
                    <!-- <h2 class="text-white">Rees Tech</h2> -->
                    <img class="logo-light" src="{{ asset('backend/assets/images/logo/rees.png') }}" alt="">
                    <!-- <img src="{{ asset('backend/assets/images/logo/logo-light.png') }}" class="logo-light" alt="">
 -->            </a>

            </div><!-- Header Logo (Header Left) End -->

            <!-- Header Right Start -->
            <div class="header-right flex-grow-1 col-auto">
                <div class="row justify-content-between align-items-center">

                    <!-- Side Header Toggle & Search Start -->
                    <div class="col-auto">
                        <div class="row align-items-center">

                            <!--Side Header Toggle-->
                            <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                            <!--Header Search-->
                            <div class="col-auto">

                                <div class="header-search">

                                    <button class="header-search-open d-block d-xl-none"><i class="zmdi zmdi-search"></i></button>

                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="text" placeholder="Search Here">
                                            <button><i class="zmdi zmdi-search"></i></button>
                                        </form>
                                        <button class="header-search-close d-block d-xl-none"><i class="zmdi zmdi-close"></i></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div><!-- Side Header Toggle & Search End -->

                    <!-- Header Notifications Area Start -->
                    <div class="col-auto">

                        <ul class="header-notification-area">
                            <!--User-->
                            <li class="adomx-dropdown col-auto">
                                <a class="toggle" href="#">
                                    <span class="user">
                                <span class="avatar">
                                    <img src="{{ asset('backend/assets/images/avatar/p.jpg') }}" alt="">
                                    <span class="status"></span>
                                    </span>
                                    <span class="name">{{ auth()->user()->name }}</span>
                                    </span>
                                </a>

                                <!-- Dropdown -->
                                <div class="adomx-dropdown-menu dropdown-menu-user">
                                    <div class="head">
                                        <h5 class="name"><a href="#">{{ auth()->user()->name }}</a></h5>
                                        <a class="mail" href="#">{{ auth()->user()->email }}</a>
                                    </div>
                                    <div class="body">
                                        <ul>
                                            <li><a href="{{ route('backend.profile.index')}}"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="{{ route('backend.settings.index') }}"><i class="zmdi zmdi-settings"></i>Setting</a></li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="POST">
                                                   @csrf
                                                    <a href=""  onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="zmdi zmdi-lock-open"></i>Sign out</a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div><!-- Header Notifications Area End -->

                </div>
            </div><!-- Header Right End -->

        </div>
    </div>
</div><!-- Header Section End -->
