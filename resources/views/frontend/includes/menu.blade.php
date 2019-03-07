<div class="menu-area spc-large">

    <div class="container">

        <div class="row">

            <h2 class="sec-title">Our Menus</h2>

            <h3 class="sec-sub-title">Menu Of The Day</h3>

            <div class="menu-gallery owl-carousel">


               @foreach($menus as $me)
                <div class="item">

                    <div class="single-menu-area">

                        <div class="cl-single-menu">

                            <figure><img class="img-responsive" src="{{URL::to('frontend/image/menu/'.$me->image)}}" style="width:400px;height:300px;" alt=""></figure>

                            <div class="overlay">

                                <div class="short-desc">

                                    <h2 class="menu-name">{{$me->menu}}</h2>

                                    <div class="short-desc">

                                       {!! str_limit($me->menu,120) !!}

                                        <a href="" class="read-more"><span>Read More</span></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="article">

                            <h3><a href="#" data-id="1" class="cl-single-item-popup">{{$me->menu}}</a></h3>

                        </div>

                    </div>

                </div>
                    @endforeach





        </div>

    </div>

</div>
</div>