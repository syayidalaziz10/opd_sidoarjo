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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    </head>
    <body>

        <header id="header" class="fixed-top d-flex align-items-center py-4 shadow">
            <?php 
                require('view/navbar.php')
            ?>
        </header>

        <main>
            <section class="site-header-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn custom-btn smoothscroll me-3 mb-5">Kembali ke Beranda</a>
                            <h1 class="text-white pb-2">Berita</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-details section-padding">
                <div class="container">
                    <div class="row mb-lg-5 mb-0">
                        <!-- BERITA ITEM START -->
                        <div class="row custom-block custom-block-bg mb-3 ">
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
                                    <small class="custom-block-bg-2 text-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                    <small class="custom-block-bg-2 text-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                    <a href="event-detail.html" class="events-title mb-2 mt-4">Group tournament activities</a>
                                    <p>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit voluptatibus, non accusamus obcaecati dignissimos facere, nulla necessitatibus temporibus qui iste laboriosam ad ea reiciendis excepturi vitae, dolores eius magni reprehenderit.
                                    </p>
                                    <a href="">Baca selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <small class="bg-white py-2 px-4 rounded-pill me-2">26 Juli 2022</small>
                                <small class="bg-white py-2 px-4 rounded-pill me-2">Author Name</small>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <footer class="footer-section section-padding sections-center">
            <?php 
                require ('view/footer.php');
            ?>
        </footer>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/custom.js"></script>

    </body>
</html>