@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    A Fresh Verification link has been sent to your email
                </div>
            @endif

            Before proceeding, please check your email for verification.
            Or
            <form action="{{ route('verification.send') }}" class="d-inline" method="POST">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                    {{ __('click here to request another verification') }}
                </button>
            </form>

        </div>
    </div>
</div>
@endsection
