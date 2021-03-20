<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>laravel 8</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>
        <style>
        body {
            overflow-x: hidden;
            font-family: 'Times';
        }
        #menu-toggle:hover{
            background-color: #EF3B2D;
            color: #eee !important;
        }
        #dashboard:hover, #dashboard:active, #act:hover, #act:active{
            color: #EF3B2D;
        }
        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }
        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }
        #sidebar-wrapper .list-group {
        width: 15rem;
        }
        #page-content-wrapper {
        min-width: 100vw;
        }
        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }
        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }
        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        }
        </style>    
    </head>
    <body>
        <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading pb-0" style="color: #EF3B2D;" ><h4><strong>Laravel 8</strong></h4></div>
        <div class="list-group list-group-flush">
            <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action bg-light" id="act">Activity 1 - CRUD</a>
            <a href="{{ route('file.index') }}" class="list-group-item list-group-item-action bg-light" id="act">Activity 2 - Uploading</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="act">Activity 3</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="act">Activity 4</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="act">Activity 5</a>
            <a href="#" class="list-group-item list-group-item-action bg-light" id="act">Activity 6</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-white" style="border: 2px solid #EF3B2D; color: #EF3B2D" id="menu-toggle">Toggle Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="/dashboard" id="dashboard"><strong>Dashboard</strong> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" style="color: #EF3B2D;">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <!-- Added Logout Button -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <!-- Logout code end -->
                </div>
                </li>
            </ul>
            </div>
        </nav>
        <main class="px-3">
            @yield('content')
        </main>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>
</html>