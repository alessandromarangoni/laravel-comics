@extends('layouts.app')
@section('page-title', $slides['serie'])
@section('content')
<div class="container my-3">
    <h1>Other Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($slides['comics'] as $item)
                    @if ($item['series'] === $slides['serie'])
                        <img src="{{ url($item['thumb']) }}" alt="cover-img" class="">
                        <h1 class=" mb-6">{{ Str::upper($item['title']) }}</h1>
                        @foreach ($item['artists'] as $artist)
                            {{$artist}},
                        @endforeach
                    @endif
            @endforeach
            </div>
        </div>
    </div>

</div>
@endsection