@extends('frontend.includes.master1')
@section('body')

    <div class="inner-banner">
        <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
        <div class="title">
            <h1>Shop</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Checkout</span></span>
        </div>
    </div>




    <div class="shipping-area spc-equal">
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div role="tabpane4" class="tab-pane active" id="shipping">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-area row">

                                <form action="{{route('contact-action')}}" method="post" data-toggle="validator">
                                    {{csrf_field()}}

                                          @include('backend.includes.message')


                                    <input type="hidden" value="checkout" name="checking"/>
                                    <fieldset>
                                        <div class="col-sm-6">
                                            <label>First Name *</label>
                                            <input type="text" name="fname" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name *</label>
                                            <input type="text" name="lname" required>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="col-sm-6">
                                            <label>E-mail Address *</label>
                                            <input type="email" name="email" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone *</label>
                                            <input type="number" name="phone" required>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="col-sm-12">
                                            <label>Address</label>
                                            <input type="text" name="address" required>
                                        </div>
                                    </fieldset>


                            </div>
                        </div>
                    </div>
                    <div role="tabpane4" class="tab-pane active" id="payment">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="next-step text-center">
                                <center><button type="submit" class="btn btn-danger">Place Your Order</button></center>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="return-to-top">

        <span>Top</span>

    </div>

@endsection