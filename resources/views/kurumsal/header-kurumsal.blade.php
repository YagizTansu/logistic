@include('header')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/about/ship3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="hero-cap mt-200">
                                    <h2>@yield('title')</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/anasayfa">Anasayfa</a></li>
                                            <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
                                        </ol>
                                    </nav>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12">
                    
                <div class="left_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                                <h3 class="widget_title">Kurumsal</h3>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="/kurumsal" class="d-flex">
                                            <p>KURUMSAL</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/arac-filomuz" class="d-flex">
                                            <p>ARAÇ FİLOMUZ</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/haberler" class="d-flex">
                                            <p>HABERLER</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>