<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detail Quick Maintenance Checksheet</title>
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
        @page
        {
            size: 216mm 330mm ;
            margin: 5mm 0mm 0mm 0mm;
        }
        }
        @media print
        {    
        .navbar,.judul,button,a
        {
            display: none !important;
        }
        }
        .hide-from-page { display:none; } /* hide at normal page view */
        .hide-from-pages { display:none; } /* hide at normal page view */
        @media print {
            .hide-from-page { display:block; } /* make it visible during print */
            .hide-from-pages { display:flex; } /* make it visible during print */
            html{
            font-size: 7px;
            }
            /* #q156{
                transform: scale(1);
            }
            body{
                overflow-x:hidden;
            } */
            .text-judul{
                text-align: center;
                padding-bottom: 10px;
            }
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark d-sm-inline align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(9,40,71);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?= base_url('c_manager') ?>">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tools"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ALOYAVIS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager') ?>">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarhargaservis') ?>">Daftar Harga Servis</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarhargasukucadang') ?>"><strong>Daftar Harga Suku Cadang</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarperalatanservis') ?>"><strong>Daftar Peralatan Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarserviceadvisor') ?>"><strong>Daftar Service Advisor</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarkepalaregu') ?>"><strong>Daftar Kepala Regu</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarteknisi') ?>"><strong>Daftar Teknisi</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarkendaraan') ?>"><strong>Daftar Kendaraan</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarsedangservis') ?>"><strong>Daftar Sedang Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarselesaiservis') ?>"><strong>Daftar Selesai Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_manager/daftarpaketservis') ?>"><strong>Daftar Paket Servis</strong></a></li>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="me-2 text-gray-600 small">Hello, 
                                    <?php $myvalue = $this->session->userdata('nama');
                                    $arr = explode(' ',trim($myvalue));
                                    echo $arr[0]; ?></span><i class="fas fa-sort-down" style="font-size: 20px;margin-bottom: 9px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="<?= base_url('c_manager/profil') ?>"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="<?= base_url('c_manager/gantipassword') ?>"><i class="far fa-edit fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ganti Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('c_manager/logout') ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1 text-judul judul">DETAIL QUICK MAINTENANCE CHECKSHEET</h3>
                    <h3 class="text-dark mb-1 text-judul hide-from-page">QUICK MAINTENANCE CHECKSHEET - <?= $res['nomor_polisi_wo'] ?></h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">QUICK MAINTENANCE CHECKSHEET "<?= $res['merk_kendaraan_wo'] ?> - <?= $res['nomor_polisi_wo'] ?>"</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">NO. POLISI</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?= $res['nomor_polisi_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">MODEL / TAHUN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['merk_kendaraan_wo'] ?> / <?= $res['tahun_kendaraan_wo'] ?></td>
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
                                                                <thead>
                                                                    <tr></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">KM</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?= $res['km_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">PERAWATAN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res2['nama_servis'] ?></td>
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
                                                                <thead>
                                                                    <tr></tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">TANGGAL</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?php echo $tgl; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">JAM MASUK</th>
                                                                        <td style="color: rgb(0,0,0);"><?php echo $jammasuk; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">JAM KELUAR</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['estimasiselesai'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">DALAM KABIN - TEKNISI A</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;">OK / TIDAK OK / TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. SEMUA LAMPU INDIKATOR DASHBOARD DAN KABIN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bekerja NORMAL</td>
                                                                                <td class="text-center"><?= $res3['dk_a_1'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. WIPER DAN WASHER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerakan Wiper</td>
                                                                                <td class="text-center"><?= $res3['dk_a_2'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Arah dan Banyaknya Semprotan Air</td>
                                                                                <td class="text-center"><?= $res3['dk_a_3'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. KLAKSON</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Operasi dan Suara</td>
                                                                                <td class="text-center"><?= $res3['dk_a_4'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. OPERASI SISTEM ELEKTRIK</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Window</td>
                                                                                <td class="text-center"><?= $res3['dk_a_5'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Dock Lock</td>
                                                                                <td class="text-center"><?= $res3['dk_a_6'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Mirror</td>
                                                                                <td class="text-center"><?= $res3['dk_a_7'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Canceller Lampu Sein</td>
                                                                                <td class="text-center"><?= $res3['dk_a_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>A/C</td>
                                                                                <td class="text-center"><?= $res3['dk_a_9'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Interior</td>
                                                                                <td class="text-center"><?= $res3['dk_a_10'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Sun Roof</td>
                                                                                <td class="text-center"><?= $res3['dk_a_11'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Sliding Door</td>
                                                                                <td class="text-center"><?= $res3['dk_a_12'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. TIRE PRESSURE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Depan Kanan"</td>
                                                                                <td class="text-center"><?= $res3['dk_a_13'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Depan Kiri"<br></td>
                                                                                <td class="text-center"><?= $res3['dk_a_14'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Belakang Kanan"<br></td>
                                                                                <td class="text-center"><?= $res3['dk_a_15'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Belakang Kiri"<br></td>
                                                                                <td class="text-center"><?= $res3['dk_a_16'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban Cadangan<br></td>
                                                                                <td class="text-center"><?= $res3['dk_a_17'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>6. BOOSTER REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Kebocoran</td>
                                                                                <td class="text-center"><?= $res3['dk_a_18'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerak Bebas Pedal</td>
                                                                                <td class="text-center"><?= $res3['dk_a_19'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>7. RODA KEMUDI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Putaran dan Gerak Bebas</td>
                                                                                <td class="text-center"><?= $res3['dk_a_20'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>8. REM PARKIR / TANGAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Jumlah Klik<input class="form-control" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Jumlah Klik" value="<?= $res3['jumlah_klik'] ?> KLIK" readonly></td>
                                                                                <td class="text-center"><?= $res3['dk_a_21'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>9. FILTER A/C</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><?= $res3['dk_a_22'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">RUANG MESIN - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. SEMUA LAMPU EKSTERIOR</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Bagian Depan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_1'] ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Bagian Belakang</td>
                                                                                <td class="text-center"><?= $res4['rm_b_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. WIPER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Karet Wiper</td>
                                                                                <td class="text-center"><?= $res4['rm_b_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. KONDISI DAN LEVEL SEMUA CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Power Steering</td>
                                                                                <td class="text-center"><?= $res4['rm_b_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Minyak Rem</td>
                                                                                <td class="text-center"><?= $res4['rm_b_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Radiator Coolant</td>
                                                                                <td class="text-center"><?= $res4['rm_b_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Wiper</td>
                                                                                <td class="text-center"><?= $res4['rm_b_7'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><?= $res4['rm_b_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><?= $res4['rm_b_9'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. DRIVE BELT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak, Kekencangan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_10'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. PEMERIKSAAAN PINTU</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan Kanan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_11'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Belakang Kanan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_12'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan Kiri</td>
                                                                                <td class="text-center"><?= $res4['rm_b_13'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Belakang Kiri</td>
                                                                                <td class="text-center"><?= $res4['rm_b_14'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>6. BATERAI / AKI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Karat</td>
                                                                                <td class="text-center"><?= $res4['rm_b_15'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kekencangan Terminal</td>
                                                                                <td class="text-center"><?= $res4['rm_b_16'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Indicator Cairan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_17'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>7. KEBOCORAN OLI DAN COOLANT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Cover Cylinder Head</td>
                                                                                <td class="text-center"><?= $res4['rm_b_18'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Master Cylinder Rem</td>
                                                                                <td class="text-center"><?= $res4['rm_b_19'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pompa Power Steering</td>
                                                                                <td class="text-center"><?= $res4['rm_b_20'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Radiator</td>
                                                                                <td class="text-center"><?= $res4['rm_b_21'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>8. SARINGAN UDARA</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><?= $res4['rm_b_22'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><?= $res4['rm_b_23'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>9. BUSI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><?= $res4['rm_b_24'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>10. BRAKE BLEEDER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pasang Brake Bleeder</td>
                                                                                <td class="text-center"><?= $res4['rm_b_25'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI TENGAH (RODA BELAKANG : KANAN dan KIRI) - TEKNISI A</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek, Retak, Aus Tidak Merata, Bulging</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Bearing Roda</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Rem, Macet atau Tidak</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. REM DEPAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beri Grease</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kanan<input class="form-control" type="text" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" value="<?= $res5['pmt_a_ketebalanpadkanan'] ?> mm" readonly></td>
                                                                                <td class="text-center"><?= $res5['pmt_a_7'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kiri<input class="form-control" type="text" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" value="<?= $res5['pmt_a_ketebalanpadkiri'] ?> mm" readonly></td>
                                                                                <td class="text-center"><?= $res5['pmt_a_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. DISK / DRUM BRAKE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_9'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper =&gt; Torsi</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_10'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. SELANG / PIPA REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek / Retak / Penyok</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_11'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. BUSHING DAN ARM SUSPENSION</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_12'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>6. SHOCKABSORBER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Oli</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_13'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>7. PERIKSA GERAKAN, RETAK DAN KEBOCORAN GREASE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Knuckle</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_14'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Stabilizer</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_15'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Tie Rod</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_16'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>8. SILANG BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan &lt;=&gt; Belakang</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_17'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>9. BLEEDING REM SEMUA RODA</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bleeding Rem Semua Roda</td>
                                                                                <td class="text-center"><?= $res5['pmt_a_18'] ?></td>
                                                                            </tr>
                                                                            <tr></tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI TENGAH (RODA DEPAN : KANAN dan KIRI) - <br>TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek, Retak, Aus Tidak Merata, Bulging</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Bearing Roda</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Rem, Macet atau Tidak</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. REM BELAKANG</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beri Grease</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kanan<input class="form-control" type="text" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" value="<?= $res6['pmt_b_ketebalanpadkanan'] ?> mm" readonly></td>
                                                                                <td class="text-center"><?= $res6['pmt_b_7'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kiri<input class="form-control" type="text" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" value="<?= $res6['pmt_b_ketebalanpadkiri'] ?> mm" readonly></td>
                                                                                <td class="text-center"><?= $res6['pmt_b_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. DISK / DRUM BRAKE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_9'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper =&gt; Torsi</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_10'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. SELANG / PIPA REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek / Retak / Penyok</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_11'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. BUSHING DAN ARM SUSPENSION</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_12'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>6. SHOCKABSORBER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Oli</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_13'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>7. PERIKSA GERAKAN, RETAK DAN KEBOCORAN GREASE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Knuckle</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_14'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Stabilizer</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_15'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Tie Rod</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_16'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>8. SILANG BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan &lt;=&gt; Belakang</td>
                                                                                <td class="text-center"><?= $res6['pmt_b_17'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (AWAL) - TEKNISI A</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. STABILIZER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerakan, Rusak</td>
                                                                                <td class="text-center"><?= $res7['pma_a_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. KEKENCANGAN BAUT BAGIAN BAWAH</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper</td>
                                                                                <td class="text-center"><?= $res7['pma_a_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Suspensi</td>
                                                                                <td class="text-center"><?= $res7['pma_a_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Arm, Mounting</td>
                                                                                <td class="text-center"><?= $res7['pma_a_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. KARET DRIVESHAFT / KOPEL</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Bocor</td>
                                                                                <td class="text-center"><?= $res7['pma_a_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. KARET STEERING GEAR BOX</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Bocor</td>
                                                                                <td class="text-center"><?= $res7['pma_a_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. PIPA EXHAUST</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Mounting (Retak, Rusak)</td>
                                                                                <td class="text-center"><?= $res7['pma_a_7'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kekencangan Baut - Baut</td>
                                                                                <td class="text-center"><?= $res7['pma_a_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bunyi Dalam Knalpot</td>
                                                                                <td class="text-center"><?= $res7['pma_a_9'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>6. Saluran Bahan Bakar dan Rem</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bocor, Rusak</td>
                                                                                <td class="text-center"><?= $res7['pma_a_10'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (AWAL) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. PEMBUANGAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><?= $res7['pma_b_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><?= $res7['pma_b_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator</td>
                                                                                <td class="text-center"><?= $res7['pma_b_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. PENGGANTIAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Filter =&gt; Torsi</td>
                                                                                <td class="text-center"><?= $res7['pma_b_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Washer Drain (Mesin/Transmisi) =&gt; Torsi</td>
                                                                                <td class="text-center"><?= $res7['pma_b_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. PEMERIKSAAN KEBOCORAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><?= $res7['pma_b_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><?= $res7['pma_b_7'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Power Steering</td>
                                                                                <td class="text-center"><?= $res7['pma_b_8'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator</td>
                                                                                <td class="text-center"><?= $res7['pma_b_9'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI BAWAH - TEKNISI A</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. BAUT RODA (4 RODA)</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Torsi</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. VACCUM INTERIOR MOBIL</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Vaccum Interior Mobil</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. PANASKAN ENGINE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Sampai Kipas Menyala</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Matikan Mesin</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. GEARSHIFT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Check Gearshift</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>5. FILTER BENSIN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti Filter Bensin</td>
                                                                                <td class="text-center"><?= $res8['pmb_a_6'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI BAWAH - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. RELEASE BRAKE BLEEDER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lepaskan Brake Bleeder</td>
                                                                                <td class="text-center"><?= $res8['pmb_b_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>2. PENGISIAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin, <strong>Merk =&nbsp;</strong></td>
                                                                                <td class="text-center"><?= $res8['pmb_b_2'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi, <strong>Merk =&nbsp;</strong></td>
                                                                                <td class="text-center"><?= $res8['pmb_b_3'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator (Tabung Cadangan)</td>
                                                                                <td class="text-center"><?= $res8['pmb_b_4'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Isi Air Radiator</td>
                                                                                <td class="text-center"><?= $res8['pmb_b_5'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>3. BATERAI / AKI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beban / Pengisian (Dengan Multimeter)</td>
                                                                                <td class="text-center"><?= $res8['pmb_b_6'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="3"><strong>4. SETEL KATUP</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Setel Katup</td>
                                                                                <td class="text-center"><?= $res8['pmb_b_7'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (KEDUA) - TEKNISI A</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. PEMERIKSAAN EXHAUST</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Pipa A, B &amp; Knalpot</td>
                                                                                <td class="text-center"><?= $res8['pma2_a_1'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (KEDUA) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. PEMERIKSAAN KEBOCORAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Drain Bolt Oli Mesin / Transmisi</td>
                                                                                <td class="text-center"><?= $res8['pma2_b_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Filter</td>
                                                                                <td class="text-center"><?= $res8['pma2_b_2'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI BAWAH (KEDUA) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. LEVEL CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><?= $res8['pmb2_b_1'] ?><br></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi (Dipstick)</td>
                                                                                <td class="text-center"><?= $res8['pmb2_b_2'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (AKHIR) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 35%;"><strong>OK / TIDAK OK / TIDAK DIKERJAKAN</strong><br></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="3"><strong>1. LEVEL CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi (HCF2)</td>
                                                                                <td class="text-center"><?= $res8['pma3_b_1'] ?><br></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>CATATAN KEPALA REGU</strong><br></label><input class="form-control" type="text" readonly value="<?= $res8['catatan_qmc'] ?>"></div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><button class="btn btn-secondary btn-sm" type="button" style="margin-right: 10px;" onclick="window.print()"><i class="fas fa-print"></i>&nbsp; Print QMC</button></div>
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
</body>

</html>