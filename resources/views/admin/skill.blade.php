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
                    <i class="fab fa-accusoft" aria-hidden="true"></i>
                </div>
                <div>Skills
                    <div class="page-subheading">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, minus.
                    </div>
                </div>
            </div>
            <div class="page-actions">
                <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal" data-bs-target="#addSkillModal">
                    <i class="fas fa-plus text-white" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="page-content mt-4 px-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 rounded-0">
                    <ul class="list-group break-word">
                        <li class="list-group-item position-static rounded-0 text-white fw-bolder bg-primary border-primary" aria-current="true">Skills</li>
                            <!--for loop -->
                            <li class="list-group-item position-static mb-2">
                                <div class="progress-header d-flex f-wrap justify-content-between align-items-center">
                                    <h4 class="progress-title">skill name</h4>
                                    <div class="dropdown">
                                        <a role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(0px, -25.4px, 0px);" data-popper-placement="top-end">
                                            <li class="p-2">
                                                <a class="dropdown-item editSkillModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#editSkillModal"
                                                data-id=""
                                                data-name=""
                                                data-range=""
                                                data-color=""
                                                >
                                                    <i class="fas fa-edit" style="color: blue;"></i>
                                                    <span class="d-inline-block"> Edit</span>
                                                </a>
                                            </li>
                                            <li class="p-2">
                                                <a class="dropdown-item deleteSkillModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#deleteSkillModal"
                                                data-id="">
                                                    <i class="fas fa-trash-alt" style="color: red;"></i>
                                                    <span class="d-inline-block"> Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width:90%; background:red;">
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>
                            </li>
                            <!--end for loop -->
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- addSkillModal -->
        <div class="modal fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="addSkillModalLabel">Add Skill</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fas fa-plus-circle text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3 needs-validation" action="/dashboard/skills" method="POST">
                            <div class="col-12">
                                <input type="text" class="form-control" id="skill" name='name' placeholder="Skill Name">
                            </div>
                            <div class="col-12">
                                <label for="skillRange" style="color: #777;">Range</label>
                                <input type="range" class="form-range" aria-valuenow id="skillRange" name="percentage">
                            </div>
                            <div class="col-12">
                                <label for="skillColorPicker" class="form-label">Color picker</label>
                                <input type="color" class="form-control form-control-color" name="color" id="skillColorPicker" title="Choose your color">
                            </div>
                            <input type="submit" class="btn bg-opacity-primary rounded-0 text-white" value="save">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>      
                    </div>
                </div>
            </div>
        </div>
        <!-- editSkillModal -->
        <div class="modal fade" id="editSkillModal" tabindex="-1" aria-labelledby="editSkillModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="editSkillModalLabel">Edit Skill</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fas fa-pen-alt text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3 needs-validation" id="editSkillForm" action="" method="POST">
                            <div class="col-12">
                                <input type="text" class="form-control" id="editSkillName" name='name' placeholder="Skill Name">
                            </div>
                            <div class="col-12">
                                <label for="skillRange" style="color: #777;">Range</label>
                                <input type="range" class="form-range" id="editskillRange" name="percentage" >
                            </div>
                            <div class="col-12">
                                <label for="skillColorPicker" class="form-label">Color picker</label>
                                <input type="color" class="form-control form-control-color" id="editSkillColor" name="color"id="skillColorPicker" title="Choose your color">
                            </div>
                            <input type="submit" class="btn bg-opacity-primary rounded-0 text-white" value="save">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-secondary rounded-0" data-bs-dismiss="modal">Close</button>      
                    </div>
                </div>
            </div>
        </div>
        <!-- deleteSkillModal -->
        <div class="modal fade" id="deleteSkillModal" tabindex="-1" aria-labelledby="deleteSkillModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header mt-3">
                        <h6 class="modal-title" id="editSkillModalLabel">Delete Skill</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                            <i class="fa fa-times text-white"></i>
                        </div>
                    </div>
                    <div class="modal-body justify-content-center">
                        <form class="row g-3" id="deleteSkillForm" action="" method="GET">
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