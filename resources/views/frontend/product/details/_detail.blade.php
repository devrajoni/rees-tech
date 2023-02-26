 <section class="shop-single padding-tb">
    @foreach($pro as $product)
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-thumb">
                                <div class="slider-for">
                                    @foreach($product->productGallery as $image)
                                        <div class="thumb">
                                        <img id="myimage{{$image->id}}" src="{{ asset($image->gallery_one) }}" alt="shopZoom">
                                        </div>
                                    @endforeach
                                    
                                </div>
                                <div class="slider-nav">
                                    @foreach($product->productGallery as $image)
                                        <div class="thumb" id="">
                                            <img src="{{ asset($image->gallery_one) }}" alt="shope">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h4>{{ $product->name }}</h4>
                                <h4>
                                    $ {{ $product->price }}
                                </h4>
                                <h5>
                                    {{ $product->productCategory->name }}
                                </h5>
                                <p>
                                    {!! $product->short_description !!}
                                </p>
                                <form action="{{ route('contact') }}">
                                    <button class="custom-btn">Contact Us <i class="fas fa-angle-double-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review">
                    <ul class="review-nav">
                        <li class="desc active" data-target="description-show">Description</li>
                    </ul>
                    <div class="p-4 mt-3">
                        <div class="description">
                            <p>{!! $product->short_description !!}</p>
                            <div class="post-item">
                                <div class="post-thumb">
                                    <img src="{{ asset($product->image_three) }}" alt="shop">
                                </div>
                            </div>
                            <p class="mt-3">
                                {!! $product->long_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 sticky-widget">
                <div class="sidebar-widget">
                    <div class="shop-widget">
                        <div class="widget-title">
                            <h4>Post Category</h4>
                        </div>
                        <div class="widget-wrapper">
                            @foreach($categories as $category)
                                <ul class="shop-menu">
                                    <li><a href="{{ route('product-category', $category->id)}}">{{ $category->name }}</a>
                                        <ul class="shop-submenu">
                                        <!--  -->
                                        </ul>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="letest-product">
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
                                            <h6>{{ $latest->price }}</h6>
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
    @endforeach
</section>