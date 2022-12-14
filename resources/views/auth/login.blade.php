@extends('auth.layout.app')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href=""><img src="{{ asset('assets/images/brand/logo/logo-primary.svg') }}"
                                    class="mb-2" alt=""></a>
                            <p class="mb-6">Please enter your user information.</p>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Form -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Username or email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Email address here">
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    placeholder="**************">
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign
                                        in</button>
                                </div>

                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-md-0">
                                        <a href="{{ route('auth.register') }}" class="fs-5">Create An
                                            Account </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
