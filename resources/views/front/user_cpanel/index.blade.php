@extends('front.user_cpanel.layout.master')
@section('content')
    <div class="dash-main">
        <div id="dashboard-sidebar" class="dash-main__sidebar shadow px-0">
            <div class="sidebar-menu px-4">
                <div class="profile text-center">
                    <div class="position-relative">
                        <img src="#" alt="profile img" class="p-1 rounded-circle border border-dark border-3" width="120"
                            height="120">
                        <button type="button" class="cursor-pointer rounded-circle shadow position-absolute hidden"
                            data-bs-toggle="modal" data-bs-target="#updateProfileModal">
                            <i class="fa fa-camera text-muted" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="hidden">
                        <div class="username my-1">
                            <span class="h3">
                                username
                            </span>
                            <i class="fas fa-check-circle text-primary shadow"></i>
                        </div>
                        <div class="bio text-muted my-1">
                            <span>user bio
                        </div>
                        <div class="location my-1">
                            <span class="text-muted"><i class="fas fa-map-marker-alt me-2"></i>user address</span>
                        </div>
                    </div>
                    <div class="links d-flex flex-column justify-content-between mt-3">
                        <a href="#" class="border-bottom py-2">
                            <i class="fa fa-whatsapp"></i>
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
                        <li class="list-group-item px-0">
                            <a href="/dashboard/education" class="px-2">
                                <i class="fas fa-graduation-cap text-muted"></i>
                                <span class="hidden text-dark fw-bolder">Education</span>
                            </a>
                        </li>
                        <li class="list-group-item px-0">
                            <a href="/dashboard/works" class="px-2">
                                <i class="fab fa-lastfm text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Previous Work</span>
                            </a>
                        </li>
                        <li class="list-group-item px-0">
                            <a href="/dashboard/course" class="px-2">
                                <i class="fas fa-phone text-muted" aria-hidden="true"></i>
                                <span class="hidden text-dark fw-bolder">Contact</span>
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
                        <i class="fas fa-home" aria-hidden="true"></i>
                    </div>
                    <div>
                        Personal Information
                        <div class="page-subheading">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, minus.
                        </div>
                    </div>
                </div>
                <div class="page-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal"
                            data-bs-target="#updatePersonalInformationModal">
                            <i class="fas fa-user-edit text-white" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal"
                            data-bs-target="#addSocialMediaModal">
                            <i class="fas fa-icons text-white" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="page-content mt-4 px-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 rounded-0">
                        <ul class="list-group break-word">
                            <li class="list-group-item position-static rounded-0 text-white fw-bolder bg-primary border-primary"
                                aria-current="true">Personal Information</li>
                            <li
                                class="list-group-item position-static d-flex f-wrap justify-content-between align-items-center">
                                Full Name:
                                <span>user fullname</span>
                            </li>
                            <li
                                class="list-group-item position-static d-flex f-wrap justify-content-between align-items-center">
                                Email:
                                <span>user email</span>
                            </li>
                            <li
                                class="list-group-item position-static d-flex f-wrap justify-content-between align-items-center">
                                Mobile:
                                <span>(+967) user mobile</span>
                            </li>
                            <li
                                class="list-group-item position-static d-flex f-wrap justify-content-between align-items-center">
                                Address:
                                <span>user address</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-8 rounded-0">
                        <h5>About Me</h5>
                        <p class="text-muted">Write about Yourself</p>
                    </div>
                </div>
            </div>
            <!-- updateProfileModal -->
            <div class="modal fade" id="updateProfileModal" tabindex="-1" aria-labelledby="updateProfileModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="updateProfileModalLabel">Edit Profile</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div
                                class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fas fa-pen-alt text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form class="row g-3" id="editProfile" action="/dashboard/avatar" method="POST"
                                enctype="multipart/form-data">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="user_id" value="">
                                        <input type="file" class="form-control" name="avatar" id="avatar">
                                    </div>
                                </div>
                                <input type="submit" class="btn bg-opacity-primary rounded-0 text-white">Save
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- addSocialMediaModal -->
            <div class="modal fade" id="addSocialMediaModal" tabindex="-1" aria-labelledby="addSocialMediaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="addSocialMediaModalLabel">Add social media</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div
                                class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fas fa-icons text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form class="row g-3" id="addMedia" action="/dashboard/social" method="POST">
                                <input type="hidden" name="user_id" value="">
                                <div class="col-12 mt-3">
                                    <!-- for loop-->
                                    <div class="row justify-content-between align-items-baseline">
                                        <div class="col-12 col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="selectedMedia[]"
                                                    value="">
                                                <label class="form-check-label">
                                                    media name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-8 mb-3" style="display:none;">
                                            <div class="align-self-center">
                                                <label for="socialname-url"></label>
                                                <input id="socialname-url" type="URL" class="form-control d-inline"
                                                    style="width: 98%" name="URL" placeholder="...." value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end for -->
                                </div>

                                <div class="col-12 mt-3">
                                    <input type="submit" class="btn bg-opacity-primary rounded-0 text-white" value="save">
                                    <button type="submit" class="btn bg-opacity-primary rounded-0 text-white"
                                        formaction="/dashboard/social/update">Update</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- updatePersonalInformationModal -->
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
                                <i class="fas fa-pen-alt text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form action="/dashboard" method="POST">
                                <input type="hidden" name="user_id" value="">
                                <div class="mb-2">
                                    <label for="fullname_edit"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="fullname" value=""
                                            id="fullname_edit" placeholder="fullname...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="username_edit"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="" id="user_edit"
                                            placeholder="username...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="about_edit"></label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="about" id="about_edit" placeholder="about..." cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="bio_edit"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bio" value="" id="bio_edit"
                                            placeholder="bio...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="mobile_edit"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mobile" value="" id="mobile_edit"
                                            placeholder="mobile...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="address_edit"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address" value="" id="address_edit"
                                            placeholder="address...">
                                    </div>
                                </div>
                                <input type="submit" class="btn bg-opacity-primary rounded-0 text-white" value="Save">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
