<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Title goes here</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/all.min.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
                    crossorigin="anonymous"> </script>
    </head>
    <body> 
        <div id="dashboard-body" class="dash-body fixed-header fixed-sidebar theme-white">
            <nav class="dash-header navbar navbar-expand-lg navbar-light bg-white w-100 shadow">
                <div class="dash-header__logo d-flex justify-content-between px-4">
                    <div class="logo">logo</div>
                    <div class="mobile-menu">
                        <button id="dashboard-navbar-toggler" class="border-0">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="dash-header__content px-4 d-flex justify-content-between align-items-center">
                    <div class="header-contnet__left">
                        <div class="input-holder position-relative">
                            <input type="text" class="search-input w-100" placeholder="Type to search">
                            <button class="search-icon rounded-circle"><i class="fas fa-search"></i></button>
                        </div>
                        <div>
                        
                        </div>
                    </div>
                    <div class="header-contnet__right">
                        <div class="btn-group">
                            <button class="btn bg-transparent" type="button"> 
                                <img src="#" alt="profile img" class="rounded-circle" width="40">
                            </button>
                            <button type="button" class="btn btn-lg bg-transparent dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/">Home</a></li>
                                <li><a class="dropdown-item" href="#">some</a></li>
                                <li><a class="dropdown-item" href="/users/logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <script>
            $(document).ready(function(){
                $('input[type="checkbox"]').change(function(){
                    if(this.checked == true){
                        $(this).parent().parent().next().show();
                    }else{
                        $(this).parent().parent().next().hide();
                    }
                });
            });
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="../js/dashboard.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
