@extends('frontend.includes.master1')
@section('body')



    <div id="return-to-top">

        <span>Top</span>

    </div>

    <!-- End scrollUp  -->
    <!-- Banner Section Start Here -->
    <div class="inner-banner"> <img src="{{URL::to('frontend/image/banner/25.jpg')}}" alt="">
        <div class="title">
            <h1>About Us</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">About Us</span></span> </div>
    </div>
    <!-- Banner Section end Here -->

    <!-- Slider Bottom Section Start Here -->
    <div class="about-area about-page about-page2 spc-equal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="inner">
                        <h2 class="sec-title">About Us</h2>
                        <h3 class="sec-sub-title">Descover Our Story</h3>
                        <p>{!! $story->details !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Know Section Start Here -->
    <!-- Counter Up Section Start Here-->
    <div class="project-activation-area">
        <div class="container">
            <div class="row">
                <div class="ab-count">
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="about-counter-list">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <h1 class="about-counter">{{$count->val1}}</h1>
                            <p>{{$count->title1}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="about-counter-list">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <h1 class="about-counter">{{$count->val2}}</h1>
                            <p>{{$count->title2}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="about-counter-list">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h1 class="about-counter">{{$count->val3}}</h1>
                            <p>{{$count->title3}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                    <!-- ABOUT-COUNTER-LIST START -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="about-counter-list">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <h1 class="about-counter">{{$count->val4}}</h1>
                            <p>{{$count->title4}}</p>
                        </div>
                    </div>
                    <!-- ABOUT-COUNTER-LIST END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Chefs Slider Section Start Here -->
    <div class="our-chefs spc-equal">
        <div class="container">
            <div class="row">
                <h2 class="sec-title">Our Team</h2>
                <div class="chef-gallery owl-carousel">



                    @foreach($teams as $tm)
                    <div class="item">
                        <div class="inner">
                            <div class="images"> <img src="{{URL::to('frontend/image/team/'.$tm->image)}}" style="height:400px;width:400px;"> </div>
                            <div class="triangle_left"></div>
                            <div class="dsc">
                                <h4>{{$tm->name}}</h4>
                                <span>{{$tm->title}}</span>

                            </div>
                        </div>
                    </div>
                        @endforeach



                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-section testimonial-about spc-equal">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="sec-title">Testimonials</h2>
                    <h3 class="sec-sub-title">What Our Customer Say!</h3>
                </div>
            </div>
            <div class="row">

                @foreach($test as $t)
                <div class="col-sm-12">
                    <div class="testimonil-details">
                        <div class="testimonil-images"> <img src="{{URL::to('frontend/image/testimonial/'.$t->image)}}"  style="width:200px;height:150px;" /> </div>
                        <div class="testimonil-text">
                           <p></p>
                            <div class="person-details">
                                <h4>{{$t->name}}</h4>
                                <span>{{$t->job}},{{$t->address}}</span> </div>
                        </div>
                    </div>
                </div>
                    @endforeach



            </div>
        </div>
    </div>

















    @endsection



