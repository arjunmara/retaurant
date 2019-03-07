
<div class="head-of-chef spc-large">

    <div class="container">

        <div class="row">

            <div class="slider slider-of-chef">


                @foreach($teams as $t)
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner-text">

                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 inner-text">

                        <h2 class="sec-title">{{$t->title}}</h2>

                        <h3 class="sec-sub-title">{{$t->name}}</h3>

                        <p>{!! str_limit($t->details,400) !!}</p>


                           <a href="{{route('about')}}" class="read-more"><span>Read More</span></a>


                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">

                        <img src="{{URL::to('frontend/image/team/'.$t->image)}}" alt="">

                    </div>

                </div>
                @endforeach





            </div>

            <div class="slider slider-nav">

                @foreach($teams as $tm)
                <div><img src="{{URL::to('frontend/image/team/'.$tm->image)}}" style="height:140px;width:200px;"></div>
                    @endforeach


            </div>

        </div>

    </div>

</div>
