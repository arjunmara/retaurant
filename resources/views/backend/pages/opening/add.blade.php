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
                        <h2 style="width:200px;"><i class="fa fa-tag"></i><marquee>Opening-Hours</marquee></h2>
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
                                <li role="presentation" class="active"><a href="#profile" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Opening-Hours</a>
                                </li>




                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="home-tab">

                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-opening-update',['id'=>$datas->id])}}" enctype="multipart/form-data" style="color:darkslategrey;width:1200px;">
                                        {{csrf_field()}}


                                        <div class="col-md-12 col-lg-12 col-xs-12">


                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Day-1:</label>
                                                    <input type="text" class="form-control" value="{{$datas->day1}}" name="day1">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Time-1:</label>
                                                    <input type="text" class="form-control"  value="{{$datas->time1}}" name="time1">
                                                </div>




                                            </div>



                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Day-2:</label>
                                                    <input type="text" class="form-control" value="{{$datas->day2}}"  name="day2">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Time-2:</label>
                                                    <input type="text" class="form-control"  value="{{$datas->time2}}" name="time2">
                                                </div>




                                            </div>


                                            <div class="row">




                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Day-3:</label>
                                                    <input type="text" class="form-control"  value="{{$datas->day3}}" name="day3">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Time-3:</label>
                                                    <input type="text" class="form-control"  value="{{$datas->time3}}" name="time3">
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











                            </div>
                        </div>









                    </div>
                </div>

            </div>


        </div>
    </div>











@endsection







