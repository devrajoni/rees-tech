@foreach($banners as $banner)
    @if($banner->status == 2)
        <section class="page-header position-relative">
            <div class="page-header-area linear-style h-100">
                <div class="container h-100">
                    <div class="page-header-content d-flex justify-content-center align-items-center h-100 text-center" >
                        <div class="page-header-title">
                            <h2 class="text-light">Project</h2>
                            <h2 class="text-light"><span>Most Popular Project</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-video">
                <video class="bg-video__content" autoPlay muted loop>
                  <source src="{{ asset($banner->video) }}" type="video/mp4" />
                  your browser is not supported!
                </video>
              </div>
        </section>

    @else
       <section class="page-header position-relative"  style="background-image: url({{ asset($banner->image) }}); background-size: cover;">
            <div class="page-header-area linear-style h-100">
                <div class="container h-100">
                    <div class="page-header-content d-flex justify-content-center align-items-center h-100 text-center" >
                        <div class="page-header-title">
                            <h2 class="text-light">Project</h2>
                            <h2 class="text-light"><span>Most Popular Project</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    @endif
@endforeach