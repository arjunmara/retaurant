<div class="our-story about-bg">

    <div class="container">

        <div class="row">

            <div class="left-images col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <!-- <img src="images/about/1.jpg" alt="about"> -->

            </div>

            <div class="middle-text col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="inner">

                    <h2>Our Story</h2>

                    <h3>Welcome to Kintsugi Sushi Bar and Grill</h3>

                    <p>{!! str_limit($story->details,180) !!}</p>

                    <a href="{{route('about')}}" class="read-more"><span>Read More</span></a>

                </div>

            </div>

            <div class="right-images col-lg-3 col-md-3 col-sm-3 col-xs-12">

                <!-- <img src="images/about/2.jpg" alt="about"> -->

            </div>

        </div>

    </div>

</div>