@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        {{-- @if ($errors->any())
            <div class="card-header">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        @endif --}}
        <div class="card-body">
            <form action="{{ url('waifu')}}" method="POST">
                @csrf
                <div class="mb-3">`
                    <label for="waifu" class="form-label">Waifu Name</label>
                    <input type="text" name="waifu" class="form-control" value="{{ old('waifu') }}">
                    @error('waifu')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="anime" class="form-label">Anime Name</label>
                    <input type="text" name="anime" class="form-control" value="{{ old('anime') }}">
                    @error('anime')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <a href="{{ url('waifu')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
