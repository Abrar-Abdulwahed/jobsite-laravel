@extends('front.layout.master')
@section('content')
<header>
    <section class="hero pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories shadow">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                            <li><a href="#">Item 3 &amp; Item 3.1</a></li>
                            <li><a href="#">Item 4</a></li>
                            <li><a href="#">Item 5</a></li>
                            <li><a href="#">Item 6 &amp; Item 6.1</a></li>
                            <li><a href="#">Item 7</a></li>
                            <li><a href="#">Item 8</a></li>
                            <li><a href="#">Item 9 &amp; Item 9.1</a></li>
                            <li><a href="#">Item 10</a></li>
                            <li><a href="#">Item 11</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>(+967)-736565237</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg" style="background-image: url('imgs/work.jpeg');">
                        <div class="hero__text rounded-2" style="background: rgba(255, 255, 255, 0.747); padding: 5px 20px;">
                            <span>Best Place For Your Future</span>
                            <h2>Yes <br>100% Yes</h2>
                            <p>Lorem, ipsum dolor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="wrapper mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-4 col-lg-3 ads mb-3 align-self-start">
                <div id="carouselAds" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner vertical">
                        <div class="carousel-item active">
                            <div class="card border-0 m-1 p-2">
                                <div class="text-right"> <small>Full Time</small> </div>
                                <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/color/96/000000/google-logo.png" width="60" /> <span class="d-block font-weight-bold">UX Designer</span>
                                    <hr> <span>Google Inc</span>
                                    <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i> <small class="ml-1">FA 100, OH, USA</small> </div>
                                    <div class="d-flex justify-content-between mt-3"> <span>$34,000</span> <button class="btn btn-sm btn-outline-dark">Apply Now</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 m-1 p-2">
                                <div class="text-right"> <small>Full Time</small> </div>
                                <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/color/96/000000/behance.png" width="60" /> <span class="d-block font-weight-bold">UX Designer</span>
                                    <hr> <span>Behance Inc</span>
                                    <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i> <small class="ml-1">FA 130, OH, USA</small> </div>
                                    <div class="d-flex justify-content-between mt-3"> <span>$30,000</span> <button class="btn btn-sm btn-outline-dark">Apply Now</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 m-1 p-2">
                                <div class="text-right"> <small>Full Time</small> </div>
                                <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/officel/80/000000/dribbble.png" width="60" /> <span class="d-block font-weight-bold">UX Designer</span>
                                    <hr> <span>Dribbble Inc</span>
                                    <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i> <small class="ml-1">FA 280, OH, USA</small> </div>
                                    <div class="d-flex justify-content-between mt-3"> <span>$24,000</span> <button class="btn btn-sm btn-outline-dark">Apply Now</button> </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 m-1 p-2">
                                <div class="text-right"> <small>Full Time</small> </div>
                                <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" width="60" /> <span class="d-block font-weight-bold">UX Designer</span>
                                    <hr> <span>Instagram Inc</span>
                                    <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i> <small class="ml-1">FA 104, OH, USA</small> </div>
                                    <div class="d-flex justify-content-between mt-3"> <span>$38,000</span> <button class="btn btn-sm btn-outline-dark">Apply Now</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-9 col-sm-12 col-md-8 col-lg-9 recent-jobs">
                <div class="row">
                    <p class="fw-bolder fs-2">Recent Jobs</p>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-3">
                        <div class="card bg-white border-white border-0">
                            <div class="card-header bg-transparent d-flex align-items-center">
                                <img class="img-fluid rounded-circle me-2" src="./imgs/icon/job-list1.png" alt="icon" width="50">
                                <h4 class="card-title">UX/UI Designer</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus optio architecto eaque.</p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a href="#" class="btn btn-outline-primary">التقديم الآن</a>
                                <span class="text-muted fs-12px">300$ - 500$</span>
                                <span class="text-muted fs-12px">Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partner mt-5">
    <div class="container">
        <div id="carouselPartner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner vertical">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <img src="imgs/partners/big-lots.PNG" alt="" width="100">
                        <img src="imgs/partners/cocacola.PNG" alt="" width="100">
                        <img src="imgs/partners/emarates.PNG" alt="" width="100">
                        <img src="imgs/partners/lukoil.PNG" alt="" width="100">
                        <img src="imgs/partners/qatar-foundation.PNG" alt="" width="100">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <img src="imgs/partners/rite-aid.PNG" alt="" width="100">
                        <img src="imgs/partners/nbk.PNG" alt="" width="100">
                        <img src="imgs/partners/tp-compony.PNG" alt="" width="100">
                        <img src="imgs/partners/saudi-arabia-communications.PNG" alt="" width="100">
                        <img src="imgs/partners/samsung.PNG" alt="" width="100">
                        <img src="imgs/partners/pepsi.PNG" alt="" width="100">
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPartner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPartner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
        </div>
    </div>
</section>
@endsection