@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Add Services </h2>
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
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('admin-services-add')}}" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="category">Title: <span class="required">*</span> </label>
                                <div>


                                    <input type="text" name="title" required  class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category">Image: <span class="required">*</span> </label>
                                <div>


                                    <input type="file" name="image" required  class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Details: <span class="required">*</span> </label>
                                <div>


                                    <textarea type="text" name="details" required  class="form-control" style="height:200px;"></textarea>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success" value="Add Now">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>





            </div>



            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><i class="fa fa-tags"></i> All Services </h2>
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

                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>Title</th>
                                <th>Image</th>
                                <th width="5%">Action</th></tr>
                            </thead>
                            <tbody>



                          @foreach($datas as $data)
                                <tr>

                                    <td>{{$data->title}}</td>
                                    <td><img src="{{URL::to('frontend/image/services/'.$data->image)}}" style="height:120px;width:150px;"></td>
                                    <td>

                                       {{-- <a href="" class="btn btn-xs btn-default"><i class="fa fa-edit"   style="font-size:18px;color:limegreen" title="edit"></i></a>
--}}
                                        <form action="{{route('admin-services-delete',['id'=>$data->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" style="font-size:15px;color:limegreen" title="delete"></span></button>
                                        </form>

                                    </td>

                                 @endforeach
                                </tr>

                            </tbody>


                        </table>



                    </div>
                </div>

            </div>

            <br/>
        </div>
        <!-- /page content -->



@endsection

