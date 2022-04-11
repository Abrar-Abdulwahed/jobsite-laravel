<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <div class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-10 form-container">
                    <div class="row gx-3 align-items-center">
                        <div class="col-sm-12 col-md-6 text-uppercase left-content">
                            <img src="../imgs/login.svg" alt="" width="100%">
                        </div>
                        <div class="col-sm-12 col-md-6 right-content text-start py-4 px-5">
                            <h3 class="form-title mb-5 text-uppercase pb-2">Login</h3>
                            <form class="form-content text-dark mb-3" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username_or_email">Username / Email</label>
                                    <input type="email" id="username_or_email" name="username_or_email"
                                        class="form-control border-0 rounded-pill h-40" />
                                </div>
                                <div class="mb-5">
                                    <label for="psw">Password</label>
                                    <input type="password" id="psw" name="password"
                                        class="form-control border-0 rounded-pill h-40" />
                                </div>
                                <button class="btn w-100 rounded-pill text-light mb-3 h-40">Login</button>
                                <div class="remember-forget d-flex justify-content-between align-items-baseline">
                                    <div class="remember-me">
                                        <input type="checkbox" class="checkbox" />
                                        <label class="check-label">Remember Me</label>
                                    </div>
                                    <a href="" class="forgot">Forgot Password</a>
                                </div>
                            </form>
                            <span class="d-block text-center mb-3 fw-bolder">OR</span>
                            <ul class="social-links d-flex justify-content-center">
                                <li>
                                    <a href="#" class="btn text-white" style="background-color: #f16262">
                                        <i class="fab fa-google" style="font-size: 8px !important;"></i> Login with
                                        Google
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
                            <span class="d-block text-center mt-4">Don't have an account? Sign up <a
                                    href="{{ route('register') }}" class="text-primary">here</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/app.js"></script>
    <script src="https://kit.fontawesome.com/0258162a56.js" crossorigin="anonymous"></script>
</body>

</html>
