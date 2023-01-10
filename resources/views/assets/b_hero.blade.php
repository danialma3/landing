    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <!-- logo -->
            <a class="site-logo" href="index.html">
                <img src="{{asset('assets/tema/img/logo.png')}}" alt="">
            </a>

            <div class="user-panel">
                <a href="#">Login</a> / <a href="#">Register</a>
            </div>
            <!-- responsive -->
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <!-- site menu -->
            <nav class="main-menu">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="review.html">Games</a></li>
                    <li><a href="categories.html">Blog</a></li>
                    <li><a href="community.html">Forums</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="{{asset('assets/tema/img/slider-3.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/tema/img/slider-2.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="hs-item set-bg" data-setbg="{{asset('assets/tema/img/slider-2.jpg')}}">
                <div class="hs-text">
                    <div class="container">
                        <h2>The Best <span>Games</span> Out There</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada <br> lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. <br>Suspendisse cursus faucibus finibus.</p>
                        <a href="#" class="site-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->