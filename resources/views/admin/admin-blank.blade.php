@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">CUSTOMER TABLES</h1>
                   

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
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>City</th>
                                            <th>Role</th>
                                            <th>Function</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key => $value)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $value -> username}}</td>
                                            <td>{{ $value -> fullname}}</td>
                                            <td>{{ $value -> phonenumber}}</td>
                                            <td>{{ $value -> email}}</td>
                                            <td>{{ $value -> address}}</td>
                                            <td>{{ $value -> city}}</td>
                                            <td>{{ $value -> role}}</td>
                                            <th>
                                                <a href="{{route('deleteUser',$value->username)}}" class="btn btn-danger">Delete</a>
                                                <a href="{{route('UU',$value->username)}}"class="btn btn-success">Update</a>
                                                </th>
                                        </tr>
                                        @endforeach
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
