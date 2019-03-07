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
                        <h2 style="width:200px;"><i class="fa fa-tag"></i>Edit Menu&nbsp;<a href="{{route('admin-submenu')}}"><button type="button" class="btn btn-primary btn-md">Back</button></a></h2>
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

                                        <form class="form-horizontal form-label-left" method="post" action="{{route('admin-submenu-update',['id'=>$datas->id])}}" enctype="multipart/form-data" style="color:darkslategrey;width:1200px;">
                                            {{csrf_field()}}


                                            <div class="col-md-12 col-lg-12 col-xs-12">

                                                <div class="row col-md-12 col-lg-12 col-xs-12" style="margin-left:40px;">



                                                    <div class="form-group col-md-5 col-xs-5 col-sm-5">
                                                        <label class="form-group" >Menu:</label>
                                                        <select class="form-control" name="menu_id">
                                                            <option class="form-control" value="{{$datas->Menu->id}}">{{$datas->Menu->menu}}</option>
                                                            @foreach($menus as $menu)


                                                                    <option class="form-control" value="{{$menu->id}}">{{$menu->menu}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>



                                                    <div class="form-group col-md-5 col-xs-5 col-sm-5">
                                                        <label class="form-group" >Image:</label>
                                                        <input class="form-control" type="file"   value="" name="image">
                                                    </div>




                                                </div>



                                                <div class="row col-md-12 col-lg-12 col-xs-12" style="margin-left:40px;">



                                                    <div class="form-group col-md-5">
                                                        <label class="form-group" >Submenu-Title:</label>
                                                        <input type="text" class="form-control" value="{{$datas->submenu}}"  name="submenu">
                                                    </div>



                                                    <div class="form-group col-md-5 ">
                                                        <label class="form-group" >Price:</label>
                                                        <input class="form-control" type="text"   value="{{$datas->price}}" name="price">
                                                    </div>




                                                </div>

                                                <div class="row" style="margin-left:60px;">
                                                <div class="form-group  col-md-10 col-xs-6 col-sm-6">
                                                    <label for="category">Details:</label><br>
                                                    <div>
                                                        <textarea name="detail" class="form-control"  id="one"  required style="width:100px">

                                                            {!! $datas->detail !!}

                                                        </textarea>
                                                    </div>
                                                </div>

                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                <script>
                                                    CKEDITOR.replace( 'one' );
                                                </script>
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


