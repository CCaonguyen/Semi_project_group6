@include('header')
@section('title', 'Bevis | Login')
@yield('login')

<link rel="stylesheet" href="{{asset('css/login.css')}}">


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkrhI5RFfn-6W8Y28VUczt3LXjE9l02jSfMg&usqp=CAU);">
        <div class="bradcumbContent">
                                        <h1>LOG IN</h1>
                                    </div>
                                </section>
                                <!-- ##### Breadcumb Area End ##### -->
                            
                                <!-- ##### Login Area Start ##### -->
                                <section class="login-area section-padding-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-lg-8">
                                                <div class="login-content">
                                        @if(session('alerter'))
                                            <section class='alert alert-danger'>{{session('alerter')}}</section>
                                        @endif
                                        <form class="row g-3" method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername" name="username">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" name="password">
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Remember Password
                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <a href="{{route('signup')}}">Create an account</a>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn oneMusic-btn mt-30">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- ##### Login Area End ##### -->
                        
                           
                        </body>
                        
                        </html>
@include('footer')
