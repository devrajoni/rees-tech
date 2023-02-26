<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($category) ? __('Update Category') : __('Add Category') }}</h3>
                        <a href="{{ route('backend.categories.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($category) ? route('backend.categories.update', $category->id) :  route('backend.categories.store') }}" method="POST">
                            @csrf
                            @isset($category) @method('PUT') @endisset
                            <div class="row">
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$category->name ?? null"
                                    required
                                />

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Status') }}</label>
                                        <div>
                                            <select class="form-control" name="status" id="status">
                                                <option value="Active">{{ __('Active') }}</option>
                                                <option value="Inactive">{{ __('Inactive') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
        <script>
            $(document).ready(function(){
            $('#status').val("{{$category->status ?? ''}}");
            });
        </script>
    @endsection
</x-layouts.backend>

