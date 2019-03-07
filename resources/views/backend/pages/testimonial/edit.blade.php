@extends('backend.master')
@section('body')

    <div class="right_col " role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="x_panel" style="background-color:white;color:darkslategrey">

                    <div class="x_title">
                        <h2 style="width:250px;"><i class="fa fa-tag"></i>&nbsp;Edit Testimonial <a href="{{route('admin-testimonial')}}"><button type="button" class="btn btn-primary btn-md">Back</button></a></h2>
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

                                <li role="presentation" class="active"><a href="#logo" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit</a>
                                </li>

                            </ul>

                            <div role="tabpanel" class="tab-pane fade active in " id="logo" aria-labelledby="profile-tab">


                                <div class="col-md-10 ">

                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-testimonial-update',['id'=>$datas->id])}}" enctype="multipart/form-data" style="color:darkslategrey;width:1200px;">
                                        {{csrf_field()}}


                                        <div class="col-md-12 col-lg-12 col-xs-12">





                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Name:</label>
                                                    <input type="text" class="form-control" value="{{$datas->name}}"  name="name">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Address:</label>
                                                    <input type="text" class="form-control"  value="{{$datas->address}}" name="address">
                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Job:</label>
                                                    <input type="text" class="form-control" value="{{$datas->job}}"  name="job">
                                                </div>





                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Image:</label>
                                                    <input type="file" class="form-control"  name="image">
                                                </div>




                                            </div>


                                            <div class="row">




                                                <div class="form-group col-md-12">
                                                    <label for="category">Details:</label><br>
                                                    <div>
                                                        <textarea name="details" class="form-control" required id="one"  style="width:100px">

                                                            {!! $datas->details !!}

                                                        </textarea>
                                                    </div>
                                                </div>

                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                <script>
                                                    CKEDITOR.replace( 'one' );
                                                </script>
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
    </div>











@endsection


