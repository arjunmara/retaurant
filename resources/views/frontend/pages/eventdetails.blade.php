@extends('frontend.includes.master1')
@section('body')





<div id="return-to-top">

    <span>Top</span>

</div>

<!-- End scrollUp  -->

<!-- Banner Section Start Here -->
<div class="inner-banner">
    <img src="{{URL::to('frontend/image/banner/10.jpg')}}" alt="">
    <div class="title">
        <h1>Event Single</h1>
        <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Event Single</span></span>
    </div>
</div>
<!-- Banner Section end Here -->

<!-- Blog Single Start Here -->
<div class="single-blog-page-area event-page-area single-event-page-area spc-equal">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="single-image">
                    <img src="{{URL::to('frontend/image/event/'.$eve->image)}}" style="width:800px;height:400px;" alt="single">
                    <div class="date-event">
                        <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$eve->date}}</span> <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> Time {{$eve->time}}</span>
                    </div>
                </div>
                <h3>{{$eve->title}}</h3>
                <p>{!! $eve->details !!}</p>


               {{-- <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22569053.99236624!2d-5.337722996144012!3d46.329466435436565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x25a3b1142c791a9%3A0xc4f8a0433288257a!2sUnited+Kingdom!5e0!3m2!1sen!2sbd!4v1505474067899" width="100%" height="271" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>--}}

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Blog Single Sidebar Start Here -->
                <div class="sidebar-area">
                   {{-- <div class="search-box">
                        <span class="title">Search</span>
                        <div class="box-search">
                            <input class="form-control" placeholder="Search Here ..." name="srch-term" id="srch-term" type="text">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>--}}
                    <div class="cate-box">
                        <span class="title">Menu</span>
                        <ul>
                            @foreach($menus as $m)
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{route('menu')}}">{{$m->menu}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="recent-post-area">
                        <span class="title"> Recent Post</span>
                        <ul class="news-post">


                            @foreach($events as $e)
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                    <img src="{{URL::to('frontend/image/event/'.$e->image)}}" style="width:200px;height:100px;" title="News image" />
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                    <h4><a href="{{route('eventdetails',['id'=>$e->id])}}">{{$e->title}}</a></h4>

                                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$e->date}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection