@extends('admin.layout.master')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Tables /</span> Basic Tables
            </h4>
            <!--/ Basic Bootstrap Table -->
            <hr class="my-5">
            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Hoverable rows</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover table-bordered">
                        <caption class="ms-4">List of Projects</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id</th>
                                <th>Fullname</th>
                                <th>username</th>
                                <th>image</th>
                                <th>email</th>
                                <th>status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($allUsers as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->id }}</td>
                                    <td><strong>{{ $user->firstname }} {{ $user->lastname }}</strong></td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                <img src="assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                                <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
                                            </li>
                                        </ul>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <a href="{{ route('adminEditUser', $user->id) }}"
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
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
    <!-- Content wrapper -->
@endsection
