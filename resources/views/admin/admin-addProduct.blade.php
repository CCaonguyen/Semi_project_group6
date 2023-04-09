@include('admin.admin-header')
@yield('tables')
 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">PRODUCT TABLES</h1>
                    <p class="mb-4">Anytime Anywhere EYE CONTACT LIVE </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Database Customer | BEVIS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-product">
                                    <ul style="list-style: none">
                                        <form action="" method="post" class="row g-3">
                                            @csrf
                                                <div class="col-md-4">
                                                    <th><input type="text" name="productid" id=""></th>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <th><input type="text" name="productname" id=""></th>
                                                </div>
                                                <div class="col-md-2">
                                                    <label  class="form-label">Product Price</label>
                                                    <input type="number" min="300" value="450" class="form-control" name="price">
                                                </div>
                                                <div class="col-md-2">
                                                    <th> <select class="form-select" name = "color" aria-label="Default select example"> 
                                                        @foreach ($color as $item)
                                                       <option value="{{$item ->color}}">{{$item ->color}}</option>
                                                       @endforeach
                                                 
                                                     
                                                      </select> 
                                                     </th>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label  class="form-label">Images</label>
                                                        <input type="file" name="image" id="" multiple>
                                                    </div>
                                                <div class="col-md-2">
                                                    <th> <select class="form-select" name = "category" aria-label="Default select example"> 
                                                        @foreach ($category as $item)
                                                       <option value="{{$item ->category}}">{{$item ->category}}</option>
                                                       @endforeach
                                                 
                                                     
                                                      </select> 
                                                     </th>
                                                </div>
                                                <div class="col-12">
                                                  <label class="form-label">Description</label>
                                                  <input type="text" name="description" class="form-control" id="inputAddress">
                                                </div>
                                                
                                                <div class="col-md-2">
                                                    <label  class="form-label">Images2</label>
                                                    <input type="file" name="images2" id="" multiple>
                                                </div>
                                                <div class="col-md-2">
                                                    <label  class="form-label">Images3</label>
                                                    <input type="file" name="images3" id="" multiple>
                                                </div>
                                                <div class="col-md-2">
                                                    <label  class="form-label">Images4</label>
                                                    <input type="file" name="images4" id="" multiple>
                                                </div>
                                                <div class="col-md-2">
                                                    <label  class="form-label">Images5</label>
                                                    <input type="file" name="images5" id="" multiple>
                                                </div>
                                                <div class="col-12">
                                                  <button type="submit" class="btn btn-primary">Create</button>
                                                </div>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.admin-footer')
