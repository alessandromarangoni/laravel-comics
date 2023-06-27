<footer class="p-3">
    <section class="footer_bg">
        <div class="container">
            <div class="row d-flex">
                <div class="col-5 d-flex justify-content-between flex-wrap">
                    <div class=" w-50 pt-4">
                        <h4 class="text-white ps-4">DC COMICS</h4>
                        <ul>
                            @foreach ($links as $item)
                                <li>                                
                                    <a href="{{$item['href']}}" class="text-white">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                        
                    <div class=" w-50 pt-4">
                        <h4 class="text-white ps-4">DC COMICS</h4>
                        <ul>
                            @foreach ($links as $item)
                                <li>                                
                                    <a href="{{$item['href']}}" class="text-white">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="">
                        <h4 class="text-white ps-4">DC COMICS</h4>
                        <ul>
                            @foreach ($links as $item)
                                <li>                                
                                    <a href="{{$item['href']}}" class="text-white">{{$item['text']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 bg_logo">

                </div>
            </div>
        </div>
    </section>
</footer>