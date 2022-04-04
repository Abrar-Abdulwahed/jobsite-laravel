<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Abrar - Job Site</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light py-4">
            <div class="container">
                <a class="navbar-brand" href="/">Logo</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" style="border-bottom: 2px solid var(--primary-clr);" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/jobs">Find a Job</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link" href="/services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/partners">Partners</a>
						</li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/index.html">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Language
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Arabic</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">English</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="/register" class="btn btn-primary me-1">Register</a>
                        <a href="/login" class="btn btn-outline-primary">Login</a>
                    </div>
                </div>
            </div>
        </nav>
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
        <footer>
            <!-- Footer Start-->
            <div class="footer-area footer-bg footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                           <div class="single-footer-caption mb-50">
                             <div class="single-footer-caption mb-30">
                                 <div class="footer-tittle">
                                     <h4>About Us</h4>
                                     <div class="footer-pera">
                                         <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                    </div>
                                 </div>
                             </div>
    
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                        <p>Address :Your address goes
                                            here, your demo address.</p>
                                        </li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Important Link</h4>
                                    <ul>
                                        <li><a href="#"> View Project</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Proparties</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Newsletter</h4>
                                    <div class="footer-pera footer-pera2">
                                     <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                 </div>
                                 <!-- Form -->
                                 <div class="footer-form">
                                     <div id="mc_embed_signup">
                                         <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                             <input type="email" name="EMAIL" class="bg-white" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                             <div class="form-icon text-white">
                                                 <button type="submit" name="submit" id="newsletter-submit" style="height: 100%" class="email_icon newsletter-submit button-contactForm"><i class="fab fa-telegram"></i></button>
                                             </div>
                                             <div class="mt-10 info"></div>
                                         </form>
                                     </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row footer-wejed justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <!-- logo -->
                            <div class="footer-logo mb-20">
                            <a href="/"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>5000+</span>
                            <p>Talented Hunter</p>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="footer-tittle-bottom">
                                <span>451</span>
                                <p>Talented Hunter</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <!-- Footer Bottom Tittle -->
                            <div class="footer-tittle-bottom">
                                <span>568</span>
                                <p>Talented Hunter</p>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                         <div class="row d-flex justify-content-between align-items-center">
                             <div class="col-xl-10 col-lg-10 ">
                                 <div class="footer-copy-right">
                                     <p></p>
                                 </div>
                             </div>
                             <div class="col-xl-2 col-lg-2">
                                 <div class="footer-social f-right">
                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                     <a href="#"><i class="fab fa-twitter"></i></a>
                                     <a href="#"><i class="fas fa-globe"></i></a>
                                     <a href="#"><i class="fab fa-behance"></i></a>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/app.js"></script>
        <script src="https://kit.fontawesome.com/0258162a56.js" crossorigin="anonymous"></script>
    </body>
</html>
