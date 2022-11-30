<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Info Work Order</title>
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
                    <h3 class="text-dark mb-1">INFO WORK ORDER</h3>
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
                                                                        <td class="table-primary" style="width: 170px;">NOMOR POLISI</td>
                                                                        <td><?= $res['nomor_polisi_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 140px;">MERK KENDARAAN</td>
                                                                        <td><?= $res['merk_kendaraan_wo'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary" style="width: 140px;">PAKET SERVIS</td>
                                                                        <td><?= $res2['nama_servis'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">TASK LIST</td>
                                                                        <td>
                                                                            <div class="table-responsive" style="border-color: rgb(0,0,0) !important;">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="table-warning text-center">JENIS KEGIATAN (Periksa / Ganti)</th>
                                                                                            <th class="table-warning text-center">NAMA KEGIATAN</th>
                                                                                            <th class="table-warning text-center">MERK (Khusus Oli)</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                    <?php if ($res['olimesin'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Oli Mesin</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['olimesin'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Oli Mesin</td>
                                                                                            <td><?= $res['merkolimesin'] ?></td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['olifilter'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Oli Filter</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['olifilter'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Oli Filter</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['saringanudara'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Saringan Udara</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['saringanudara'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Saringan Udara</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['keregangankatup'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Keregangan Katup</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['keregangankatup'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Keregangan Katup</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['saringanbensin'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Saringan Bensin</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['saringanbensin'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Saringan Bensin</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['busitipenikel'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Busi (Tipe Nickel)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['busitipenikel'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Busi (Tipe Nickel)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['busitipeiridium'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Busi (Tipe Iridium)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['busitipeiridium'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Busi (Tipe Iridium)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['drivebelt'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Drive Belt</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['drivebelt'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Drive Belt</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['kecepatanstasioner'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Kecepatan Stasioner</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['kecepatanstasioner'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Kecepatan Stasioner</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['radiatorcoolant'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Radiator Coolant</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['radiatorcoolant'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Radiator Coolant</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['olitransmisi'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Oli Transmisi</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['olitransmisi'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Oli Transmisi</td>
                                                                                            <td><?= $res['merkolitransmisi'] ?></td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['enginecleaner'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Engine Cleaner</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['enginecleaner'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Engine Cleaner</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['remdepanbelakang'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Rem Depan dan Belakang</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['remdepanbelakang'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Rem Depan dan Belakang</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['fluidarem'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Fluida Rem</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['fluidarem'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Fluida Rem</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['remparkir'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Rem Parkir</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['remparkir'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Rem Parkir</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['saringanac'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Saringan AC</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['saringanac'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Saringan AC</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['rotasiban'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Rotasi Ban</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['rotasiban'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Rotasi Ban</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['pintugeserlistrik'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Pintu Geser Listrik</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['pintugeserlistrik'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Pintu Geser Listrik</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['tierods'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Tie Rods, Gear Box Steering dan Boots</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['tierods'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Tie Rods, Gear Box Steering dan Boots</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['komponensuspensi'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Komponen Suspensi</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['komponensuspensi'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Komponen Suspensi</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['bootsdriveshaft'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Boots Driveshaft</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['bootsdriveshaft'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Boots Driveshaft</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['selangrempipa'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Selang Rem dan Pipa (Termasuk ABS)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['selangrempipa'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Selang Rem dan Pipa (Termasuk ABS)</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['semuaketinggianlevel'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Semua Ketinggian Level Fluida dan Kondisinya</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['semuaketinggianlevel'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Semua Ketinggian Level Fluida dan Kondisinya</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['sistempembuangan'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Sistem Pembuangan</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['sistempembuangan'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Sistem Pembuangan</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>

                                                                                    <?php if ($res['selangbensin'] == "p") : ?>
                                                                                        <tr>
                                                                                            <td>Periksa</td>
                                                                                            <td>Selang Bensin dan Sambungannya</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($res['selangbensin'] == "g") : ?>
                                                                                        <tr>
                                                                                            <td>Ganti</td>
                                                                                            <td>Selang Bensin dan Sambungannya</td>
                                                                                            <td>-</td>
                                                                                        </tr>
                                                                                    <?php endif; ?>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">GANTI PART</td>
                                                                        <td>
                                                                        <?php $no = 1; foreach ($part as $p) : ?>
                                                                            <?= $no++; ?>. <?= $p['nama_part']; ?><br>
                                                                        <?php endforeach; ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">KELUHAN</td>
                                                                        <td><?= $res['keluhan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="table-primary">ESTIMASI SELESAI</td>
                                                                        <td><?= $res['estimasiselesai'] ?></td>
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