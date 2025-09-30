<?php
include "header.php";
?>
    <style>
        .single-hero-slide {
            display: flex;
            justify-content: center;
            align-items: center; /* dikey ortalama */
            height: 100vh; /* ekran yüksekliğine yayılmasını sağlar */
        }

        .hero-slide-content img.slide-img {
            max-height: 80vh; /* çok büyükse ekran taşmasın diye */
            object-fit: contain;
        }

    </style>
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome_area clearfix" id="home" style="background-image: url(img/bg-img/welcome-bg.png)">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slides -->
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/cnc_kumas.jpg" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/1.jpg" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/2.jpg" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/3.jpg" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/4.jpg" alt="">
                </div>
            </div>
            <div class="single-hero-slide d-flex  justify-content-center">
                <div class="hero-slide-content text-center">
                    <img class="slide-img" src="img/5.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <section class="mosh-service-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mosh-service-slides owl-carousel">
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>01.</h2>
                            <h4>CNC Kesim Makinaları</h4>
                            <p>CNC kesim makineleri yüksek hassasiyet ve hız sunar. Metal, ahşap ve plastik malzemelerde
                                mükemmel sonuçlar elde etmenizi sağlar.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>02.</h2>
                            <h4>Serim Makinaları</h4>
                            <p>Serim makinaları, tekstil üretiminde kumaşların doğru ve düzenli bir şekilde serilmesini
                                sağlayarak iş gücü ve zaman tasarrufu sunar.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>03.</h2>
                            <h4>Kalıp Ve Pastal Hazırlama Sistemleri</h4>
                            <p>Kalıp ve pastal hazırlama sistemleri, tekstil üretiminde yüksek verimlilik ve düşük fire
                                oranı ile doğru kesim planları oluşturmanıza yardımcı olur.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>04.</h2>
                            <h4>Kumaş Kontrol Makinaları</h4>
                            <p>Kumaş kontrol makineleri, üretim öncesinde kumaş hatalarını tespit ederek kaliteyi
                                artırır ve fire oranlarını en aza indirir.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>05.</h2>
                            <h4>Ekipmanlar, Masa Ve Sehpalar</h4>
                            <p>Kesim ve üretim süreçlerinde kullanılan masa, sehpa ve ekipmanlar, iş akışını
                                kolaylaştırarak düzenli ve verimli bir çalışma ortamı sağlar.</p>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area text-center">
                            <h2>06.</h2>
                            <h4>Dikiş Makinaları</h4>
                            <p>Dikiş makineleri, yüksek performans ve dayanıklılık ile farklı kumaş türlerinde hızlı ve
                                kaliteli dikim imkanı sunar.</p>
                        </div>
                        <div class="single-service-area text-center">
                            <h2>07.</h2>
                            <h4>Plotter - Çiziciler</h4>
                            <p>Plotter makineleri, pastal ve kalıp çizimlerini yüksek doğrulukla kağıda aktararak kesim
                                sürecinde büyük kolaylık sağlar.</p>
                        </div>

                    </div>
                </div>
                <!-- Discover More btn -->
                <div class="col-12 text-center mt-100">
                    <a href="products.php" class="btn mosh-btn">Daha Fazla Keşfet</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
    <section class="mosh-clients-area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p>Referanslar</p>
                        <h2>Referanslarımızdan Bazıları</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="clients-slider">
                        <div class="slide-track">
                            <div class="slide"><img src="img/references/avenida.avif" alt=""></div>
                            <div class="slide"><img src="img/references/casella.png" alt=""></div>
                            <div class="slide"><img src="img/references/damla-home.webp" alt=""></div>
                            <div class="slide"><img src="img/references/millhouse.png" alt=""></div>
                            <div class="slide"><img src="img/references/modelsan.png" alt=""></div>
                            <div class="slide"><img src="img/references/sarach.webp" alt=""></div>
                            <div class="slide"><img src="img/references/solenne.png" alt=""></div>
                            <div class="slide"><img src="img/references/sts-logo.png" alt=""></div>

                            <!-- Aynı logoları tekrar ekle (sonsuz kayma efekti için) -->
                            <div class="slide"><img src="img/references/avenida.avif" alt=""></div>
                            <div class="slide"><img src="img/references/casella.png" alt=""></div>
                            <div class="slide"><img src="img/references/damla-home.webp" alt=""></div>
                            <div class="slide"><img src="img/references/millhouse.png" alt=""></div>
                            <div class="slide"><img src="img/references/modelsan.png" alt=""></div>
                            <div class="slide"><img src="img/references/sarach.webp" alt=""></div>
                            <div class="slide"><img src="img/references/solenne.png" alt=""></div>
                            <div class="slide"><img src="img/references/sts-logo.png" alt=""></div>
                        </div>
                    </div>

                    <style>
                        .clients-slider {
                            overflow: hidden;
                            position: relative;
                            background: #fff;
                            height: 120px;
                        }
                        .slide-track {
                            display: flex;
                            width: calc(250px * 16); /* 16 logo (8+8 tekrar) */
                            animation: scroll 25s linear infinite;
                        }
                        .slide {
                            width: 250px;
                            flex-shrink: 0;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }
                        .slide img {
                            max-width: 180px;
                            max-height: 100px;
                            object-fit: contain;
                        }
                        @keyframes scroll {
                            0% { transform: translateX(0); }
                            100% { transform: translateX(-50%); } /* yarısı kadar kay */
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Clients Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section class="mosh-features-area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <img src="img/bg-img/features.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-heading">
                        <h2>MİSYON - VİZYON</h2>
                    </div>
                    <div class="features-content">
                        <p>Sektörün öncüsü olmamızı gelişen teknolojiyi sıkı takip etmemize, güçlü kadromuza, yaptığımız
                            her işin ardında durabilmemize ve bunlarin sayesinde kazandığımız referanslarımıza
                            borçluyuz.

                            Her geçen gün genişlemeye devam eden ürün yelpazemizle siz müşterilerimize hizmetin en
                            iyisini vermeye devam edeceğiz. Yaptığınız alışverişlerde güveninizi kazanmak ve dostluğunuz
                            önceliğimizdir.</p>
                        <!-- Progress Bar Content Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p>Ürünlerimiz</p>
                        <h2>Ürünlerimiz</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-projects-menu">
            <div class="text-center portfolio-menu">
                <p data-filter=".cnc">CNC Kesim Makinaları</p>
                <p data-filter=".serim">Serim Makinaları</p>
                <p data-filter=".kalip-hazirlama">Kalıp Ve Pastal Hazırlama Sistemleri</p>
                <p data-filter=".kumas-kontrol">Kumaş Kontrol Makinaları</p>
                <p data-filter=".ekipman">Ekipmanlar, Masa Ve Sehpalar</p>
                <p data-filter=".dikis">Dikiş Makinaları</p>
                <p data-filter=".plotter">Plotter Çiziciler</p>
            </div>
        </div>
        <style>
            .single_gallery_item img {
                width: 100%;        /* bulunduğu alanın genişliğini doldur */
                height: 250px;      /* sabit yükseklik ver */
                object-fit: cover;  /* görüntüyü orantılı kırparak doldurur */
                border-radius: 10px; /* köşeler isterse yuvarlanır */
            }
        </style>
        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item cnc">
                <img src="img/products/cnc-kesim.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item cnc">
                <img src="img/products/cnc2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item cnc ">
                <img src="img/products/cnc3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item cnc">
                <img src="img/products/cnc4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item serim">
                <img src="img/products/serim1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kumas-kontrol">
                <img src="img/products/serim2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kumas-kontrol">
                <img src="img/products/serim3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kumas-kontrol">
                <img src="img/products/serim4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item dikis">
                <img src="img/products/dikis1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item dikis">
                <img src="img/products/dikis2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item dikis">
                <img src="img/products/dikis3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item dikis">
                <img src="img/products/dikis4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman4.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman5.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman7.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman11.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item ekipman">
                <img src="img/products/ekipman12.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kalip-hazirlama">
                <img src="img/products/kalip-hazirlama.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kumas-kontrol">
                <img src="img/products/kumas-kontrol.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item kumas-kontrol">
                <img src="img/products/kumas-kontrol2.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item plotter">
                <img src="img/products/plotter1.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DANTE SMART HP45 PLOTTER</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item plotter">
                <img src="img/products/plotter2.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DANTE ICON HP11 PLOTTER</h4>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item plotter">
                <img src="img/products/plotter3.png" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DANTE SMART HP11 PLOTTER</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Workflow Area Start ***** -->
    <section class="mosh-workflow-area section_padding_100_0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mb-0">
                        <p>Üretim Sürecimiz</p>
                        <h2>Projelerimizi Böyle Hayata Geçiriyoruz</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="workflow-img">
            <img src="img/core-img/work-progress.png" alt="Altın Makina üretim süreci">
        </div>

        <div class="workflow-slides-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mosh-workflow-slides owl-carousel">
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>1.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Tasarım ve Projelendirme</h4>
                                    <p>Müşterilerimizin ihtiyaçlarını analiz ederek özel projeler geliştiriyoruz. 3D tasarım ve mühendislik desteği ile en verimli ve güvenilir çözümleri planlıyoruz.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>2.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Üretim ve İşleme</h4>
                                    <p>Modern CNC tezgâhlarımız ve deneyimli ekibimizle yüksek hassasiyetli üretimler gerçekleştiriyoruz. Her aşamada kalite standartlarını ön planda tutuyoruz.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>3.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Montaj ve Kontrol</h4>
                                    <p>Üretimi tamamlanan makinelerimiz uzman ekibimiz tarafından monte edilir. Sonrasında detaylı testlerden geçirilerek performans ve güvenilirlik açısından kontrol edilir.</p>
                                </div>
                            </div>
                            <!-- Single Service Area -->
                            <div class="single-workflow-area d-flex">
                                <h2>4.</h2>
                                <div class="workflow-content ml-15">
                                    <h4>Teslimat ve Destek</h4>
                                    <p>Makinemizi müşterilerimize zamanında teslim ediyor, kurulum ve eğitim desteği sunuyoruz. Satış sonrası servisimizle her zaman yanınızda oluyoruz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Service Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100"
             style="background-image: url(img/bg-img/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>Hemen Bizimle İletişime Geçin</p>
                            <h2>Sizin İçin En Doğru Çözümleri Üretelim</h2>
                            <a href="contact.php" class="btn mosh-btn">Şimdi Teklif Alın</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ***** CTA Area End ***** -->
<?php
include "footer.php";
?>