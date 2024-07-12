@extends('app')

@section('content')
    <div class="container mt-4">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header">
                <h3 class="text-right mb-4">Login</h3>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="register-link">
                        <span>Don't have an account? </span>
                        <p>
                        <a href="{{ route('register') }}">Register here</a></p>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
