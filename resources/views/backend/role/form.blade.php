<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-20">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($role) ? __('Update Role') : __('Add Role') }}</h3>
                        <div class="card-options card-header-styles switch pe-3">
                            <div class="switch_section my-0">
                                <div class="switch-toggle d-flex float-end mt-2 me-5">
                                    <a class="onoffswitch2">
                                        <input type="checkbox"  id="rolecheckall" class=" toggle-class onoffswitch2-checkbox"  >
                                        <label for="rolecheckall" class="toggle-class onoffswitch2-label" ></label>
                                    </a>
                                    <label class="form-label mb-5">Select All</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ isset($role) ? route('backend.roles.update', $role->id) : route('backend.roles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($role) @method('PUT') @endisset

                        <div class="box-body">
                            <div class="row">
                                <x-ui.input
                                    group="col-md-12"
                                    :label="__('Role')"
                                    name="name"
                                    id="name"
                                    :value="$role->name ?? null"
                                    required
                                />
                            </div>
                        </div>
                        <div class="box-head d-flex justify-content-between">
                            <h3 class="title">Permission</h3>
                        </div>
                        <div class="box-body">
                            <div class="col-sm-12 col-md-12 mt-5">
                                <div class="form-group">
                                    <div class="row">
                                        @foreach($permissions as $key => $permission)
                                            <div class="col-xl-3">
                                                <div class="switch_section">
                                                    <div class="switch-toggle d-flex">
                                                        <a class="onoffswitch2">
                                                            <input type="checkbox" name="permission[]" id="myonoffswitch {{ $permission->id }}" class=" toggle-class onoffswitch2-checkbox rolecheck" Value="{{$permission->id}}"  {{ isset($role) ? ($role->hasPermissionTo($permission->name) ? 'checked' : '') : '' }} >
                                                            <label for="myonoffswitch {{ $permission->id }}" class="toggle-class onoffswitch2-label" ></label>
                                                        </a>
                                                        <label class="form-label ps-3">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- @if(auth()->user()->role_id = '3')
                                        <div class="row">
                                            @foreach($permissions as $key => $permission)
                                                <div class="col-xl-3">
                                                    <div class="switch_section">
                                                        <div class="switch-toggle d-flex">
                                                            <a class="onoffswitch2">
                                                                <input type="checkbox" name="permission[]" id="myonoffswitch {{ $permission->id }}" class=" toggle-class onoffswitch2-checkbox rolecheck" Value="{{$permission->id}}"  {{ isset($role) ? ($role->hasPermissionTo($permission->name) ? 'checked' : '') : '' }} >
                                                                <label for="myonoffswitch {{ $permission->id }}" class="toggle-class onoffswitch2-label" ></label>
                                                            </a>
                                                            <label class="form-label ps-3">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 d-flex">
                            <button type="submit" class="button button-primary button-outline button-sm mr-3">Submit</button>
                            <a href="{{ route('backend.roles.index') }}"  class="button button-primary button-outline button-sm mr-3">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
        <script>
            "use strict";

            (function($)  {

                // select all switch
                $('#rolecheckall').on('click', function() {
                    if(this.checked){
                        $('.rolecheck').each(function(){
                            this.checked = true;
                        });
                    }else{
                        $('.rolecheck').each(function(){
                            this.checked = false;
                        });
                    }

                });

                // select all switch
                $('.rolecheck').on('click',function(){
                    if($('.rolecheck:checked').length == $('.rolecheck').length){
                        $('#rolecheckall').prop('checked',true);
                    }else{
                        $('#rolecheckall').prop('checked',false);
                    }
                });

            })(jQuery);


        </script>
    @endsection
</x-layouts.backend>
