@extends('front.layout.master')
@section('content')
    <section class="aboutus-section">
        <div class="py-5">
            <div class="container">
                <div class="row who-we-are">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img class="img-fluid" src="../imgs/aboutus.jpg" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3 class="fw-bolder mb-2 fs-3">Who We are</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                consequuntur quibusdam enim expedita sed nesciunt incidunt
                                accusamus adipisci officia libero laboriosam!
                            </p>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Placeat deserunt ipsa nostrum. Quae, voluptates quod
                                perferendis vero eum saepe culpa minima tenetur veniam harum
                                autem amet voluptate nihil quo illum, corrupti quasi eaque
                                debitis ex deserunt eligendi natus voluptas blanditiis
                                accusamus. Vitae optio adipisci cumque, ipsum eveniet nemo vel
                                praesentium odit distinctio ullam enim odio consequuntur
                                facere dolor architecto sint.
                            </p>
                            <div class="about-btn pt-5">
                                <a class="btn btn-primary" href="{{ route('contact') }}">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="  choose-us py-5">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12 mb-50">
                        <div class="section-headding text-center">
                            <h2 class="fw-bolder mb-2 fs-3">Why Choose Us?</h2>
                            <p class="fs-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box shadow text-center bg-white py-5 px-3">
                            <div class="icon">
                                <i class="far fa-edit"></i>
                            </div>
                            <h2 class="mb-2 fw-bolder fs-5">Lorem 1</h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box shadow text-center bg-white py-5 px-3">
                            <div class="icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <h2 class="mb-2 fw-bolder fs-5">Lorem 2</h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="info-box shadow text-center bg-white py-5 px-3">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <h2 class="mb-2 fw-bolder fs-5">Lorem 3</h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
