<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ALOYAVIS - Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Steps-Progressbar.css">
</head>

<body style="background: rgb(241,247,252);">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background: rgb(9,40,71);">
        <div class="container"><a class="navbar-brand" href="<?= base_url('') ?>" style="color: var(--bs-gray-100);"><i class="fas fa-tools" style="font-size: 24px;"></i>&nbsp;ALOYAVIS</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="background: #ffffff;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="<?= base_url('') ?>" style="color: var(--bs-gray-100);">Log In</a><a class="btn btn-light action-button" role="button" href="#" style="background: rgb(246,50,34);">Daftar</a></span>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 5px;padding-bottom: 5px;">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5" style="background: rgb(255, 255, 255);">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-md-flex d-lg-flex d-xl-flex d-xxl-flex align-items-lg-center align-items-xl-center justify-content-xxl-center align-items-xxl-center column-selamatdatang">
                                <div class="selamatdatang" style="padding-top: 10px;">
                                    <div class="text-center">
                                        <h4 class="text-danger mb-2" style="font-size: 30px;text-align: center;"><strong>ALOYAVIS</strong></h4>
                                        <p class="mb-4" style="text-align: center;font-size: 21px;">Aplikasi Kelola Layanan Servis. Aplikasi yang meliputi kelola staff(Servis Advisor, Kepala Regu, dan Manager), peralatan servis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 loginform">
                                <section class="login-clean" style="background: rgba(241,247,252,0);padding-top: 30px;padding-bottom: 30px;">
                                    <form method="post" style="background: rgb(9,40,71);padding-top: 20px;max-width: 460px;">
                                        <h2 class="visually-hidden">Login Form</h2>
                                        <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center illustration">
                                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgba(78,115,223,0);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" style="color: rgb(246,50,34);font-size: 80px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z"></path>
                                                </svg></div>
                                        </div>
                                        <div class="mb-3">
                                            <?= $this->session->flashdata('message'); ?>
                                        </div>
                                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" autocomplete="off"></div>
                                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(246,50,34);">Log In</button></div><a class="forgot" href="#" style="color: rgb(198,198,198);">Lupa password?</a>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-basic" style="background: rgb(9,40,71);padding-top: 15px;padding-bottom: 40px;">
        <p class="copyright" style="color: var(--bs-gray-100);">ALOYAVIS (Aplikasi Kelola Layanan Servis) © 2022</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/for_fuel.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>