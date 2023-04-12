@include('header')
@section('title',  'News')
@yield('news')
     <!-- STAN SMITH -->
     <section>
         <style type="text/css">
            .news-img{
                width: 100%;
                height: auto;
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
                padding: 0 !important;
            }
            .news-img:hover{
                padding: 0 !important;
            }
         </style>
        <div class="recommend">
            <h1 style="text-align: center; font-family: 'URW Geometric'; padding: 50px;">- NEWS -</h1>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
            @foreach ( $news as $value )

            <!-- Single Post Start -->
            <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                {{-- @foreach ( $news as $key => $value ) --}}
                <!-- Post Thumb -->
                <div class="blog-post-thumb mt-30">
                    <a href="#"><img src="{{asset($value->images)}}" alt=""></a>
                    {{-- sua? lai link anh cho nay --}}
                    <!-- Post Date -->
                    <div class="post-date">
                        <span>15</span>
                        <span>June ‘18</span>
                    </div>
                </div>

                <!-- Blog Content -->
                <div class="blog-content">
                    <!-- Post Title -->
                    <a href="#" class="post-title">{{$value->title}}</a>
                    <!-- Post Meta -->
                    <div class="post-meta d-flex mb-30">
                        <p class="post-author">By<a href="#">>{{$value->author}}</a></p>
                        <p class="tags">in<a href="#"> Events</a></p>
                        <p class="tags"><a href="#">2 Comments</a></p>
                    </div>
                    <!-- Post Excerpt -->
                    <p>
                        {{$value->content}}
                        </p>
                </div>
            </div>
             @endforeach
        </div>
   </section>
@include('footer')

