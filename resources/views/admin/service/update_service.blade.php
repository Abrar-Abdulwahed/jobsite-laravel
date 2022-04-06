@extends('admin.layout.master')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">الخدمات/</span>تعديل الخدمة</h4>
            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
                <h5 class="card-header">تعديل الخدمة</h5>
                <form class="card-body" action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="multicol-service-name">اسم الخدمة</label>
                            <input name="service_name" type="text" id="multicol-service-name" class="form-control" />
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="multicol-pic">لوجو الشريك</label>
                            <div class="input-group input-group-merge">
                                <input name="image" type="file" class="form-control" aria-describedby="multicol-pic" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="multicol-service-address">الوصف</label>
                            <textarea class="form-control" name="service_address" id="multicol-service-address" cols="3" rows="8"></textarea>
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
    <!-- Content wrapper -->
@endsection
