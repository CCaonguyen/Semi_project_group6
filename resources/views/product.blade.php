@include('header')
@section('title', 'Bevis | Product')
        <!-- PRODUCT DETAIL -->
    @yield('product')
     <!-- TOOL SOFT -->
        <div class="product">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-2">
                        <div class="filter">
                            <h4><a href="#">Technology</a> </h4>
                            <hr style="border: 2px solid">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <h5>Category</h5>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="#">Limited Edition</a></li>
                                                <li><a href="#">Online Only</a></li>
                                                <li><a href="#">Sale Off</a></li>
                                                <li><a href="#">Best Seller</a></li>
                                                <li><a href="#">New Arrival</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border: 1px dashed white;">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <h5>Specifications</h5>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="#">36</a></li>
                                                <li><a href="#">37</a></li>
                                                <li><a href="#">38</a></li>
                                                <li><a href="#">39</a></li>
                                                <li><a href="#">40</a></li>
                                                <li><a href="#">41</a></li>
                                                <li><a href="#">42</a></li>
                                                <li><a href="#">43</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border: 1px dashed white;">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <h5>Color</h5>
                                    </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li><a href="#">Red</a></li>
                                                <li><a href="#">Black</a></li>
                                                <li><a href="#">Green</a></li>
                                                <li><a href="#">White</a></li>
                                                <li><a href="#">Yellow</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="banner">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <img src="https://cdn.tgdd.vn/2023/04/banner/ip11-800-200-800x200-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single--product">
                            <div class="container-fluid">
                                <div class="row">
                                    @foreach ( $product as $value )
                                    <div class="col-xl-3">
                                            <div class="single--item--product">
                                                <div class="img-single-item">
                                                    <img src="{{$value ->image}}" style="width: 100%; border-radius: 5px;" >
                                                </div>
                                                <a class="btnBuy" style="text-align: center" href={{"detail/".$value['productid']}}>BUY NOW</a>
                                                <hr style="border: 1px dashed white;">
                                                <h4 style="text-align: center;"><a href={{"detail/".$value['productid']}}>{{$value->productname}}</a></h4>
                                                <hr style="border: 1px dashed white;">
                                                <h5 style="text-align: center; color: #ff5f17;">${{$value ->price}}</h5>
                                            </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </div>
@include('footer')
