<x-layouts.backend>
    <div class="content-body">
        <div class="row justify-content-between align-items-center mb-10">
            <div class="col-12 mb-30">
                <div class="box">
                    <div class="box-head d-flex justify-content-between">
                        <h3 class="title">Profile</h3>
                    </div>
                    <div class="box-body">
                    <nav>
                        <div class="nav nav-tabs" role="tablist">
                            <a
                                class="nav-item nav-link {{ $tab == 'profile' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'profile') }}"
                                role="tab">
                                {{ __('Profile') }}
                            </a>

                            <a
                                class="nav-item nav-link {{ $tab == 'profile_edit' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'profile_edit') }}"
                                role="tab">
                                {{ __('Edit') }}
                            </a>

                            <a
                                class="nav-item nav-link {{ $tab == 'change_password' ? 'active' : '' }}"
                                href="{{ route('backend.profile.index', 'change_password') }}"
                                role="tab">
                                {{ __('Change Password') }}
                            </a>
                        </div>
                    </nav>

                    <div class="tab-content">
                        @if ($tab == 'profile')
                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Name') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->name ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Email') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->email ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Phone') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->phone ?? 'N/A' }}</div>
                                </div>

                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3"><b>{{ __('Provider Id') }}</b></div>
                                    <div class="col-sm-9">{{ auth()->user()->provider_id ?? 'N/A' }}</div>
                                </div>
                            </div>
                        @endif

                        @if ($tab == 'profile_edit')
                            <div class="tab-pane fade show active mt-2" id="profile_edit" role="tabpanel">
                                <form method="POST" action="{{ route('backend.profile.update', auth()->id()) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Name')"
                                            name="name"
                                            id="name"
                                            :value="auth()->user()->name ?? null"
                                            required
                                        />

                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Email')"
                                            type="email"
                                            name="email"
                                            id="email"
                                            :value="auth()->user()->email ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Phone')"
                                            name="phone"
                                            id="phone"
                                            :value="auth()->user()->phone ?? null"
                                            required
                                        />
                                    </div>


                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('provider_id')"
                                            name="provider_id"
                                            id="provider_id"
                                            :value="auth()->user()->provider_id ?? null"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="label-control">{{ __('Role') }}</label>
                                                <div>
                                                    <select class="form-control" name="role_id" id="role_id">
                                                        @foreach($role as $data)
                                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                        @endforeach
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
                        @endif

                        @if ($tab == 'change_password')
                            <div class="tab-pane fade show active" id="change_password" role="tabpanel">
                                <form method="POST" action="{{ route('backend.change_password', auth()->id()) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Current Password')"
                                            type="password"
                                            name="current_password"
                                            id="current_password"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('New Password')"
                                            type="password"
                                            name="password"
                                            id="password"
                                            required
                                        />

                                        <x-ui.input
                                            group="col-lg-12"
                                            :label="__('Confirm Password')"
                                            type="password"
                                            name="password_confirmation"
                                            id="password_confirmation"
                                            required
                                        />
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-15">
                                            <button type="submit" class="button button-primary button-outline button-sm">Submit</button>
                                        </div>
                                    </div>
                                </form>
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
                $('#role_id').val("{{auth()->user()->role_id ?? ''}}");
            });
        </script>
    @endsection
</x-layouts.backend>