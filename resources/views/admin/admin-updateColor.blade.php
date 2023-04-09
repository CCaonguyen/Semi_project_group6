@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Update Color TABLES</h1>
                   
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
                                            <th>Color ID</th>
                                            <th>Color Name</th>
                                            <th>Description</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Color ID</th>
                                            <th>Color Name</th>
                                            <th>Description</th>
                                            
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <form action="" method="post">
                                            @csrf
                                                <th>#</th>
                                                <th><input type="text" name="colorid" value="{{$color->colorid}}"></th>
                
                                                <th><input type="text" name="color" value="{{$color->color}}" ></th>
                                
                                                <th><input type="text" name="colordescription" value="{{$color->colordescription}}"></th>
                                                
                                                <th><button type="submit">Update </button></th>
                                                {{-- <th><button type="submit"><a href="{{route('update-color',$value->colorID)}}">Update</a></button></th> --}}
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