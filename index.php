<?php 

    require('conf/config.php');
    require('conf/phpFunction.php');


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/x-icon" href="images/sidoarjo.png">
        <title>Dinas komunikasi dan Informatika Kabupaten Sidoarjo</title>

        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <!-- CSS FILES -->                
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="stylesheet">>
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/vendor/embedYoutube/css/embedYoutube.css"  rel="stylesheet" >
        
        <!-- PLUGINS CSS FILES -->
        <link href="assets/css/fullpage.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/css/owl.theme.default.css" rel="stylesheet">


    </head>
    <body>

        <!-- SOCIAL MEDIA START -->
        <div class="social-media rounded-pill">
            <ul class="social-icon">
                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-linkedin"></a>
                </li>
                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-facebook"></a>
                </li>
                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-instagram"></a>
                </li>
                <li class="social-icon-item">
                    <a href="#" class="social-icon-link bi-twitter"></a>
                </li>
            </ul>
        </div>
        <!-- SOCIAL MEDIA END -->


        <header id="header" class="fixed-top d-flex align-items-center py-4 shadow">
            <?php 
                require('view/navbar.php')
            ?>
        </header>

        <div id="fullpage">

            <!-- HOME START -->
            <div class="section hero-section" id="home">
                <div class="banner-slideshow">
                    <?=requestRec('id, title, description, img', 'tb_banners', 'category=2 AND status=1', '', 1)?>
                </div>
                <div class="section-overlay"></div>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0a2d3b" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> -->
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">
                                Portal Website <br>
                                Dinas Komunikasi dan Informatika Kabupaten Sidoarjo
                            </h2>
                            <div class="custom-btn-group mt-4">
                                <a href="#section_2" class="btn custom-btn smoothscroll me-3">Jelajahi Halaman</a>
                                <!-- <a href="#section_3" class="link smoothscroll">Become a member</a> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="ratio ratio-16x9">
                                <iframe class="rounded-4" width="560" height="315" src="https://www.youtube.com/embed/MGNgbNGOzh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4ea156" fill-opacity="1" d="M0,224L120,240C240,256,480,288,720,272C960,256,1200,192,1320,160L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f2f2f2" fill-opacity="1" d="M0,160L120,186.7C240,213,480,267,720,256C960,245,1200,171,1320,133.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4ea156" fill-opacity="1" d="M0,96L120,106.7C240,117,480,139,720,133.3C960,128,1200,96,1320,80L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#4ea156" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg> -->
            </div>
            <!-- HOME END -->

            <!-- PIMPINAN START -->
            <div class="section about-section" id="lead">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="custom-block-image-wrap">
                                <img src="images/members/professional-asian-businesswoman-gray-blazer.jpg" class="custom-block-image about-image rounded-4 img-fluid " alt="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="d-flex justify-content-center align-items-center custom-text-block rounded-4 py-2 px-3">
                                <div>
                                    <h2 class="text-capitalize text-white">Dra. Noer Rochmawati, M.Si., Ak</h2>
                                    <p class="text-white fst-italic my-3">Kepala Dinas Komunikasi dan Informatika</p>
                                    <div class="custom-border-btn-wrap d-flex align-items-center">
                                        <a href="about.html" class="custom-btn custom-border-btn btn me-3">Cek Laporan LHKPN</a>
                                        <a href="about.html" class="custom-btn custom-border-btn btn me-3">Lihat Pegawai Lainnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PIMPINAN END -->

            <!-- LAYANAN END -->
            <div class="section" id="services">
                <div class="container">
                    <div>
                        <h2>Layanan Publik</h2>
                    </div>
                    <div class="col-12 mt-5 owl-carousel owl-theme">
                        <!-- LAYANAN ITEM START -->
                        <div class="card text-center border-0 rounded-4 p-4">
                            <div class="icon">
                                <img src="images/sidoarjo.png" alt="" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Card title</h4>
                                <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</small>
                            </div>
                        </div>
                        <!-- LAYANAN ITEM END -->
                        <!-- LAYANAN ITEM START -->
                        <div class="card text-center border-0 rounded-4 p-4">
                            <div class="icon">
                                <img src="images/sidoarjo.png" alt="">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title fw-bold">Card title</h4>
                                <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</small>
                            </div>
                        </div>
                        <!-- LAYANAN ITEM END -->
                        <!-- LAYANAN ITEM START -->
                        <div class="card text-center border-0 rounded-4 p-4">
                            <div class="icon">
                                <img src="images/sidoarjo.png" alt="">
                            </div>
                            <div class="card-body">
                                    <h4 class="card-title fw-bold">Card title</h4>
                                    <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</small>
                            </div>
                        </div>
                        <!-- LAYANAN ITEM END -->
                        <!-- LAYANAN ITEM START -->
                        <div class="card text-center border-0 rounded-4 p-4">
                            <div class="icon">
                                <img src="images/sidoarjo.png" alt="">
                            </div>
                            <div class="card-body">
                                    <h4 class="card-title fw-bold">Card title</h4>
                                    <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</small>
                            </div>
                        </div>
                        <!-- LAYANAN ITEM END -->
                        <!-- LAYANAN ITEM START -->
                        <div class="card text-center border-0 rounded-4 p-4">
                            <div class="icon">
                                <img src="images/sidoarjo.png" alt="">
                            </div>
                            <div class="card-body">
                                    <h4 class="card-title fw-bold">Card title</h4>
                                    <small class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</small>
                            </div>
                        </div>
                        <!-- LAYANAN ITEM END -->
                    </div>
                </div>
            </div>
            <!-- LAYANAN START -->

            <!-- MEDIA START -->
            <div class="section section-padding" id="media">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 mb-4">
                            <div class>
                                <h2>Media Digital</h2>
                                <p class="mt-3 mb-4">Ikuti dokumetasi aktivitas kegiatan lainnya melalui <br> media digital kami</p>
                            </div>
                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="media.php" class="btn custom-btn">Lihat Media Lainnya</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="embed__container rounded-4">
                                <div id="player" class="rounded-4"></div>
                            </div>
                            <div class="carousel__wrap mt-3">
                                <div class="owl-carousel">
                                    <div data-video="k5GgsyGjzxM" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/k5GgsyGjzxM/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                    <div data-video="hrQxU86T0RM" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/hrQxU86T0RM/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                    <div data-video="Eb5dsG7L7lo" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/Eb5dsG7L7lo/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                    <div data-video="I-GCkm7Kbac" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/I-GCkm7Kbac/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                    <div data-video="D1s8LGqC-Oo" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/D1s8LGqC-Oo/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                    <div data-video="QqK2wtD-7AQ" class="item video-thumb">
                                        <img src="https://img.youtube.com/vi/QqK2wtD-7AQ/hqdefault.jpg" class="rounded-4"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MEDIA END -->
    
            <!-- BERITA START -->
            <div class="section events-section section-padding" id="news">
                <div class="container">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-between mb-5">
                            <div>
                                <h2>Berita</h2>
                            </div>
                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="berita.php" class="btn custom-btn">Baca Berita Lainnya</a>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-9">
                                <!-- BERITA ITEM START -->
                                <div class="row custom-block custom-block-bg mb-3">
                                    <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                        <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                            <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">29</h6>
                                            <strong class="text-white">Feb 2048</strong>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                        <div class="custom-block-image-wrap">
                                            <a href="event-detail.html">
                                                <img src="images/girl-taking-selfie-with-friends-golf-field.jpg" class="custom-block-image img-fluid" alt="">
                                                <i class="custom-block-icon bi-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <a href="event-detail.html" class="events-title">Group tournament activities</a>
                                            <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->

                                <!-- BERITA ITEM START -->
                                <div class="row custom-block custom-block-bg">
                                    <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                                        <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                                            <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                                            <strong class="text-white">Feb 2048</strong>
                                        </div>
                                    </div>
            
                                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                                        <div class="custom-block-image-wrap">
                                            <a href="event-detail.html">
                                                <img src="images/girl-taking-selfie-with-friends-golf-field.jpg" class="custom-block-image img-fluid" alt="">
                                                <i class="custom-block-icon bi-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <a href="event-detail.html" class="events-title">Group tournament activities</a>
                                            <p class="my-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                            </div>
                            <div class="col-3 bg-white rounded-4 p-4">
                                <!-- BERITA ITEM START -->
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-3">
                                        <h3 class="fw-semibold">1</h3>
                                    </div>
                                    <div class="col-lg-9 col-9 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <p class="mb-1"><a href="event-detail.html" class="">Group tournament activities</a></p>
                                            <!-- <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                            <small>28 Agustus 2023</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-3">
                                        <h3 class="fw-semibold">2</h3>
                                    </div>
                                    <div class="col-lg-9 col-9 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <p class="mb-1"><a href="event-detail.html" class="">Group tournament activities</a></p>
                                            <!-- <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                            <small>28 Agustus 2023</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-3">
                                        <h3 class="fw-semibold">3</h3>
                                    </div>
                                    <div class="col-lg-9 col-9 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <p class="mb-1"><a href="event-detail.html" class="">Group tournament activities</a></p>
                                            <!-- <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                            <small>28 Agustus 2023</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="row d-flex align-items-center mb-3">
                                    <div class="col-3">
                                        <h3 class="fw-semibold">4</h3>
                                    </div>
                                    <div class="col-lg-9 col-9 order-3 order-lg-0">
                                        <div class="custom-block-info mt-lg-0">
                                            <p class="mb-1"><a href="event-detail.html" class="">Group tournament activities</a></p>
                                            <!-- <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                            <small>28 Agustus 2023</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BERITA END -->

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div id="calendar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GALERI START -->
            <div class="section events-section" id="galery">
                <div class="container">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <h2>Galeri</h2>
                            </div>
                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="galeri.php" class="btn custom-btn">Lihat Galeri Lainnya</a>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-arrows"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-arrows"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-arrows"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="custom-block-image-wrap">
                                    <a href="event-detail.html">
                                        <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                        <i class="custom-block-icon bi-link"></i>
                                    </a>
                                    <div class="w-100 custom-block-date-wrap">
                                        <strong class="text-white">18 Feb 2023</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GALERI END -->

            <!-- CONTACT START -->
            <div class="section contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12">
                            <form action="#" method="post" class="custom-form contact-form" role="form">
                                <h2 class="mb-4 pb-2">Hubungi Kami</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap" required="">
                                            <label for="floatingInput">Nama lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Alamat email" class="form-control" required="">
                                            <label for="floatingInput">Alamat email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12"> 
                                        <div class="form-floating">
                                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required="">
                                            <label for="floatingInput">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="pesan" name="pesan" placeholder="Pesan"></textarea>
                                            <label for="floatingTextarea">Pesan</label>
                                        </div>
                                        <button type="submit" class="form-control btn" data-bs-toggle="modal" data-bs-target="#verifyOTP">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>    
                        <div class="col-lg-7 col-12 d-flex justify-content-center align-items-center">
                            <div>
                                <div class="contact-info mt-5">
                                    <div class="contact-info-item">
                                        <div class="contact-info-body">
                                            <strong>Jalan Gubernur Suryo No. 1 Sidoarjo - Jawa Timur, 61211</strong>
                                            <p class="mt-2 mb-1">
                                                <a href="tel: 010-020-0340" class="contact-link">
                                                    082332321868
                                                </a>
                                            </p>
                                        </div>
                                        <div class="contact-info-footer">
                                            <a href="#">Lihat di Google Maps</a>
                                        </div>
                                    </div>
                                    <img src="images/WorldMap.svg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT END -->
            
            <!-- FOOTER START -->
            <div class="section footer-section section-padding" id="footer">
                <div class="d-flex justify-content-center align-items-center">
                    <?php 
                        require('view/footer.php');
                    ?>
                </div>
            </div>
            <!-- FOOTER END -->
        </div>

        <!-- Modal Verify OTP-->
        <div class="modal fade php-email-form" id="verifyOTP" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-3">
                <div class="modal-body d-flex row">
                    <h5 class="text-center fw-bolder">Verifikasi Email</h5>
                    <small class="text-center fw-light mb-0">
                    Kami telah mengirimkan kode ke email Anda
                    </small>
                    <form action="form/verifyOTP.php" method="POST">
                    <div class="row">
                        <div class="col-12 align-items-center justify-content-center gap-2 ">
                            <input type="number" name="key1" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                            <input type="number" name="key2" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                            <input type="number" name="key3" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                            <input type="number" name="key4" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                            <input type="number" name="key4" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                            <input type="number" name="key4" onKeyPress="if(this.value.length==1) return false;" class="col-2 text-center fw-bold border border-1 rounded" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name="submitOTP" class="col-8 btn custom-btn">Kirim</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>


        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/fullpage.js" type="text/javascript"></script>
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/animated-headline.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/vendor/embedYoutube/js/embedYoutube.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>

        <script>
            new fullpage('#fullpage', {
                autoScrolling:true,
                scrollHorizontally: true,
                navigation: true,
                // anchors:['beranda', 'pimpinan', 'layanan' ,'media', 'berita', 'kontak', 'footer']
            });

            $('.owl-carousel').owlCarousel({
                margin:15,
                autoplay:true,
                loop:true,
                nav:true,
                dots:false,
                navText : [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })

        </script>
    </body>
</html>