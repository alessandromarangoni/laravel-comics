@extends('layouts.app')

@section('content')
<div class="container my-3 py-5">
    <div class="row g-4">
        <div class="col d-flex justify-content-between flex-wrap ">
            @foreach ($comics as $item)
                <div class="thumb-container">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}" class="img-fluid">
                    {{$item['title']}}
                </div>
            @endforeach
            <button class="btn btn-primary m-auto mt-5">LOAD MORE</button>
        </div>
    </div>
</div>
<div class="container-fluid p-5 bg-primary">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="d-flex justify-content-between">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" class="custom_buy"> <span class="p-3 me-5">DIGITAL COMICS</span>
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" class="custom_buy"> <span class="p-3 me-5">DIGITAL COMICS</span>
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" class="custom_buy"> <span class="p-3 me-5">DIGITAL COMICS</span>
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" class="custom_buy"> <span class="p-3 me-5">DIGITAL COMICS</span>
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" class="custom_buy_svg"> <span class="p-3 me-5">DIGITAL COMICS</span>
            </div>
        </div>
    </div>
</div>
@endsection