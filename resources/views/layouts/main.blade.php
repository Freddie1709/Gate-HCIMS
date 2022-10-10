<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Gate - HCIMS') }}</title>

        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{-- Icons --}}
        <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
        
        {{-- Local CSS --}}
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    </head>

    <body>

        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <i class='bx bx-receipt'></i>
                    </span>
    
                    <div class="text logo-text">
                        <span class="name">Brgy. Gate</span>
                        <span class="profession">HCIMS</span>
                    </div>
                </div>
    
                <i class='bx bx-chevron-right toggle'></i>
            </header>
    
            <div class="menu-bar">
                <div class="menu">
    
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search...">
                    </li>
    
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="/dashboard">
                                <i class='bx bx-grid-alt icon'></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>
    
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-file icon'></i>
                                <span class="text nav-text">Enrollments</span>
                            </a>
                        </li>
    
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-user-pin icon'></i>
                                <span class="text nav-text">Providers</span>
                            </a>
                        </li>
    
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-group icon'></i>
                                <span class="text nav-text">Users</span>
                            </a>
                        </li>
    
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-support icon'></i>
                                <span class="text nav-text">Manage Agents</span>
                            </a>
                        </li>
    
                    </ul>
                </div>
    
                <div class="bottom-content">
                    <div class="sidebar-card">
                        <li class="">
                            <i class='bx bx-user icon' id="profile-pic"></i>
                            <span class="text nav-text">
                                <span class="user-name"><strong>jdelacruz</strong></span>
                                <br>
                                <span class="user-name">Admin</span>
                            </span>
                        </li>
    
                        <li class="">
                            <a href="#">
                                <i class='bx bx-cog icon'></i>
                                <span class="text nav-text">Account</span>
                            </a>
                        </li>
    
                        <li class="">
                            <a href="#">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </a>
                        </li>
    
                        {{-- <li class="mode">
                            <div class="sun-moon">
                                <i class='bx bx-moon icon moon'></i>
                                <i class='bx bx-sun icon sun'></i>
                            </div>
                            <span class="mode-text text">Dark mode</span>
    
                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li> --}}
                    </div>
                    
                </div>
            </div>
    
        </nav>
    
        <section class="home">
            <nav>
                <div class="nav">
                    <div class="container">
                        
                    </div>
                </div>
            </nav>
    
            <main>
                <div class="container">
                    @yield('content')
                </div>
            </main>
    
        </section>

        {{-- @yield('content') --}}

        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $(".btn-close").addClass("shadow-none");
                
                //Sidebar
                const body = document.querySelector('body'),
                    sidebar = body.querySelector('nav'),
                    toggle = body.querySelector(".toggle"),
                    searchBtn = body.querySelector(".search-box"),
                    modeSwitch = body.querySelector(".toggle-switch"),
                    modeText = body.querySelector(".mode-text");
                toggle.addEventListener("click", () => {
                    sidebar.classList.toggle("close");
                })
                searchBtn.addEventListener("click", () => {
                    sidebar.classList.remove("close");
                })
                modeSwitch.addEventListener("click", () => {
                    body.classList.toggle("dark");
                    if (body.classList.contains("dark")) {
                        modeText.innerText = "Light mode";
                    } else {
                        modeText.innerText = "Dark mode";
                    }
                });
            });
        </script>
        
    </body>

</html>