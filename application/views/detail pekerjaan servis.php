<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Detail Kegiatan Servis</title>
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
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('c_manager/daftarpaketservis') ?>"><strong>Daftar Paket Servis</strong></a></li>
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
                    <h3 class="text-dark mb-1 text-judul judul">DETAIL KEGIATAN SERVIS</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col align-items-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>JENIS SERVIS</strong><br></label><input class="form-control" type="text" value="<?= $res['nama_servis'] ?>" readonly></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>JASA / PEKERJAAN</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 10%;">KODE</th>
                                                                        <th class="table-primary" style="background: rgb(65,111,255);color: rgb(255,255,255);width: 60%;">NAMA</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php if($res['olimesin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP001</td>
                                                                        <td>Periksa - Oli Mesin</td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olimesin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP001</td>
                                                                        <td>Ganti - Oli Mesin</td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['olifilter'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP002</td>
                                                                        <td>Periksa -&nbsp;Oli Filter<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olifilter'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP002</td>
                                                                        <td>Ganti -&nbsp;Oli Filter<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanudara'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP003</td>
                                                                        <td>Periksa -&nbsp;Saringan Udara<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanudara'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP003</td>
                                                                        <td>Ganti -&nbsp;Saringan Udara<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['keregangankatup'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP004</td>
                                                                        <td>Periksa -&nbsp;Keregangan Katup<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['keregangankatup'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP004</td>
                                                                        <td>Ganti -&nbsp;Keregangan Katup<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanbensin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP005</td>
                                                                        <td>Periksa -&nbsp;Saringan Bensin<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanbensin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP005</td>
                                                                        <td>Ganti -&nbsp;Saringan Bensin<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['busitipenikel'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP006</td>
                                                                        <td>Periksa -&nbsp;Busi (Tipe Nickel)<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['busitipenikel'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP006</td>
                                                                        <td>Ganti -&nbsp;Busi (Tipe Nickel)<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['busitipeiridium'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP007</td>
                                                                        <td>Periksa -&nbsp;Busi (Tipe Iridium)<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['busitipeiridium'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP007</td>
                                                                        <td>Ganti -&nbsp;Busi (Tipe Iridium)<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['drivebelt'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP008</td>
                                                                        <td>Periksa -&nbsp;Drive Belt<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['drivebelt'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP008</td>
                                                                        <td>Ganti -&nbsp;Drive Belt<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['kecepatanstasioner'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP009</td>
                                                                        <td>Periksa -&nbsp;Kecepatan Stasioner<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['kecepatanstasioner'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP009</td>
                                                                        <td>Ganti -&nbsp;Kecepatan Stasioner<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['radiatorcoolant'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP010</td>
                                                                        <td>Periksa -&nbsp;Radiator Coolant<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['radiatorcoolant'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP010</td>
                                                                        <td>Ganti -&nbsp;Radiator Coolant<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['olitransmisi'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP011</td>
                                                                        <td>Periksa -&nbsp;Oli Transmisi<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['olitransmisi'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP011</td>
                                                                        <td>Ganti -&nbsp;Oli Transmisi<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['enginecleaner'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP012</td>
                                                                        <td>Periksa -&nbsp;Engine Cleaner<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['enginecleaner'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP012</td>
                                                                        <td>Ganti -&nbsp;Engine Cleaner<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['remdepanbelakang'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP013</td>
                                                                        <td>Periksa -&nbsp;Rem Depan dan Belakang<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['remdepanbelakang'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP013</td>
                                                                        <td>Ganti -&nbsp;Rem Depan dan Belakang<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['fluidarem'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP014</td>
                                                                        <td>Periksa -&nbsp;Fluida Rem<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['fluidarem'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP014</td>
                                                                        <td>Ganti -&nbsp;Fluida Rem<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['remparkir'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP015</td>
                                                                        <td>Periksa -&nbsp;Rem Parkir<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['remparkir'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP015</td>
                                                                        <td>Ganti -&nbsp;Rem Parkir<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['saringanac'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP016</td>
                                                                        <td>Periksa -&nbsp;Saringan AC<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['saringanac'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP016</td>
                                                                        <td>Ganti -&nbsp;Saringan AC<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['rotasiban'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP017</td>
                                                                        <td>Periksa -&nbsp;Rotasi Ban<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['rotasiban'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP017</td>
                                                                        <td>Ganti -&nbsp;Rotasi Ban<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['pintugeserlistrik'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP018</td>
                                                                        <td>Periksa -&nbsp;Pintu Geser Listrik<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['pintugeserlistrik'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP018</td>
                                                                        <td>Ganti -&nbsp;Pintu Geser Listrik<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['tierods'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP019</td>
                                                                        <td>Periksa -&nbsp;Tie Rods, Gear Box Steering dan Boots<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['tierods'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP019</td>
                                                                        <td>Ganti -&nbsp;Tie Rods, Gear Box Steering dan Boots<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['komponensuspensi'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP020</td>
                                                                        <td>Periksa -&nbsp;Komponen Suspensi<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['komponensuspensi'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP020</td>
                                                                        <td>Ganti -&nbsp;Komponen Suspensi<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['bootsdriveshaft'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP021</td>
                                                                        <td>Periksa -&nbsp;Boots Driveshaft<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['bootsdriveshaft'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP021</td>
                                                                        <td>Ganti -&nbsp;Boots Driveshaft<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['selangrempipa'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP022</td>
                                                                        <td>Periksa -&nbsp;Selang Rem dan Pipa (Termasuk ABS)<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['selangrempipa'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP022</td>
                                                                        <td>Ganti -&nbsp;Selang Rem dan Pipa (Termasuk ABS)<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['semuaketinggianlevel'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP023</td>
                                                                        <td>Periksa -&nbsp;Semua Ketinggian Level Fluida dan Kondisinya<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['semuaketinggianlevel'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP023</td>
                                                                        <td>Ganti -&nbsp;Semua Ketinggian Level Fluida dan Kondisinya<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['sistempembuangan'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP024</td>
                                                                        <td>Periksa -&nbsp;Sistem Pembuangan<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['sistempembuangan'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP024</td>
                                                                        <td>Ganti -&nbsp;Sistem Pembuangan<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php if($res['selangbensin'] == "p"){ ?>
                                                                    <tr>
                                                                        <td>BP025</td>
                                                                        <td>Periksa -&nbsp;Selang Bensin dan Sambungannya<br></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    <?php if($res['selangbensin'] == "g"){ ?>
                                                                    <tr>
                                                                        <td>BP025</td>
                                                                        <td>Ganti -&nbsp;Selang Bensin dan Sambungannya<br></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><a class="btn btn-primary btn-sm" role="button" href="<?= base_url('c_manager/daftarpaketservis') ?>"><i class="fas fa-backward"></i>&nbsp; Kembali</a></div>
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
                    <div class="text-center my-auto copyright"><span>Copyright ?? TA 2022</span></div>
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