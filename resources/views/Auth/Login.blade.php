@extends('Layout.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @if (session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('LoginError'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('LoginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal mb-5" style="text-align: center">Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" autofocus required>
                            @error('email')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror
                            {{-- @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif --}}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="password" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>

                </form>
                <small class="d-block mt-3">Need Account? <a href="/registered">Register Now!</a></small>
            </main>
        </div>
    </div>
</div>
@endsection