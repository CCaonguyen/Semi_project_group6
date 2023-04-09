@include('admin.admin-header')
@yield('admin-news')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-6 text-gray-800">Create Category Table</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Product | BEVIS</h6>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <form action="" method="post">
                                                @csrf
                                                <th></th>
                                                <th><input type="text" name="categoryid" id=""></th>
                                                <th><input type="text" name="category" id=""></th>
                                                <th><input type="text" name="categorydescription" id=""></th>
                                                
                                                
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>
                                            </form>
                                        
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $category as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> categoryid}}</th>
                                            <th>{{ $value -> category}}</th>
                                            <th>{{ $value -> categorydescription}}</th>
                                          
                                            <th><a href="{{route('delete-category',$value->categoryid)}}">Delete</a></th>
                                           
                                            <th><a href="{{route('AA',$value->categoryid)}}">Update</a></th>
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