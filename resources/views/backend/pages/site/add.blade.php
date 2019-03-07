@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="x_panel" style="background-color:white;color:darkslategrey">

                    <div class="x_title">
                        <h2 style="width:200px;"><i class="fa fa-tag"></i><marquee>&nbsp;Site Configuration</marquee></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#profile" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Contact-Details</a>
                                </li>
                                <li role="presentation" class=""><a href="#logo" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Logo</a>
                                </li>
                                <li role="presentation" class=""><a href="#status" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Booking On/Off</a>
                                </li>


                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="home-tab">

                                    <form method="post" action="{{route('admin-hotel-update',['id'=>$hotel->id])}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}



                                        <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Hotel-Name:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->hotel_name}}" name="hotel_name">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Address:</label>
                                                    <input type="text" class="form-control"  value="{{$hotel->address}}" name="address">
                                                </div>




                                            </div>



                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Telephone-number:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->telephone}}"  name="telephone">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Mobile-number:</label>
                                                    <input type="text" class="form-control"  value="{{$hotel->mobile}}" name="mobile">
                                                </div>




                                            </div>


                                            <div class="row">




                                                <div class="form-group col-md-4">
                                                    <label class="form-group" >Email-1:</label>
                                                    <input type="email" class="form-control"  value="{{$hotel->email1}}" name="email1">
                                                </div>


                                                <div class="form-group col-md-4">
                                                    <label class="form-group" >Email-2:</label>
                                                    <input type="text" class="form-control"  value="{{$hotel->email2}}" name="email2">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label class="form-group" >Opening-Time:</label>
                                                    <input type="text" class="form-control"  value="{{$hotel->opening_time}}" name="opening_time">
                                                </div>


                                            </div>



                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Twitter-Link:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->twitter_link}}" name="twitter_link">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Google_Plus-Link:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->googleplus_link}}" name="googleplus_link">
                                                </div>





                                            </div>

                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Facebook-Link:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->facebook_link}}" name="facebook_link">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Instagram-Link:</label>
                                                    <input type="text" class="form-control" value="{{$hotel->instagram_link}}" name="instagram_link">
                                                </div>






                                            </div>






                                            <br>
                                            <div class="form-group" style="margin-right:600px;">
                                                <div>
                                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                                </div>
                                            </div>




                                    </form>



                                </div>





                                <div role="tabpanel" class="tab-pane fade " id="logo" aria-labelledby="profile-tab">


                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-logo',['id'=>$logo->id])}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}


                                        <div class="col-md-12">


                                            <div class="row">



                                                <div class="form-group col-md-6" style="margin-top: 28px;">


                                                    <div class="">
                                                        <br>

                                                        <center>
                                                            <img src="{{URL::to('/frontend/image/logo/',$logo->logo)}}" class="img-thumbnail"  style="width:300px;height:auto;">
                                                        </center>
                                                    </div>

                                                </div>




                                                <div class="form-group col-md-6" style="margin-top:100px;">
                                                    <label class="form-group" >Logo:</label>
                                                    <input type="file" class="form-control"  name="logo">
                                                </div>



                                            </div>





                                            <br>
                                            <div class="form-group" style="margin-right:600px;">
                                                <div>
                                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                                </div>
                                            </div>

                                        </div>


                                    </form>


                                </div>



                                <div role="tabpanel" class="tab-pane fade " id="status" aria-labelledby="profile-tab">

                                    <center>
                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-booking_status_update',['id'=>$status->id])}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}






                                                 <div class="form-group col-md-6" style="margin-left:300px;">
                                                    <label class="form-group" >Choose Booking_Status:</label>
                                                   <select name="status" class="form-control">

                                                       @if($status->status == 0)
                                                           {
                                                           <option value="{{$status->status}}">On</option>
                                                           <option value="1">Off</option>
                                                           }

                                                           @else
                                                           {
                                                           <option value="{{$status->status}}">Off</option>
                                                           <option value="0">On</option>
                                                           }
                                                           @endif

                                                   </select>

                                                </div>




                                            <br>
                                            <div class="form-group" style="margin-right:600px;">
                                                <div>
                                                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                                                </div>
                                            </div>




                                    </form>
                                    </center>


                                </div>





                            </div>
                        </div>









                    </div>
                </div>

            </div>


        </div>
    </div>











@endsection







