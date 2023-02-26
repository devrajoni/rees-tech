<section class="shop-page padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2>Our Product</h2>
                 <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/product/PRODUCT.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12 sticky-widget">
                <div class="shop-product-wrap grid row">

                    @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="product-item h-100 rounded" style="background-color: white;">
                                <div class="product-thumb">
                                    <img class="rounded-top" src="{{ asset($product->image_one) }}" alt="shope">

                                </div>
                                <div class="product-content">
                                    <h5><a href="{{ route('product-details', $product->id)}}">{{ $product->name }}</a></h5>
                                    <h6>$ {{ $product->price }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>