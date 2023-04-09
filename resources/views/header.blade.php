<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('BevisSneaker')}}/b-style.css">
        <link rel="icon" href="{{url('BevisSneaker')}}/favicon.ico" type="image/x-icon" />
        <link href="//db.onlinewebfonts.com/c/5bf04c97279e55318d67c21101cfd898?family=URW+Geometric" rel="stylesheet" type="text/css" />
        <title>@yield('title','Storetechnology')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     </head>
    <body>
        {{-- @if(session('alertsc'))
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
              <div class="toast-body">
                {{session('alertsc')}}
             </div>
              <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        @endif --}}
        <!-- START HEADER -->
        <div class="ads">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-10">
                            @if(Auth::check())
                                <a href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> {{Auth::user()->username}}</a>
                                <a href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
                                @if (Auth::user()->role == 2)
                                    <a href="{{route('admin-product')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Admin Dashboard</a>
                                @endif
                            @else
                            <a href="{{route('login')}}"><i class="fa-solid fa-user"></i> Login</a>
                            @endif
                      
                    </div>
                    <div class="col-xl-1"></div>
                </div>
            </div>
        </div>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar">
                        <a class="logogo" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                        <h1><span style="color: #fbead7; font-family: 'Pacifico', cursive; ">
                                Store Technology <i class="fas fa-bars"
                                    style="text-align: center"></i></span></h1>
                    </a>
                        <div class="col-xl-6">
                            <!-- Navbar -->
                            <div class="nav-menu">
                                <ul style="margin-bottom: 0;">
                                    <li><a href="{{route('index')}}"><h4>Home</h4></a></li>
                             
                                    <li><a href="{{route('news')}}"><h4>News</h4></a></li>
                                  
                                    <li><a href="{{route('product')}}"><h4>Product</h4></a></li>
                                 
                                  
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="search">
                                <div class="input-group mb-0">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <input type="text" class="form-control" placeholder="Search Product" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- @if(session('alertsc'))
        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{session('alertsc')}}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        @endif --}}

        {{-- @if(session('alertsc'))
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto">Logged Successfully</strong>
                <small>02 Seconds</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @if(session('alertsc'))
                    {{session('alertsc')}}
                @endif
            </div>
        </div>
         @endif --}}
        <!-- END HEADER -->



       