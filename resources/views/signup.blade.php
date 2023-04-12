@include('header')
@section('title', 'Bevis |Sign Up')
@yield('signup')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<link rel="icon" href="{{asset('Image/core-img/favicon.ico')}}">


    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGl7kB2C7zzfV9Xm455x9ETZg9n6vXOAzqGw&usqp=CAU);">
        <div class="bradcumbContent">
                                        <h1>SIGN UP</h1>
                                    </div>
                                </section>
                                <!-- ##### Breadcumb Area End ##### -->
                            
                                <!-- ##### Login Area Start ##### -->
                                <section class="login-area section-padding-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-lg-8">
                                                <div class="login-content">
                                                  
                                        <form class="row g-3" method="POST">
                                            @csrf
                                            <div class="col-md-6">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername" name="username">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" name="password">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputFullname" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="Fullname" placeholder="Nguyen Dinh Cao" name="fullname">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="Fullname" placeholder="+84" name="phonenumber">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="@gmail" name="email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity" name="city">
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    I agree to all terms of Travatrix.
                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn oneMusic-btn mt-30">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

   
</body>

</html>
@include('footer')
