<section class="shop-page padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 sticky-widget">
         <!--        <div class="shop-title d-flex flex-wrap justify-content-between bg-white">
                    <div class="product-view-mode">
                        <a class="active" data-target="grid"><i class="fas fa-th"></i></a>
                        <a data-target="list"><i class="fas fa-list"></i></a>
                    </div>
                </div> -->
                <div class="shop-product-wrap grid row">
                    @foreach($products as $product)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card border-0 h-100 rounded" data-aos="fade-left" data-aos-duration="700">
                            <div>
                                <div class=" p-3">
                                    <img class="img-fluid" src="{{ asset($product->image_one)}}" alt="feature">
                                </div>
                                <div class="card-body page-content mt-3">
                                   <h5><a href="{{ route('product-details', $product->id)}}">{{ $product->name }}</a></h5>
                                    <h6>
                                        $ {{ $product->price }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                   </div>

                        
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3 col-12 sticky-widget">
                <div class="sidebar-widget">
<!--                     <div class="widget-search bg-white">
                        <h4>Search Keyword</h4>
                        <form action="action">
                            <input type="text" placeholder="Search Here..." name="s">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div> -->
                    <div class="shop-widget bg-white">
                        <div class="widget-title">
                            <h4>Category</h4>
                        </div>
                        <div class="widget-wrapper">
                            <ul class="shop-menu">
                                @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('product-category', $category->id)}}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="letest-product bg-white">
                        <div class="widget-title">
                            <h4>Latests Products</h4>
                        </div>
                        <div class="widget-wrapper">
                            <ul>
                                @foreach($latests as $latest)
                                    <li>
                                        <div class="product-thumb">
                                            <img src="{{ asset($latest->image_one) }}" alt="shope">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="{{ route('product-details', $latest->id)}}">{{ $latest->name }}</a></h6>
                                            <h6 class="pb-2">{{ $latest->price }}</h6>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>