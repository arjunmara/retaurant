@extends('frontend.includes.master1')
@section('body')

    <div class="inner-banner">
        <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
        <div class="title">
            <h1>Shop</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Shop</span></span>
        </div>
    </div>
    <!-- Banner Section end Here -->


    <!-- Shop Page Start Here -->
    <div class="shop-page-area spc-equal">
        <div class="container">
            <div class="row">
                <div class="topbar-area">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="showing-result">
                            <ul>
                                <li>Category</li>
                                <li class="seclec-box">
                                    <form>
                                        <fieldset>
                                            <div class="form-group">
                                                <select class="form-control">

                                                    <option>ALL</option>
                                                    @foreach($menus as $menu)
                                                    <option>{{$menu->menu}}</option>
                                                    @endforeach

                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </form>
                                </li>
                                <span>Showing 1–12 of 27 results</span>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="showing-result">
                                <ul>
                                    <li>
                                        <form>
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </li>
                                    <input type="submit" value="Search" class="add-to-cart">
                                </ul>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="showing-result showing-Short">
                            <ul>
                                <li class="seclec-box">
                                    <form>
                                        <fieldset>
                                            <div class="form-group">
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Short by</option>
                                                    <option>High to Low</option>
                                                    <option>Low to High</option>
                                                    <option>A to Z</option>
                                                    <option>Z to A</option>
                                                </select>
                                            </div>
                                        </fieldset>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @include('backend.includes.message')
                @foreach($submenus as $all)
                <div class="product-list">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <div class="single-details">
                            <div class="images"> <a href="#"><img src="{{URL::to('frontend/image/submenu/'.$all->image)}}" alt=""></a>
                                <div class="overley">
                                    <div class="winners-details">
                                        <ul class="product-info">
                                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="triangle_left"></div>
                            <h3><a href="#">{{$all->submenu}}</a></h3>
                            <div class="price-details">
                                <ul>
                                    <li> {{$all->price}} </li>
                                    <li>

                                        <form action="{{route('cart-store')}}" method="post">
                                            {{csrf_field()}}
                                        <input type="hidden" name="price" id="cart-price{{$all->id}}" value="{{$all->price}}"/>
                                        <input type="hidden" name="id" id="cart-id{{$all->id}}" value="{{$all->id}}"/>
                                        <input type="hidden" name="name" id="cart-name{{$all->id}}" value="{{$all->submenu}}"/>
                                        <input type="hidden" name="qty" id="cart-qty{{$all->id}}" value="1"/>
                                        <button type="submit" class="add-to-cart" id="cart-store{{$all->id}}">Add To Cart</button>
                                        </form>
                                    </li>
                                </ul>


                                {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                                <script type="text/javascript">

                                    $(document).ready(function(){

                                        $(document).on('click','#cart-store{{$all->id}}',function(event){

                                            var a = $('#cart-price{{$all->id}}').val();
                                            var b = $('#cart-name{{$all->id}}').val();
                                            var c = $('#cart-id{{$all->id}}').val();
                                            var d = $('#cart-qty{{$all->id}}').val();


                                            $.ajax({

                                                type: "POST",
                                                url:'{{URL::to('cart/store')}}',
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                },
                                                data:{'price':a,'name':b,'id':c,'qty':d},


                                                success:function(datas){

                                                    alert("hello");
                                                    ('#cart-total').load(location.href + '  #cart-total');

                                                }



                                            });


                                        });

                                        /*$('#refresh').click(function(event){

                                            $('#hello').load(location.href + '  #hello');


                                        });*/


                                    });

                                </script>--}}





                            </div>
                        </div>
                    </div>
                </div>
                @endforeach



               <center> {{$submenus->links()}} </center>


            </div>

        </div>
    </div>




@endsection