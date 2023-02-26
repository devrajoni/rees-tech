
<x-layouts.backend>
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($workProcess) ? __('Update Work Process') : __('Add Work Process') }}</h3>
                        <a href="{{ route('backend.work-process.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($workProcess) ? route('backend.work-process.update', $workProcess->id) :  route('backend.work-process.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($workProcess) @method('PUT') @endisset
                            <div class="row">

                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Image')"
                                    type="file"
                                    name="image"
                                    id="image"
                                    :value="isset($workProcess) ? asset($workProcess->image) : null"
                                    class="dropify"
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Title')"
                                    name="title"
                                    id="title"
                                    :value="$workProcess->title ?? null"
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Description')"
                                    name="description"
                                    
                                    :value="$workProcess->description ?? null"
                                />
                            </div>

                            <div class="row">
                                <div class="col-md-12">
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
                $('.summernote').summernote({
                    height: 250,
                });
                $('#status').val("{{$workProcess->status ?? ''}}");
                $('.dropify').dropify();
            });
        </script>
    @endsection
</x-layouts.backend>
