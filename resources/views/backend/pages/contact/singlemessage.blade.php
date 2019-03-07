@extends('backend.master')

@section('body')

    <div class="right_col" role="main" style="height:600px;">
        <div class="row">

            <div class=" col-lg-12" >
                <div class="x_panel" style="background-color: #333333;color:white;margin-left: 80px;width:85%;border-radius:5px;">
                    <div class="x_title">
                        <a href="{{route('contact-message')}}"><i class="fa fa-arrow-circle-left" style="font-size:20px;color:white">&nbsp;<span style="font-size: 18px;color:white">BACK</span></i></a></span>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>

                    </div>
                    <div class="x_content" >
                        <div class="dashboard-widget-content">

                            <hr class="list-unstyled timeline widget">
                                <a href="{{route('confirm-delete',['id' => $datas->id])}}" class="btn btn-sm btn-info pull-right" title='delete message'><i class='fa fa-trash'></i></a>

                            <span>Date:&nbsp;&nbsp;{{ \Carbon\Carbon::parse($datas->created_at)->format('l j F Y')}}</span><br>
                            <h2 style=" font-family:'Tangerine', serif;">First Name:&nbsp;&nbsp;{{$datas->fname}}</h2>
                            <h2 style=" font-family:'Tangerine', serif;">Last Name:&nbsp;&nbsp;{{$datas->lname}}</h2>
                            <h4 style=" font-family:'Tangerine', serif; ">Email:&nbsp;&nbsp;{{$datas->email}}</h4>
                            <h4 style=" font-family:'Tangerine', serif; ">Website:&nbsp;&nbsp;{{$datas->website}}</h4>

                            <hr></hr>
                            <h4 style=" font-family:'Tangerine', serif; ">Date:&nbsp;&nbsp;{{$datas->date}}</h4>
                            <h4 style=" font-family:'Tangerine', serif; ">time:&nbsp;&nbsp;{{$datas->time}}</h4>
                            <h4 style=" font-family:'Tangerine', serif; ">People_No:&nbsp;&nbsp;{{$datas->no}}</h4>
                            <h4 style=" font-family:'Tangerine', serif; ">Phone:&nbsp;&nbsp;{{$datas->phone}}</h4>

                            <hr></hr>


                            {{--<h4 style=" font-family:'Tangerine', serif; ">Room:&nbsp;&nbsp;{{$datas->room}}</h4>--}}

                            <hr></hr>

                            <h2>Message:</h2><h2 style=" font-family:'Tangerine', serif; color:navajowhite; ">&nbsp;&nbsp;<br>{{$datas->message}}</h2>




                                @foreach($datas->Order as $datas)

                                

                                 @if($datas)
                                    {{--@foreach($datas->Order as $od)--}}

                                        <h4 style=" font-family:'Tangerine', serif; ">Food-Price:&nbsp;&nbsp;{{$datas->price}}</h4>
                                        <h4 style=" font-family:'Tangerine', serif; ">Food-Item:&nbsp;&nbsp;{{$datas->food_name}}</h4>
                                        <h4 style=" font-family:'Tangerine', serif; ">Qty:&nbsp;&nbsp;{{$datas->qty}}</h4>

                                        <hr></hr>

                                    @endif

                                      @endforeach



                            </ul>


                        </div>
                    </div>













                </div>
            </div>
        </div>
    </div>











@endsection