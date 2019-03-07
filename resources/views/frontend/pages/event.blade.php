@extends('frontend.includes.master1')
@section('body')



    <div id="return-to-top">

        <span>Top</span>

    </div>

    <!-- End scrollUp  -->
    <div class="inner-banner">
        <img src="{{URL::to('frontend/image/banner/11.jpg')}}" alt="">
        <div class="title">
            <h1>Event</h1>
            <span><a href="{{route('index')}}">Home</a> <i class="fa fa-bolt" aria-hidden="true"></i> <span class="last"> Event</span></span>
        </div>
    </div>
    <!-- Banner Section end Here -->

    <!-- Blog Section Start Here -->
    <div class="blog-page-area event-page-area spc-large">
        <div class="container">


            @foreach($events as $eve)
            <div class="row">
                <div class="col-sm-12">
                    <div class="inner">
                        <div class="images col-lg-7 col-md-7 col-sm-6 col-xs-12">
                            <a><i class="fa fa-plus" aria-hidden="true"></i> <img src="{{URL::to('frontend/image/event/'.$eve->image)}}" style="height:400px;width:800px;" alt=""></a>
                        </div>
                        <div class="images-content col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> {{$eve->date}} </span> <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> Time {{$eve->time}}</span>
                            <h4><a>{{$eve->title}}</a></h4>
                             <p>{!! str_limit($eve->details,320) !!}</p>
                            <a href="{{route('eventdetails',['id'=>$eve->id])}}">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach






        </div>
    </div>





@endsection