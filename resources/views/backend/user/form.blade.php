<x-layouts.backend>
	<div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">{{ isset($user) ? __('Update User') : __('Add User') }}</h3>
                        <a href="{{ route('backend.users.index') }}" class="button button-primary button-outline button-sm">Back</a>
                    </div>
                    <div class="box-body">
                        <form action="{{ isset($user) ? route('backend.users.update', $user->id) : route('backend.users.store') }}" method="POST">
                            @csrf
                            @isset($user) @method('PUT') @endisset
                            <div class="row">
                    
                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Name')"
                                    name="name"
                                    id="name"
                                    :value="$user->name ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-6"
                                    :label="__('Provider Id')"
                                    name="provider_id"
                                    id="provider_id"
                                    :value="$user->provider_id ?? null "
                                    required
                                />
                            </div>

                            <div class="row">
                                <x-ui.input
                                    group="col-md-4"
                                    type="email"
                                    :label="__('Email')"
                                    name="email"
                                    id="email"
                                    :value="$user->email ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Phone')"
                                    name="phone"
                                    id="phone"
                                    :value="$user->phone ?? null"
                                    required
                                />

                                <x-ui.input
                                    group="col-md-4"
                                    :label="__('Password')"
                                    type="password"
                                    name="password"
                                    id="password"
                                    required
                            />
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Gender') }}</label>
                                        <div>
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="Male">{{ __('Male') }}</option>
                                                <option value="Female">{{ __('Female') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label-control">{{ __('Role') }}</label>
                                        <div>
                                            <select class="form-control" name="role_id" id="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
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
        <script>
            $(document).ready(function(){
         
            $('#gender').val("{{$user->gender ?? ''}}");
            $('#role_id').val("{{$user->role_id ?? ''}}");
            });
        </script>
    @endsection
</x-layouts.backend>
