@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>عرض الخدمات</h4>
            <!-- Multi Column with Form Separator -->
            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">جدول الخدمات</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>اسم الخدمة</th>
                                    <th>اللوجو</th>
                                    <th>الوصف</th>
                                    <th>تاريخ الإنشاء</th>
                                    <th>بواسطة</th>
                                    <th>تاريخ التعديل</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--for loop-->
                                <tr>
                                    <td>name</td>
                                    <td>
                                        <img class="img-fluid rounded" height="150px" width="150px" src="images/default.png">
                                    </td>
                                    <td>description</td>
                                    <td>created_at</td>
                                    <td>created_by</td>
                                    <td>updated_at</td>
                                    <td>
                                        <span class="badge bg-label-success me-1">مفعل</span>
                                    </td>
                                    <td>
                                        <a href="{{ route('adminEditService', '1') }}"
                                            class="btn btn-icon btn-outline-dribbble">
                                            <i class="tf-icons bx bx-edit-alt me-1"></i>
                                        </a>
                                        <form action="" method="POST" style="display: inline-block;">
                                            <button type="submit" class="btn btn-icon btn-outline-dribbble">
                                                <i class="tf-icons bx bx-trash me-1"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Bordered Table -->
        </div>
        <!-- / Content -->
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    , made with ❤️ by <a href="https://themeselection.com/" target="_blank"
                        class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                        Themes</a>
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                        target="_blank" class="footer-link me-4">Documentation</a>
                    <a href="https://themeselection.com/support/" target="_blank"
                        class="footer-link d-none d-sm-inline-block">Support</a>
                </div>
            </div>
        </footer>
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
