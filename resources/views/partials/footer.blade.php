<footer>
    <div class="footer-bg py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="top-footer d-flex flex-nowrap">
                        @foreach ($footer_lists as $list)
                            <ul class="list-unstyled">
                                <h5> {{ $list['list_title'] }}</h5>
                                @foreach ($list['list_links'] as $link)
                                    <li>
                                        <a href="">
                                            {{ $link }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-6">
                    <div class="img-container">
                        <img class="logo position-absolute" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}"
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="d-flex align-items-center p-5">
                        <div class="my-btn">
                            <a class="#" href="">SIGN-UP-NOW!</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end align-items-center p-5">
                        <span style="color: #0C7CEC">FOLLOW US</span>
                        <ul class="list-unstyled d-flex">
                            @foreach ($socials as $social)
                                <li>
                                    <img src="{{ Vite::asset($social['socialLogo']) }}" alt="{{ $social['url'] }}">
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



</footer>
