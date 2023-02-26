<!-- Campaign section start -->
<section class="project-section style-2 padding-tb " style="margin-bottom: 0px;">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2 class="text-center">Our Mission</h2>
                <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/mission-vision/mission.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="section-wrapper">
            <div class="post-item">
                <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                    <a href="{{ route('about') }}"><img src="{{ asset($missionVision->mission_image) }}" alt=""></a>
                </div>
                <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                    <h4><a href="{{ route('about') }}">{{ $missionVision->mission_title }}</a></h4>
                    <p>{!! $missionVision->mission_description !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Campaign section start -->
<section class="project-section style-2 pt-5">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2 class="text-center">Our Vision</h2>
                <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/mission-vision/vision.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="section-wrapper">
            <div class="post-item">
                <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                    <a href="{{ route('about') }}"><img src="{{ asset($missionVision->vision_image) }}" alt=""></a>
                </div>
                <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                    <h4><a href="{{ route('about') }}">{{ $missionVision->vision_title }}</a></h4>
                    <p>{!! $missionVision->mission_description !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>