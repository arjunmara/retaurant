@extends('frontend.includes.master1')
@section('body')


<div class="inner-banner">
    <img src="{{URL::to('frontend/image/banner/13.jpg')}}" alt="">
    <div class="title">
        <h1>Menu</h1>
        <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i><span class="last"> Menu</span></span>
    </div>
</div>
<!-- Banner Section end Here -->
<div class="container">
        <div class="menu-pdf col-sm-12 col-md-12 col-xs-12">
            <h2 class="sec-sub-title">View menu in PDF</h2>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="menu-eng"><a>English Menu</a></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="menu-eng">Dutch Menu</div>
                </div>
        </div>
</div>
<!-- Menu Page Start Here -->
<div class="menus-page-area menus-area spc-large">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="sec-title">Our Menus</h2>
                <h3 class="sec-sub-title">Choose Our Menus</h3>
                <div id="filters" class="button-group">


                    <button class="btn btn-primary" data-filter=".all"><i class="flaticon-food"></i>All</button>
                    @foreach($menus as $m)
                    <button class="btn btn-primary " data-filter=".{{$m->menu}}"><i class="flaticon-food"></i>{{$m->menu}}</button>

                        @endforeach
                </div>
                <div class="menu-page">
                    <div id="posts" class="row">


                        @foreach($alls as $all)
                        <div id="1" class="item all col-md-6 col-sm-12">
                            <div class="item-wrap">
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="inner-img">
                                               <img src="{{URL::to('frontend/image/submenu/'.$all->image)}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="inner-content">
                                                <h3>{{$all->submenu}}</h3>
                                                <p>{!! $all->details !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="inner">
                                        <span class="price">{{$all->price}}</span>
                                        <form action="{{route('cart-store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="price" id="cart-price{{$all->id}}" value="{{$all->price}}"/>
                                            <input type="hidden" name="id" id="cart-id{{$all->id}}" value="{{$all->id}}"/>
                                            <input type="hidden" name="name" id="cart-name{{$all->id}}" value="{{$all->submenu}}"/>
                                            <input type="hidden" name="qty" id="cart-qty{{$all->id}}" value="1"/>
                                            <button type="submit" class="btn btn-danger" id="cart-store{{$all->id}}">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                        @foreach($menus as $ms)
                        @foreach($ms->Submenu as $s)
                        <div id="2" class="item {{$ms->menu}} col-md-6 col-sm-12">
                            <div class="item-wrap">
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <div class="inner-img">
                                                <a href="#"> <img src="{{URL::to('frontend/image/submenu/'.$s->image)}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="inner-content">
                                                <h3>{{$s->submenu}}</h3>
                                                <p>{!! $s->details !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="inner">
                                        <span class="price">{{$s->price}}</span>
                                        <form action="{{route('cart-store')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="price" id="cart-price{{$s->id}}" value="{{$s->price}}"/>
                                            <input type="hidden" name="id" id="cart-id{{$s->id}}" value="{{$s->id}}"/>
                                            <input type="hidden" name="name" id="cart-name{{$s->id}}" value="{{$s->submenu}}"/>
                                            <input type="hidden" name="qty" id="cart-qty{{$s->id}}" value="1"/>
                                            <button type="submit" class="btn btn-danger" id="cart-store{{$s->id}}">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection