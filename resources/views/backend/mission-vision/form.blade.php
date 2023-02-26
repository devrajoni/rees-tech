<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Mission & Vision</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($data) ? route('backend.mission-vision.update', $data->id) :  route('backend.mission-vision.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($data) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Mission Title')"
                                    name="mission_title"
                                    id="mission_title"
                                    :value="$data->mission_title ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Mission Image')"
                                    type="file"
                                    name="mission_image"
                                    id="mission_image"
                                    :value="isset($data) ? asset($data->mission_image) : null"
                                    class="dropify"
                                    
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Mission Description')"
                                    type="textarea"
                                    name="mission_description"
                                    id="mission_description"
                                    :value="$data->mission_description ?? null"
                                    class="summernote"
                                    required
                                />
                            </div>
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Vision Title')"
                                    name="vision_title"
                                    id="vision_title"
                                    :value="$data->vision_title ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__(' Vision Image')"
                                    type="file"
                                    name="vision_image"
                                    id="vision_image"
                                    :value="isset($data) ? asset($data->vision_image) : null"
                                    class="dropify"
                                />
                            </div>
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Vision Description')"
                                    type="textarea"
                                    name="vision_description"
                                    id="vision_description"
                                    :value="$data->vision_description ?? null"
                                    class="summernote"
                                    required
                                />
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
        <script src="{{ asset('backend')}}assets/js/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="{{ asset('backend')}}assets/js/plugins/summernote/summernote.active.js"></script>
        <script src="{{ asset('backend')}}assets/js/plugins/quill/quill.min.js"></script>
        <script src="{{ asset('backend')}}assets/js/plugins/quill/quill.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.active.js"></script>
        <script>
            $(document).ready(function(){
                $('.dropify').dropify();
            });
        </script>
        <script>
            $(document).ready(function(){
                $('.summernote').summernote({
                    height: 250,
                });
            });
        </script>
    @endsection
</x-layouts.backend>