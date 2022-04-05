@extends('admin.layout.master')
@section('content')
<div class="dash-main">
    <div id="dashboard-sidebar" class="dash-main__sidebar shadow px-0">
        <div class="sidebar-menu px-4">
            <div class="profile text-center">
                <div class="position-relative"> 
                    <img src="#" alt="profile img"  class="p-1 rounded-circle border border-dark border-3" width="120" height="120">
                    <button type="button" class="cursor-pointer rounded-circle shadow position-absolute hidden" data-bs-toggle="modal" data-bs-target="#updateProfileModal">
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
                        <a href="/dashboard/skills" class="px-2">
                            <i class="fab fa-accusoft text-muted" aria-hidden="true"></i>
                            <span class="hidden text-dark fw-bolder">Skills</span>
                        </a>
                    </li>
                    <li class="list-group-item px-0">
                        <a href="/dashboard/experiences" class="px-2">
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
                <div class="page-icon d-inline-flex justify-content-center align-items-center rounded-2 p-3 me-4 fs-2 shadow bg-white">
                    <i class="fab fa-wpexplorer" aria-hidden="true"></i>
                </div>
                <div>
                    Experience
                    <div class="page-subheading">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, minus.
                    </div>
                </div>
            </div>
            <div class="page-actions">
                <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal" data-bs-target="#addExperienceModal">
                    <i class="fas fa-plus text-white" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="page-content experience my-4 px-5">
            <div class="row justify-content-center">
                <!-- for loop -->
                    <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
                        <div class="card border-0 pt-4 px-4 mb-30">
                            <div class="card-head d-flex align-items-center justify-content-between">
                                <div class="p-2 flex-column">
                                    <span class="text-dark fw-bolder">
                                        experience job title
                                    </span>
                                    <small class="d-flex text-muted">
                                        <span class="work-side"> experience jog category</span>
                                    </small>
                                </div>
                                <div class="dropdown">
                                    <a role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(0px, -25.4px, 0px);" data-popper-placement="top-end">
                                        <li class="p-2">
                                            <a class="dropdown-item editExperienceModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#editExperienceModal"
                                            data-id=""
                                            data-jobTitle=""
                                            data-jobCategory=""
                                            data-companyName=""
                                            data-location=""
                                            data-description=""
                                            data-startDate=""
                                            data-endDate=""
                                            >
                                                <i class="fas fa-edit" style="color: blue;"></i>
                                                <span class="d-inline-block"> Edit</span>
                                            </a>
                                        </li>
                                        <li class="p-2">
                                            <a class="dropdown-item deleteExperienceModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#deleteExperienceModal"
                                            data-id="">
                                                <i class="fas fa-trash-alt" style="color: red;"></i>
                                                <span class="d-inline-block"> Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="py-2">
                                    experience description
                                </p>
                            </div>
                            <div class="card-footer bg-transparent fs-12">
                                <ul class="row row-cols-1 row-cols-sm-3 row-cols-md-3 row-cols-lg-auto mt-3">
                                    <li class="location text-muted">
                                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                        experience location
                                    </li>
                                    <li class="company-name">
                                        <a href="www.google.com" class="text-muted">
                                            <i class="fas fa-building" aria-hidden="true"></i>
                                            experience company name
                                        </a>
                                    </li>
                                    <li class="period text-muted">
                                        <i class="fas fa-clock" aria-hidden="true"></i>
                                        from
                                        <small>experience start date</small>
                                        to
                                        <small>experience end date</small>
                                    </li>
                                    <li class="text-muted">
                                        <i class="fas fa-suitcase" aria-hidden="true"></i>
                                        PartTime
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- end for loop -->
            </div>
        </div>
        <!-- addExperienceModal -->
        <div class="modal fade" id="addExperienceModal" tabindex="-1" aria-labelledby="addExperienceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="addExperienceModalLabel">Add Experience</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fas fa-plus-circle text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3 needs-validation" action="/dashboard/experiences" method="POST">
                            <input type="hidden" name="user_id" value="">
                            <div class="mb-2">
                                <label for="job-title"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jobTitle" id="job-title" placeholder="Job Title...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="job-category"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jobCategory" id="job-category" placeholder="Job Category...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="company-name"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="companyName" id="company-name" placeholder="Company Name...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="location"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Location...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="description"></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"  id="description" cols="30" rows="10" placeholder="Decription..."></textarea>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="start-date"></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="startDate" id="start-date" placeholder="Start Date...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="end-date"></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="endDate" id="end-date" placeholder="End Date...">
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
        <!-- editExperienceModal -->
        <div class="modal fade" id="editExperienceModal" tabindex="-1" aria-labelledby="editExperienceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="editExperienceModalLabel">Edit Experience</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fas fa-pen-alt text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3" method="POST" id="editExperienceForm">
                            <input type="hidden" name="user_id" id="user-id-edit">
                            <div class="mb-2">
                                <label for="job-title"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jobTitle" id="job-title-edit" placeholder="Job Title...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="job-category"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jobCategory" id="job-category-edit" placeholder="Job Category...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="company-name"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="companyName" id="company-name-edit" placeholder="Company Name...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="location"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" id="location-edit" placeholder="Location...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="description"></label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"  id="description-edit" cols="30" rows="10" placeholder="Decription..."></textarea>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="start-date"></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="startDate" id="start-date-edit" placeholder="Start Date...">
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="end-date"></label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="endDate" id="end-date-edit" placeholder="End Date...">
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
        <!-- deleteExperienceModal -->
        <div class="modal fade" id="deleteExperienceModal" tabindex="-1" aria-labelledby="deleteExperienceModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="deleteExperienceModalLabel">Delete Experience</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fa fa-times text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3" id="deleteExperienceForm" action="" method="GET">
                            <h3>Are you sure?</h3>
                            <p>Do you really want to delete these records?</p>
                            <input type="submit" class="btn bg-opacity-primary rounded-0 text-white" value="Delete">
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
