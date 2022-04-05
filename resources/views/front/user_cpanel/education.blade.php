@extends('front.user_cpanel.layout.master')
@section('content')
    <div class="dash-main">
        <div id="dashboard-sidebar" class="dash-main__sidebar shadow px-0">
            <div class="sidebar-menu px-4">
                <div class="profile text-center">
                    <div class="position-relative">
                        <img src="../img/dashboard/profile.jpg" alt="" class="p-1 rounded-circle border border-dark border-3"
                            width="120" height="120">
                        <button class="cursor-pointer rounded-circle shadow position-absolute hidden" data-bs-toggle="modal"
                            data-bs-target="#changeProfileModal">
                            <i class="fa fa-camera text-muted" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="hidden">
                        <div class="username my-1">
                            <span class="h3">Khorasani Abrar</span>
                            <i class="fas fa-check-circle text-primary shadow"></i>
                        </div>
                        <div class="bio text-muted my-1">
                            <span>FullStack Developer</span>
                        </div>
                        <div class="location my-1">
                            <span class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>Yemen, Taiz</span>
                        </div>
                    </div>
                    <div class="links d-flex flex-column justify-content-between mt-3">
                        <a href="https://www.facebook.com/abrar.alkhorasani" class="border-bottom py-2">
                            <span class="fab fa-facebook-f" aria-hidden="true"></span>
                        </a>
                        <a href="tel:+967736565337" class="border-bottom py-2">
                            <span class="fab fa-whatsapp text-success" aria-hidden="true"></span>
                        </a>
                        <a href="https://github.com/Abrar-Abdulwahed/" class="border-bottom py-2">
                            <span class="fab fa-github-alt text-dark" aria-hidden="true"></span>
                        </a>
                        <a href="#" class="py-2">
                            <i class="fab fa-twitter" style="color: #327bbe"></i></span>
                        </a>
                    </div>
                </div>
                <div class="card mt-4 border-0">
                    <div class="fs-4 sidebar-item__heading text-primary text-uppercase fw-bold hidden">
                        Pages
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                            <a href="/dashboard" class="px-2">
                                <i class="fas fa-home text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Home</span>
                            </a>
                        </li>
                        <li class="list-group-item px-0">
                            <a href="/dashboard/skill" class="px-2">
                                <i class="fab fa-accusoft text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Skills</span>
                            </a>
                        </li>
                        <li class="list-group-item px-0">
                            <a href="/dashboard/experience" class="px-2">
                                <i class="fab fa-wpexplorer text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Experience</span>
                            </a>
                        </li>
                        <li class="list-group-item active px-0">
                            <a href="/dashboard/education" class="px-2">
                                <i class="fas fa-graduation-cap text-muted"></i>
                                <span class="hidden text-dark fw-bolder">Education</span>
                            </a>
                        </li>
                        <li class="list-group-item px-0">
                            <a href="/dashboard/course" class="px-2">
                                <i class="fab fa-lastfm text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Courses</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dash-main__content">
            <div class="page-heading d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div
                        class="page-icon d-inline-flex justify-content-center align-items-center rounded-2 p-3 me-4 fs-2 shadow bg-white">
                        <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div>
                        Education
                        <div class="page-subheading">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, minus.
                        </div>
                    </div>
                </div>
                <div class="page-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal"
                            data-bs-target="#updatePersonalInformationModal">
                            <i class="fas fa-plus text-white" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="page-content my-4 px-5 mx-auto">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row pt-4 px-4 justify-content-evenly">
                            <div
                                class="col-12 col-md-2 mt-2 year_location d-flex flex-column fs-12 text-muted text-uppercase fw-bold">
                                <div class="datetime">2014 - 2019</div>
                                <div class="educational-side w-100">Taiz Univ</div>
                                <div class="location">Yemen</div>
                            </div>
                            <div class="col-12 col-md-9 bg-white p-2 px-4">
                                <span class="h3 text-primary">IT Engineering,</span><small
                                    class="fs-5 text-opacity-primary"> Bachelor's degree</small>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="row pt-4 px-4 justify-content-evenly">
                            <div
                                class="col-12 col-md-2 order-1 mt-2 year_location d-flex flex-column fs-12 text-muted text-uppercase fw-bold">
                                <div class="datetime">2014 - 2019</div>
                                <div class="educational-side w-100">Taiz Univ</div>
                                <div class="location">Yemen</div>
                            </div>
                            <div class="col-12 col-md-9 bg-white p-2 px-4">
                                <span class="h3 text-primary">IT Engineering,</span><small
                                    class="fs-5 text-opacity-primary"> Bachelor's degree</small>
                                <p class="py-2">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fusce posuere metus vitae arcu imperdiet, id aliquet ante
                                    scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="updatePersonalInformationModal" tabindex="-1"
                aria-labelledby="updatePersonalInformationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="updatePersonalInformationModalLabel">Update Personal Information
                            </h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div
                                class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fal fa-pen-alt text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <div class="mb-2">
                                <label for="fb_edit"></label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" id="email_edit" placeholder="facebook link...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="whatsapp_edit"></label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" id="whatsapp_edit"
                                        placeholder="whatsapp link...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="github_edit"></label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" id="github_edit" placeholder="github link...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="twitter_edit"></label>
                                <div class="col-sm-10">
                                    <input type="url" class="form-control" id="twitter_edit"
                                        placeholder="twitter link...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="fullname_edit"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fullname_edit" placeholder="fullname...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="bio_edit"></label>
                                <div class="col-sm-10">
                                    <input type="bio" class="form-control" id="bio_edit" placeholder="bio...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="mobile_edit"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="mobile_edit" placeholder="mobile...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="address_edit"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address_edit" placeholder="address...">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-opacity-primary rounded-0 text-white">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
