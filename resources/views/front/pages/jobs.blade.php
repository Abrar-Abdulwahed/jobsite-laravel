@extends('layout.master')
@section('content')
<section class="jobs-section mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="single-widgets w-100 overflow-hidden shadow py-4 px-3 mb-5">
                    <h3 class="fw-bolder mb-4 ps-4 position-relative">Search</h3>
                    <form action="#" class="position-relative overflow-hidden w-100">
                        <input type="search" name="s" placeholder="Search Here">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="single-widgets w-100 overflow-hidden shadow py-4 px-3 mb-5">
                    <h3 class="fw-bolder mb-4 ps-4 position-relative">Partners</h3>
                    <ul class="categories">
                        <li>
                            <a href="#">Google</a>
                        </li>
                        <li>
                            <a href="#">Amazon</a>
                        </li>
                        <li>
                            <a href="#">BMI</a>
                        </li>
                        <li>
                            <a href="#">Yahoo</a>
                        </li>
                        <li>
                            <a href="#">Oracle</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row align-items-baseline mb-30">
                    <div class="list-grid-btn float-start w-auto pe-4">
                        <a href="shop.html" class="text-dark mx-1 display-4">
                            <i class="fas fa-th">
                            </i
                        >
                        </a>
                        <a class="active" href="list-view-shop.html">
                            <i class="fas fa-list">
                            </i
                        >
                        </a>
                    </div>
                    <div class="float-start w-auto overflow-hidden">
                        <p class="fw-bolder">Showing 1–9 of 21 results</p>
                    </div>
                    <div class="short-by-product float-end w-auto text-end overflow-hidden">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Filter</option>
                            <option value="1">Company Name</option>
                            <option value="2">Salary</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="card border-0 p-4 job-list-view overflow-hidden w-100 shadow mb-30">
                            <div class="p-1 border-0">
                                <div class="card-custom-avatar d-flex align-items-center">
                                    <img
                                        class="img-fluid rounded-circle"
                                        src="../imgs/icon/job-list2.png"
                                        alt="icon"
                                        width="40"
                                    >
                                    <div class="post-head p-2 flex-column">
                                        <h4>
                                            <a href="#" class="text-dark fw-bolder">
                                                Web Design
                                            </a>
                                        </h4>
                                        <small>
                                            <i class="fas fa-clock me-2 text-muted"></i>
                                            7 hours
                                            ago
                                        </small
                                        >
                                    </div>
                                </div>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                                <div class="d-flex">
                                    <a class="btn btn-primary" href="/job-details">Details
                                    </a
                                    >
                                </div>
                                <ul class="d-flex justify-content-evenly other-info mt-3">
                                    <li class="location">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            YEMEN,
                                            Taiz
                                        </a
                                        >
                                    </li>
                                    <li class="company-name">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-building me-2"></i>Google
                                        </a
                                        >
                                    </li>
                                    <li class="price">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-hand-holding-usd me-2"></i>
                                            600$ -
                                            800$
                                        </a
                                        >
                                    </li>
                                    <li class="me-2">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-suitcase me-2"></i>PartTime
                                        </a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="card border-0 p-4 job-list-view overflow-hidden w-100 shadow mb-30">
                            <div class="p-1 border-0">
                                <div class="card-custom-avatar d-flex align-items-center">
                                    <img
                                        class="img-fluid rounded-circle"
                                        src="../imgs/icon/job-list4.png"
                                        alt="icon"
                                        width="40"
                                    >
                                    <div class="post-head p-2 flex-column">
                                        <h4>
                                            <a href="#" class="text-dark fw-bolder">FullStack developer
                                            </a
                                            >
                                        </h4>
                                        <small>
                                            <i class="fas fa-clock me-2 text-muted"></i>
                                            1 day
                                            ago
                                        </small
                                        >
                                    </div>
                                </div>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                                <div class="d-flex">
                                    <a class="btn btn-primary" href="/job-details">Details
                                    </a
                                    >
                                </div>
                                <ul class="d-flex justify-content-evenly other-info mt-3">
                                    <li class="location">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            Egypt,
                                            Cairo
                                        </a
                                        >
                                    </li>
                                    <li class="company-name">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-building me-2"></i>BMI
                                        </a
                                        >
                                    </li>
                                    <li class="price">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-hand-holding-usd me-2"></i>
                                            1200$ -
                                            1600$
                                        </a
                                        >
                                    </li>
                                    <li class="me-2">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-suitcase me-2"></i>FullTime
                                        </a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="card border-0 p-4 job-list-view overflow-hidden w-100 shadow mb-30">
                            <div class="p-1 border-0">
                                <div class="card-custom-avatar d-flex align-items-center">
                                    <img
                                        class="img-fluid rounded-circle"
                                        src="../imgs/icon/job-list3.png"
                                        alt="icon"
                                        width="40"
                                    >
                                    <div class="post-head p-2 flex-column">
                                        <h4>
                                            <a href="#" class="text-dark fw-bolder">Android</a>
                                        </h4>
                                        <small>
                                            <i class="fas fa-clock me-2 text-muted"></i>
                                            1 month
                                            ago
                                        </small
                                        >
                                    </div>
                                </div>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                                <div class="d-flex">
                                    <a class="btn btn-primary" href="/job-details">Details
                                    </a
                                    >
                                </div>
                                <ul class="d-flex justify-content-evenly other-info mt-3">
                                    <li class="location">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-map-marker-alt me-2"></i>
                                            YEMEN,
                                            Aden
                                        </a
                                        >
                                    </li>
                                    <li class="company-name">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-building me-2"></i>Yahoo
                                        </a
                                        >
                                    </li>
                                    <li class="price">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-hand-holding-usd me-2"></i>
                                            900$ -
                                            950$
                                        </a
                                        >
                                    </li>
                                    <li class="me-2">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-suitcase me-2"></i>Temporary
                                        </a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="card border-0 p-4 job-list-view overflow-hidden w-100 shadow mb-30">
                            <div class="p-1 border-0">
                                <div class="card-custom-avatar d-flex align-items-center">
                                    <img
                                        class="img-fluid rounded-circle"
                                        src="../imgs/icon/job-list1.png"
                                        alt="icon"
                                        width="40"
                                    >
                                    <div class="post-head p-2 flex-column">
                                        <h4>
                                            <a href="#" class="text-dark fw-bolder">FullStack Developer
                                            </a
                                            >
                                        </h4>
                                        <small>
                                            <i class="fas fa-clock me-2 text-muted"></i>
                                            7 hours
                                            ago
                                        </small
                                        >
                                    </div>
                                </div>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                                <div class="d-flex">
                                    <a class="btn btn-primary" href="/job-details">Details
                                    </a
                                    >
                                </div>
                                <ul class="d-flex justify-content-evenly other-info mt-3">
                                    <li class="location">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-map-marker-alt me-2"></i>Jordan
                                        </a
                                        >
                                    </li>
                                    <li class="company-name">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-building me-2"></i>BMI
                                        </a
                                        >
                                    </li>
                                    <li class="price">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-hand-holding-usd me-2"></i>
                                            700$ -
                                            800$
                                        </a
                                        >
                                    </li>
                                    <li class="me-2">
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-suitcase me-2"></i>PartTime
                                        </a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
