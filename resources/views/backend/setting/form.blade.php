<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Setting</h3>
                    </div>
                    <div class="box-body">
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link {{ $tab == 'website' ? 'active' : '' }}" href="{{ route('backend.settings.index', 'website') }}" role="tab">
                                    {{__('Website')}}
                                </a>
    
                                <a class="nav-item nav-link {{ $tab == 'company' ? 'active' : '' }}" href="{{ route('backend.settings.index','company') }}" role="tab">
                                    {{__('Company')}}
                                </a>
    
                                <a class="nav-item nav-link {{ $tab == 'social' ? 'active' : '' }}" href="{{ route('backend.settings.index','social') }}" role="tab">
                                    {{__('Social')}}
                                </a>
                            </div>
                        </nav>
    
                        <div class="tab-content" id="nav-tabContent">
                            @if ($tab == 'website')
                                <div class="tab-pane fade active show" id="website" role="tabpanel">
                                    @include('backend.setting._website')
                                </div>
                            @endif
    
                            @if ($tab == 'company')
                                <div class="tab-pane fade active show" id="company" role="tabpanel">
                                    @include('backend.setting._company')
                                </div>
                            @endif
    
                            @if ($tab == 'social')
                                <div class="tab-pane fade active show" id="social" role="tabpanel">
                                    @include('backend.setting._social')
                                </div>
                            @endif
                        </div>
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
                $('.dropify').dropify();
            });
        </script>
        <script>
            $(document).ready(function(){
                $('.dropify').dropify();
            });
            FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
                const inputElement = document.querySelector('.file-pond');
                const pond = FilePond.create( inputElement, {
                    imagePreviewHeight: 140,
            });

        </script>
    @endsection
</x-layouts.backend>