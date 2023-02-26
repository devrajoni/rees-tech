<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($projectCategory) ? __('Update Category') : __('Add Category') }}</h3>
                        <a href="{{ route('backend.project-categories.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($projectCategory) ? route('backend.project-categories.update', $projectCategory->id) :  route('backend.project-categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($projectCategory) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Image')"
                                    type="file"
                                    name="image"
                                    class="dropify"
                                    :value="isset($projectCategory) ? asset($projectCategory->image) : null"
                                    
                                />
                            </div>
                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$projectCategory->name ?? null"
                                    required
                                />

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Status') }}</label>
                                        <div>
                                            <select class="form-control" name="status" id="status" required>
                                                <option value="Active">{{ __('Active') }}</option>
                                                <option value="Inactive">{{ __('Inactive') }}</option>
                                            </select>
                                        </div>
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
                $('#status').val("{{$projectCategory->status ?? ''}}");
                $('.dropify').dropify();
            });
        </script>
    @endsection
</x-layouts.backend>
