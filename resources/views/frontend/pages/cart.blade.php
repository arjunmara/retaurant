@extends('frontend.includes.master1')
@section('body')




    <div class="inner-banner">
        <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
        <div class="title">
            <h1>Shop</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Cart</span></span>
        </div>
    </div>
<!-- Banner Section end Here -->

<!-- Cart Page Start Here -->
<div class="shipping-area spc-equal">
    <div class="container">
        <h2 class="sec-title">Your Cart</h2>

        @if(Cart::count()>0)

        <div class="row">
            <div class="tab-content">
                <div role="tabpane4" class="tab-pane active" id="checkout">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-list" id="view">
                            <table>


                                    @foreach(Cart::content() as $item)
                                    <tr>
                                    <td><button id="cart-delete{{$item->id}}" type="submit" class="btn btn-danger">Delete</button></td>
                                    <input type="hidden" value="{{$item->rowId}}" id="rowid{{$item->id}}"/>

                                    <td><img src="{{URL::to('/frontend/image/submenu/'.$item->model->image)}}" alt=""/></td>
                                    <td>
                                        <div class="des-pro">
                                            <h4>{{$item->name}}</h4>
                                        </div>
                                    </td>
                                    <td><strong>{{$item->price}}</strong></td>
                                    <td>
                                        <div class="order-pro order1">
                                            <input type="number" id="cart-qty{{$item->id}}" min="1" value="{{$item->qty}}"/>

                                        </div>
                                    </td>
                                    <td><span class="prize">{{$item->subtotal()}}</span></td>

                                    </tr>


                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                                    <script type="text/javascript">

                                        $(document).ready(function(){

                                            $(document).on('change keyup','#cart-qty{{$item->id}}',function(event){

                                                var a = $('#rowid{{$item->id}}').val();
                                                var b = $('#cart-qty{{$item->id}}').val();

                                                $.ajax({

                                                    type: "get",
                                                    url:'{{route('cart.update')}}',

                                                    data:{'id':a,'qty':b},


                                                    success:function(datas){

                                                        $('#view').load(location.href + '  #view');
                                                        $('.header-cart').load(location.href + '  .header-cart');


                                                    }

                                                });


                                            });



                                            $(document).on('click','#cart-delete{{$item->id}}',function(event){

                                                var a = $('#rowid{{$item->id}}').val();

                                                $.ajax({

                                                 type: "get",
                                                 url:'{{route('cart.delete')}}',

                                                 data:{'id':a},


                                                 success:function(datas){

                                                     $('#view').load(location.href + '  #view');
                                                     $('.header-cart').load(location.href + '  .header-cart');


                                                 }

                                                });


                                            });




                                        });

                                    </script>



                                    @endforeach

                                        <tr class="pull-right">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <td><b>TOTAL: </b><span class="grand-total">{{Cart::total()}}</span></td>
                                            </div>

                                                <div class="col-md-6">
                                                    <td>
                                                        <a href="{{route('cart-checkout')}}"><button class="btn btn-success">Proceeed to Checkout</button></a>
                                                    </td>

                                                </div>
                                            </div>


                                        </tr>


                            </table>




                        </div>
                    </div>
                </div>


                <div class="next-step">

                </div>

            </div>

        </div>

        @else
            <div class="alert alert-danger">

                <b> <center>NO ITEM IN THE CART</center> </b>

            </div>


        @endif

    </div>
</div>


<!-- Start scrollUp  -->

<div id="return-to-top">

    <span>Top</span>

</div>

@endsection
