<x-layouts.auth>
    <div class="content-body m-0 p-0">
        <div class="login-register-wrap">
            <div class="row">
                <div class="login-register-bg order-1 order-lg-1 col-lg-7 col-12" style="background-image: url({{ asset('backend/assets/images/login/login-iso-11.png') }}); ">
                    <div class="content">
                        <h1>Sign in</h1>
                    </div>
                </div>
                <div class="d-flex align-self-center justify-content-center order-2 order-lg-2 col-lg-5 col-12">
                    <div class="login-register-form-wrap">

                        <div class="content">
                            <h1 style="font-size: 30px; color: white;">Sign in</h1>
                        </div>

                        <div class="login-register-form">
                            <form action="{{ route('login')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <input class="form-control @error('email') is-valid @enderror" type="email" name="email" placeholder="User ID / Email">
                                        @error('email')
                                            <div class="valid-feedback">
                                                <span class="text-danger">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-12 mt-10"><button class="button button-primary button-outline">sign in</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.auth>
