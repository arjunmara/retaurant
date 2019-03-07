@extends('frontend.includes.master1')
@section('body')

    <div class="inner-banner">
        <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
        <div class="title">
            <h1>Room</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Services</span></span>
        </div>
    </div>

<div class="shop-page-area shop-single-page-area single-product-page single-blog-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="single-product-area left-area">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-single-product-slider">
                                <div class="inner">
                                    <div class="slider single-product">

                                        @foreach($roomimg as $r)
                                        <div>
                                            <div class="images-single"> <img src="{{URL::to('frontend/image/room/'.$r->image)}}" style="width:800px;height:350px;"> </div>
                                        </div>
                                            @endforeach


                                    </div>
                                </div>


                                <div class="slider single-product-nav">

                                    @foreach($roomimg as $r)
                                    <div class="images-slide-single"> <img src="{{URL::to('frontend/image/room/'.$r->image)}}" style="width:800px;height:100px;"> </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <h3>Deluxe Rooms</h3>
                            <p>{{$room->info}}</p>
                            <!-- <p class="tag"><strong>Tags:</strong> Composite Product, Extension Demonstration</p> -->
                        </div>
                    </div>
                </div>
                <div class="row tab-btm">
                   <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- Nav tabs -->
                       {{-- <div class="tabs-wrapper">
                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                <li class="nav-item"> <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab">Description</a> </li>
                                <li class="nav-item"> <a class="nav-link waves-light" data-toggle="tab" href="#panel52" role="tab">Reviews (0)</a> </li>
                            </ul>
                        </div>--}}
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <!-- Tab panels -->
                        <div class="tab-content card">
                            <!--Panel 1-->
                            <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
                                <h4>Description</h4>
                                <p>{!! str_limit($room->details,20) !!}</p>
                            </div>
                            <div class="btn-grp">
                                <a href="{{route('booking',['id'=>$room->room_id])}}" class="btn-send read-more">Book Now</a>
                            </div>
                            <!--/.Panel 1-->
                            <!--Panel 2-->
                          {{--  <div class="tab-pane fade" id="panel52" role="tabpanel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                            </div>--}}
                            <!--/.Panel 2-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{--<div class="container">
        <div class="row">
            <div class="shop-single-btm-page-area">
                <h2 class="sec-title">Related products</h2>
                <h3 class="sec-sub-title">Similar Items Product</h3>



                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="single-details">
                        <div class="images"> <a href="#"><img src="{{URL::to('frontend/images/rooms/room4.jpg')}}" alt=""></a>
                            <div class="overley">
                                <!-- <div class="winners-details">
                                  <ul class="product-info">
                                    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                  </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="triangle_left"></div>
                        <h3><a href="#">A++</a></h3>
                        <div class="price-details">
                            <ul>
                                <!-- <li> Form $120 </li> -->
                                <li> <a href="room.php" class="add-to-cart">View Details</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>--}}
</div>

    @endsection