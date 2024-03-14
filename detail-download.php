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
                            <a href="download.php" class="btn custom-btn smoothscroll me-3 mb-5">Kembali ke Download</a>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="fst-italic text-center">
                                            <!-- <i class="bi bi-calendar-event"></i> -->
                                            Kamis, 12 Juni 2024 08:53 WIB
                                        </div>
                                    </div>
                                    <div class="col-12 my-5">
                                        <h1>Man must explore, and this is exploration at its greatest</h1>
                                    </div>
                                    <!-- <p class="fst-italic">Kamis, 12 Juni 2024 08:53 WIB</p> -->
                                    <p class="text-justify lh-lg">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae error quaerat, veniam ut quidem exercitationem doloribus, debitis quasi obcaecati quae hic aspernatur. Vero dolorem fugit neque a assumenda eum possimus!
                                    </p>
                                </div>
                                <div class="col-12">
                                    <table class="table table-responsive mt-5">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama file</th>
                                                <th scope="col">Total download</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>form-magang-2024.pdf</td>
                                                <td>200</td>
                                                <td>
                                                    <a href="" class="btn custom-btn custom-border-btn">
                                                        <small>Lihat</small>
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="" class="btn custom-btn">
                                                        <small>Download</small>
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>2</td>
                                                <td>form-magang-2024.pdf</td>
                                                <td>200</td>
                                                <td>
                                                    <a href="" class="btn custom-btn custom-border-btn">
                                                        <small>Lihat</small>
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <button type="submit" class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#verifyOTP">
                                                        <small>Download</small>
                                                        <i class="bi bi-cloud-arrow-down-fill"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <!-- Modal Verify OTP-->
        <div class="modal fade" id="verifyOTP" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body p-lg-4">
                        <h5 class="text-center fw-bolder">Download File</h5>
                        <p class="text-center fw-light my-3">
                            Apakah anda yakin ingin mendownload file form-magang-2024.pdf
                        </p>
                        <form action="form/verifyOTP.php" method="POST">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <button type="button" class="btn custom-btn custom-border-btn" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn custom-btn">Lanjutkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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