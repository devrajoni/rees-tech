<script src="{{ asset('backend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/') }}js/plugins/tippy4.min.js.js"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/chartjs/chartjs.active.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins/vmap/vmap.active.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    FilePond.registerPlugin(FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
        const inputElement = document.querySelector('.file-pond');
        const pond = FilePond.create( inputElement, {
            imagePreviewHeight: 140,
             multiple: true,
        });
    $(document).ready(function(){
        $('.dropify').dropify();
    });
</script>


<livewire:scripts />

<x-flashify::scripts />

{{ $slot }}
@yield('scripts')


