@include('admin.admin-header')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Update User TABLES</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Customer | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Role</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Role</th>
                                            <th>Function</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <form action="" method="post">
                                            @csrf
                                                <th>#</th>
                                                <th><input type="text" name="username" value="{{$user->username}}"></th>
                                                <th><input type="password" name="password" value="{{$user->password}}"></th>
                                                <th><input type="text" name="fullname" value="{{$user->fullname}}" ></th>
                                                <th><input type="number" name="phonenumber" min="19999129" value="{{$user->phonenumber}}"></th>
                                                <th><input type="email" name="email" value="{{$user->email}}"></th>
                                                <th><input type="text" name="address" value="{{$user->address}}"></th>
                                                <th><input type="text" name="city" value="{{$user->city}}"></th>
                                                <th><input type="text" name="role" value="{{$user->role}}"></th>
                                                <th><button type="submit" class="btn btn-success">Update</button></th>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')
