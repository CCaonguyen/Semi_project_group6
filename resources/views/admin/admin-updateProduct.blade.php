@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Update Product TABLES</h1>
                
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
                                            <th>ID Product</th>
                                            <th>ProductName</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Category</th>
                                            <th>Size</th>
                                            <th>Images</th>
                                           
                                            <th>Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Product</th>
                                            <th>ProductName</th>
                                            <th>Price</th>
                                            <th>Color</th>
                                            <th>Category</th>
                                            <th>Size</th>
                                            <th>Images</th>
                                           
                                            <th>Description</th>
                                           
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <form action="" method="post">
                                            @csrf
                                            @php
                                                    $category = DB::table('category')->select('*')->get();
                                                    $color = DB::table('color')->select('*')->get();
                                                    $size = DB::table('size')->select('*')->get();
                                                    @endphp
                                                <th>#</th>
                                                <th><input type="text" name="productid" id=""></th>
                                                <th><input type="text" name="productname" id=""></th>
                                                <th><input type="number" min="0" value="10" name="price" id=""></th>
                                                
                                                <th><select class="form-select" name = "colorid" aria-label="Default select example">
                                                    @foreach ($color as $item)
                                                    <option value="{{$item ->color}}">{{$item ->color}}</option>
                                                    @endforeach
                                                      </select> </th>
                                           
                                                <th> <select class="form-select" name = "categoryid" aria-label="Default select example"> 
                                                    @foreach ($category as $item)
                                                   <option value="{{$item ->category}}">{{$item ->category}}</option>
                                                   @endforeach
                                             
                                                 
                                                  </select> </th>
                                
                                                <th> <select class="form-select" name = "sizeid" aria-label="Default select example">
                                                    @foreach ($size as $item)
                                                    <option value="{{$item ->size}}">{{$item ->size}}</option>
                                                    @endforeach
                                              
                                                     
                                                   </select> </th>
                                                <th><input type="file" name="image" id="" multiple></th>
                                                <th><input type="text" name="description" id="" ></th>
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