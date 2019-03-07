<div class="opening-hours">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="inner">

                    <h2 class="sec-title">Opening Hours</h2>

                    <h3 class="sec-sub-title">Open For Special Occasions</h3>

                    <div class="images-icon"><img src="{{URL::to('frontend/images/icon/1.png')}}" alt=""></div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <h4>{{$openings->day1}}</h4>

                        <span>{{$openings->time1}}</span>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <h4>{{$openings->day2}}</h4>

                        <span>{{$openings->time2}}</span>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <h4>{{$openings->day3}}</h4>

                        <span>{{$openings->time3}}</span>

                    </div>

                </div>

            </div>

        </div>

        <div class="reservation">

            <h2>Reservation</h2>


            @if($status->status == 0)

                <h3>We Are Open All Day</h3>

                <div id="form-messages"></div>

                <form  method="post" action="{{route('contact-action')}}">

                    {{csrf_field()}}

                    <fieldset>

                        <input type="hidden" value="opening" name="checking">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group">

                                    <input type="text"  name="date" required class="form-control" placeholder="Choose a Date">

                                </div>

                                <div class="form-group">

                                    <input type="text" name="time" required class="form-control" placeholder="Choose a Time">

                                </div>

                                <div class="form-group">

                                    <input type="number"  name="no" required class="form-control" required placeholder="How Many People">

                                </div>
                                <div class="form-group">
                                    <input type="email"  name="email" class="form-control" required placeholder="Email">

                                </div>
                                <div class="form-group">

                                    <input type="text" id="phone" required name="phone" class="form-control" required placeholder="Phone Number">

                                </div>

                                <div class="form-group send-btn">

                                    <button class="btn-send" type="submit">Book a Table</button>

                                </div>

                            </div>

                        </div>

                    </fieldset>

                </form>
                
            @else

                <h3>Sorry no Booking Available!!</h3>

                <div id="form-messages"></div>

                @endif



        </div>

    </div>

</div>