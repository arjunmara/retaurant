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
                        <h2 style="width:200px;"><i class="fa fa-tag"></i><marquee>&nbsp;Add Menu</marquee></h2>
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
                            <div id="myTabContent" class="tab-content row col-md-12 col-lg-12 col-xs-12" >
                                <div role="tabpanel" class="tab-pane fade row col-md-12 col-lg-12 col-xs-12 " id="profile" aria-labelledby="home-tab">

                                    <form class="form-horizontal form-label-left" method="post" action="{{route('admin-submenu-add')}}" enctype="multipart/form-data" style="color:darkslategrey;width:1200px;">
                                        {{csrf_field()}}


                                        <div class="col-md-12 col-lg-12 col-xs-12">




                                            <div class="row col-md-12 col-lg-12 col-xs-12" style="margin-left:40px;">



                                                <div class="form-group col-md-5 col-xs-5 col-sm-5">
                                                    <label class="form-group" >Menu:</label>
                                                   <select class="form-control" name="id">
                                                       <option class="form-control" value="0">Choose</option>
                                                       @foreach($menus as $menu)
                                                           <option class="form-control" value="{{$menu->id}}">{{$menu->menu}}</option>
                                                           @endforeach
                                                   </select>
                                                </div>



                                                <div class="form-group col-md-5 col-xs-5 col-sm-5">
                                                    <label class="form-group" >Image:</label>
                                                    <input class="form-control" type="file"  required value="" name="image">
                                                </div>




                                            </div>


                                            <div class="row col-md-12 col-lg-12 col-xs-12" style="margin-left:40px;">



                                                <div class="form-group col-md-5 col-xs-5 col-sm-5" >
                                                    <label class="form-group" >Sub_Menu-Title:</label>
                                                    <input type="text" class="form-control" value="" required name="submenu">
                                                </div>




                                                <div class="form-group col-md-5 col-xs-5 col-sm-5">
                                                    <label class="form-group" >Price:</label>
                                                    <input type="text" class="form-control" value="" required name="price">
                                                </div>


                                            </div>


                                            <div class="form-group  col-md-10 col-lg-10 col-xs-10" style="margin-left:40px;">
                                                <label for="category">Details:</label><br>
                                                <div>
                                                    <textarea name="detail" class="form-control" required id="one"  required style="width:100px"></textarea>
                                                </div>
                                            </div>

                                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'one' );
                                            </script>







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

                                                     <form action="{{route('admin-submenu-search')}}" method="get">
                                                        <select class="form-control" id="category" name="id" style="width:250px;">
                                                            <option class="form-control" value="0">Choose</option>
                                                            @foreach($menus as $menu)
                                                                <option class="form-control" value="{{$menu->id}}">{{$menu->menu}}</option>
                                                            @endforeach
                                                        </select>

                                                        <span style="margin-left:255px;"><button type="submit" style="margin-top:-52px;" class="btn btn-md btn-primary">Search</button></span>

                                                     </form>






                                                    <table class="table table-striped table-bordered table-list " style="background-color:#1b926c;color:white">
                                                        <thead >
                                                        <tr >


                                                            <th style="width:10%">Menu</th>
                                                            <th>Detail</th>
                                                            <th>Image</th>
                                                            <th><em class="fa fa-cog" style="width:10%;"></em></th>


                                                        </tr>
                                                        </thead>








                                                        <tbody id="productContent">



                                                         @foreach($datas as $data)
                                                            <tr style="color:black;" >

                                                                <td style="">{{$data->submenu}}</td>
                                                                <td style="">{!! str_limit($data->detail,150) !!}</td>
                                                                <td><img src="{{URL::to('frontend/image/submenu/'.$data->image)}}" style="width:200px;height:120px;"></td>

                                                                <td style="width:10%;">

                                                                    <a href="{{route('admin-submenu-edit',['id'=>$data->id])}}"><button type="button" title="Edit" class="btn btn-default btn-md">
                                                                            <span class="glyphicon glyphicon-edit"></span>
                                                                        </button></a>

                                                                    <form action="{{route('admin-submenu-delete',['id'=>$data->id])}}" method="post">
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

                                                            {{$datas->appends(Request::only('id'))->links()}}

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


