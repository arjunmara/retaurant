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
                        <h2 style="width:200px;"><i class="fa fa-tag"></i><marquee>&nbsp;Testimonial</marquee></h2>
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
                                <li role="presentation" class=""><a href="#profile" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ADD</a>
                                </li>
                                <li role="presentation" class="active"><a href="#logo" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">VIEW</a>
                                </li>



                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade " id="profile" aria-labelledby="home-tab">

                                    <form action="{{route('admin-testimonial-add')}}" class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data" style="color:darkslategrey;width:1200px;">
                                        {{csrf_field()}}


                                        <div class="col-md-12 col-lg-12 col-xs-12">


                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Name:</label>
                                                    <input type="text" class="form-control" required  name="name">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Address:</label>
                                                    <input class="form-control"  required name="address">
                                                </div>




                                            </div>



                                            <div class="row">



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Detail:</label>
                                                    <textarea class="form-control"  required name="details" style="height:120px;"></textarea>
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Image:</label>
                                                    <input type="file" class="form-control" required  name="image">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Job:</label>
                                                    <input type="text" class="form-control"  required  name="job">
                                                </div>




                                            </div>


                                            <br>
                                            <div class="form-group" style="margin-right:600px;">
                                                <div>
                                                    <button type="submit" class="btn btn-primary pull-right">ADD</button>
                                                </div>
                                            </div>

                                        </div>


                                    </form>



                                </div>





                                <div role="tabpanel" class="tab-pane fade active in " id="logo" aria-labelledby="profile-tab">


                                    <div class="col-md-12 ">

                                        <div class="panel panel-default panel-table">
                                            <div class="panel-heading">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list " style="background-color:#1b926c;color:white">
                                                        <thead >
                                                        <tr >

                                                            <th class="hidden-xs">ID</th>
                                                            <th>Name</th>
                                                            <th>job</th>
                                                            <th>Image</th>
                                                            <th><em class="fa fa-cog" style="width:10%;"></em></th>


                                                        </tr>
                                                        </thead>








                                                        <tbody id="productContent">



                                                        @foreach($datas as $data)
                                                            <tr style="color:black;">
                                                                <td>{{$loop->index+1}}</td>
                                                                <td>{{$data->name}}</td>
                                                                <td>{{$data->job}}</td>
                                                                <td><img src="{{URL::to('frontend/image/testimonial/'.$data->image)}}" style="width:200px;height:120px;"></td>

                                                                <td>

                                                                    <a href="{{route('admin-testimonial-edit',['id'=>$data->id])}}"><button type="button" title="Edit" class="btn btn-default btn-md">
                                                                            <span class="glyphicon glyphicon-edit"></span>
                                                                        </button></a>

                                                                    <form action="{{route('admin-testimonial-delete',['id'=>$data->id])}}" method="post">
                                                                        {{ csrf_field() }}

                                                                        <button class="btn btn-md btn-default" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
                                                                    </form>

                                                                </td>
                                                            </tr>
                                                            @endforeach




                                                        </tbody>







                                                    </table>

                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <center>



                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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


