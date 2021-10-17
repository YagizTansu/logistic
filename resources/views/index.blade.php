@include('header')

<!-- Carousel wrapper -->
<div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-car-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-car-target="" data-car-slide-to="0" class="active"></li>
        <li data-car-target="" data-car-slide-to="1"></li>
        <li data-car-target="" data-car-slide-to="2"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#introCarousel" role="button" data-car-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-car-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<main>
    <!--? Categories Area Start -->
    <div class="services-area section-padding10 bg-gray">
        <div class="container">
            <div class="section-tittle text-center mb-70">
                <h2 style="color: black;">HİZMETLER</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="service text-center">
                        <div class="cat-icon">
                        <img class="pb-5" src="assets/img/icons/004-truck.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/karayolu">Kara Taşımacılığı</a></h5>
                            <p>Teknolojik sistemlerle donatılmış geniş tedarik araç filosu, gelişmiş bilgi teknolojileriyle güçlendirilmiş altyapısı ve uzman ekibiyle Global Gate Lojistik, kusursuz hizmet ilkesi doğrultusunda siz müşterilerine komple ve parsiyel taşıma hizmeti vermektedir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-50">
                    <div class="service text-center">
                        <div class="cat-icon">
                            <img class="pb-5" src="assets/img/icons/005-cargo-ship.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/denizyolu">Deniz Taşımacılığı</a></h5>
                            <p>Global ağımız sayesinde; tüm dünyayı kapsayacak şekilde tercihinize göre limandan limana ya da kapıdan kapıya hizmet sunmaktayız.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6  mb-50 ">
                    <div class="service text-center">
                        <div class="cat-icon">
                            <img class="pb-5" src="assets/img/icons/001-plane.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/havayolu">Hava Taşımacılığı</a></h5>
                            <p>Anlaşmalı acentelerimiz ile yükünüzü taşımacılığın ötesinde profesyonel bir sistem sunarak, dünyanın her noktasına, en hızlı ve güvenilir biçimde ulaştırmaktayız.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6  mb-50">
                    <div class="service text-center">
                        <div class="cat-icon">
                        <img class="pb-5" src="assets/img/icons/002-minivan.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/minivan">Minivan Taşımacılığı</a></h5>
                            <p>Terminli olan ihracat ve ithalat yüklemeleriniz için, havayoluna alternatif olan size özel minivan araçlarımızla,Avrupa geneline / Avrupa genelinden 36-48 saatte garantili teslimat imkanı sunmaktayız.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6  mb-50">
                    <div class="service text-center">
                        <div class="cat-icon">
                        <img class="pb-5" src="assets/img/icons/006-logistics.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/proje">Proje Taşımacılığı</a></h5>
                            <p>Global Gate Lojistik olarak ağır taşımacılıkta inşaat, enerji ve maden sektörü olmak üzere pek çok sektörde kullanılan makine ve ekipmanı her destinasyona güvenle ulaştırma olanağına sahibiz.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6  mb-50">
                    <div class="service text-center">
                        <div class="cat-icon">
                            <img class="pb-5" src="assets/img/icons/007-poster.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/depolama">Fuar Lojistiği</a></h5>
                            <p>Yurtdışında gerçekleşecek tüm fuar, kongre, konferans, seminer, tanıtım ve benzeri faaliyetler için malların karayolu, havayolu, denizyolu, demiryolu, kombine ( çoklu ) ulaşım kullanarak uluslararası nakliyesi ve ihtiyaç duyulması halinde gümrük işlemlerini butik hizmet anlayışımız ile yürütmekteyiz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Area End -->
    <!--? About Area Start -->
    <div class="content-part pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="content-part-index mb-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-35">
                            <h2>GLOBAL GATE LOJİSTİK HAKKINDA</h2>
                        </div>
                        <p>Global Gate Lojistik, tüm lojistik ihtiyaçlarınız için doğru seçimdir. Global Gate 'in uzman ekibinin deneyimi ve teknolojisi; hız, zaman ve maliyet avantajı ile birleştirilerek kaliteli hizmet ilkesi izlenmektedir.</p>
                        <p>Global Gate' in şirketinize katacağı değerler;</p>
                        <p>Tüm lojistik yükünüzü uzman kadromuza aktarabilir, lojistik için ayırdığınız insan gücünü, finansı ve zamanı ana faaliyet alanınıza yönlendirebilirsiniz.

Ürünlerinizi pazarlama ve tedarik alanlarının her noktasına en hızlı şekilde en uygun maliyetle ulaştırabilirsiniz.

Global Gate ile planlı ve zamanında teslimat ile stok seviyenizi minimuma indirerek stok maliyetlerinizde büyük avantaj elde edersiniz.

Hasar, kayıp gibi riskleri bizlere devrederek beklenmedik maliyetlerinizden kurtulursunuz.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- About Area End -->
</main>

@include('footer')