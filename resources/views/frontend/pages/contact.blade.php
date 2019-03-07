@extends('frontend.includes.master1')
@section('body')


<div class="inner-banner">
    <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
    <div class="title">
        <h1>Contact Us</h1>
        <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Contact</span></span>
    </div>
</div>

@include('backend.includes.message')





<!-- Banner Section end Here -->
<!-- Contact Section Start Here -->
<div class="contact-page-area spc-equal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.259664301159!2d4.711855415104182!3d50.88190427953714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c161ea280f484d%3A0x38ef1b18ad0d98f!2sKintsugi+Sushi+Bar+%26+Grill!5e0!3m2!1sen!2snp!4v1551855769286" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact-middle">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-add" style="height:180px;">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5>Address</h5>
                                <p><span>{{$site->address}}</span></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-phn" style="height:180px;">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5>Phone number</h5>
                                <p><a>{{$site->telephone}}</a></p>
                                <p><a>{{$site->mobile}}</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="inner-email" style="height:180px;">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h5>Email Address</h5>
                                <p><a>{{$site->email1}}</a></p>
                                <p><a>{{$site->email2}}</a></p>
                            </div>
                        </div>
                    </div>
                </div><br>






                <div class="contact-area">
                    <div id="form-messages"></div>
                    <form  method="post" action="{{route('contact-action')}}">

                        {{csrf_field()}}

                        <input type="hidden" value="contact" name="checking">
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Fast Name*</label>
                                        <input type="text" id="fname" required name="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" id="lname" name="lname" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" id="email" name="email"  required class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Your Website</label>
                                        <input type="text" id="website"  name="website" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Message*</label>
                                        <textarea cols="40" rows="10" id="message" required name="message" class="textarea form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group bottom-btn">
                                        <button class="btn-send" type="submit">Submit Now</button>
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

<!-- Start scrollUp  -->
<div id="return-to-top">
    <span>Top</span>
</div>

@endsection