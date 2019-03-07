<div class="slider-main">

    <div id="main-slider" class="owl-carousel">


        @foreach($slider as $slide)
        <div class="item">

            <img src="{{URL::to('frontend/image/slider/'.$slide->image)}}" alt="slider image">

            <div class="dsc">

                <h1 data-animation-in="flipInY" data-animation-out="animate-out fadeOutUp">{{$slide->title_1}}</h1>

                <h2 data-animation-in="flipInX" data-animation-out="animate-out fadeOutLeft">{{$slide->title_2}}</h2>

                <div class="btn-slider">

                    <a href="#" class="btn1" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight"><span>Book Now</span></a>

                    <a href="#" class="btn2" data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutRight"><span>View Menu</span></a>

                </div>

            </div>

        </div>
            @endforeach



    </div>

</div>

<!-- Slider Section end Here -->