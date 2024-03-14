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


    </head>
    <body>

        <header id="header" class="fixed-top d-flex align-items-center py-3 px-5 shadow">
            <?php 
                require('view/navbar.php')
            ?>
        </header>

        <main>
            <section class="site-details section-padding">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9 col-12">
                            <a href="index.php" class="btn custom-btn smoothscroll me-3 mb-5">Kembali ke Beranda</a>
                            <h1 class="text-center">Download</h1>
                        </div>
                        <div class="col-lg-9 col-12 mt-5">
                            <div class="row justify-content-center gy-3">
                                <!-- BERITA ITEM START -->
                                <div class="col-12 p-3 rounded-4 files-list">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p class="text-center">Jumat, <br> 29 Agustus 2024</p>
                                        </div>
                                        <div class="col-9">                                    
                                            <a href="detail-download.php" class="events-title mt-3">Single Tournament</a>
                                            <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut molestias sunt aspernatur eaque aliquam voluptates dolorem aperiam eius vitae et tempore quam optio beatae temporibus est, repellat eum ea perferendis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="col-12 p-3 rounded-4 files-list">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p class="text-center">Jumat, <br> 29 Agustus 2024</p>
                                        </div>
                                        <div class="col-9">                                    
                                            <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                            <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut molestias sunt aspernatur eaque aliquam voluptates dolorem aperiam eius vitae et tempore quam optio beatae temporibus est, repellat eum ea perferendis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="col-12 p-3 rounded-4 files-list">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p class="text-center">Jumat, <br> 29 Agustus 2024</p>
                                        </div>
                                        <div class="col-9">                                    
                                            <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                            <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut molestias sunt aspernatur eaque aliquam voluptates dolorem aperiam eius vitae et tempore quam optio beatae temporibus est, repellat eum ea perferendis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
                                <!-- BERITA ITEM START -->
                                <div class="col-12 p-3 rounded-4 files-list">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p class="text-center">Jumat, <br> 29 Agustus 2024</p>
                                        </div>
                                        <div class="col-9">                                    
                                            <a href="event-detail.html" class="events-title mt-3">Single Tournament</a>
                                            <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut molestias sunt aspernatur eaque aliquam voluptates dolorem aperiam eius vitae et tempore quam optio beatae temporibus est, repellat eum ea perferendis.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- BERITA ITEM END -->
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
        <script src="assets/js/custom.js"></script>

    </body>
</html>