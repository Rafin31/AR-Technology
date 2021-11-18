<div id="home" class="banner_wrapper ">
    <div class="row banner-photos justify-content-center">
        <div class="col-12 col-lg-8 col-md-12 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner banner_carousel">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-fluid" src="{{asset('Assets/Banner/1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="{{asset('Assets/Banner/2.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-fluid" src="{{asset('Assets/Banner/3.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-md-12  banner-side">
            <div class="banner-top">
                <img src="{{asset('Assets/Banner/10off.jpg')}}" class="img-fluid" alt="" srcset="">
            </div>
            <div class="col-12 col-lg-12 col-md-12 banner-bottom">
                <div class="box-wrapper">
                    <div class="title">
                        <p class=" text-center font-weight-bold">Search Product</p>
                    </div>
                    <input type="text" class="form-input" placeholder="Search Product">
                    <div class="search_button">
                        <button class="ar-button-flat">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>