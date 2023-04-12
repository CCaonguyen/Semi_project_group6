@include('admin.admin-header')
@yield('admin-news')
 <!-- Begin Page Content -->
 
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-6 text-gray-800">Create News Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

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
                                            <th>ID News</th>
                                            <th>username</th>
                                            <th>title</th>
                                            <th>author</th>
                                            <th>Content</th>
                                            <th>Images</th>
                                            
                                        </tr>
                                        <tr>
                                            <form action="" method="post">
                                                @csrf
                                                <th></th>
                                                <th><input type="text" name="newsID" id=""></th>
                                                <th><input type="text" name="author" id=""></th>
                                                <th><input type="text" name="title" id=""></th>
                                                <th><input type="text" name="content" id=""></th>
                                               
                                                <th><input type="file" name="images" id="" multiple></th>
                                                
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>
                                            </form>
                                            
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $news as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> newsID}}</th>
                                            <th>{{ $value -> author}}</th>
                                            <th>{{ $value -> title}}</th>
                                            <th>{{ $value -> content}}</th> 
                                           
                                           
                                            <th>{{ $value -> images}}</th>
                                            
                                            <th><a href="{{route('delete-news',$value->newsID)}}">Delete</a></th>
                                          
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