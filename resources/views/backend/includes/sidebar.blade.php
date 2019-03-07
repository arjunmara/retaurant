<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <a href="{{route('dashboard')}}">
                    <img src="{{URL::to('backend/userimg/'.Auth::user()->image)}}"  class="img-circle profile_img" style="height:110px;width:100px;">
                </a>
            </div>
            <div class="profile_info">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome,</span>
                <h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Auth::user()->name}}</strong></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br><br>
        <br><br>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <br>
                <br>
                <br>
                <ul class="nav side-menu">
                    <li><a href="{{route('admin-site')}}"><i class="fa fa-home"></i> Kintsugi-Configuration </a>
                    </li>


                    <li><a><i class="fa fa-shopping-bag"></i>Our-Menu<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin-menu')}}">Menu</a></li>
                            <li><a href="{{route('admin-submenu')}}">Sub-Menu</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('contact-message')}}"><i class="fa fa-envelope-o"></i>Customer Messages</a>
                    </li>

                    <li><a href="{{route('admin-slider')}}"><i class="fa fa-users"></i> Slider </a>
                    </li>

                    <li><a href="{{route('admin-services')}}"><i class="fa fa-shopping-cart"></i>Services</a>
                    </li>

                    <li><a href="{{route('admin-room')}}"><i class="fa fa-shopping-cart"></i>Tables</a>
                    </li>

                    <li><a href="{{route('admin-team')}}"><i class="fa fa-shopping-cart"></i>Our-Team</a>
                    </li>

                    <li><a href="{{route('admin-testimonial')}}"><i class="fa fa-shopping-cart"></i>Testimonial</a>
                    </li>

                    <li><a href="{{route('admin-gallery')}}"><i class="fa fa-shopping-cart"></i>Gallery</a>
                    </li>



                    <li><a href="{{route('admin-event')}}"><i class="fa fa-shopping-cart"></i>Event</a>
                    </li>

                    <li><a href="{{route('admin-count')}}"><i class="fa fa-shopping-cart"></i>Count</a>
                    </li>

                    <li><a href="{{route('admin-our-story')}}"><i class="fa fa-shopping-cart"></i>Our-Story</a>
                    </li>

                    <li><a href="{{route('admin-opening')}}"><i class="fa fa-shopping-cart"></i>Opening-Hour</a>
                    </li>

                </ul>
            </div>

        </div>


    </div>
</div>
