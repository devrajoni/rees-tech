<section class="shop-page padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12 sticky-widget">
                <div class="shop-title d-flex flex-wrap justify-content-between bg-white">
                    <div class="product-view-mode">
                        <a class="active" data-target="grid"><i class="fas fa-th"></i></a>
                        <a data-target="list"><i class="fas fa-list"></i></a>
                    </div>
                </div>
                <div class="shop-product-wrap grid row">
                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item" style="height: 370px;">
                                <div class="product-thumb">
                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope" style="height: 220px;">

                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('product-details', $product->id)}}">{{ $product->name }}</a></h5>
                                    <p>
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <h6 class="pb-2">$ {{ $product->price }}</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope">
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('product-details', $product->id)}}">{{ $product->name }}</a></h5>
                                    <p>
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <h6>
                                        $ {{ $product->price }}
                                    </h6>
                                    <p>
                                        {!! $product->short_description !!}
                                    </p>
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
                                            <img src="{{ $latest->getFirstMediaUrl('product', 'image') }}" alt="shope">
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
</section>