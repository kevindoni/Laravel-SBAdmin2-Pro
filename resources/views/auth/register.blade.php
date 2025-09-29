@extends('layouts.template-auth')

@section('content')
<div class="container-xl px-4">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-9">
            <!-- Social registration form-->
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center text-center">
                    <div class="h3 fw-light mt-5">Create an Account</div>
                </div>
                <hr class="my-0" />
                <div class="card-body p-5">
                    <!-- Registration form-->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="name">First name</label>
                                    <input class="form-control form-control-solid" id="name" name="name" type="text" value="{{ old('name') }}" required />
                                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="email">Email</label>
                                    <input class="form-control form-control-solid" id="email" name="email" type="email" value="{{ old('email') }}" required />
                                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="password">Password</label>
                                    <input class="form-control form-control-solid" id="password" name="password" type="password" required />
                                    @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="text-gray-600 small" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control form-control-solid" id="password_confirmation" name="password_confirmation" type="password" required />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" id="checkTerms" type="checkbox" name="terms" />
                                <label class="form-check-label" for="checkTerms">I accept the <a href="#">terms &amp; conditions</a>.</label>
                            </div>
                            <button class="btn btn-primary" type="submit">Create Account</button>
                        </div>
                    </form>
                </div>
                <hr class="my-0" />
                <div class="card-body px-5 py-4">
                    <div class="small text-center">Have an account? <a href="{{ route('login.show') }}">Sign in!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
