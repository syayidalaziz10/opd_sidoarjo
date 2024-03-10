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
        <link href="assets/css/pagination.min.css" rel="stylesheet">


    </head>
    <body>

        <header id="header" class="fixed-top d-flex align-items-center py-3 px-5 shadow">
            <?php 
                require('view/navbar.php')
            ?>
        </header>

        <main>
            <section class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn custom-btn smoothscroll me-3 mb-5">Kembali ke Beranda</a>
                            <h1 class="text-center mt-5">Berita</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-details">
                <div class="container">
                    <div class="row g-4">
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="detail.php">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
                        <!-- BERITA ITEM START -->
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-image-wrap">
                                <a href="event-detail.html">
                                    <img src="images/anna-rosar-ew-olGvgCCs-unsplash.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>
                            <div class="custom-block-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-calendar-event"></i>
                                        <small>26 Juli 2022</small>
                                    </div>
                                    <div class="text-center rounded-pill bg-white px-4 py-1 d-flex align-items-center gap-3">
                                        <i class="bi bi-eyeglasses"></i>
                                        <small>2</small>
                                    </div>
                                </div>
                                <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit do eiusmod tempor</p>
                                <a href="">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <!-- BERITA ITEM END -->
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
        <script src="assets/js/pagination.min.js"></script>
        <script src="assets/js/custom.js"></script>

        <script>
            $('#pagination-container').pagination({
                dataSource: [1, 2, 3, 4, 5, 6, 7, ... , 195],
                callback: function(data, pagination) {
                    // template method of yourself
                    var html = template(data);
                    $('#data-container').html(html);
                }
            })
        </script>

    </body>
</html>