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

        <header id="header" class="fixed-top d-flex align-items-center py-3 px-5 shadow">
            <?php 
                require('view/navbar.php')
            ?>
        </header>

        <main>
            <section class="site-header">
                <!-- <div class="section-overlay"></div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <a href="index.php" class="btn custom-btn smoothscroll me-3 mb-5">Kembali ke Beranda</a>
                            <h1 class="text-center">Media Digital</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="site-details">
                <div class="container">
                    <div class="row gy-4 justify-content-start">
                        <!-- VIDEO ITEM START -->
                        <div class="col-lg-4 col-12">
                            <div>
                                <button class="btn p-0 js-play" type="button" data-bs-toggle="modal" data-bs-target="#modalVideo" data-src="c7nRTF2SowQ" data-title="Официальный анонс-трейлер Battlefield 1"><img class="img-fluid rounded-3" src="https://img.youtube.com/vi/c7nRTF2SowQ/maxresdefault.jpg" alt="Официальный анонс-трейлер Battlefield 1"/></button>
                            </div>
                        </div>
                        <!-- VIDEO ITEM END -->
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="footer-section section-padding sections-center">
            <?php 
                require ('view/footer.php');
            ?>
        </footer>


        
        <div class="modal fade media-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modalVideo">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body px-0 py-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div class="embed-responsive-item" id="youTubeIframe" style="width: 100%; height: 48vh"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>

        <script>
            var player;
            var lastButton = '';
            const youtube = 'youTubeIframe';
            const titleInsert = '.js-title-insert';
            const btnPlay = '.js-play';
            const btnPause = '.js-pause';
            const modalId = '#modalVideo';
            const videoQuality = 'hd720';

            function onYouTubePlayerAPIReady() {
                player = new YT.Player(youtube, {
                    controls: 2,
                    iv_load_policy: 3,
                    rel: 0,
                    events: {
                    onReady: onPlayerReady
                    }
                });
            }

            function onPlayerReady(event) {
                'use strict';
                $(btnPlay).on('click', function() {
                    var videoId = $(this).attr('data-src');
                    
                    if (lastButton == videoId) {
                        $(titleInsert).text($(this).attr('data-title'));
                        player.playVideo(videoId, 0, videoQuality);
                        } else {
                        $(titleInsert).text($(this).attr('data-title'));
                        player.loadVideoById(videoId, 0, videoQuality);
                        lastButton = videoId;
                    }
                });
            
                $(btnPause).on('click', function() {
                    player.pauseVideo();
                });
                
                $(modalId).on('click', function() {
                    player.pauseVideo();
                });
            }
        </script>

    </body>
</html>