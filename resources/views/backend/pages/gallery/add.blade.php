@extends('backend.master')
@section('body')


    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="color:white;background-color: #333333">

                    <div class="x_title">


                        <h2><i class="fa fa-tags"></i>Gallery&nbsp;&nbsp;&nbsp;&nbsp;



                            <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">Click To Add</button></h2>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><center style="color:black;">Add Gallery</center></h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{route('admin-gallery-add')}}" method="post" enctype="multipart/form-data" style="color:black">

                                            {{csrf_field()}}



                                            <div class="form-group col-md-12" >
                                                <label class="form-group" >Title:</label>
                                                <input type="text" class="form-control" required name="title">
                                            </div>



                                            <div class="form-group col-md-12" >
                                                <label class="form-group" >Image:</label>
                                                <input type="file" class="form-control" required name="image">
                                            </div>





                                            <center> <div class="form-group col-md-4" style="font-size: 14px;" >
                                                    <button type="submit" class="form-control btn btn-primary" style="margin-left:200px;">Submit</button>
                                                </div>
                                            </center>


                                        </form>



                                    </div>
                                    <div class="modal-footer"  >
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>


                        </h4>




                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">




                        @foreach($datas as $data)
                            <div class="col-md-3 col-sm-3 col-xs-3" >



                                <div class="card-container" >
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="{{URL::to('frontend/image/gallery/'.$data->image)}}" alt="" style="height:300px;width:400px;"/>
                                        </div>
                                        <div class="card-info">
                                            <div class="card-title"></div>
                                            <div class="card-detail">
                                                <h3>{{$data->title}}</h3><br>





                                            </div>
                                        </div>
                                        <div class="card-social">
                                            <ul>


                                                <form method="post" action="{{route('admin-gallery-delete',['id'=>$data->id])}}">
                                                    <li>
                                                        {{csrf_field()}}
                                                        <button type="submit" class="btn btn-link" title="delete" style="color: white;font-size: 20px;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </li>
                                                </form>

                                            </ul>
                                        </div>
                                    </div>
                                </div>





                            </div>
                  @endforeach



                    </div>
                </div>

            </div>

        </div>
    </div>












@endsection