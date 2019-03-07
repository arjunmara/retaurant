@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Edit Room <a href="{{route('admin-room')}}"><button type="button" class="btn btn-primary btn-md">Back</button></a></h2>
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

<center>
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('admin-room-update',['id'=>$datas->id])}}" enctype="multipart/form-data" style="width:800px;">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="category">Category: <span class="required">*</span> </label>
                                <div>
                                    <select name="room_id" class="form-control" required>
                                        <option value="{{$datas->room_id}}">{{$datas->room_id}}</option>
                                        <option>Choose</option>
                                        <option value="a_c">A/C</option>
                                        <option value="deluxe">Deluxe</option>
                                        <option value="a_++">A++</option>
                                        <option value="non_ac">Non A++</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="category">Information: <span class="required">*</span> </label>
                                <div>


                                    <textarea type="text" name="info"   class="form-control" style="height:200px;">
                                        {{$datas->info}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category">Details: <span class="required">*</span> </label>
                                <div>
                                    <textarea type="text" name="details"   class="form-control" style="height:200px;">
                                         {{$datas->details}}
                                    </textarea>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success" value="Add Now">Update</button>
                                </div>
                            </div>
                        </form>
                        </center>


                        <hr></hr>


                        <center><h3><b>Add-Images</b></h3></center>

                        <style>
                            div.gallery {
                                margin: 5px;
                                border: 1px solid #ccc;
                                float: left;
                                width: 180px;
                            }

                            div.gallery:hover {
                                border: 1px solid #777;
                            }

                            div.gallery img {
                                width: 100%;
                                height: auto;
                            }

                            div.desc {
                                padding: 15px;
                                text-align: center;
                            }
                        </style>



                        <form action="{{route('admin-room-image-add')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <input type="hidden" name="room_id" value="{{$datas->room_id}}">
                            <span><input type="file" class="form-control" name="image[]" multiple style="width:300px;">

                            </span><span style="margin-left:320px;">
                                <button type="submit" class="btn btn-primary" style="margin-top:-50px;">Submit</button></span>

                        </form>


                        @foreach($r_img as $r)

                            <div class="gallery ">

                            <img src="{{URL::to('frontend/image/room/'.$r->image)}}" style="width:177px; height:236px;">

                            <div class="desc">

                                <form action="{{route('admin-room-image-delete',['id'=>$r->id])}}" method="post">
                                    {{csrf_field()}}


                                    <button class="btn btn-danger">Delete</button>
                                </form>

                            </div>
                        </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

