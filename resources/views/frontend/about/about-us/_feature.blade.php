<section class="feature-section padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2 class="text-center">Our Work Process</h2>
                <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/work/work1.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach($workProcess as $data)
                   <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="card border-0 h-100 rounded" data-aos="fade-left" data-aos-duration="700">
                            <div class="card-header bg-white border-white p-0">
                                <img class="rounded-top" src="{{asset($data->image)}}" alt="feature">
                            </div>
                            <div class="card-body">
                                <h4>{{ $data->title }}</h4>
                                <p>{!! $data->description !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach 
            </div>
        </div>
    </div>
</section>