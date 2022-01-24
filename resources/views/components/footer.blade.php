<footer>
<section id="footermain">
        <div class="container" id="container_footermain">
            <nav id="navFooter">
                <div>
                    <ul>
                        DC COMICS
                        @foreach ($linksComics as $link)
                            <li>
                                <a href="{{$link['url']}}">{{$link['descrizione']}}</a>
                            </li>
                        @endforeach
                       
                    </ul>

                    <ul>
                        SHOP
                        @foreach ($linksShops as $linkshopItem)
                        <li>
                            <a href="{{$linkshopItem['url']}}">
                                {{$linkshopItem['descrizione']}}
                            </a>
                        </li>
                        @endforeach
                       
                        
                    </ul>
                </div>

                <div id="central_nav">
                    <ul>
                        DC

                        @foreach ($ArrDcLinks as $dcLink)
                        <li >
                            <a href="{{$dcLink['url']}}">
                               {{$dcLink['descrizione']}}
                            </a>
                        </li>
                        @endforeach
                      
                    </ul>
                </div>

                <div>
                    <ul>
                        SITES
                        @foreach ($ArrSites as $site)
                        <li >
                            <a href="{{$site['url']}}">
                                {{$site['descrizione']}}
                            </a>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </nav>
            <div id="logo">
                <img src="{{asset('storage/assets/dc-logo-bg.png')}}" alt="logo dc">
            </div>
        </div>
    </section>
    <section id="footerbottom">
        <div class="container" id="contenitore_footer_bottom">
            <div>   
                 <button>
                    Sign-UP NOW!
                </button>
            </div>
           

            <nav id="footerBottomNav" >
                <div>
                    FOLLOW US
                </div>
                <ul>
                    
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/assets/footer-facebook.png')}}" alt="facebook logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/assets/footer-twitter.png')}}" alt="facebook logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/assets/footer-youtube.png')}}" alt="facebook logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/assets/footer-pinterest.png')}}" alt="facebook logo">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset('storage/assets/footer-periscope.png')}}" alt="facebook logo">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</footer>