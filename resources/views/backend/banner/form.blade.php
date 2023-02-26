<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Banner</h3>
                    </div>
                    <div class="box-body">
                        <form action="{{isset($banner) ?  route('backend.banners.update', $banner->id) :  route('backend.banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($banner) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-lg-12"
                                    :label="__('Image')"
                                    type="file"
                                    name="image"
                                    class="dropify"
                                    :value="isset($banner) ? asset($banner->image) : null"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-lg-12"
                                    :label="__('Video')"
                                    type="file"
                                    name="video"
                                    accept="video/*"
                                />
                            </div>

                            <div class="row ml-1">
                                <div class="form-group">
                                    <label class="mb-5">Default</label>
                                    <label class="radio-inline mt-3">
                                        <input type="radio" id="smt-fld-1-2" name="status" value="1" {{ isset($banner) ? (($banner->status == '1') ? 'checked':'') : '' }}>Image
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="smt-fld-1-3" name="status" value="2" {{ isset($banner) ? (($banner->status == '2') ? 'checked':'') : '' }}>Video
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-3">
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
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond-plugin-image-preview.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/filepond/filepond.active.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/dropify/dropify.active.js"></script>
        <script>
            $(document).ready(function(){
                $('#dropify').dropify();
            });
            FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
                const inputElement = document.querySelector('.file-pond');
                const pond = FilePond.create( inputElement, {
                    imagePreviewHeight: 140,
            });

        </script>
    @endsection
</x-layouts.backend>