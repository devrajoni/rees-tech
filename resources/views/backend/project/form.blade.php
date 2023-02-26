<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($project) ? __('Update Project') : __('Add Project') }}</h3>
                        <a href="{{ route('backend.projects.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($project) ? route('backend.projects.update', $project->id) :  route('backend.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($project) @method('PUT') @endisset
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Category') }}</label>
                                        <div>
                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Title')"
                                    name="title"
                                    id="title"
                                    :value="$project->title ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$project->name ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Country Name')"
                                    name="country_name"
                                    id="country_name"
                                    :value="$project->country_name ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Client')"
                                    name="client"
                                    id="client"
                                    :value="$project->client ?? null"
                                />
                                 <x-ui.input
                                    group="col-md-6"
                                    :label="__('Achievment')"
                                    name="key_achievment"
                                    id="key_achievment"
                                    :value="$project->key_achievment ?? null"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Image')"
                                    type="file"
                                    name="image"
                                    :value="isset($project) ? asset($project->image_one) : null"
                                    class="dropify"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Gallery')"
                                    type="file"
                                    name="gallery[]"
                                    class="dropify"
                                    multiple
                                />
                            </div>

                            <div class="row">
                                @isset($project)
                                    <div class="col-lg-12 d-flex">
                                        @foreach ($project->projectGallery as $image)
                                            <div class="image">
                                                <meta name="csrf-token" content="{{ csrf_token() }}">

                                                <img src="{{ asset($image->gallery_one) }}" alt="" style="padding:2px;" id="gallery">
                                                <button type="button" data-id="{{ $image->id }}" data-url="{{ route('backend.galleries-image', $image->id)}}" class="deleteRecord btn btn-sm">
                                                        <i class="ph-trash-bold text-danger fs-3"></i>
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                @endisset
                            </div>


                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Started At')"
                                    type="date"
                                    name="started_at"
                                    class="started_at"
                                    :value="optional($project->started_at ?? null)->format('Y-m-d')"
                                />

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('End At')"
                                    type="date"
                                    name="end_at"
                                    class="end_at"
                                    :value="optional($project->end_at ?? null)->format('Y-m-d')"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Address')"
                                    name="address"
                                    :value="$project->address ?? null"
                                    required
                                />
                            </div>

                           <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Short Description')"
                                    type="textarea"
                                    name="short_description"
                                    :value="$project->short_description ?? null"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Long Description')"
                                    type="textarea"
                                    name="long_description"
                                    :value="$project->long_description ?? null"
                                    class="summernote"
                                />
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Project  Status') }}</label>
                                        <select class="form-control" name="project_status" value="{{ old('project_status') }}" id="project_status">
                                            <option value="Delivery">Delivery</option>
                                            <option value="Progress">Progress</option>
                                            <option value="Awarded">Awarded</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Status') }}</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mt-15">
                                    <button type="submit" class="button button-primary button-outline button-sm">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script src="{{ asset('backend')}}/assets/js/plugins/quill/quill.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/quill/quill.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.active.js"></script>
        <script>
            $(document).ready(function(){
                $('.summernote').summernote({
                    height: 250,
                });
                $('#category_id').val("{{$project->category_id ?? ''}}");
                $('#status').val("{{$project->status ?? ''}}");
                $('#project_status').val("{{$project->project_status ?? ''}}");
                $('.dropify').dropify();
            });
        </script>
        <script>
            $(document).ready(function(){
                $(".deleteRecord").click(function(){
                    var id = $(this).data("id");
                    var url = $(this).data("url");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax(
                    {
                        url: url,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (res){
                            if(res.success){
                                window.location.reload();
                            }
                        }
                    });
               
                });
            });
        </script>
    @endsection
    <x-layouts.backend.head>
        <style>
            .image{
                position: relative;
            }

            .image img{
                height: 100px;
                width:310px !important;
                }

            .image .deleteRecord i{
                position: absolute;
                height: 10px;
                width: 10px;
                left: 50%;
                bottom: 50%;
                top: 40%;
                display: none;

            }

            .image:hover .deleteRecord i{
                display: block;

            }

             .image:hover img{
                color: black;
                opacity: 20%;

            }
        </style>
    </x-layouts.backend.head>

</x-layouts.backend>
