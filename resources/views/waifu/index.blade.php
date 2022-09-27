@extends('layouts.app')

@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold">Waifu List : {{ $waifus->total() }}</span>
        <a href="{{ url('waifu/create') }}" class="btn btn-sm btn-primary">add</a>
    </div>
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <form action="{{ url('/waifu') }}" method="get">

            <label for="search">Search Waifu</label><br>
            <input type="text" name="search" id="search">
            <input type="submit" value="submit" class="btn btn-sm btn-primary">
        </form>
    </div>
    @foreach ($waifus as $waifu)
    <div class="list-group list-group-flush border-bottom scrollarea">
        <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $waifu->waifu }}</strong>
                <small>Wed</small>
            </div>
            <div class="col-10 mb-1 small">{{ $waifu->anime}}</div>
            <div class="group-action">
                <a href="{{ url('/waifu/'.$waifu->id.'/edit') }}" class="badge bg-info text-white mt-2">edit</a>

                <form action="{{ url('/waifu/'.$waifu->id)}}" method="POST">
                    @csrf @method('DELETE')
                    {{-- <input type="hidden" name="_method" value="delete"> --}}
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <br>
    {{ $waifus->appends($_GET)->links('pagination::bootstrap-4') }}
</div>
@endsection


