@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                {{-- <a href="{{ url('waifu')}}" class="btn btn-secondary">Back</a> --}}
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('password.request')}}" class="btn btn-link">
                    Forgot Password ?
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
