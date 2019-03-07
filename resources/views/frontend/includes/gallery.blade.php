<div class="home-gellary-area rs-gellary spc-large">

    <div class="container">

        <div class="row">

            <h2 class="sec-title">Our Gallery</h2>

            <h3 class="sec-sub-title">See Our Gallery</h3>

            <div class="grid">



@foreach($gallerys as $gal)
                <div class="col-md-3 col-sm-6 col-xs-6 grid-item mb-30 filter1">

                    <div class="portfolio-item">

                        <div class="portfolio-img">

                            <img src="{{URL::to('frontend/image/gallery/'.$gal->image)}}" style="width:400px;height:300px;"  alt="Image" />

                        </div>

                        <div class="portfolio-content">

                            <div class="display-table">

                                <div class="display-table-cell">

                                    <a class="image-popup p-zoom" href="{{URL::to('frontend/image/gallery/'.$gal->image)}}" title="Chicken-Dish image">

                                        <i class="fa fa-search-plus" aria-hidden="true"></i>

                                    </a>

                                    <h3 class="p-title"><a href="#">{{$gal->title}}</a></h3>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
@endforeach







            </div>

        </div>

    </div>

</div>