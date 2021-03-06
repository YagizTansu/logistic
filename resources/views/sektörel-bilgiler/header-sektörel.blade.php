@include('header')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider header-slider-effect header-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="breadcrumb-area mt-200">
                                    <h2>@yield('title')</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/anasayfa">Anasayfa</a></li>
                                            <li class="breadcrumb-item"><a href="/anasayfa">Sektörel Bilgiler</a></li>
                                            <li class="breadcrumb-item"><a href="/">@yield('title')</a></li>
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
        <div class="content-part section-padding">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-12">
                <div class="left_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                                <h3 class="widget_title">Sektörel Bilgiler</h3>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="/incoterms" class="d-flex">
                                            <p>INCOTERMS</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/uld-ölcüleri" class="d-flex">
                                            <p>ULD ÖLÇÜLERİ</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/konteyner-ölcüleri" class="d-flex">
                                            <p>KONTEYNER ÖLÇÜLERİ</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/tir-ölcüleri" class="d-flex">
                                            <p>TIR ÖLÇÜLERİ</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>