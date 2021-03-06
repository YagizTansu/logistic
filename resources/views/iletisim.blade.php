@include('header')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider header-slider-effect header-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-area pt-200">
                                <h2>İletişim</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/anasayfa">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="/">İletişim</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ================ contact section start ================= -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">

                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Bize ulaşın</h2>
                    </div>
                    <div class="col-lg-7">
                        <form class="form-contact contact_form" action="/iletisim" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesajınızı giriniz'" placeholder=" Mesajınızı giriniz"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adınız ,Soyadınız'" placeholder="Adınız ,Soyadınız">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email adresiniz'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefon numaranız'" placeholder="Telefon numaranız">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn-style">GÖNDER</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <h3>Merkez</h3>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Alsancak Konak İzmir / Türkiye</h3>
                                <p>1476 sokak No:2 Kat:6 D:4 AKSOY PLAZA</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+90 232 683 04 00</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-printer"></i></span>
                            <div class="media-body">
                                <h3>+90 232 683 05 00</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>sales-team@tr-globalgate.com</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
@include('footer')
