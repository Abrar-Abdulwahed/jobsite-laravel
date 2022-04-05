<%- include ('includes/head') %> 
<div id="dashboard-body" class="dash-body fixed-header fixed-sidebar theme-white">
    <%- include ('includes/nav') %> 
    <div class="dash-main">
        <%- include ('includes/aside', {page: 'works'}) %> 
        <div class="dash-main__content">
            <div class="page-heading d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div class="page-icon d-inline-flex justify-content-center align-items-center rounded-2 p-3 me-4 fs-2 shadow bg-white">
                        <i class="fab fa-lastfm" aria-hidden="true"></i>
                    </div>
                    <div>
                        Previous Works
                        <div class="page-subheading">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, minus.
                        </div>
                    </div>
                </div>
                <div class="page-actions">
                    <button type="button" class="btn-shadow btn bg-primary text-white" data-bs-toggle="modal" data-bs-target="#addWorksModal">
                        <i class="fas fa-plus text-white" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="page-content previous-work my-4 px-5">
                <div class="row justify-content-center">
                    <% for( let i = 0; i < works.length; i++ ) { %>
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
                            <div class="card border-0 pt-4 px-4 mb-30">
                                <div class="card-head d-flex align-items-center justify-content-between">
                                    <div class="p-2 flex-column">
                                        <span class="text-dark fw-bolder">
                                            <%= works[i].workTitle %>
                                        </span>
                                    </div>
                                    <div class="dropdown">
                                        <a role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate3d(0px, -25.4px, 0px);" data-popper-placement="top-end">
                                            <li class="p-2">
                                                <a class="dropdown-item editWorksModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#editWorksModal"
                                                data-id="<%= works[i]._id %>"
                                              
                                                data-workTitle="<%= works[i].workTitle %>"
                                                data-githubLink="<%= works[i].github_link %>"
                                                data-website="<%= works[i].website %>"
                                                >
                                                    <i class="fas fa-edit" style="color: blue;"></i>
                                                    <span class="d-inline-block"> Edit</span>
                                                </a>
                                            </li>
                                            <li class="p-2">
                                                <a class="dropdown-item deleteWorksModalBTN" role="button" data-bs-toggle="modal" data-bs-target="#deleteWorksModal"
                                                data-id="<%= works[i]._id %>">
                                                    <i class="fas fa-trash-alt" style="color: red;"></i>
                                                    <span class="d-inline-block"> Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="/uploads/<%= works[i].work_image %>" alt="work img" width="120" height="120">
                                    </div>
                                    <p class="py-2 d-flex justify-content-between">
                                        <a href="<%= works[i].github_link %>">github</a> 
                                        <a href="<%= works[i].website %>">website</a> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    <% } %>
                </div>
            </div>
            <!-- addWorksModal -->
            <div class="modal fade" id="addWorksModal" tabindex="-1" aria-labelledby="addWorksModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="addWorksModalLabel">Add Previous Works</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fas fa-plus-circle text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form class="row g-3" action="/dashboard/works" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" value="<%= info._id %>">
                                <div class="mb-2">
                                    <label for="work-title"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="workTitle" id="work-title" placeholder="Work Title...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="work-image"></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="work_image" id="work-image" placeholder="Work Image...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="github-link"></label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="github_link" id="github-link" placeholder="GitHub Link...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="website"></label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="website" id="website" placeholder="Website Link...">
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
            <!-- editWorksModal -->
            <div class="modal fade" id="editWorksModal" tabindex="-1" aria-labelledby="editWorksModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="editWorksModalLabel">Edit PreviousWork</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fas fa-pen-alt text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form class="row g-3" action="/dashboard/works" method="POST" id="editWorkForm" enctype="multipart/form-data">
                                <input type="hidden" name="user_id" value="<%= info._id %>">
                                <div class="mb-2">
                                    <label for="work-title"></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="workTitle" id="work-title-edit" placeholder="Work Title...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="work-image"></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="work_image" id="work-image-edit" placeholder="Work Image...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="github-link"></label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="github_link" id="github-link-edit" placeholder="GitHub Link...">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="website"></label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" name="website" id="website-edit" placeholder="Website Link...">
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
            <!-- deleteWorkModal -->
            <div class="modal fade" id="deleteWorksModal" tabindex="-1" aria-labelledby="deleteWorksModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header mt-3">
                            <h6 class="modal-title" id="deleteWorksModalLabel">Delete Work</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="circle-custom-icon bg-primary d-flex justify-content-center align-items-center shadow-sm">
                                <i class="fa fa-times text-white"></i>
                            </div>
                        </div>
                        <div class="modal-body justify-content-center">
                            <form class="row g-3" id="deleteWorkForm" action="" method="GET">
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
</div>

<script>
    $(document).ready(function(){
    $(".editWorksModalBTN").on('click', function(e){
        e.preventDefault();
        editID = $(this).attr('data-id');
        console.log($(this).attr('data-workImage'));
        $('#editWorkForm').attr('action', `/dashboard/work/${editID}`);
        $('#work-title-edit').val($(this).attr('data-workTitle'));
        // $('#work-image-edit').val($(this).attr('data-workImage'));
        // data-workImage="/uploads/"
        $('#github-link-edit').val($(this).attr('data-githubLink'));
        $('#website-edit').val($(this).attr('data-website'));
    });
    $(".deleteWorksModalBTN").on('click', function(e){
        e.preventDefault();
        var editID = $(this).attr('data-id');
        $('#deleteWorkForm').attr('action', `/dashboard/work/${editID}?method_DELETE`);
    });
});
</script>
<%- include ('includes/bottom') %> 