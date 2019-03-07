@extends('frontend.includes.master1')
@section('body')


<div class="inner-banner">
    <img src="{{URL::to('frontend/image/banner/8.jpg')}}" alt="">
    <div class="title">
        <h1>Our Services</h1>
        <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last">Services</span></span>
    </div>
</div>
<!-- Banner Section end Here -->

<!-- Start scrollUp  -->
<!-- Testimonials Section Start Here -->
<div class="testimonial-section spc-equal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">

                @foreach($services as $serve)
                <div class="testimonil-details col-lg-4">
                    <div class="testimonil-images"> <img src="{{URL::to('frontend/image/services/'.$serve->image)}}" style="width:100px;height:100px;" /> </div>
                    <div class="testimonil-text">
                        <div class="sec-title testimonial-title">{{$serve->title}}</div>
                        <p>{!! $serve->details !!}</p>
                    </div>
                </div>
                @endforeach
               {{-- <div class="testimonil-details col-lg-4">
                    <div class="testimonil-images"> <img src="images/services/bed.png" alt="Testimonial" /> </div>
                    <div class="testimonil-text">
                        <div class="sec-title testimonial-title">Hospitality</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="testimonil-details col-lg-4">
                    <div class="testimonil-images"> <img src="images/services/event.png" alt="Testimonial" /> </div>
                    <div class="testimonil-text">
                        <div class="sec-title testimonial-title">Events</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</div>



@endsection