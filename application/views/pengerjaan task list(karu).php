<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pengerjaan Task List</title>
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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
</head>

<body id="page-top">
<input type="hidden" id="base_path" value="<?php echo base_url(); ?>"/>
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
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="steps-progressbar">
                                        <ul>
                                            <li class="previous">PENYERAHAN WORKORDER</li>
                                            <li class="active">PENGERJAAN TASK LIST</li>
                                            <li>FORM QUICK MAINTENANCE CHECKSHEET</li>
                                            <li>CUCI KENDARAAN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-dark mb-1">PENGERJAAN TASK LIST</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Task List "<?= $res['merk_kendaraan_wo'] ?> - <?= $res['nomor_polisi_wo'] ?>"</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>NOMOR POLISI</strong><br></label><input class="form-control" type="text" id="nomorpolisi" name="nomorpolisi" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res['nomor_polisi_wo'] ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>MERK KENDARAAN</strong><br></label><input class="form-control" type="text" id="username-3" name="merkkendaraan" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res['merk_kendaraan_wo'] ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>PAKET SERVIS</strong><br></label><input class="form-control" type="text" id="username-1" name="paketservis" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res2['nama_servis'] ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>INFORMASI SERVIS &amp; KENDARAAN</strong><br></label></div><a class="btn btn-success" type="button" href="<?= base_url('c_karu/infokendaraan/').$res['nomor_polisi_wo'] ?>" style="margin-top: -15px;margin-bottom: 15px;"><i class="fas fa-search"></i>&nbsp;Lihat Detail Kendaraan</a><a class="btn btn-success" type="button" href="<?= base_url('c_karu/infopemeriksaan/').$res['nomor_polisi_wo'] ?>" style="margin-top: -15px;margin-right: 10px;margin-left: 10px;margin-bottom: 15px;"><i class="fas fa-search"></i>&nbsp;Lihat Form Pemeriksaan</a><a class="btn btn-success" type="button" href="<?= base_url('c_karu/infoworkorder/').$res['nomor_polisi_wo'] ?>" style="margin-top: -15px;margin-bottom: 15px;"><i class="fas fa-search"></i>&nbsp;Lihat Work Order</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>TASK LIST</strong><br></label>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">JENIS KEGIATAN (GANTI/PERIKSA)</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA KEGIATAN</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">DIKERJAKAN</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php if ($res['olimesin'] == "p") : ?>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;">Periksa</td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olimesin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olimesin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['olimesin'] == "g") : ?>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;">Ganti</td>
                                                                                <td>Oli Mesin, <strong>MERK = <?= $res['merkolimesin'] ?></strong></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olimesin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olimesin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['olifilter'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Oli Filter</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olifilter"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olifilter"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['olifilter'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Oli Filter</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olifilter"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olifilter"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['saringanudara'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Saringan Udara</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanudara"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanudara"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['saringanudara'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Saringan Udara</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanudara"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanudara"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['keregangankatup'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Keregangan Katup</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="keregangankatup"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="keregangankatup"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['keregangankatup'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Keregangan Katup</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="keregangankatup"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="keregangankatup"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['saringanbensin'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Saringan Bensin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanbensin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanbensin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['saringanbensin'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Saringan Bensin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanbensin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanbensin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['busitipenikel'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Busi (Tipe Nickel)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="busitipenikel"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="busitipenikel"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['busitipenikel'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Busi (Tipe Nickel)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="busitipenikel"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="busitipenikel"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['busitipeiridium'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Busi (Tipe Iridium)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="busitipeiridium"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="busitipeiridium"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['busitipeiridium'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Busi (Tipe Iridium)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="busitipeiridium"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="busitipeiridium"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['drivebelt'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Drive Belt</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="drivebelt"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="drivebelt"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['drivebelt'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Drive Belt</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="drivebelt"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="drivebelt"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['kecepatanstasioner'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Kecepatan Stasioner</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="kecepatanstasioner"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="kecepatanstasioner"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['kecepatanstasioner'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Kecepatan Stasioner</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="kecepatanstasioner"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="kecepatanstasioner"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['radiatorcoolant'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Radiator Coolant</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="radiatorcoolant"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="radiatorcoolant"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['radiatorcoolant'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Radiator Coolant</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="radiatorcoolant"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="radiatorcoolant"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['olitransmisi'] == "p") : ?>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;">Periksa</td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olitransmisi"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olitransmisi"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['olitransmisi'] == "g") : ?>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;">Ganti</td>
                                                                                <td>Oli Transmisi, <strong>MERK = <?= $res['merkolitransmisi'] ?></strong></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="olitransmisi"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="olitransmisi"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['enginecleaner'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Engine Cleaner</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="enginecleaner"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="enginecleaner"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['enginecleaner'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Engine Cleaner</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="enginecleaner"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="enginecleaner"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['remdepanbelakang'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Rem Depan dan Belakang</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="remdepanbelakang"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="remdepanbelakang"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['remdepanbelakang'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Rem Depan dan Belakang</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="remdepanbelakang"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="remdepanbelakang"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['fluidarem'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Fluida Rem</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="fluidarem"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="fluidarem"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['fluidarem'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Fluida Rem</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="fluidarem"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="fluidarem"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['remparkir'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Rem Parkir</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="remparkir"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="remparkir"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['remparkir'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Rem Parkir</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="remparkir"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="remparkir"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['saringanac'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Saringan AC</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanac"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanac"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['saringanac'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Saringan AC</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="saringanac"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="saringanac"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['rotasiban'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Rotasi Ban</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="rotasiban"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rotasiban"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['rotasiban'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Rotasi Ban</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="rotasiban"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rotasiban"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['pintugeserlistrik'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Pintu Geser Listrik</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="pintugeserlistrik"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pintugeserlistrik"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['pintugeserlistrik'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Pintu Geser Listrik</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="pintugeserlistrik"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pintugeserlistrik"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['tierods'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Tie Rods, Gear, Gear Steering dan Boots</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="tierods"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="tierods"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['tierods'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Tie Rods, Gear, Gear Steering dan Boots</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="tierods"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="tierods"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['komponensuspensi'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Komponen Suspensi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="komponensuspensi"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="komponensuspensi"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['komponensuspensi'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Komponen Suspensi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="komponensuspensi"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="komponensuspensi"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['bootsdriveshaft'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Boots Driveshaft</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="bootsdriveshaft"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="bootsdriveshaft"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['bootsdriveshaft'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Boots Driveshaft</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="bootsdriveshaft"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="bootsdriveshaft"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['selangrempipa'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Selang Rem dan Pipa (Termasuk ABS)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="selangrempipa"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="selangrempipa"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['selangrempipa'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Selang Rem dan Pipa (Termasuk ABS)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="selangrempipa"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="selangrempipa"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['semuaketinggianlevel'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Semua Ketinggian Level Fluida dan Kondisinya</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="semuaketinggianlevel"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="semuaketinggianlevel"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['semuaketinggianlevel'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Semua Ketinggian Level Fluida dan Kondisinya</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="semuaketinggianlevel"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="semuaketinggianlevel"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['sistempembuangan'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Sistem Pembuangan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="sistempembuangan"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="sistempembuangan"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['sistempembuangan'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Sistem Pembuangan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="sistempembuangan"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="sistempembuangan"></td>
                                                                            </tr>
                                                                        <?php endif; ?>

                                                                        <?php if ($res['selangbensin'] == "p") : ?>
                                                                            <tr>
                                                                                <td>Periksa</td>
                                                                                <td>Selang Bensin dan Sambungannya</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="selangbensin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="selangbensin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
                                                                        <?php if ($res['selangbensin'] == "g") : ?>
                                                                            <tr>
                                                                                <td>Ganti</td>
                                                                                <td>Selang Bensin dan Sambungannya</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="selangbensin"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="selangbensin"></td>
                                                                            </tr>
                                                                        <?php endif; ?>
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
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>GANTI PART</strong><br></label>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA PART</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">DIKERJAKAN</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody class="show_part">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>KELUHAN</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">KELUHAN</th>
                                                                        <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">DIKERJAKAN</th>
                                                                        <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">TIDAK DIKERJAKAN</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><?= $res['keluhan'] ?></td>
                                                                        <td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="keluhan"></td>
                                                                        <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="keluhan"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>CATATAN TASK LIST (JIKA ADA)</strong><br /></label><input class="form-control" type="text" placeholder="Masukan Catatan Task List" name="catatan" /></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>REQUEST PENGGANTIAN / PENAMBAHAN PART (JIKA ADA)</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA PART REQUEST</th>
                                                                        <th class="table-primary text-center text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">CATATAN&nbsp; REQUEST</th>
                                                                        <th class="table-primary text-center text-bg-primary" style="width: 200px;color: rgb(255,255,255);background: rgb(65,111,255);">ACTION</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="tablerequest">
                                                                    <?php if($adarequest == "benar"){ ?>
                                                                        <tr>
                                                                            <td>
                                                                            <?php $no = 1; foreach ($res3 as $r) : ?>
                                                                                <?= $no++; ?>. <?= $r['nama_part']; ?></br>
                                                                            <?php endforeach; ?>
                                                                            </td>
                                                                            <td><?= $res4['catatan_karu'] ?></td>
                                                                            <td><button class="btn btn-secondary" type="button" disabled>REQUEST DALAM KONFIRMASI SERVICE ADVISOR</button></td>

                                                                        </tr>
                                                                    <?php } ?>
                                                                    <?php if($adarequest == "salah"){ ?>
                                                                    <tr>
                                                                        <td>
                                                                        <div id="autocomplete_div">
                                                                            <div class="row jumlah" id="row_1" style="margin-top: 5px;margin-bottom: 5px;">
                                                                                <div class="col-10"><input class="form-control autocomplete_txt" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" data-nomor="1" name="nama_parts[]" id="namaparts_1" autocomplete="off"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_1" placeholder="Harga Part" autocomplete="off" readonly></div>
                                                                                <div class="col text-center"><button class="btn btn-success tambah-form" type="button"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></button></div>
                                                                            </div>
                                                                        </div>
                                                                        </td>
                                                                        <td><input class="form-control catatankaru" placeholder="Isi Catatan Untuk Service Advisor" name="catatankaru" type="text" style="border-color: rgb(0,0,0);" autocomplete="off"></td>
                                                                        <td class="text-center"><button class="btn btn-primary btn-request" type="button">REQUEST</button></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row visually-hidden" id="tandatangan">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Disetujui Service Advisor</strong><br></label></div><textarea class="form-control" style="height: 155px;"></textarea>
                                                </div>
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Disetujui Pelanggan</strong><br></label></div><textarea class="form-control" style="height: 155px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-play"></i>&nbsp; Simpan Data & Lanjut Progress Selanjutnya</button></div>
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
            show_part();
 
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
                if(data.message === 'accept'+nomorpitstopkaru){
                    var html = '';
                    alert("Request anda telah diterima! Harap lanjutkan pekerjaan.")
                    html += '<tr><td><div id="autocomplete_div"><div class="row jumlah" id="row_1" style="margin-top: 5px;margin-bottom: 5px;"><div class="col-10"><input class="form-control autocomplete_txt" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" data-nomor="1" name="nama_parts[]" id="namaparts_1" autocomplete="off"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_1" placeholder="Harga Part" autocomplete="off" readonly></div><div class="col text-center"><button class="btn btn-success tambah-form" type="button"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></button></div></div></div></td><td><input class="form-control catatankaru" placeholder="Isi Catatan Untuk Service Advisor" name="catatankaru" type="text" style="border-color: rgb(0,0,0);" autocomplete="off"></td><td class="text-center"><button class="btn btn-primary btn-request" type="button">REQUEST</button></td></tr>';
                    $('.tablerequest').html(html);
                    $(document).ready(function(){
                        var addBtn, rowcount, tableBody, imgPath, basePath;

                        addBtn = $(".tambah-form"); //dari button di view id="addNew"
                        rowcount = $("#autocomplete_div .jumlah").length+1; 
                        tableBody = $("#autocomplete_div");
                        imgPath = $("#imgPath").val();
                        basePath = $("#base_path").val();

                        function formHtml() {
                            html ='<div class="row jumlah" id="row_'+rowcount+'" style="margin-top: 5px;margin-bottom: 5px;">'
                            html += '<div class="col-10"><input class="form-control autocomplete_txt" data-nomor="'+rowcount+'" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" name="nama_parts[]" id="namaparts_'+rowcount+'"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_'+rowcount+'" placeholder="Harga Part" autocomplete="off" readonly></div>'
                            html += '<div class="col text-center"><button class="btn btn-danger delete_row" id="delete_'+rowcount+'" type="button"><i class="fas fa-trash"></i></button></div>'
                            html += '</div>'
                            rowcount++;
                            return html;
                        }

                        function addNewRow() {
                            var html = formHtml();
                            console.log(html);
                            tableBody.append( html );
                        }

                        function deleteRow() {
                            var id, rowNo;
                            id = $(this).attr('id');
                            idArr = id.split("_");
                            rowNo = idArr[idArr.length - 1];
                            $("#row_"+rowNo).remove();
                        }

                        function handleAutocomplete(){
                            var fieldName, currentEle;
                            currentEle = $(this);

                            fieldName = currentEle.data('field-name');
                            if(typeof fieldName === 'undefined') {
                                return false;
                            }

                            currentEle.autocomplete({
                                source: function (data,cb){
                                    $.ajax({
                                        url: basePath+'c_karu/getParts',
                                        method: 'GET',
                                        dataType: 'json',
                                        data: {
                                            name: data.term,
                                            fieldName: fieldName
                                        },
                                        success: function(res){
                                            var result;
                                            result = [
                                                {
                                                    label: 'There is no matching record found for "'+data.term+"'",
                                                    value: ''
                                                }
                                            ];
                                            console.log("before formart", res);

                                            if(res.length){
                                                result = $.map(res, function(obj){
                                                    return {
                                                        label: obj[fieldName],
                                                        value: obj[fieldName],
                                                        data: obj
                                                    };
                                                });
                                            }
                                            console.log("After formart", result);
                                            cb(result);
                                        }
                                    });
                                },
                                autoFocus: true,
                                minLength: 1,
                                select: function( event, selectedData ) {
                                    console.log(selectedData);
                                    if(selectedData && selectedData.item && selectedData.item.data){
                                        var rowNo, data;
                                        rowNo = currentEle.data('nomor');
                                        data = selectedData.item.data;
                                        $('#namaparts_'+rowNo).val(data.nama_parts);
                                        $('#harga_'+rowNo).val(data.harga);
                                        // $('#phone_code_'+rowNo).val(data.phonecode);
                                        // $('#country_code_'+rowNo).val(data.iso3);
                                    }
                                }
                            });
                        }

                        function registerEvents() {
                            addBtn.on("click", addNewRow);
                            $(document).on('click', '.delete_row', deleteRow);
                            $(document).on('focus', '.autocomplete_txt', handleAutocomplete);
                        }
                        registerEvents();
                    });
                    $('.btn-request').on('click',function(){
                        // $('form div div input[name=nama_parts').each(function(){
                        //     var mydata = $(this).val();
                        // });
                        var nama_parts = [];
                        $('input[name="nama_parts[]"]').each( function() {
                            nama_parts.push(this.value);
                        });
                        var harga = [];
                        $('input[name="harga[]"]').each( function() {
                            harga.push(this.value);
                        });
                        var catatankaru = $('.catatankaru').val();
                        var nomorpolisi = $('#nomorpolisi').val();
                        $.ajax({
                            url    : '<?php echo base_url("c_karu/sendPartRequest");?>',
                            method : 'POST',
                            data   : {nama_parts: nama_parts, catatankaru: catatankaru, nomorpolisi: nomorpolisi, harga: harga},
                            success: function(data){
                                var count = 1;
                                var html = '<tr><td>';
                                for(i=0; i<nama_parts.length; i++){
                                    html += count++ + '. ' + nama_parts[i] + '</br>'
                                }
                                html += '</td><td>'+ catatankaru +'</td><td><button class="btn btn-secondary" type="button" disabled>REQUEST DALAM KONFIRMASI SERVICE ADVISOR</button></td></tr>';
                                $('.tablerequest').html(html);
                            },
                            error: function(result) {
                                alert('error');
                            }
                        });
                    });
                    show_part();

                }
                if(data.message === 'reject'+nomorpitstopkaru){
                    var html = '';
                    alert("Request anda telah ditolak! Harap lanjutkan pekerjaan.")
                    html += '<tr><td><div id="autocomplete_div"><div class="row jumlah" id="row_1" style="margin-top: 5px;margin-bottom: 5px;"><div class="col-10"><input class="form-control autocomplete_txt" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" data-nomor="1" name="nama_parts[]" id="namaparts_1" autocomplete="off"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_1" placeholder="Harga Part" autocomplete="off" readonly></div><div class="col text-center"><button class="btn btn-success tambah-form" type="button"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></button></div></div></div></td><td><input class="form-control catatankaru" placeholder="Isi Catatan Untuk Service Advisor" name="catatankaru" type="text" style="border-color: rgb(0,0,0);" autocomplete="off"></td><td class="text-center"><button class="btn btn-primary btn-request" type="button">REQUEST</button></td></tr>';
                    $('.tablerequest').html(html);
                    $(document).ready(function(){
                        var addBtn, rowcount, tableBody, imgPath, basePath;

                        addBtn = $(".tambah-form"); //dari button di view id="addNew"
                        rowcount = $("#autocomplete_div .jumlah").length+1; 
                        tableBody = $("#autocomplete_div");
                        imgPath = $("#imgPath").val();
                        basePath = $("#base_path").val();

                        function formHtml() {
                            html ='<div class="row jumlah" id="row_'+rowcount+'" style="margin-top: 5px;margin-bottom: 5px;">'
                            html += '<div class="col-10"><input class="form-control autocomplete_txt" data-nomor="'+rowcount+'" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" name="nama_parts[]" id="namaparts_'+rowcount+'"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_'+rowcount+'" placeholder="Harga Part" autocomplete="off" readonly></div>'
                            html += '<div class="col text-center"><button class="btn btn-danger delete_row" id="delete_'+rowcount+'" type="button"><i class="fas fa-trash"></i></button></div>'
                            html += '</div>'
                            rowcount++;
                            return html;
                        }

                        function addNewRow() {
                            var html = formHtml();
                            console.log(html);
                            tableBody.append( html );
                        }

                        function deleteRow() {
                            var id, rowNo;
                            id = $(this).attr('id');
                            idArr = id.split("_");
                            rowNo = idArr[idArr.length - 1];
                            $("#row_"+rowNo).remove();
                        }

                        function handleAutocomplete(){
                            var fieldName, currentEle;
                            currentEle = $(this);

                            fieldName = currentEle.data('field-name');
                            if(typeof fieldName === 'undefined') {
                                return false;
                            }

                            currentEle.autocomplete({
                                source: function (data,cb){
                                    $.ajax({
                                        url: basePath+'c_karu/getParts',
                                        method: 'GET',
                                        dataType: 'json',
                                        data: {
                                            name: data.term,
                                            fieldName: fieldName
                                        },
                                        success: function(res){
                                            var result;
                                            result = [
                                                {
                                                    label: 'There is no matching record found for "'+data.term+"'",
                                                    value: ''
                                                }
                                            ];
                                            console.log("before formart", res);

                                            if(res.length){
                                                result = $.map(res, function(obj){
                                                    return {
                                                        label: obj[fieldName],
                                                        value: obj[fieldName],
                                                        data: obj
                                                    };
                                                });
                                            }
                                            console.log("After formart", result);
                                            cb(result);
                                        }
                                    });
                                },
                                autoFocus: true,
                                minLength: 1,
                                select: function( event, selectedData ) {
                                    console.log(selectedData);
                                    if(selectedData && selectedData.item && selectedData.item.data){
                                        var rowNo, data;
                                        rowNo = currentEle.data('nomor');
                                        data = selectedData.item.data;
                                        $('#namaparts_'+rowNo).val(data.nama_parts);
                                        $('#harga_'+rowNo).val(data.harga);
                                        // $('#phone_code_'+rowNo).val(data.phonecode);
                                        // $('#country_code_'+rowNo).val(data.iso3);
                                    }
                                }
                            });
                        }

                        function registerEvents() {
                            addBtn.on("click", addNewRow);
                            $(document).on('click', '.delete_row', deleteRow);
                            $(document).on('focus', '.autocomplete_txt', handleAutocomplete);
                        }
                        registerEvents();
                    });
                    $('.btn-request').on('click',function(){
                        // $('form div div input[name=nama_parts').each(function(){
                        //     var mydata = $(this).val();
                        // });
                        var nama_parts = [];
                        $('input[name="nama_parts[]"]').each( function() {
                            nama_parts.push(this.value);
                        });
                        var harga = [];
                        $('input[name="harga[]"]').each( function() {
                            harga.push(this.value);
                        });
                        var catatankaru = $('.catatankaru').val();
                        var nomorpolisi = $('#nomorpolisi').val();
                        $.ajax({
                            url    : '<?php echo base_url("c_karu/sendPartRequest");?>',
                            method : 'POST',
                            data   : {nama_parts: nama_parts, catatankaru: catatankaru, nomorpolisi: nomorpolisi, harga: harga},
                            success: function(data){
                                var count = 1;
                                var html = '<tr><td>';
                                for(i=0; i<nama_parts.length; i++){
                                    html += count++ + '. ' + nama_parts[i] + '</br>'
                                }
                                html += '</td><td>'+ catatankaru +'</td><td><button class="btn btn-secondary" type="button" disabled>REQUEST DALAM KONFIRMASI SERVICE ADVISOR</button></td></tr>';
                                $('.tablerequest').html(html);
                            },
                            error: function(result) {
                                alert('error');
                            }
                        });
                    });
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

            // FUNCTION SHOW PART
            function show_part(){
                var nomorpolisi = $("#nomorpolisi").val();
                $.ajax({
                    url   : '<?php echo site_url("c_karu/get_history_part/");?>'+nomorpolisi,
                    type  : 'GET',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var count = 1;
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+ data[i].nama_part +'<input type="hidden" value="'+ data[i].nama_part +'" name="namaparts[]"></td>'+
                                    '<td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="namaparts'+ count +'"></td>'+
                                    '<td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="namaparts'+ count++ +'"></td>'+
                                    '</tr>';
                        }
                        $('.show_part').html(html);
                    }
                });
            }
            // CREATE NEW PRODUCT
            $('.btn-request').on('click',function(){
                // $('form div div input[name=nama_parts').each(function(){
                //     var mydata = $(this).val();
                // });
                var nama_parts = [];
                $('input[name="nama_parts[]"]').each( function() {
                    nama_parts.push(this.value);
                });
                var harga = [];
                $('input[name="harga[]"]').each( function() {
                    harga.push(this.value);
                });
                var catatankaru = $('.catatankaru').val();
                var nomorpolisi = $('#nomorpolisi').val();
                $.ajax({
                    url    : '<?php echo base_url("c_karu/sendPartRequest");?>',
                    method : 'POST',
                    data   : {nama_parts: nama_parts, catatankaru: catatankaru, nomorpolisi: nomorpolisi, harga: harga},
                    success: function(data){
                        var count = 1;
                        var html = '<tr><td>';
                        for(i=0; i<nama_parts.length; i++){
                            html += count++ + '. ' + nama_parts[i] + '</br>'
                        }
                        html += '</td><td>'+ catatankaru +'</td><td><button class="btn btn-secondary" type="button" disabled>REQUEST DALAM KONFIRMASI SERVICE ADVISOR</button></td></tr>';
                        $('.tablerequest').html(html);
                    },
                    error: function(result) {
                        alert('error');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            var addBtn, rowcount, tableBody, imgPath, basePath;

            addBtn = $(".tambah-form"); //dari button di view id="addNew"
            rowcount = $("#autocomplete_div .jumlah").length+1; 
            tableBody = $("#autocomplete_div");
            imgPath = $("#imgPath").val();
            basePath = $("#base_path").val();

            function formHtml() {
                html ='<div class="row jumlah" id="row_'+rowcount+'" style="margin-top: 5px;margin-bottom: 5px;">'
                html += '<div class="col-10"><input class="form-control autocomplete_txt" data-nomor="'+rowcount+'" type="text" style="border-color: rgb(0,0,0);" placeholder="Isi Tambahan Part" data-field-name="nama_parts" data-type="nama_parts" name="nama_parts[]" id="namaparts_'+rowcount+'"><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_'+rowcount+'" placeholder="Harga Part" autocomplete="off" readonly></div>'
                html += '<div class="col text-center"><button class="btn btn-danger delete_row" id="delete_'+rowcount+'" type="button"><i class="fas fa-trash"></i></button></div>'
                html += '</div>'
                rowcount++;
                return html;
            }

            function addNewRow() {
                var html = formHtml();
                console.log(html);
                tableBody.append( html );
            }

            function deleteRow() {
                var id, rowNo;
                id = $(this).attr('id');
                idArr = id.split("_");
                rowNo = idArr[idArr.length - 1];
                $("#row_"+rowNo).remove();
            }

            function handleAutocomplete(){
                var fieldName, currentEle;
                currentEle = $(this);

                fieldName = currentEle.data('field-name');
                if(typeof fieldName === 'undefined') {
                    return false;
                }

                currentEle.autocomplete({
                    source: function (data,cb){
                        $.ajax({
                            url: basePath+'c_karu/getParts',
                            method: 'GET',
                            dataType: 'json',
                            data: {
                                name: data.term,
                                fieldName: fieldName
                            },
                            success: function(res){
                                var result;
                                result = [
                                    {
                                        label: 'There is no matching record found for "'+data.term+"'",
                                        value: ''
                                    }
                                ];
                                console.log("before formart", res);

                                if(res.length){
                                    result = $.map(res, function(obj){
                                        return {
                                            label: obj[fieldName],
                                            value: obj[fieldName],
                                            data: obj
                                        };
                                    });
                                }
                                console.log("After formart", result);
                                cb(result);
                            }
                        });
                    },
                    autoFocus: true,
                    minLength: 1,
                    select: function( event, selectedData ) {
                        console.log(selectedData);
                        if(selectedData && selectedData.item && selectedData.item.data){
                            var rowNo, data;
                            rowNo = currentEle.data('nomor');
                            data = selectedData.item.data;
                            $('#namaparts_'+rowNo).val(data.nama_parts);
                            $('#harga_'+rowNo).val(data.harga);
                            // $('#phone_code_'+rowNo).val(data.phonecode);
                            // $('#country_code_'+rowNo).val(data.iso3);
                        }
                    }
                });
            }

            function registerEvents() {
                addBtn.on("click", addNewRow);
                $(document).on('click', '.delete_row', deleteRow);
                $(document).on('focus', '.autocomplete_txt', handleAutocomplete);
            }
            registerEvents();
        });
    </script>
</body>

</html>