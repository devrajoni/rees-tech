<section class="campaign-section style-two style-three style-four style-five padding-tb" style="background: #F7FAFD;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 sticky-widget">
                <div class="section-wrapper">
                    @foreach($projects as $project)
                        <div class="post-item " data-aos="fade-up" data-aos-duration="700">
                            <div class="post-inner">
                                <div class="post-thumb rounded-top">
                                    <a href="#"><img class="" src="{{ asset($project->image_two) }}" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <h5><a href="{{ route('project-details', ['id' => $project->id, 'slug' => $project->slug])}}">{{ $project->title }}</a></h5>
                                    <span><i class="fas fa-map-marker-alt"></i>{{ $project->address }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $projects->links('vendor.pagination.common') }}
            </div>
            <div class="col-lg-4 sticky-widget">
                <div class="sidebar-widget">
<!--                     <div class="widget-search bg-white">
                        <h4>Search Keyword</h4>
                        <form action="" method="GET">
                            <input type="text" placeholder="Search Here..." name="search" value="">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div> -->
                    <div class="post-catagori bg-white">
                        <h4>Categories</h4>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route('category-project', ['id' => $category->id, 'slug' => $category->slug])}}">{{ $category->name }}</a><span></span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget-rec-post bg-white">
                        <h4>Latest Project</h4>
                        <ul class="recent-post">
                            @foreach($latests as $latest)
                                <li>
                                    <div class="rec-content">
                                        <h6><a href="{{ route('project-details', ['id' => $latest->id, 'slug' => $latest->slug])}}">{{ $latest->title }}</a></h6>
                                        <span>{{ $latest->started_at->format('d-m-Y') }}</span>
                                    </div>
                                    <div class="rec-thumb">
                                        <a href="#"><img src="{{ asset($latest->image_two) }}" alt=""></a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget-instagram bg-white">
                        <h4>Photo Gallery</h4>
                        @foreach($projects as $project)
                            <ul>
                                @foreach($project->projectGallery as $image)
                                    <li><a href="#"><img src="{{ asset($image->gallery_two) }}" alt="" style="height: 93px; width: 100px;"></a></li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>