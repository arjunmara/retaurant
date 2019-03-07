<footer class="spc-large">

    <div class="container">

        <!-- Footer Logo  -->

        <div class="logo text-center">

            <a href="{{route('index')}}"> <img src="{{URL::to('frontend/image/logo/'.$lo->logo)}}" alt="logo"></a>

        </div>

        <!-- Footer Social Icon  -->

        <div class="social-icon text-center">

            <ul class="text-center">

                <li>

                    <a href="{{$site->facebook_link}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                </li>

                <li>

                    <a href="{{$site->googleplus_link}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

                </li>

                <li>

                    <a href="{{$site->twitter_link}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>

                </li>

                <li>

                    <a href="{{$site->instagram_link}}"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>

                </li>

               {{-- <li>

                    <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>

                </li>--}}

            </ul>

        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-md-offset-1">

                <div class="address">

                   {{$site->address}}

                </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">

                <div class="phone">

                    <a href="tel:+3453-909-6565">  {{$site->telephone}}</a><br>

                    <a href="tel:+2390-875-2235"> {{$site->mobile}}</a>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                <div class="email">

                    <a> {{$site->email1}}</a>

                    <a >{{$site->email2}}</a>

                </div>

            </div>

            <div class="copyright text-center">© 2018 <span>Kintsugi Sushi Bar and Grill</span> All Rights Reserved. </div>

        </div>

    </div>

</footer>