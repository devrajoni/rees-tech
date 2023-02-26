<!-- feature section start here -->
<section class="feature-section padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2>Most Popular Project Category</h2>
                <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/project/PROJECT1.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               @foreach($categories as $category)
                   <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 h-100 rounded" data-aos="fade-left" data-aos-duration="700">
                            <div>
                                <div class="card-header p-0">
                                    <img class="rounded-top img-fluid w-full" src="{{ asset($category->image)}}" alt="feature">
                                </div>
                                <div class="card-body page-content mt-3">
                                    <a class="d-block" href="{{ route('category-project', ['id' => $category->id, 'slug' => $category->slug])}}"><h5 class="text-center">{{ $category->name }}</h5></a>
                                </div>
                            </div>
                        </div>
                   </div>
      

                <!--     <div class='text-center'>
                          <div class='bg-green-dark py-5 rounded-xl position-relative'>
                            <div class='h-20 w-20 mx-auto'>
                              <img src="{{ asset($category->image )}}" alt='health' class='w-full h-full' />
                            </div>
                          </div>

                          <h3 class='mt-3'>Health and Fitness</H3>

                    </div> -->
                @endforeach 
            </div>
        </div>
    </div>
</section>
<!-- feature section ending here -->
