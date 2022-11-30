<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Quick Maintenance Checksheet</title>
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
                                            <li class="previous">PENGERJAAN TASK LIST</li>
                                            <li class="active">FORM QUICK MAINTENANCE CHECKSHEET</li>
                                            <li>CUCI KENDARAAN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-dark mb-1">QUICK MAINTENANCE CHECKSHEET</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Quick Maintenance Checksheet "<?= $res['merk_kendaraan_wo'] ?> - <?= $res['nomor_polisi_wo'] ?>"</p>
                                        <input type="hidden" id="nomorpolisi" value="<?= $res['nomor_polisi_wo'] ?>">
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>TEKNISI A</strong><br></label><input class="form-control" type="text" value="<?php $mymontir = $this->session->userdata('teknisi_a'); echo $mymontir; ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>TEKNISI B</strong><br></label><input class="form-control" type="text" value="<?php $mymontir = $this->session->userdata('teknisi_b'); echo $mymontir; ?>" readonly="" style="background: rgb(234,236,244);"></div>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. SEMUA LAMPU INDIKATOR DASHBOARD DAN KABIN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bekerja NORMAL</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. WIPER DAN WASHER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerakan Wiper</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Arah dan Banyaknya Semprotan Air</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. KLAKSON</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Operasi dan Suara</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. OPERASI SISTEM ELEKTRIK</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Window</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Dock Lock</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Mirror</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Canceller Lampu Sein</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>A/C</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_9"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Interior</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_10"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Sun Roof</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_11"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Power Sliding Door</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_12"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. TIRE PRESSURE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Depan Kanan"</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_13"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Depan Kiri"<br></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_14"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Belakang Kanan"<br></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_15"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban "Belakang Kiri"<br></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_16"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Tekanan Angin Ban Cadangan<br></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_17"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>6. BOOSTER REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Kebocoran</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_18"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerak Bebas Pedal</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_19"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_19"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_19"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>7. RODA KEMUDI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Putaran dan Gerak Bebas</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_20"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_20"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_20"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>8. REM PARKIR / TANGAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Jumlah Klik<input class="form-control" type="number" style="border-color: rgb(0,0,0);" placeholder="Isi Jumlah Klik" name="jumlah_klik"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_21"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_21"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_21"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>9. FILTER A/C</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="dk_a_22"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="dk_a_22"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="dk_a_22"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">RUANG MESIN - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. SEMUA LAMPU EKSTERIOR</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Bagian Depan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lampu Bagian Belakang</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. WIPER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Karet Wiper</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. KONDISI DAN LEVEL SEMUA CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Power Steering</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Minyak Rem</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Radiator Coolant</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Wiper</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_9"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. DRIVE BELT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak, Kekencangan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_10"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. PEMERIKSAAAN PINTU</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan Kanan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_11"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Belakang Kanan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_12"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan Kiri</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_13"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Belakang Kiri</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_14"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>6. BATERAI / AKI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Karat</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_15"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kekencangan Terminal</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_16"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Indicator Cairan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_17"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>7. KEBOCORAN OLI DAN COOLANT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Cover Cylinder Head</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_18"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Master Cylinder Rem</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_19"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_19"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_19"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pompa Power Steering</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_20"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_20"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_20"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Radiator</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_21"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_21"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_21"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>8. SARINGAN UDARA</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_22"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_22"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_22"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_23"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_23"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_23"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>9. BUSI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_24"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_24"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_24"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>10. BRAKE BLEEDER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pasang Brake Bleeder</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="rm_b_25"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="rm_b_25"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="rm_b_25"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek, Retak, Aus Tidak Merata, Bulging</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Bearing Roda</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Rem, Macet atau Tidak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. REM DEPAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beri Grease</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kanan<input class="form-control" type="number" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" name="pmt_a_ketebalanpadkanan"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kiri<input class="form-control" type="number" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" name="pmt_a_ketebalanpadkiri"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. DISK / DRUM BRAKE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_9"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper =&gt; Torsi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_10"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. SELANG / PIPA REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek / Retak / Penyok</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_11"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. BUSHING DAN ARM SUSPENSION</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_12"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>6. SHOCKABSORBER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Oli</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_13"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>7. PERIKSA GERAKAN, RETAK DAN KEBOCORAN GREASE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Knuckle</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_14"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Stabilizer</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_15"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Tie Rod</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_16"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>8. SILANG BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan &lt;=&gt; Belakang</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_17"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>9. BLEEDING REM SEMUA RODA</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bleeding Rem Semua Roda</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_a_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_a_18"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_a_18"></td>
                                                                            </tr>
                                                                            <tr></tr>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI TENGAH (RODA DEPAN : KANAN dan KIRI) - <br>TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek, Retak, Aus Tidak Merata, Bulging</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Pemeriksaan Bearing Roda</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Rem, Macet atau Tidak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. REM BELAKANG</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bersihkan</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beri Grease</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kanan<input class="form-control" type="number" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" name="pmt_b_ketebalanpadkanan"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ketebalan Pad / Shoe Kiri<input class="form-control" type="number" placeholder="Isi Ketebalan (mm)" style="border-color: rgb(0,0,0);" name="pmt_b_ketebalanpadkiri"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. DISK / DRUM BRAKE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Aus Tidak Merata</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_9"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper =&gt; Torsi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_10"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. SELANG / PIPA REM</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Robek / Retak / Penyok</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_11"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_11"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. BUSHING DAN ARM SUSPENSION</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Rusak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_12"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_12"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>6. SHOCKABSORBER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Oli</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_13"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_13"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>7. PERIKSA GERAKAN, RETAK DAN KEBOCORAN GREASE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Knuckle</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_14"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_14"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Stabilizer</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_15"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_15"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Joint Tie Rod</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_16"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_16"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>8. SILANG BAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Depan &lt;=&gt; Belakang</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmt_b_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmt_b_17"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmt_b_17"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. STABILIZER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Gerakan, Rusak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. KEKENCANGAN BAUT BAGIAN BAWAH</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Kaliper</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Suspensi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Baut Arm, Mounting</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. KARET DRIVESHAFT / KOPEL</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Bocor</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. KARET STEERING GEAR BOX</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Retak, Bocor</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. PIPA EXHAUST</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Mounting (Retak, Rusak)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kekencangan Baut - Baut</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bunyi Dalam Knalpot</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_9"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>6. Saluran Bahan Bakar dan Rem</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Bocor, Rusak</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_a_10"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_a_10"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (AWAL) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. PEMBUANGAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. PENGGANTIAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Filter =&gt; Torsi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Washer Drain (Mesin/Transmisi) =&gt; Torsi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. PEMERIKSAAN KEBOCORAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_7"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Power Steering</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_8"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_8"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma_b_9"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma_b_9"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. BAUT RODA (4 RODA)</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Torsi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. VACCUM INTERIOR MOBIL</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Vaccum Interior Mobil</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. PANASKAN ENGINE</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Sampai Kipas Menyala</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Matikan Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. GEARSHIFT</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Check Gearshift</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>5. FILTER BENSIN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Ganti Filter Bensin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_a_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_a_6"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI BAWAH - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. RELEASE BRAKE BLEEDER</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Lepaskan Brake Bleeder</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>2. PENGISIAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin, <strong>Merk = 
                                                                                <?php if($res['merkolimesin'] == NULL){ ?>
                                                                                    Tidak Ganti Oli
                                                                                <?php } else { ?>
                                                                                    <?= $res['merkolimesin'] ?>
                                                                                <?php } ?>
                                                                                </strong></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_2"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi, <strong>Merk = 
                                                                                <?php if($res['merkolitransmisi'] == NULL){ ?>
                                                                                    Tidak Ganti Oli
                                                                                <?php } else { ?>
                                                                                    <?= $res['merkolitransmisi'] ?>
                                                                                <?php } ?>
                                                                                </strong></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_3"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_3"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Air Radiator (Tabung Cadangan)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_4"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_4"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Isi Air Radiator</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_5"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_5"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>3. BATERAI / AKI</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Beban / Pengisian (Dengan Multimeter)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_6"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_6"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="5"><strong>4. SETEL KATUP</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Setel Katup</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb_b_7"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb_b_7"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. PEMERIKSAAN EXHAUST</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Kebocoran Pipa A, B &amp; Knalpot</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma2_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma2_a_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma2_a_1"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (KEDUA) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. PEMERIKSAAN KEBOCORAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Drain Bolt Oli Mesin / Transmisi</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma2_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma2_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma2_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Filter</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma2_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma2_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma2_b_2"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. LEVEL CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb2_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb2_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb2_b_1"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi (Dipstick)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pmb2_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pmb2_b_2"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pmb2_b_2"></td>
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
                                                                                <th class="table-primary text-center text-bg-primary" colspan="2">POSISI MOBIL DI ATAS (AKHIR) - TEKNISI B</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK OK</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 170px;">TIDAK DIKERJAKAN</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="border-right-style: solid;" colspan="5"><strong>1. LEVEL CAIRAN</strong></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td>Oli Transmisi (HCF2)</td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Ok" name="pma3_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Ok" name="pma3_b_1"></td>
                                                                                <td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="pma3_b_1"></td>
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
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>CATATAN QUICK MAINTENANCE CHECKSHEET(JIKA ADA)</strong><br></label><input class="form-control" type="text" name="catatan" placeholder="Masukkan Catatan" autocomplete="off"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>REQUEST PENGGANTIAN PART / PENAMBAHAN TASK LIST (JIKA ADA)</strong><br></label>
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
            show_part();
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
                            if(data[i].status == "Dikerjakan"){
                                html += '<tr>'+
                                    '<td>'+ data[i].nama_part +'</td>'+
                                    '<td colspan="2" class="text-center"> DIKERJAKAN </td>'+
                                    '</tr>';
                            }
                            if(data[i].status == "Tidak Dikerjakan"){
                                html += '<tr>'+
                                    '<td>'+ data[i].nama_part +'</td>'+
                                    '<td colspan="2" class="text-center"> TIDAK DIKERJAKAN </td>'+
                                    '</tr>';
                            }
                            if(data[i].status == null){
                                html += '<tr>'+
                                    '<td>'+ data[i].nama_part +'<input type="hidden" value="'+ data[i].nama_part +'" name="namaparts[]"></td>'+
                                    '<td class="text-center"><input type="radio" id="q156" value="Dikerjakan" name="namaparts'+ count +'"></td>'+
                                    '<td class="text-center"><input type="radio" id="q156" value="Tidak Dikerjakan" name="namaparts'+ count++ +'"></td>'+
                                    '</tr>';
                            }
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