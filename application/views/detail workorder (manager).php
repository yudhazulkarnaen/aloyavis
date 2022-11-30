<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detail Work Order</title>
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
            font-size: 8px;
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
                    <h3 class="text-dark mb-1 text-judul judul">DETAIL WORK ORDER</h3>
                    <h3 class="text-dark mb-1 text-judul hide-from-page">WORK ORDER - <?= $res['nomor_polisi_wo'] ?></h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold judul">WORK ORDER "<?= $res['merk_kendaraan_wo'] ?> - <?= $res['nomor_polisi_wo'] ?>"</p>
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
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">NO. RANGKA</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?= $res['nomor_chasis_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">NO. MESIN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_mesin_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">WARNA</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['warna_kendaraan_wo'] ?></td>
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
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">TAHUN</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?= $res['tahun_kendaraan_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">TYPE</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['merk_kendaraan_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">KM</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['km_wo'] ?></td>
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
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);width: 50%;">TGL SELESAI</th>
                                                                        <td style="color: rgb(0,0,0);width: 50%;"><?php echo $tgl ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">VIA</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['pemilik_kendaraan_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">TELEPON</th>
                                                                        <td style="color: rgb(0,0,0);">0<?= $res['nomor_handphone_wo'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>TASK LIST</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary text-center" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 60%;">NAMA KEGIATAN</th>
                                                                        <th class="table-primary text-center" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 40%;">DIKERJAKAN / TIDAK DIKERJAKAN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>***** <?= $res3['nama_servis'] ?> *****</td>
                                                                        <td class="text-center">Dikerjakan</td>
                                                                    </tr>
                                                                    
                                                                    <?php if($res['olimesin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa - Oli Mesin</td>
                                                                        <td class="text-center"><?= $res2['olimesin'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olimesin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti - Oli Mesin <strong>Merk = <?= $res['merkolimesin'] ?></strong></td>
                                                                        <td class="text-center"><?= $res2['olimesin'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['olifilter'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Oli Filter<br></td>
                                                                        <td class="text-center"><?= $res2['olifilter'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olifilter'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Oli Filter<br></td>
                                                                        <td class="text-center"><?= $res2['olifilter'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanudara'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Saringan Udara<br></td>
                                                                        <td class="text-center"><?= $res2['saringanudara'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanudara'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Saringan Udara<br></td>
                                                                        <td class="text-center"><?= $res2['saringanudara'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['keregangankatup'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Keregangan Katup<br></td>
                                                                        <td class="text-center"><?= $res2['keregangankatup'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['keregangankatup'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Keregangan Katup<br></td>
                                                                        <td class="text-center"><?= $res2['keregangankatup'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanbensin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Saringan Bensin<br></td>
                                                                        <td class="text-center"><?= $res2['saringanbensin'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanbensin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Saringan Bensin<br></td>
                                                                        <td class="text-center"><?= $res2['saringanbensin'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['busitipenikel'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Busi (Tipe Nickel)<br></td>
                                                                        <td class="text-center"><?= $res2['busitipenikel'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['busitipenikel'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Busi (Tipe Nickel)<br></td>
                                                                        <td class="text-center"><?= $res2['busitipenikel'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['busitipeiridium'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Busi (Tipe Iridium)<br></td>
                                                                        <td class="text-center"><?= $res2['busitipeiridium'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['busitipeiridium'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Busi (Tipe Iridium)<br></td>
                                                                        <td class="text-center"><?= $res2['busitipeiridium'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['drivebelt'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Drive Belt<br></td>
                                                                        <td class="text-center"><?= $res2['drivebelt'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['drivebelt'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Drive Belt<br></td>
                                                                        <td class="text-center"><?= $res2['drivebelt'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['kecepatanstasioner'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Kecepatan Stasioner<br></td>
                                                                        <td class="text-center"><?= $res2['kecepatanstasioner'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['kecepatanstasioner'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Kecepatan Stasioner<br></td>
                                                                        <td class="text-center"><?= $res2['kecepatanstasioner'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['radiatorcoolant'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Radiator Coolant<br></td>
                                                                        <td class="text-center"><?= $res2['radiatorcoolant'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['radiatorcoolant'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Radiator Coolant<br></td>
                                                                        <td class="text-center"><?= $res2['radiatorcoolant'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['olitransmisi'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Oli Transmisi<br></td>
                                                                        <td class="text-center"><?= $res2['olitransmisi'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olitransmisi'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Oli Transmisi <strong>Merk = <?= $res['merkolitransmisi'] ?></strong><br></td>
                                                                        <td class="text-center"><?= $res2['olitransmisi'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['enginecleaner'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Engine Cleaner<br></td>
                                                                        <td class="text-center"><?= $res2['enginecleaner'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['enginecleaner'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Engine Cleaner<br></td>
                                                                        <td class="text-center"><?= $res2['enginecleaner'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['remdepanbelakang'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Rem Depan dan Belakang<br></td>
                                                                        <td class="text-center"><?= $res2['remdepanbelakang'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['remdepanbelakang'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Rem Depan dan Belakang<br></td>
                                                                        <td class="text-center"><?= $res2['remdepanbelakang'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['fluidarem'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Fluida Rem<br></td>
                                                                        <td class="text-center"><?= $res2['fluidarem'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['fluidarem'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Fluida Rem<br></td>
                                                                        <td class="text-center"><?= $res2['fluidarem'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['remparkir'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Rem Parkir<br></td>
                                                                        <td class="text-center"><?= $res2['remparkir'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['remparkir'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Rem Parkir<br></td>
                                                                        <td class="text-center"><?= $res2['remparkir'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanac'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Saringan AC<br></td>
                                                                        <td class="text-center"><?= $res2['saringanac'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanac'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Saringan AC<br></td>
                                                                        <td class="text-center"><?= $res2['saringanac'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['rotasiban'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Rotasi Ban<br></td>
                                                                        <td class="text-center"><?= $res2['rotasiban'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['rotasiban'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Rotasi Ban<br></td>
                                                                        <td class="text-center"><?= $res2['rotasiban'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['pintugeserlistrik'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Pintu Geser Listrik<br></td>
                                                                        <td class="text-center"><?= $res2['pintugeserlistrik'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['pintugeserlistrik'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Pintu Geser Listrik<br></td>
                                                                        <td class="text-center"><?= $res2['pintugeserlistrik'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['tierods'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Tie Rods, Gear Box Steering dan Boots<br></td>
                                                                        <td class="text-center"><?= $res2['tierods'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['tierods'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Tie Rods, Gear Box Steering dan Boots<br></td>
                                                                        <td class="text-center"><?= $res2['tierods'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['komponensuspensi'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Komponen Suspensi<br></td>
                                                                        <td class="text-center"><?= $res2['komponensuspensi'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['komponensuspensi'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Komponen Suspensi<br></td>
                                                                        <td class="text-center"><?= $res2['komponensuspensi'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['bootsdriveshaft'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Boots Driveshaft<br></td>
                                                                        <td class="text-center"><?= $res2['bootsdriveshaft'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['bootsdriveshaft'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Boots Driveshaft<br></td>
                                                                        <td class="text-center"><?= $res2['bootsdriveshaft'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['selangrempipa'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;<span style="background-color: var(--bs-table-bg);">Selang Rem dan Pipa (Termasuk ABS)</span><br></td>
                                                                        <td class="text-center"><?= $res2['selangrempipa'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['selangrempipa'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;<span style="background-color: var(--bs-table-bg);">Selang Rem dan Pipa (Termasuk ABS)</span><br></td>
                                                                        <td class="text-center"><?= $res2['selangrempipa'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['semuaketinggianlevel'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Semua Ketinggian Level Fluida dan Kondisinya<br></td>
                                                                        <td class="text-center"><?= $res2['semuaketinggianlevel'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['semuaketinggianlevel'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Semua Ketinggian Level Fluida dan Kondisinya<br></td>
                                                                        <td class="text-center"><?= $res2['semuaketinggianlevel'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['sistempembuangan'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Sistem Pembuangan<br></td>
                                                                        <td class="text-center"><?= $res2['sistempembuangan'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['sistempembuangan'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Sistem Pembuangan<br></td>
                                                                        <td class="text-center"><?= $res2['sistempembuangan'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['selangbensin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>Periksa -&nbsp;Selang Bensin dan Sambungannya<br></td>
                                                                        <td class="text-center"><?= $res2['selangbensin'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['selangbensin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>Ganti -&nbsp;Selang Bensin dan Sambungannya<br></td>
                                                                        <td class="text-center"><?= $res2['selangbensin'] ?><br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <tr></tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>SPARE PARTS &amp; BAHAN</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 60%;text-align: center;">NAMA PARTS</th>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);text-align: center;">DIKERJAKAN / TIDAK DIKERJAKAN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no = 1; foreach ($res4 as $a) : ?>
                                                                        <tr>
                                                                            <td><?= $a['nama_part']; ?></td>
                                                                            <td class="text-center"><?= $a['status']; ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>KELUHAN</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 60%;text-align: center;">KELUHAN</th>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);text-align: center;">DIKERJAKAN / TIDAK DIKERJAKAN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $res['keluhan'] ?></td>
                                                                        <td class="text-center"><?= $res2['keluhan'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>CATATAN KEPALA REGU</strong><br></label><input class="form-control" type="text" readonly value="<?= $res2['catatan_tasklist'] ?>"></div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><button class="btn btn-secondary btn-sm" type="button" style="margin-right: 10px;" onclick="window.print()"><i class="fas fa-print"></i>&nbsp; Print Work Order</button></div>
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
                    <div class="text-center my-auto copyright judul"><span>Copyright © TA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/for_fuel.js"></script>
    <script src="<?= base_url(''); ?>assets/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</body>

</html>