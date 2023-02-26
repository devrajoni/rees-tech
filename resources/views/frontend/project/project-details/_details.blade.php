<section class="project-single padding-tb">
    <div class="container">
        @foreach($projects as $project)
            <div class="section-wrapper">
                <div class="project-top">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="post-thumb">
                                <img src="{{ asset($project->image_one) }}" alt="project-single" style="display: block;">
                            </div>
                        </div>
                        <div class="col-lg-4 pr-thumb" style="display:  block; overflow: hidden;">
                            @foreach($project->projectGallery as $image)
                                <div class="post-thumb">
                                    <img src="{{ asset($image->gallery_one) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="project-bottom">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="project-item">
                                <div class="project-inner">
                                    <div class="project-header">
                                        <img src="{{ asset('frontend')}}/assets/images/project/single/icon/01.png" alt="project-icon">
                                        <h4>Project Information</h4>
                                    </div>
                                    <div class="project-body">
                                        <ul>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/02.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Clients</h6>
                                                    <p>{{ $project->client }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/03.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Start Date</h6>
                                                    <p>{{ $project->started_at->format('d-m-Y') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/03.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>End Date</h6>
                                                    <p>{{ $project->end_at->format('d-m-Y') ?? 'Processing' }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/04.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Category</h6>
                                                    <p>{{ $project->projectCategory->name ?? 'N/A' }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/04.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Status</h6>
                                                    <p>{{ $project->project_status }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/05.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Location</h6>
                                                    <p>{{ $project->address }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="p-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/project/single/icon/05.png" alt="project-icon">
                                                </div>
                                                <div class="p-content">
                                                    <h6>Achievment</h6>
                                                    <p>{{ $project->key_achievment }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 right-side">
                            <div class="project-item">
                                <div class="project-inner">
                                    <div class="project-header">
                                        <img src="{{ asset('frontend') }}/assets/images/project/single/icon/06.png" alt="project-icon">
                                        <h4>{{ $project->title }}</h4>
                                    </div>
                                    <div class="project-body">
                                        <p>{!! $project->long_description !!}</p>
                                        <a href="{{ route('contact') }}" class="custom-btn">Contact Us <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>