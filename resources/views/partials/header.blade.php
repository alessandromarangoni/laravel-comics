<header class="p-3">
    <div class="container-fluid">
        <div class="row d-flex justify-content-between">
            <div class="col p-2">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Laravel Logo">
            </div>

            <div class="col d-flex align-items-center" >
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}" class="text-black pb-3">{{ $link['text'] }}</a>
                @endforeach
                <input type="text" name="search" placeholder="cerca" class="ms-3">
            </div>
        </div>
    </div>
</header>