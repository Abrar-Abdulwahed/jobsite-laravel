@extends('front.layout.master')
@section('content')
    <div class="signup-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-12 form-container">
                    <div class="row gx-3 align-items-center">
                        <div class="col-sm-12 col-md-5 text-uppercase left-content">
                            <img src="../imgs/signup.svg" alt="" width="100%">
                        </div>
                        <div class="col-sm-12 col-md-6 right-content text-start py-4 px-5">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-4">
                                <h3 class="form-title mb-0 text-uppercase">Signup</h3>
                                <ul class="nav nav-tabs rounded-pill py-1 px-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link border-0 py-1 px-2 rounded-pill active" id="employee-tab"
                                            data-bs-toggle="tab" data-bs-target="#employee" role="tab"
                                            aria-controls="employee" aria-selected="true">
                                            Employee
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link border-0 py-1 px-2 rounded-pill" id="hirer-tab"
                                            data-bs-toggle="tab" data-bs-target="#hirer" role="tab" aria-controls="hirer"
                                            aria-selected="false">
                                            Hirer
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="employee" role="tabpanel"
                                    aria-labelledby="employee-tab">
                                    <form class="form-content text-dark mb-3" action="{{ route('register') }}"
                                        method="POST">
                                        @csrf
                                        <div class="d-flex mb-3 justify-content-between">
                                            <div class="me-2 w-100">
                                                <label for="username"></label>
                                                <input type="text" id="username" name="username"
                                                    value="{{ old('username') }}"
                                                    class="form-control border-0 rounded-pill h-40" placeholder="Username">

                                                @error('username')
                                                    <span style="color: red;">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="w-100">
                                                <label for="email"></label>
                                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                    class="form-control border-0 rounded-pill h-40" placeholder="Email">
                                                @error('eamil')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div>
                                            <label for="psw"></label>
                                            <input type="password" id="psw" name="password" value="{{ old('password') }}"
                                                class="form-control border-0 rounded-pill h-40" placeholder="Password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="conf-psw"></label>
                                            <input type="password" id="conf-psw" name="confirm_password"
                                                value="{{ old('confirm_password') }}"
                                                class="form-control border-0 rounded-pill h-40"
                                                placeholder="confirm Password">
                                        </div>
                                        <div class="d-flex mb-5">
                                            {{-- <label for="country-code"></label>
                                            <select class="form-select me-2 border-0 rounded-pill h-40"
                                                aria-label="Default select example">
                                                <!-- <option disabled style="font-size: 12px; color: #ccc;font-weight: bold;">Country Code</option> -->
                                                <option value="1">+967</option>
                                            </select> --}}
                                            <label for="phone"></label>
                                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                                                class="form-control border-0 rounded-pill h-40" placeholder="Phone">
                                        </div>
                                        <button class="btn w-100 rounded-pill text-light mb-3 h-40">
                                            Register
                                        </button>
                                    </form>
                                    <span class="d-block text-center mb-3 fw-bolder">OR</span>
                                    <ul class="social-links d-flex justify-content-center">
                                        <li>
                                            <a href="#" class="btn text-white" style="background-color: #f16262">
                                                <i class="fab fa-google" style="font-size: 8px !important;"></i> Login
                                                with Google
                                            </a>
                                        </li>
                                        <li class="mx-1">
                                            <a href="#" class="btn text-white" style="background-color: #3b5897">
                                                <i class="fab fa-facebook-f" style="font-size: 8px !important;"></i>
                                                Login with
                                                Facebook
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="d-block text-center mt-4">
                                        Do have an account? Login
                                        <a href="#" class="text-primary">here</a>
                                    </span>
                                </div>
                                <div class="tab-pane fade" id="hirer" role="tabpanel" aria-labelledby="hirer-tab">
                                    <form class="form-content text-dark mb-3">
                                        <div class="d-flex mb-3">
                                            <label for="username"></label>
                                            <input type="text" id="username"
                                                class="form-control me-2 border-0 rounded-pill h-40" placeholder="Username">
                                            <label for="email"></label>
                                            <input type="email" id="email" class="form-control border-0 rounded-pill h-40"
                                                placeholder="Email">
                                        </div>
                                        <div class="d-flex">
                                            <label for="country-code"></label>
                                            <select class="form-select me-2 border-0 rounded-pill h-40"
                                                aria-label="Default select example">
                                                <!-- <option disabled style="font-size: 12px; color: #ccc;font-weight: bold;">Country Code</option> -->
                                                <option value="1">+967</option>
                                            </select>
                                            <label for="phone"></label>
                                            <input type="text" id="phone" class="form-control border-0 rounded-pill h-40"
                                                placeholder="Email">
                                        </div>
                                        <div class="mb-">
                                            <label for="psw"></label>
                                            <input type="password" id="psw" class="form-control border-0 rounded-pill h-40"
                                                placeholder="Password">
                                        </div>
                                        <div class="mb-">
                                            <label for="conf-psw"></label>
                                            <input type="password" id="conf-psw"
                                                class="form-control border-0 rounded-pill h-40"
                                                placeholder="confirm Password">
                                        </div>
                                        <div class="mb-5">
                                            <label for="org"></label>
                                            <input type="text" id="org" class="form-control border-0 rounded-pill h-40"
                                                placeholder="Organization Name">
                                        </div>
                                        <button class="btn w-100 rounded-pill text-light mb-3 h-40">
                                            Sign up As Organization
                                        </button>
                                    </form>
                                    <span class="d-block text-center mb-3 fw-bolder">OR</span>
                                    <ul class="social-links d-flex justify-content-center">
                                        <li>
                                            <a href="#" class="btn text-white" style="background-color: #f16262">
                                                <i class="fab fa-google" style="font-size: 8px !important;"></i> Login
                                                with Google
                                            </a>
                                        </li>
                                        <li class="mx-1">
                                            <a href="#" class="btn text-white" style="background-color: #3b5897">
                                                <i class="fab fa-facebook-f" style="font-size: 8px !important;"></i>
                                                Login with
                                                Facebook
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="d-block text-center mt-4">
                                        Do have an account? Login
                                        <a href="/login" class="text-primary">here</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
