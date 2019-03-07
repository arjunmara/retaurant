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
                        <h2><i class="fa fa-tag"></i>&nbsp; Add Table </h2>
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
                              action="{{route('admin-room-add')}}" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="category">Category: <span class="required">*</span> </label>
                                <div>
                                    <select name="room_id" class="form-control">
                                        <option>Choose</option>
                                        <option value="a_c">A/C</option>
                                        <option value="deluxe">Deluxe</option>
                                        <option value="a_++">A++</option>
                                        <option value="non_a++">Non A++</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category">Image: <span class="required">*</span> </label>
                                <div>


                                    <input type="file" name="image[]"  multiple required  class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Information: <span class="required">*</span> </label>
                                <div>


                                    <textarea type="text" name="info" required  class="form-control" style="height:200px;"></textarea>
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
                        <h2><i class="fa fa-tags"></i> All Room </h2>
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

                                <th>Room_type</th>
                                <th>Info</th>
                                <th width="5%">Action</th></tr>
                            </thead>
                            <tbody>



                            @foreach($room as $ro)
                                <tr>

                                    <td><h5>{{$ro->room_id}}</h5></td>
                                    <td>{!! str_limit($ro->info,200) !!}</td>
                                    <td>

                                      <a href="{{route('admin-room-edit',['id'=>$ro->id])}}" class="btn btn-xs btn-default"><i class="fa fa-edit"   style="font-size:18px;color:limegreen" title="edit"></i></a>

                                        <form action="{{route('admin-room-delete',['id'=>$ro->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <input type="hidden" value="{{$ro->room_id}}" name="room_id">
                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" style="font-size:15px;color:limegreen" title="delete"></span></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach


                            </tbody>


                        </table>



                    </div>
                </div>

            </div>

            <br/>
        </div>
        <!-- /page content -->



@endsection

