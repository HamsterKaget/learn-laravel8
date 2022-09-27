@extends('layouts.app')

@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        @if ($errors->any())
            <div class="card-header">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        @endif
        <div class="card-body">
            <form action="{{ url('/waifu/'.$data->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="waifu" class="form-label">Waifu Name</label>
                    <input type="text" name="waifu" class="form-control" value="{{ $data->waifu }}">
                </div>
                <div class="mb-3">
                    <label for="anime" class="form-label">Anime Name</label>
                    <input type="text" name="anime" class="form-control" value="{{ $data->anime }}">
                </div>
                <a href="{{ url('waifu')}}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
