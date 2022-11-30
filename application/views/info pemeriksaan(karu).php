<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Info Pemeriksaan</title>
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
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark d-sm-inline align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(9,40,71);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?= base_url('c_karu') ?>">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tools"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ALOYAVIS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_karu') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('c_karu/monitoringservis') ?>">Monitoring Servis</a></li>
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
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="me-2 text-gray-600 small">Hello, 
                                    <?php $myvalue = $this->session->userdata('nama');
                                    $arr = explode(' ',trim($myvalue));
                                    echo $arr[0]; ?></span><i class="fas fa-sort-down" style="font-size: 20px;margin-bottom: 9px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="<?= base_url('c_karu/profil') ?>"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="<?= base_url('c_karu/gantipassword') ?>"><i class="far fa-edit fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ganti Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('c_karu/logout') ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">INFO PEMERIKSAAN</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 201px;">NOMOR POLISI</td>
                                                                        <td><?= $res['nomor_polisi_pemeriksaan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 140px;">SERVICE ADVISOR</td>
                                                                        <td><?= $res['service_advisor'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 140px;">JAM PENERIMAAN</td>
                                                                        <td><?= $res['jam_servis'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 140px;">TANGGAL PENERIMAAN</td>
                                                                        <td><?= $res['tgl_servis'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">KELENGKAPAN KENDARAAN</td>
                                                                        <td>
                                                                            <div class="table-responsive" style="border-color: rgb(0,0,0) !important;">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="table-warning" style="text-align: center;">NAMA BARANG</th>
                                                                                            <th class="table-warning" style="text-align: center;">JUMLAH BARANG</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>STNK</td>
                                                                                            <td style="text-align: center;"><?= $res['stnk'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Radio / Tape</td>
                                                                                            <td style="text-align: center;"><?= $res['radio'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Buku Servis / Dokumen<br></td>
                                                                                            <td style="text-align: center;"><?= $res['buku'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Dongkrak</td>
                                                                                            <td style="text-align: center;"><?= $res['dongkrak'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Dop Roda</td>
                                                                                            <td style="text-align: center;"><?= $res['doproda'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Ban Cadangan</td>
                                                                                            <td style="text-align: center;"><?= $res['ban'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Segitiga Pengaman</td>
                                                                                            <td style="text-align: center;"><?= $res['segitiga'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><?= $res['barang_berharga'] ?><br></td>
                                                                                            <td style="text-align: center;"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">ODOMETER (KM)</td>
                                                                        <td><?= $res['km'] ?> KM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">BAHAN BAKAR (%)</td>
                                                                        <td><?= $res['bahan_bakar'] ?> %</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">BAHAN BAKAR</td>
                                                                        <td><img class="img-fluid" src="<?= base_url(''); ?>assets/eksterior/<?= $res['id'] ?>.png"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">KONDISI BATTERY/AKI</td>
                                                                        <td><?= $res['kondisi_battery'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">KELENGKAPAN KENDARAAN</td>
                                                                        <td>
                                                                            <div class="table-responsive" style="border-color: rgb(0,0,0) !important;">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="table-warning" style="text-align: center;">POSISI BAN</th>
                                                                                            <th class="table-warning" style="text-align: center;">KONDISI BAN</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>Depan Kanan</td>
                                                                                            <td style="text-align: center;"><?= $res['depan_kanan'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Depan Kiri</td>
                                                                                            <td style="text-align: center;"><?= $res['depan_kiri'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Belakang Kanan</td>
                                                                                            <td style="text-align: center;"><?= $res['belakang_kanan'] ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td>Belakang Kiri</td>
                                                                                            <td style="text-align: center;"><?= $res['belakang_kiri'] ?></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><a class="btn btn-primary btn-sm" type="button" href="<?= base_url('c_karu/monitoringservis') ?>"><i class="fas fa-backward"></i>&nbsp; Kembali</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © TA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/for_fuel.js"></script>
    <script src="<?= base_url(''); ?>assets/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        $(document).ready(function(){
            // CALL FUNCTION SHOW PRODUCT
            show_notification();
 
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;
 
            var pusher = new Pusher('a902db797c535c945df3', {
                cluster: 'ap1',
                forceTLS: true
            });
 
            var channel = pusher.subscribe('my-channel');
            var nomorpitstopkaru  = <?php echo json_encode($this->session->userdata('nomor_pitstop')); ?>; 
            channel.bind('my-event', function(data) {
                if(data.message === 'workorder'+nomorpitstopkaru){
                    alert("Ada kendaraan yang perlu di servis!")
                    show_notification();
                }
            });
 
            // FUNCTION SHOW PRODUCT
            function show_notification(){
                $.ajax({
                    url   : '<?php echo site_url("c_karu/get_servis");?>',
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html1 = '!';
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<a class="dropdown-item d-flex align-items-center" href="<?= base_url('c_karu/monitoringservis') ?>">'+
                                    '<div class="me-3">'+
                                    '<div class="bg-primary icon-circle"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-white">'+
                                    '<!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->'+
                                    '<path d="M144 208C126.3 208 112 222.2 112 239.1C112 257.7 126.3 272 144 272s31.1-14.25 31.1-32S161.8 208 144 208zM256 207.1c-17.75 0-31.1 14.25-31.1 32s14.25 31.1 31.1 31.1s31.1-14.25 31.1-31.1S273.8 207.1 256 207.1zM368 208c-17.75 0-31.1 14.25-31.1 32s14.25 32 31.1 32c17.75 0 31.99-14.25 31.99-32C400 222.2 385.8 208 368 208zM256 31.1c-141.4 0-255.1 93.12-255.1 208c0 47.62 19.91 91.25 52.91 126.3c-14.87 39.5-45.87 72.88-46.37 73.25c-6.624 7-8.373 17.25-4.624 26C5.818 474.2 14.38 480 24 480c61.49 0 109.1-25.75 139.1-46.25c28.87 9 60.16 14.25 92.9 14.25c141.4 0 255.1-93.13 255.1-207.1S397.4 31.1 256 31.1zM256 400c-26.75 0-53.12-4.125-78.36-12.12l-22.75-7.125L135.4 394.5c-14.25 10.12-33.87 21.38-57.49 29c7.374-12.12 14.37-25.75 19.87-40.25l10.62-28l-20.62-21.87C69.81 314.1 48.06 282.2 48.06 240c0-88.25 93.24-160 207.1-160s207.1 71.75 207.1 160S370.8 400 256 400z"></path>'+
                                    '</svg></div>'+
                                    '</div>'+
                                    '<div>'+
                                    '<p>Kendaraan yang perlu di servis</br>Plat Nomor = <strong>'+ data[i].nomor_polisi +'</strong></p>'+
                                    '</div>'+
                                    '</a>';
                                    $('.fortandaseru').html(html1);
                        }
                        
                        $('.show_notification').html(html);
                    }
 
                });
            }
        });
    </script>
</body>

</html>