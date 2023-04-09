@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUCT TABLE</h1>
                   
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
                                        <tr>
                                            <form action="{{ route('admin-product')}}" method="post">
                                                @csrf
                                                @php
                                                    $category = DB::table('category')->select('*')->get();
                                                    $color = DB::table('color')->select('*')->get();
                                                    $size = DB::table('size')->select('*')->get();
                                                    @endphp

                                                  
                                                
                                                <th><input type="text" name="productid" id=""></th>
                                                <th><input type="text" name="productname" id=""></th>
                                                <th><input type="number" min="0" value="10" name="price" id=""></th>
                                                <th>
                                                    
                                                   <select class="form-select" type="text" id=""name = "colorid" aria-label="Default select example">
                                                    @foreach ($color as $item)
                                                    <option value="{{$item ->color}}">{{$item ->color}}</option>
                                                    @endforeach
                                                      </select> 
                                                    </th>
                                                    
                                                    <th>
                                                    <select class="form-select" type="text" id=""name = "categoryid" aria-label="Default select example"> 
                                                    @foreach ($category as $item)
                                                   <option value="{{$item ->category}}">{{$item ->category}}</option>
                                                   @endforeach
                                             
                                                 
                                                  </select> 
                                                </th>

                                                  
                                                  
                                                <th>
                                                    <select class="form-select" type="text" id=""name = "sizeid" aria-label="Default select example">
                                                    @foreach ($size as $item)
                                                    <option value="{{$item ->size}}">{{$item ->size}}</option>
                                                    @endforeach
                                              
                                                     
                                                   </select> </th> 
                                                <th><input type="file" name="image" id="" multiple></th>
                                                <th><input type="text" name="description" id="" ></th>
                                              
                                                <th>
                                                    <input type="submit" value="Create">
                                                </th>

                                            </form>
                                             
                                        
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach ( $product as $key => $value )
                                        <tr>
                                            <th>{{ $key + 1}}</th>
                                            <th>{{ $value -> productid}}</th>
                                            <th>{{ $value -> productname}}</th>
                                            <th>{{ $value -> price}}</th>
                                            <th>{{ $value -> categoryid}}</th>
                                            <th>{{ $value -> colorid}}</th>
                                            <th>{{ $value -> sizeid}}</th>
                                            <th>{{ $value -> image}}</th>

                                            <th>{{ $value -> description}}</th>
                                            
                                            <th><a href="{{route('delete',$value->productid)}}">Delete</a></th>
                                            <th><a href="{{route('HH',$value->productid)}}">Update</a></th>
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
