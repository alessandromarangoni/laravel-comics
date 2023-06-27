@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4">
        <div class="col d-flex justify-content-between flex-wrap">
            @foreach ($comics as $item)
                <div class="thumb-container">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}" class="img-fluid">
                    {{$item['title']}}
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection