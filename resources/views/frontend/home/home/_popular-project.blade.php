<!-- Campaign section start -->
<section class="project-section style-2 padding-tb">
    <div class="container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="700">
            <div class="d-block mx-auto position-relative">
                <h2>Our Project</h2>
                <div class="position-absolute mx-auto text-center" style="left: 0; right: 0; top: -80%; z-index: -1;">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/project/PROJECT.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="section-wrapper">
            @foreach($projects as $project)
                <div class="post-item">
                    <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                        <a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}"><img src="{{ asset($project->image_three) }}" alt="project"></a>
                    </div>
                    <div class="post-content" data-aos="fade-left" data-aos-duration="700" style="background-color: whitesmoke;">
                        <h4><a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}">{{ $project->title }}</a></h4>
                        <ul>
                            <li><i class="fas fa-folder-open"></i><a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}">{{ $project->projectCategory->name ?? 'N/A' }}</a></li>
                            <li><i class="fas fa-home"></i><a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}">{{ $project->name }}</a></li>
                        </ul>
                        <p>{{ $project->short_description }}</p>
                        <a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}" class="custom-btn">See More<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Campaign section ending -->