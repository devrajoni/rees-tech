<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Add Product</h3>
                        <a href="{{ route('backend.products.index') }}"  class="button button-primary button-outline button-sm mr-3">Back</a>
                    </div>
                    <div class="box-body">
                        <livewire:product-form :product_id="$product->id ?? null" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script src="{{ asset('backend')}}/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="{{ asset('backend')}}/assets/js/plugins/summernote/summernote.active.js"></script>
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
                $('#description').summernote({
                    height: 250,
                });
            });
        </script>
        <script>
            $(document).ready(function(){
                $('.dropify').dropify();
            });
            $(document).ready(function(){
                $('#description').summernote({
                    height: 250,
                });
                $('#category_id').val("{{$product->category_id ?? ''}}");
                $('#sub_category_id').val("{{$product->sub_category_id ?? ''}}");
                $('#status').val("{{$product->status ?? ''}}");
                $('#dropify').dropify();
            });
            FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
                const inputElement = document.querySelector('.file-pond');
                const pond = FilePond.create( inputElement, {
                    imagePreviewHeight: 140,
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