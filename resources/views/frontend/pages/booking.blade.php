@extends('frontend.includes.master1')
@section('body')



    <div class="inner-banner"> <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
        <div class="title">
            <h1>Reservation</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last"> Reservation</span></span> </div>
    </div>

@include('backend.includes.message')


    <div class="blog-page-area reservation-page event-page-area spc-large">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12"> <img src="{{URL::to('frontend/image/reservation/1.jpg')}}" alt=""> </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="reservation-form">
                        <h2 class="sec-title">Reservation</h2>
                        <h3 class="sec-sub-title">Book Your Table</h3>
                        <div class="resv-area">
                            <div id="form-messages"></div>





                            <form id="reservation-form" method="post" action="{{route('contact-action')}}">

                                {{csrf_field()}}
                                <input type="hidden" value="book" name="checking">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text"  name="fname" class="form-control" required placeholder="Enter Your First Name*">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text"  name="lname" class="form-control" required placeholder="Enter Your Last Name*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="number"  name="no" class="form-control" min="1" required max="50" placeholder="Number Of Persons">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text"  name="date" class="form-control" required placeholder="Choose a date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="table"  name="room" class="form-control" value="{{$id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text"  name="phone" class="form-control" required placeholder="Enter Your Phone Number*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <textarea cols="40" rows="10" id="message" name="message" required class="textarea form-control" placeholder="Enter Your Notes*"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <button class="btn-send" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection