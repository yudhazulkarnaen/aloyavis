<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Pemeriksaan</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Login-Form-Basic-icons.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Steps-Progressbar.css">
    <style>
        
        .hide-from-page { display:none; } /* hide at normal page view */

        @media print {
            .hide-from-page { display:flex; } /* make it visible during print */
            html{
            font-size: 8px;
            }
            #q156{
                transform: scale(1);
            }
            body{
                overflow-x:hidden;
            }
            .text-judul{
                text-align: center;
                padding-bottom: 10px;
            }
        }
        
        @media print {

        @media print and (-webkit-min-device-pixel-ratio:0) {
            th {
            /* color: #ccc; */
            -webkit-print-color-adjust: exact !important;
            }
        }
        }
        @media print
        {    
        .navbar,.judul,button,a,#penandaterpilih, .gauge
        {
            display: none !important;
        }
        }
        @media print 
            {
            @page
            {
                size: 216mm 330mm ;
                margin: 5mm 0mm 0mm 0mm;
            }
            }
        @media print {
            canvas {
                min-height: 50mm;
                max-width: 100mm;
                max-height: 100%;
                padding-left: 0;
                padding-right: 0;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }
            }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark d-sm-inline align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(9,40,71);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?= base_url('c_serviceadvisor') ?>">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tools"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ALOYAVIS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/antrian') ?>">Antrian</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/daftarantrian') ?>"><strong>Daftar Antrian</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/daftarsedangservis') ?>"><strong>Daftar Sedang Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('c_serviceadvisor/daftarselesaiservis') ?>"><strong>Daftar Selesai Servis</strong></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter fortandaseru"></span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <div class="show_notification">

                                        </div>
                                        <div class="show_selesaiservis">

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="me-2 text-gray-600 small">Hello, 
                                    <?php $myvalue = $this->session->userdata('nama');
                                    $arr = explode(' ',trim($myvalue));
                                    echo $arr[0]; ?></span><i class="fas fa-sort-down" style="font-size: 20px;margin-bottom: 9px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="<?= base_url('c_serviceadvisor/profil') ?>"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="<?= base_url('c_serviceadvisor/gantipassword') ?>"><i class="far fa-edit fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ganti Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('c_serviceadvisor/logout') ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1 text-judul">DETAIL PEMERIKSAAN KENDARAAN</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3  judul">
                                        <p class="text-primary m-0 fw-bold">PEMERIKSAAN "<?= $res['merk_kendaraan_pemeriksaan'] ?> - <?= $res['nomor_polisi_pemeriksaan'] ?>"</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="table-primary" style="width: 50%; border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">NAMA PELANGGAN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nama_pemilik_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">NO. POLISI</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_polisi_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">MODEL/TAHUN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['merk_kendaraan_pemeriksaan'] ?> / <?= $res['tahun_kendaraan_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="table-primary" style="width: 50%; border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">NO. TELEPON</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_telepon_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">NO. HANDPHONE</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_handphone_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);">SERVICE ADVISOR</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['service_advisor'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>TANGGAL PENERIMAAN</strong><br></label><input class="form-control" name="tglservis" id="username-1" placeholder="Nomor Polisi Sesuai STNK" type="date" value="<?= $res['tgl_servis'] ?>" readonly=""></div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>JAM PENERIMAAN</strong><br></label><input class="form-control" name="jamservis" id="username-3" placeholder="Nomor Polisi Sesuai STNK" type="time" value="<?= $res['jam_servis'] ?>" readonly=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>KELENGKAPAN KENDARAAN</strong><br></label>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA BARANG</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">JUMLAH</th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;">STNK</td>
                                                                                <td class="text-center"><?= $res['stnk'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Radio / Tape</td>
                                                                                <td class="text-center"><?= $res['radio'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Buku Servis / Dokumen</td>
                                                                                <td class="text-center"><?= $res['buku'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Dongkrak</td>
                                                                                <td class="text-center"><?= $res['dongkrak'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Dop Roda</td>
                                                                                <td class="text-center"><?= $res['doproda'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Ban Cadangan</td>
                                                                                <td class="text-center"><?= $res['ban'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Segitiga Pengaman</td>
                                                                                <td class="text-center"><?= $res['segitiga'] ?></td>
                                                                            </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>BARANG BERHARGA LAINNYA</strong><br></label><input class="form-control" type="text" id="username-4" name="barang_berharga" placeholder="Isi Barang Berharga Lainnya (Jika Ada)" autocomplete="off" value="<?= $res['barang_berharga'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>KILOMETER KENDARAAN (DALAM KM)</strong><br></label><input class="form-control" type="text" id="username-6" name="km" placeholder="Isi Kilometer Kendaraan" autocomplete="off" value="<?= $res['km'] ?> KM" readonly></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col align-items-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>BAHAN BAKAR KENDARAAN (DALAM %)</strong><br></label><input class="form-control" type="text" id="bahanbakar" name="bahanbakar" placeholder="Isi Bahan Bakar Kendaraan" value="<?= $res['bahan_bakar'] ?> %" readonly></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>KONDISI EKSTERIOR</strong><br></label>
                                                    <img class="img-fluid" src="<?= base_url(''); ?>assets/eksterior/<?= $res['id'] ?>.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>BARANG BERHARGA LAINNYA</strong><br></label><input class="form-control" type="text" id="username-4" name="barang_berharga" placeholder="Isi Barang Berharga Lainnya (Jika Ada)" autocomplete="off" value="<?= $res['kondisi_battery'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>INSPEKSI KETEBALAN BAN</strong><br></label>
                                                        <div class="table-responsive text-center">
                                                            <table class="table table-bordered" width="100%">

                                                                    <tr>
                                                                        <th class="text-center text-bg-primary" width="50%" colspan="2" style="color: rgb(255,255,255);background: rgb(65,111,255);">POSISI BAN</th>
                                                                        <th class="text-center text-bg-primary" width="50%" style="color: rgb(255,255,255);background: rgb(65,111,255);">KONDISI BAN</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="text-start" style="border-right-style: solid;" rowspan="2">Depan</td>
                                                                        <td class="text-center">Kanan</td>
                                                                        <?php if($res['depan_kanan'] == "Good"){ ?>
                                                                            <td class="text-center text-bg-success"><?= $res['depan_kanan'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['depan_kanan'] == "Caution"){ ?>
                                                                            <td class="text-center text-bg-warning"><?= $res['depan_kanan'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['depan_kanan'] == "Not Good"){ ?>
                                                                            <td class="text-center text-bg-danger"><?= $res['depan_kanan'] ?></td>
                                                                        <?php } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">Kiri</td>
                                                                        <?php if($res['depan_kiri'] == "Good"){ ?>
                                                                            <td class="text-center text-bg-success"><?= $res['depan_kiri'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['depan_kiri'] == "Caution"){ ?>
                                                                            <td class="text-center text-bg-warning"><?= $res['depan_kiri'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['depan_kiri'] == "Not Good"){ ?>
                                                                            <td class="text-center text-bg-danger"><?= $res['depan_kiri'] ?></td>
                                                                        <?php } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-start" rowspan="2">Belakang</td>
                                                                        <td class="text-center">Kanan</td>
                                                                        <?php if($res['belakang_kanan'] == "Good"){ ?>
                                                                            <td class="text-center text-bg-success"><?= $res['belakang_kanan'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['belakang_kanan'] == "Caution"){ ?>
                                                                            <td class="text-center text-bg-warning"><?= $res['belakang_kanan'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['belakang_kanan'] == "Not Good"){ ?>
                                                                            <td class="text-center text-bg-danger"><?= $res['belakang_kanan'] ?></td>
                                                                        <?php } ?>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">Kiri</td>
                                                                        <?php if($res['belakang_kiri'] == "Good"){ ?>
                                                                            <td class="text-center text-bg-success"><?= $res['belakang_kiri'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['belakang_kiri'] == "Caution"){ ?>
                                                                            <td class="text-center text-bg-warning"><?= $res['belakang_kiri'] ?></td>
                                                                        <?php } ?>
                                                                        <?php if($res['belakang_kiri'] == "Not Good"){ ?>
                                                                            <td class="text-center text-bg-danger"><?= $res['belakang_kiri'] ?></td>
                                                                        <?php } ?>
                                                                    </tr>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide-from-page" id="tandatangan">
                                                <div class="col-6 justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>DISETUJUI SERVICE ADVISOR</strong><br></label></div><textarea class="form-control" style="height: 90px;"></textarea>
                                                </div>
                                                <div class="col-6 justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>DISETUJUI PELANGGAN</strong><br></label></div><textarea class="form-control" style="height: 90px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><a class="btn btn-secondary btn-sm print_button" type="button" style="margin-right: 10px;"><i class="fas fa-print"></i>&nbsp; Print Receiving Check</a><a class="btn btn-primary btn-sm" type="button" href="<?= base_url('c_serviceadvisor/daftarselesaiservis') ?>"><i class="fas fa-backward"></i>&nbsp; Kembali</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer judul">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © TA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top judul" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/for_fuel.js"></script>
    <script src="<?= base_url(''); ?>assets/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script text="text/javascript">
        $(document).on('click', '#upld', function () {
            var form_data = new FormData();
            var file;
            var nomorpolisi = $( "#nomorpolisi" ).val();
            file = $('#mycanvas')[0].toDataURL('image/png');
            file = file.replace(/^data:image\/(png|jpg|jpeg);base64,/, '');
            form_data.append('photo', file);
            $.ajax({
                url: '<?php echo base_url();?>c_serviceadvisor/do_upload/'+nomorpolisi,
                type: 'POST',
                dataType: 'JSON',
                data: form_data,
                processData: false,
                contentType: false,
                async: false,
                cache: false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.print_button').click(function() {
                window.print();
                return false;
                window.onafterprint = function() {
                    window.location.reload(false);
                };
            });
        });
    </script>
    ​<script>
        $(document).ready(function(){
          $("#bahanbakar").change(function(){
            let number = document.getElementById("bahanbakar").value / 100
            setGaugeValue(gaugeElement, number);
          });
        });
    </script>
    <script>
        window.onload = function(){
            const canvas = document.getElementById("mycanvas");
            const ctx = canvas.getContext("2d");
            canvas.width = window.innerWidth - 325;
            canvas.height = 0.5 * canvas.width - 60;

            const img = new Image();
            img.src = "<?= base_url(''); ?>assets/img/car.png";
            img.addEventListener("load", function(){
                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            });
        

            canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(0,30,255)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
        
            const buttonrust = document.querySelector(".btn-rust");
            buttonrust.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(0,30,255)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttoncrack = document.querySelector(".btn-crack");
            buttoncrack.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(255,245,0)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttondent = document.querySelector(".btn-dent");
            buttondent.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(255,0,0)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttonscratch = document.querySelector(".btn-scratch");
            buttonscratch.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(0,192,218)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttonbubble = document.querySelector(".btn-bubble");
            buttonbubble.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "rgb(186,0,167)";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttondefect = document.querySelector(".btn-defect");
            buttondefect.addEventListener("click", event => {
                canvas.addEventListener("click", function(event){
                let x = event.offsetX;
                let y = event.offsetY;

                ctx.fillStyle = "#7ED957";
                ctx.beginPath();
                ctx.arc(x,y,10,0,Math.PI*2);
                ctx.fill();
                ctx.stroke();
            });
            });

            const buttonreset = document.querySelector(".btn-reset");
            buttonreset.addEventListener("click", event => {
                const canvas = document.getElementById("mycanvas");
                const ctx = canvas.getContext("2d");

                canvas.width = window.innerWidth - 325;
                canvas.height = (0.5 * canvas.width) - 60;

                const img = new Image();
                img.src = "<?= base_url(''); ?>assets/img/car.png";
                img.addEventListener("load", function(){
                    ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                });
            });
        }
        // window.onresize = function(){
        //     const canvas = document.getElementById("mycanvas");
        //     const ctx = canvas.getContext("2d");
        //     canvas.width = window.innerWidth - 325;
        //     canvas.height = 0.5 * canvas.width - 60;

        //     const img = new Image();
        //     setTimeout(function(){
        //         var dataURL = canvas.toDataURL("image/png");
        //     }, 5000);
        //     // let dataurl = canvas.toDataURL();
        //     img.src = document.getElementById("mycanvas").toDataURL("image/png");
        //     img.addEventListener("load", function(){
        //     ctx.drawImage(img, 0, 0, 100, 100);
        //     });
        // }
    
    
    </script>
    <script>
        document.getElementById('btn-rust').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: rgb(0,30,255);"></i>&nbsp;Rust/Karat</h1>';
        }
        document.getElementById('btn-crack').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: rgb(255,245,0);"></i>&nbsp;Crack/Retak</h1>';
        }
        document.getElementById('btn-dent').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: rgb(255,0,0);"></i>&nbsp;Dent/Penyok</h1>';
        }
        document.getElementById('btn-scratch').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: rgb(0,192,218);"></i>&nbsp;Scracth/Goresan</h1>';
        }
        document.getElementById('btn-bubble').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: rgb(186,0,167);"></i>&nbsp;Bubble/Gelembung</h1>';
        }
        document.getElementById('btn-defect').onclick = function() {
            document.getElementById('penandaterpilih').innerHTML = '<h1 style="font-size: 18px;">Penanda Terpilih = <i class="fas fa-circle" style="color: #7ED957;"></i>&nbsp;Paint Defect/Cacat Cat</h1>';
        }
    </script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        $(document).ready(function(){
            // CALL FUNCTION SHOW PRODUCT
            show_notification();
            show_selesaiservis();
 
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('a902db797c535c945df3', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                if(data.message === 'request'){
                    alert("Ada kendaraan yang perlu tambah part!")
                    show_notification();
                }
                if(data.message === 'selesaiservis'){
                    alert("Ada kendaraan yang perlu konfirmasi selesai servis!")
                    show_selesaiservis();
                }
            });
 
            // FUNCTION SHOW PRODUCT
            function show_notification(){
                $.ajax({
                    url   : '<?php echo site_url("c_serviceadvisor/get_notification");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html1 = '!';
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<a class="dropdown-item d-flex align-items-center" href="<?= base_url('c_serviceadvisor/daftarsedangservis') ?>">'+
                                    '<div class="me-3">'+
                                    '<div class="bg-primary icon-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-white">'+
                                    '<!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->'+
                                    '<path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z"></path>'+
                                    '</svg></div>'+
                                    '</div>'+
                                    '<div>'+
                                    '<p>Kendaraan konfirmasi <strong>Tambah Part</strong></br>Plat Nomor = <strong>'+ data[i].nomor_polisi +'</strong></p>'+
                                    '</div>'+
                                    '</a>';
                                    $('.fortandaseru').html(html1);
                        }
                        
                        $('.show_notification').html(html);
                    }
 
                });
            }
            function show_selesaiservis(){
                $.ajax({
                    url   : '<?php echo site_url("c_serviceadvisor/get_selesaiservis");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html1 = '!';
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<a class="dropdown-item d-flex align-items-center" href="<?= base_url('c_serviceadvisor/daftarselesaiservis') ?>">'+
                                    '<div class="me-3">'+
                                    '<div class="bg-primary icon-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-white">'+
                                    '<!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->'+
                                    '<path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z"></path>'+
                                    '</svg></div>'+
                                    '</div>'+
                                    '<div>'+
                                    '<p>Kendaraan konfirmasi <strong>Selesai Servis</strong></br>Plat Nomor = <strong>'+ data[i].nomor_polisi_selesai +'</strong></p>'+
                                    '</div>'+
                                    '</a>';
                                    $('.fortandaseru').html(html1);
                        }
                        
                        $('.show_selesaiservis').html(html);
                    }
 
                });
            }
        });
    </script>
</body>

</html>