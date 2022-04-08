@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Jobs/</span>New Job</h4>
            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header">Create New Job</h5>
                <form class="card-body" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label" for="multicol-service-job-title">Job Title</label>
                            <input name="job_title" type="text" id="multicol-job-title" value="{{ old('job_title') }}"
                                class="form-control" placeholder="ex. Graphic Design" />
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="multicol-job-category">Job Category</label>
                            <input name="job_category" type="text" id="multicol-job-category"
                                value="{{ old('job_category') }}" class="form-control" placeholder="ex. Graphic" />
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="multicol-min-salary">Min Salary</label>
                            <input name="job_min_salary" type="number" id="multicol-min-salary"
                                value="{{ old('job_min_salary') }}" class="form-control" placeholder="ex. 5000" />
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="multicol-max-salary">Max Salary</label>
                            <input name="job_max_salary" type="number" id="multicol-max-salary"
                                value="{{ old('job_max_salary') }}" class="form-control" placeholder="ex. 8000" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="multicol-job-location">Job Location</label>
                            <input name="job_location" type="text" id="multicol-job-location"
                                value="{{ old('job_location') }}" class="form-control" placeholder="ex. Taiz" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="multicol-job-details">Details</label>
                            <textarea class="form-control" name="job_details" id="multicol-job-details" value="{{ old('job_details') }}"
                                cols="3" rows="8"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-password-toggle">
                                <label class="form-label" for="multicol-confirm-password">تفعيل الخدمة</label>
                                <div class="input-group input-group-merge">
                                    <label class="switch">
                                        <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">is active</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                        <button type="reset" class="btn btn-label-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
