@extends('backend.master')
@section('body')




    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="background-color:white;color:black">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Evergreen</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                <li role="presentation" class="active"><a href="#profile" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Edit-Profile</a>
                                </li>
                                <li role="presentation" class=""><a href="#password" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit-Password</a>
                                </li>
                                <li role="presentation" class=""><a href="#adduser" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Add Users</a>
                                </li>
                                <li role="presentation" class=""><a href="#user" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Edit-Users</a>
                                </li>


                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="profile" aria-labelledby="home-tab">


                                    <form class="form-horizontal form-label-left" method="post" action="{{route('adminprofile')}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}


                                        <div class="col-md-12">


                                            <div class="row">



                                                <div class="form-group col-md-6" style="margin-top: 28px;">


                                                    <div class="">
                                                        <br>

                                                        <center>
                                                        <img src="{{URL::to('/backend/userimg/'.Auth::user()->image)}}" class="img-circle"  style="width:300px;height:200px;">
                                                        </center>
                                                    </div>

                                                </div>




                                            <div class="form-group col-md-6" style="height:100px; ">
                                                <label class="form-group" >Name:</label>
                                                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name">
                                            </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Email:</label>
                                                    <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Image:</label>
                                                    <input type="file" class="form-control"  name="image">
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




                                <div role="tabpanel" class="tab-pane fade " id="password" aria-labelledby="profile-tab">


                                    <form class="form-horizontal form-label-left" method="post" action="{{route('adminpassword')}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">

                                        <div class="col-md-12">


                                            <div class="row">



                                                <div class="form-group col-md-6" style="margin-top: 28px;">


                                                    <div class="">
                                                        <br>

                                                        <center>
                                                            <img src="{{URL::to('/backend/userimg/'.Auth::user()->image)}}" class="img-circle"  style="width:300px;height:200px;">
                                                        </center>
                                                    </div>



                                                </div>




                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Old-Password:</label>
                                                    <input type="password" class="form-control"  name="oldpassword">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >New-Password:</label>
                                                    <input type="password" class="form-control"   name="password">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Confirm-Password:</label>
                                                    <input type="password" class="form-control"  name="password_confirmation">
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


                                <div role="tabpanel" class="tab-pane fade " id="adduser" aria-labelledby="profile-tab">


                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-register')}}" enctype="multipart/form-data" style="color:darkslategrey;">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">

                                        <div class="col-md-12">


                                            <div class="row">



                                                <div class="form-group col-md-6" style="margin-top: 28px;">


                                                    <div class="">
                                                        <br>

                                                        <center>
                                                            <img src="{{URL::to('/backend/userimg/'.Auth::user()->image)}}" class="img-circle"  style="width:300px;height:200px;">
                                                        </center>
                                                    </div>

                                                </div>




                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Name:</label>
                                                    <input type="text" class="form-control"  name="name">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Email:</label>
                                                    <input type="email" class="form-control"  name="email">
                                                </div>



                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Password:</label>
                                                    <input type="password" class="form-control"   name="password">
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label class="form-group" >Confirm-Password:</label>
                                                    <input type="password" class="form-control"  name="password_confirmation">
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



                                <div role="tabpanel" class="tab-pane fade " id="user" aria-labelledby="profile-tab">

                                    <div class="col-md-12 col-sm-12">

                                        <div class="panel panel-default panel-table">
                                            <div class="panel-heading">
                                                <div class="panel-body">
                                                    <table class="table table-striped table-bordered table-list" style="background-color:#1b926c;color:white">
                                                        <thead>
                                                        <tr >

                                                            <th class="hidden-xs">ID</th>
                                                            <th>Name</th>
                                                            <th>Utype</th>
                                                            <th>Email</th>
                                                            <th><em class="fa fa-cog" style="width:10%;"></em></th>


                                                        </tr>
                                                        </thead>








                                                            <tbody id="productContent">

                                                        @foreach($nis as $data)
                                                            <tr style="color:black;">
                                                                <td>{{$loop->index+1}}</td>
                                                                <td>{{$data->name}}</td>
                                                                <td>{{$data->utype}}</td>
                                                                <td>{{$data->email}}</td>

                                                                <td>



                                                                    <form action="{{route('admin-profile-delete',['id'=>$data->id])}}" method="post">
                                                                        {{ csrf_field() }}

                                                                        <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span></button>
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