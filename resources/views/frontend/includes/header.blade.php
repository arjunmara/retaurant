<header id="inner">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="social-icon">
                        <ul>
                            <li> <a href="{{$site->facebook_link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                            <li> <a href="{{$site->googleplus_link}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                            <li> Call for reservation: {{$site->telephone}}/{{$site->mobile}} </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="header-cart">
                        <div id="cart-total" class="btn-group btn-block">

                            <ul class="top-hour">
                                <li class="open-time">Opening Hours : {{$site->opening_time}}</li>
                                <li> <a href="#">Eng <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul>
                                        <li> <a href="#">Dutch</a> </li>
                                    </ul>
                                </li>

                           {{-- <form action="{{route('cart.destroy')}}" method="POST">{{csrf_field()}}<button type="submit">submit</button></form>--}}

                                <li><a href="{{route('cart-show')}}"><span class="cart_heading"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span></a>

                                @if(Cart::instance('default')->count()>0)

                                    <span  class="badge" style="color:white;background-color:red"> {{Cart::instance('default')->count()}}
                             </span>
                                @endif
                                </li>
                                {{--<li> <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i> <sup>{{Cart::instance('default')->count()}}</sup></a> </li>--}}
                            </ul>




                            {{--        <ul class="dropdown-menu pull-right cart-menu">
                                         <li>
                                             <p class="text-center">Your shopping cart is empty!</p>
                                         </li>
                                     </ul>--}}
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12"> <a href="{{route('index')}}"><img class="sticky-logo" src="{{URL::to('frontend/image/logo/'.$lo->logo)}}" style="height:80px;" alt="logo"></a> </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="row margin"> <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                        <nav class="rs-menu">
                            <ul class="nav-menu">
                                <!-- Home -->
                                <li class="current-menu-item current_page_item"> <a href="{{route('index')}}" class="home">Home</a></li>
                                <li class=""> <a href="{{route('about')}}">About Us</a></li>
                                <!-- End Home -->
                                <!-- Drop Down -->
                                <li class=""> <a href="{{route('services')}}">Services</a></li>
                                <!-- Drop Down -->
                                <!-- Images -->
                                <li class="rs-mega-menu mega-rs"> <a href="#">Menu</a>
                                    <ul class="mega-menu">
                                        <li class="mega-menu-container">
                                            <div class="mega-menu-img">

                                                @foreach($menus as $me)
                                                <a href="{{route('menu',['id'=>$me->menu])}}">
                                                    <div class="mega-menu-img-meta"><img src="{{URL::to('frontend/image/menu/'.$me->image)}}" style="width:200px;height:200px;" alt="image-01"></div>
                                                    <h2>{{$me->menu}}</h2>
                                                </a>
                                                    @endforeach

                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class=""> <a href="{{route('shop')}}">Shop</a></li>
                                <li class=""> <a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</header>