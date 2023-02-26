<x-layouts.auth>
     <div class="content-body m-0 p-0">
        <div class="login-register-wrap">
            <div class="row">
                <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                    <div class="login-register-form-wrap">
                        <div class="content">
                            <h1>Sign up</h1>
                        </div>
                        <div class="login-register-form">
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="text" name="name" placeholder="User ID / Email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="email" name="email" placeholder="User ID / Email">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Retype Password">
                                    </div>

                                     <div class="col-12 mb-20">
                                        <select class="form-control" name="role_id" id="status" placeholder="role">
                                            <option value="admin">{{ __('Admin') }}</option>
                                            <option value="customer">{{ __('Customer') }}</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mb-15">Already have account? <a href="{{ route('login') }}">Login Now.</a></div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-10"><button class="button button-primary button-outline">sign up</button></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                    <div class="content">
                        <h1>Sign up</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.auth>