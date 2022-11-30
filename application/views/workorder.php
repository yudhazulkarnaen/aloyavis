<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form Work Order</title>
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
        .hide-from-page { display:none; } /* hide at normal page view */
        .hide-from-pages { display:none; } /* hide at normal page view */
        @media print {
            .tambah-part{
                margin-bottom: -9px !important;
            }
            .hide-from-page { display:block; } /* make it visible during print */
            .hide-from-pages { display:flex; } /* make it visible during print */
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
        @media print
        {    
        .navbar,.judul,button,a
        {
            display: none !important;
        }
        .topu{
            margin-top: -10px;
        }
        }
    </style>
</head>

<body id="page-top">
    <input type="hidden" id="base_path" value="<?php echo base_url(); ?>"/>
    <div id="wrapper">
        <nav class="navbar navbar-dark d-sm-inline align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(9,40,71);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="<?= base_url('c_serviceadvisor') ?>">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tools"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ALOYAVIS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('c_serviceadvisor/antrian') ?>">Antrian</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/daftarantrian') ?>"><strong>Daftar Antrian</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/daftarsedangservis') ?>"><strong>Daftar Sedang Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('c_serviceadvisor/daftarselesaiservis') ?>"><strong>Daftar Selesai Servis</strong></a></li>
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
                    <div class="col judul">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="steps-progressbar">
                                        <ul>
                                            <li class="previous">FORM PEMERIKSAAN KENDARAAN</li>
                                            <li class="active">FORM WORK ORDER/PERINTAH KERJA BENGKEL</li>
                                            <li>MULAI SERVICE</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-dark mb-1 text-judul judul">FORM WORK ORDER/PKB</h3>
                    <h3 class="text-dark mb-1 text-judul hide-from-page">ESTIMASI GENERAL REPAIR</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3 judul">
                                        <p class="text-primary m-0 fw-bold">WORK ORDER "<?= $res['merk_kendaraan'] ?> - <?= $res['nomor_polisi'] ?>"</p>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST">
                                            <div class="judul">
                                                
                                                <?= $this->session->flashdata('message'); ?>
                                                
                                            </div>
                                            <div class="row hide-from-pages">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">MERK/TAHUN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['merk_kendaraan'] ?> / <?= $res['tahun_kendaraan'] ?></td>
                                                                        <input type="hidden" name="merkkendaraan" id="merkkendaraan" value="<?= $res['merk_kendaraan'] ?>">
                                                                        <input type="hidden" name="tahunkendaraan" value="<?= $res['tahun_kendaraan'] ?>">
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">NO. POLISI</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_polisi'] ?></td>
                                                                        <input type="hidden" name="nomorpolisi" value="<?= $res['nomor_polisi'] ?>">
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">PEMILIK/PHONE</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nama_pemilik'] ?> / 0<?= $res['nomor_handphone'] ?></td>
                                                                        <input type="hidden" name="namapemilik" value="<?= $res['nama_pemilik'] ?>">
                                                                        <input type="hidden" name="nomorhandphone" value="<?= $res['nomor_handphone'] ?>">
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">ALAMAT</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['alamat_pemilik'] ?></td>
                                                                        <input type="hidden" name="alamatpemilik" value="<?= $res['alamat_pemilik'] ?>">
                                                                    </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">NO. CHASIS</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_chasis'] ?></td>
                                                                        <input type="hidden" name="nomorchasis" value="<?= $res['nomor_chasis'] ?>">
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">NO. MESIN</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['nomor_mesin'] ?></td>
                                                                        <input type="hidden" name="nomormesin" value="<?= $res['nomor_mesin'] ?>">
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">WARNA</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res['warna_kendaraan'] ?></td>
                                                                        <input type="hidden" name="warnakendaraan" value="<?= $res['warna_kendaraan'] ?>">
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="table-primary" style="border-right-style: solid;color: rgb(255,255,255);background: rgb(65,111,255);max-width: 90px;">KM</th>
                                                                        <td style="color: rgb(0,0,0);"><?= $res2['km'] ?></td>
                                                                        <input type="hidden" name="km" value="<?= $res2['km'] ?>">
                                                                    </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row judul">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>NOMOR PIT</strong><br></label><input class="form-control" name="nomorpitstop" type="number" id="username-1" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res3['no_antrian'] ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row judul">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>NOMOR POLISI</strong><br></label><input class="form-control" name="nomorpolisi" type="text" id="username-4" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res['nomor_polisi'] ?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            <div class="row topu">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>PAKET SERVIS</strong><br></label>
                                                    <select name="kategori" id="kategori" class="form-select">
                                                            <option value="undefined" selected disabled>---Pilih Paket Servis---</option>
                                                            <?php foreach($data->result() as $row):?>
                                                                <option value="<?php echo $row->id_servis;?>"><?php echo $row->nama_servis;?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                        <div class="col topu">
                                                            <div class="mb-3"><label class="form-label" for="first_name" style="margin-top: 15px;"><strong>JASA PERBAIKAN</strong><br></label>
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary text-bg-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);vertical-align: middle;">KEGIATAN SERVIS</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 20%;color: rgb(255,255,255);background: rgb(65,111,255);vertical-align: middle;">GANTI</th>
                                                                                <th class="table-primary text-center text-bg-primary" style="width: 20%;color: rgb(255,255,255);background: rgb(65,111,255);vertical-align: middle;">PERIKSA</th>
                                                                                <th class="table-primary text-center text-bg-primary judul" style="width: 20%;color: rgb(255,255,255);background: rgb(65,111,255);vertical-align: middle;">TIDAK DIKERJAKAN</th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody name="subkategori" class="subkategori">
                                                                            <tr>
                                                                                <td style="border-right-style: solid; vertical-align: middle;">Oli Mesin</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="olimesin">
                                                                                    <select class="form-select" name="merkolimesin">
                                                                                        <option value="undefined" selected disabled>---Pilih Merk---</option>
                                                                                        <option value="175000">E-Pro Green SN GF-5</option>
                                                                                        <option value="150000">E-Pro Blue</option>
                                                                                        <option value="125000">E-Pro Gold</option>
                                                                                    </select></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="olimesin"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="olimesin"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Oli Filter</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="olifilter"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="olifilter"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="olifilter"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Saringan Udara</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="saringanudara"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="saringanudara"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanudara"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Keregangan Katup</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="keregangankatup"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="keregangankatup"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="keregangankatup"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Saringan Bensin</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="saringanbensin"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="saringanbensin"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanbensin"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Busi (Tipe Nickel)</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="busitipenikel"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="busitipenikel"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipenikel"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Busi (Tipe Iridium)</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="busitipeiridium"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="busitipeiridium"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipeiridium"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Drive Belt</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="drivebelt"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="drivebelt"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="drivebelt"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecepatan Stasioner</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="kecepatanstasioner"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="kecepatanstasioner"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="kecepatanstasioner"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Radiator Coolant</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="radiatorcoolant"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="radiatorcoolant"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="radiatorcoolant"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="vertical-align: middle;">Oli Transmisi</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="olitransmisi">
                                                                                    <select class="form-select" name="merkolitransmisi">
                                                                                        <option value="undefined" selected disabled>---Pilih Merk---</option>
                                                                                        <option value="100000">Oli Transmisi MTF</option>
                                                                                        <option value="200000">Oli Transmisi ATF-DW1</option>
                                                                                        <option value="300000">Oli transmisi ATF-Z1</option>
                                                                                        <option value="400000">Oli transmisi HCF-2</option>
                                                                                        <option value="500000">Oli transmisi CVTF</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="olitransmisi"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="olitransmisi"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Engine Cleaner</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="enginecleaner"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="enginecleaner"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="enginecleaner"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Rem Depan dan Belakang</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="remdepanbelakang"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="remdepanbelakang"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="remdepanbelakang"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Fluida Rem</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="fluidarem"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="fluidarem"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="fluidarem"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Rem Parkir</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="remparkir"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="remparkir"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="remparkir"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Saringan AC</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="saringanac"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="saringanac"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanac"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Rotasi Ban</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="rotasiban"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="rotasiban"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="rotasiban"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pintu Geser Listrik</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="pintugeserlistrik"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="pintugeserlistrik"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="pintugeserlistrik"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tie Rods, Gear Box Steering dan Boots</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="tierods"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="tierods"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="tierods"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Komponen Suspensi</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="komponensuspensi"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="komponensuspensi"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="komponensuspensi"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Boots Driveshaft</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="bootsdriveshaft"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="bootsdriveshaft"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="bootsdriveshaft"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Selang Rem dan Pipa (Termasuk ABS)</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="selangrempipa"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="selangrempipa"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="selangrempipa"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Semua Ketinggian Level Fluida dan Kondisinya</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="semuaketinggianlevel"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="semuaketinggianlevel"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="semuaketinggianlevel"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Sistem Pembuangan</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="sistempembuangan"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="sistempembuangan"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="sistempembuangan"></td>
                                                                                
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Selang Bensin dan Sambungannya</td>
                                                                                <td class="text-center"><input type="radio" value="g" id="q156" name="selangbensin"></td>
                                                                                <td class="text-center"><input type="radio" value="p" id="q156" name="selangbensin"></td>
                                                                                <td class="text-center judul"><input type="radio" value="t" id="q156" name="selangbensin"></td>
                                                                                
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row topu">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>ESTIMASI BIAYA JASA DAN OLI</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary text-center" style="width: 50%;color: rgb(255,255,255);background: rgb(65,111,255);">JASA/OLI</th>
                                                                        <th class="table-primary text-center" style="width: 50%;color: rgb(255,255,255);background: rgb(65,111,255);">HARGA</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Estimasi Biaya Jasa Servis</td>
                                                                        <td class="text-center hargaservis">Rp. 0</td>
                                                                        <input type="hidden" class="hargaservis" name="hargaservis">
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Estimasi Oli Mesin</td>
                                                                        <!-- <td><input class="form-control" type="text" id="estimasioli" style="border-color: white;text-align: center;"></td> -->
                                                                        <td class="text-center" id="estimasioli">Rp. 0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Estimasi Oli Transmisi</td>
                                                                        <td class="text-center" id="estimasiolitransmisi">Rp. 0</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row tambah-part topu" style="margin-bottom: -15px;">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>TAMBAH PART & ESTIMASI BIAYA PART</strong><br></label></div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="table-primary text-center" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA PART - NUMBER PART</th>
                                                            <th class="table-primary text-center" style="width: 40%;color: rgb(255,255,255);background: rgb(65,111,255);">HARGA</th>
                                                            <th class="table-primary text-center judul" style="width: 10%;color: rgb(255,255,255);background: rgb(65,111,255);">ACTION</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="autocomplete_div">
                                                            
                                                            <tr id="row_1">
                                                                <td><input class="form-control autocomplete_txt" type="text" data-field-name="nama_parts" data-nomor="1" data-type="nama_parts" name="namaparts[]" id="namaparts_1" placeholder="Isi Tambahan Part" autocomplete="off"></td>
                                                                <td><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_1" placeholder="Harga Part" autocomplete="off" readonly></td>
                                                                <td class="text-center judul"><button class="btn btn-success tambah-form" type="button" style="margin-bottom: 15px;"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></button></td>
                                                            </tr>
                                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div id="autocomplete_div">
                                                <div class="row" id="row_1">
                                                    <div class="col">
                                                        <div class="mb-3"><input class="form-control autocomplete_txt" type="text" data-field-name="nama_parts" data-type="nama_parts" name="namaparts[]" id="namaparts_1" placeholder="Isi Tambahan Part" autocomplete="off"><input class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_1" placeholder="Isi Tambahan Part" autocomplete="off"></div>
                                                    </div>
                                                    <div class="col-1 d-flex justify-content-center judul"><button class="btn btn-success tambah-form" type="button" style="margin-bottom: 15px;"><i class="fas fa-plus" style="color: rgb(255,255,255);"></i></button></div>
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>KELUHAN (Jika Ada)</strong><br></label><input class="form-control" name="keluhan" type="text" placeholder="Isi Keluhan Pada Kendaraan Jika Ada" autocomplete="off"></div>
                                                </div>
                                            </div>
                                            <div class="row judul">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>ESTIMASI SELESAI</strong><br></label><input class="form-control" name="estimasiselesai" type="time" value="<?php echo $estimasiselesai;?>" readonly="" style="background: rgb(234,236,244);"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="row judul">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>PERKIRAAN ALAT-ALAT YANG DIBUTUHKAN</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">NAMA ALAT</th>
                                                                        <th class="table-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">JUMLAH YANG DIBUTUHKAN</th>
                                                                        <th class="table-primary" style="color: rgb(255,255,255);background: rgb(65,111,255);">JUMLAH ALAT YANG TERSISA</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="estimasialat">
                                                                    <tr>
                                                                        <td>Data Belum Tersedia</td>
                                                                        <td>Data Belum Tersedia</td>
                                                                        <td>Data Belum Tersedia</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row hide-from-pages" id="tandatangan">
                                                <div class="col-6 justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>DISETUJUI SERVICE ADVISOR</strong><br></label></div><textarea class="form-control" style="height: 90px;"></textarea>
                                                </div>
                                                <div class="col-6 justify-content-xxl-center">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>DISETUJUI PELANGGAN</strong><br></label></div><textarea class="form-control" style="height: 90px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3 judul"><button class="btn btn-secondary btn-sm" type="button" style="margin-right: 10px;" onclick="window.print();"><i class="fas fa-print"></i>&nbsp; Print Estimasi Biaya</button><button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-play"></i>&nbsp; Langkah Selanjutnya</button></div>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $('#kategori').change(function(){
            var id=$(this).val();
            var merk = $("#merkkendaraan").val();
            $.ajax({
                url : "<?php echo base_url();?>c_serviceadvisor/get_subkategori",
                method : "POST",
                data : {id: id, merk: merk},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var html1 = '';
                    var html2 = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html1 += 'Rp. '+data[i].harga;+',-';
                        html += '<tr>';
                        if(data[i].olimesin == "g"){
                            html += '<td style="border-right-style: solid; vertical-align: middle;">Oli Mesin</td>';
                            html += `<td class="text-center"><input type="radio" value="g" id="q156" name="olimesin" checked><select class="form-select" name="merkolimesin" onchange="document.getElementById('estimasioli').innerHTML=this.value"><option value="undefined" selected disabled>---Pilih Merk---</option><option value="Rp. 175000">E-Pro Green SN GF-5</option><option value="Rp. 150000">E-Pro Blue</option><option value="Rp. 125000">E-Pro Gold</option></select></td>`;
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olimesin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olimesin"></td>';
                        } else if (data[i].olimesin == "p"){
                            html += '<td style="border-right-style: solid; vertical-align: middle;">Oli Mesin</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="olimesin"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olimesin" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olimesin"></td>';
                        } else {
                            html += '<td class="judul" style="border-right-style: solid; vertical-align: middle;">Oli Mesin</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="olimesin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="olimesin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olimesin" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].olifilter == "g"){
                            html += '<td>Oli Filter</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="olifilter" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olifilter"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olifilter"></td>';
                        } else if (data[i].olifilter == "p"){
                            html += '<td>Oli Filter</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="olifilter"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olifilter" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olifilter"></td>';
                        } else {
                            html += '<td class="judul">Oli Filter</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="olifilter"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="olifilter"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olifilter" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].saringanudara == "g"){
                            html += '<td>Saringan Udara</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanudara" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanudara"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanudara"></td>';
                        } else if (data[i].saringanudara == "p"){
                            html += '<td>Saringan Udara</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanudara"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanudara" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanudara"></td>';
                        } else {
                            html += '<td class="judul">Saringan Udara</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="saringanudara"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="saringanudara"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanudara" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].keregangankatup == "g"){
                            html += '<td>Keregangan Katup</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="keregangankatup" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="keregangankatup"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="keregangankatup"></td>';
                        } else if (data[i].keregangankatup == "p"){
                            html += '<td>Keregangan Katup</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="keregangankatup"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="keregangankatup" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="keregangankatup"></td>';
                        } else {
                            html += '<td class="judul">Keregangan Katup</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="keregangankatup"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="keregangankatup"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="keregangankatup" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].saringanbensin == "g"){
                            html += '<td>Saringan Bensin</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanbensin" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanbensin"></td>';
                        } else if (data[i].saringanbensin == "p"){
                            html += '<td>Saringan Bensin</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanbensin"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanbensin" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanbensin"></td>';
                        } else {
                            html += '<td class="judul">Saringan Bensin</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="saringanbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="saringanbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanbensin" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].busitipenikel == "g"){
                            html += '<td>Busi (Tipe Nickel)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="busitipenikel" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="busitipenikel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipenikel"></td>';
                        } else if (data[i].busitipenikel == "p"){
                            html += '<td>Busi (Tipe Nickel)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="busitipenikel"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="busitipenikel" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipenikel"></td>';
                        } else {
                            html += '<td class="judul">Busi (Tipe Nickel)</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="busitipenikel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="busitipenikel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipenikel" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].busitipeiridium == "g"){
                            html += '<td>Busi (Tipe Iridium)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="busitipeiridium" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="busitipeiridium"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipeiridium"></td>';
                        } else if (data[i].busitipeiridium == "p"){
                            html += '<td>Busi (Tipe Iridium)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="busitipeiridium"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="busitipeiridium" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipeiridium"></td>';
                        } else {
                            html += '<td class="judul">Busi (Tipe Iridium)</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="busitipeiridium"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="busitipeiridium"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="busitipeiridium" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].drivebelt == "g"){
                            html += '<td>Drive Belt</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="drivebelt" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="drivebelt"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="drivebelt"></td>';
                        } else if (data[i].drivebelt == "p"){
                            html += '<td>Drive Belt</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="drivebelt"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="drivebelt" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="drivebelt"></td>';
                        } else {
                            html += '<td class="judul">Drive Belt</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="drivebelt"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="drivebelt"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="drivebelt" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].kecepatanstasioner == "g"){
                            html += '<td>Kecepatan Stasioner</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="kecepatanstasioner" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="kecepatanstasioner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="kecepatanstasioner"></td>';
                        } else if (data[i].kecepatanstasioner == "p"){
                            html += '<td>Kecepatan Stasioner</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="kecepatanstasioner"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="kecepatanstasioner" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="kecepatanstasioner"></td>';
                        } else {
                            html += '<td class="judul">Kecepatan Stasioner</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="kecepatanstasioner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="kecepatanstasioner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="kecepatanstasioner" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].radiatorcoolant == "g"){
                            html += '<td>Radiator Coolant</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="radiatorcoolant" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="radiatorcoolant"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="radiatorcoolant"></td>';
                        } else if (data[i].radiatorcoolant == "p"){
                            html += '<td>Radiator Coolant</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="radiatorcoolant"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="radiatorcoolant" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="radiatorcoolant"></td>';
                        } else {
                            html += '<td class="judul">Radiator Coolant</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="radiatorcoolant"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="radiatorcoolant"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="radiatorcoolant" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].olitransmisi == "g"){
                            html += '<td style="vertical-align: middle;">Oli Transmisi</td>';
                            html += `<td class="text-center"><input type="radio" value="g" id="q156" name="olitransmisi" checked><select class="form-select" name="merkolitransmisi" onchange="document.getElementById('estimasiolitransmisi').innerHTML=this.value"><option value="undefined" selected disabled>---Pilih Merk---</option><option value="Rp. 100000">Oli Transmisi MTF</option><option value="Rp. 200000">Oli Transmisi ATF-DW1</option><option value="Rp. 300000">Oli transmisi ATF-Z1</option><option value="Rp. 400000">Oli transmisi HCF-2</option><option value="Rp. 500000">Oli transmisi CVTF</option></select></td>`;
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olitransmisi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olitransmisi"></td>';
                        } else if (data[i].olitransmisi == "p"){
                            html += '<td style="vertical-align: middle;">Oli Transmisi</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="olitransmisi"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="olitransmisi" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olitransmisi"></td>';
                        } else {
                            html += '<td class="judul" style="vertical-align: middle;">Oli Transmisi</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="olitransmisi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="olitransmisi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="olitransmisi" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].enginecleaner == "g"){
                            html += '<td>Engine Cleaner</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="enginecleaner" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="enginecleaner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="enginecleaner"></td>';
                        } else if (data[i].enginecleaner == "p"){
                            html += '<td>Engine Cleaner</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="enginecleaner"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="enginecleaner" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="enginecleaner"></td>';
                        } else {
                            html += '<td class="judul">Engine Cleaner</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="enginecleaner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="enginecleaner"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="enginecleaner" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].remdepanbelakang == "g"){
                            html += '<td>Rem Depan dan Belakang</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="remdepanbelakang" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="remdepanbelakang"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remdepanbelakang"></td>';
                        } else if (data[i].remdepanbelakang == "p"){
                            html += '<td>Rem Depan dan Belakang</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="remdepanbelakang"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="remdepanbelakang" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remdepanbelakang"></td>';
                        } else {
                            html += '<td class="judul">Rem Depan dan Belakang</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="remdepanbelakang"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="remdepanbelakang"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remdepanbelakang" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].fluidarem == "g"){
                            html += '<td>Fluida Rem</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="fluidarem" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="fluidarem"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="fluidarem"></td>';
                        } else if (data[i].fluidarem == "p"){
                            html += '<td>Fluida Rem</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="fluidarem"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="fluidarem" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="fluidarem"></td>';
                        } else {
                            html += '<td class="judul">Fluida Rem</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="fluidarem"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="fluidarem"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="fluidarem" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].remparkir == "g"){
                            html += '<td>Rem Parkir</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="remparkir" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="remparkir"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remparkir"></td>';
                        } else if (data[i].remparkir == "p"){
                            html += '<td>Rem Parkir</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="remparkir"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="remparkir" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remparkir"></td>';
                        } else {
                            html += '<td class="judul">Rem Parkir</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="remparkir"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="remparkir"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="remparkir" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].saringanac == "g"){
                            html += '<td>Saringan AC</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanac" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanac"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanac"></td>';
                        } else if (data[i].saringanac == "p"){
                            html += '<td>Saringan AC</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="saringanac"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="saringanac" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanac"></td>';
                        } else {
                            html += '<td class="judul">Saringan AC</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="saringanac"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="saringanac"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="saringanac" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].rotasiban == "g"){
                            html += '<td>Rotasi Ban</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="rotasiban" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="rotasiban"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="rotasiban"></td>';
                        } else if (data[i].rotasiban == "p"){
                            html += '<td>Rotasi Ban</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="rotasiban"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="rotasiban" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="rotasiban"></td>';
                        } else {
                            html += '<td class="judul">Rotasi Ban</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="rotasiban"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="rotasiban"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="rotasiban" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].pintugeserlistrik == "g"){
                            html += '<td>Pintu Geser Listrik</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="pintugeserlistrik" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="pintugeserlistrik"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="pintugeserlistrik"></td>';
                        } else if (data[i].pintugeserlistrik == "p"){
                            html += '<td>Pintu Geser Listrik</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="pintugeserlistrik"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="pintugeserlistrik" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="pintugeserlistrik"></td>';
                        } else {
                            html += '<td class="judul">Pintu Geser Listrik</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="pintugeserlistrik"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="pintugeserlistrik"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="pintugeserlistrik" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].tierods == "g"){
                            html += '<td>Tie Rods, Gear Box Steering dan Boots</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="tierods" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="tierods"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="tierods"></td>';
                        } else if (data[i].tierods == "p"){
                            html += '<td>Tie Rods, Gear Box Steering dan Boots</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="tierods"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="tierods" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="tierods"></td>';
                        } else {
                            html += '<td class="judul">Tie Rods, Gear Box Steering dan Boots</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="tierods"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="tierods"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="tierods" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].komponensuspensi == "g"){
                            html += '<td>Komponen Suspensi</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="komponensuspensi" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="komponensuspensi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="komponensuspensi"></td>';
                        } else if (data[i].komponensuspensi == "p"){
                            html += '<td>Komponen Suspensi</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="komponensuspensi"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="komponensuspensi" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="komponensuspensi"></td>';
                        } else {
                            html += '<td class="judul">Komponen Suspensi</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="komponensuspensi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="komponensuspensi"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="komponensuspensi"checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].bootsdriveshaft == "g"){
                            html += '<td>Boots Driveshaft</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="bootsdriveshaft" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="bootsdriveshaft"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="bootsdriveshaft"></td>';
                        } else if (data[i].bootsdriveshaft == "p"){
                            html += '<td>Boots Driveshaft</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="bootsdriveshaft"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="bootsdriveshaft" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="bootsdriveshaft"></td>';
                        } else {
                            html += '<td class="judul">Boots Driveshaft</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="bootsdriveshaft"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="bootsdriveshaft"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="bootsdriveshaft" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].selangrempipa == "g"){
                            html += '<td>Selang Rem dan Pipa (Termasuk ABS)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="selangrempipa" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="selangrempipa"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangrempipa"></td>';
                        } else if (data[i].selangrempipa == "p"){
                            html += '<td>Selang Rem dan Pipa (Termasuk ABS)</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="selangrempipa"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="selangrempipa" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangrempipa"></td>';
                        } else {
                            html += '<td class="judul">Selang Rem dan Pipa (Termasuk ABS)</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="selangrempipa"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="selangrempipa"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangrempipa" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].semuaketinggianlevel == "g"){
                            html += '<td>Semua Ketinggian Level Fluida dan Kondisinya</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="semuaketinggianlevel" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="semuaketinggianlevel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="semuaketinggianlevel"></td>';
                        } else if (data[i].semuaketinggianlevel == "p"){
                            html += '<td>Semua Ketinggian Level Fluida dan Kondisinya</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="semuaketinggianlevel"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="semuaketinggianlevel" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="semuaketinggianlevel"></td>';
                        } else {
                            html += '<td class="judul">Semua Ketinggian Level Fluida dan Kondisinya</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="semuaketinggianlevel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="semuaketinggianlevel"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="semuaketinggianlevel" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].sistempembuangan == "g"){
                            html += '<td>Sistem Pembuangan</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="sistempembuangan" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="sistempembuangan"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="sistempembuangan"></td>';
                        } else if (data[i].sistempembuangan == "p"){
                            html += '<td>Sistem Pembuangan</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="sistempembuangan"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="sistempembuangan" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="sistempembuangan"></td>';
                        } else {
                            html += '<td class="judul">Sistem Pembuangan</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="sistempembuangan"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="sistempembuangan"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="sistempembuangan" checked></td>';
                        }
                        html += '</tr>';

                        html += '<tr>';
                        if(data[i].selangbensin == "g"){
                            html += '<td>Selang Bensin dan Sambungannya</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="selangbensin" checked></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="selangbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangbensin"></td>';
                        } else if (data[i].selangbensin == "p"){
                            html += '<td>Selang Bensin dan Sambungannya</td>';
                            html += '<td class="text-center"><input type="radio" value="g" id="q156" name="selangbensin"></td>';
                            html += '<td class="text-center"><input type="radio" value="p" id="q156" name="selangbensin" checked></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangbensin"></td>';
                        } else {
                            html += '<td class="judul">Selang Bensin dan Sambungannya</td>';
                            html += '<td class="text-center judul"><input type="radio" value="g" id="q156" name="selangbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="p" id="q156" name="selangbensin"></td>';
                            html += '<td class="text-center judul"><input type="radio" value="t" id="q156" name="selangbensin" checked></td>';
                        }
                        html += '</tr>';

                        if(data[i].pistonringcompressor > 0){
                            html2 += '<tr><td>Piston Ring Compressor</td><td>'+ data[i].pistonringcompressor +'</td><td>'+ data[i].pistonringcompressor_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="pistonringcompressor" value="'+ data[i].pistonringcompressor +'">';
                            html2 += '<input type="hidden" name="pistonringcompressor_jml" value="'+ data[i].pistonringcompressor_jml +'">';
                        }
                        if(data[i].pistonringcompressor == 0){
                            html2 += '<input type="hidden" name="pistonringcompressor" value="0">';
                            html2 += '<input type="hidden" name="pistonringcompressor_jml" value="'+ data[i].pistonringcompressor_jml +'">';
                        }

                        if(data[i].pistonringexpander > 0){
                            html2 += '<tr><td>Piston Ring Expander</td><td>'+ data[i].pistonringexpander +'</td><td>'+ data[i].pistonringexpander_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="pistonringexpander" value="'+ data[i].pistonringexpander +'">';
                            html2 += '<input type="hidden" name="pistonringexpander_jml" value="'+ data[i].pistonringexpander_jml +'">';
                        }
                        if(data[i].pistonringexpander == 0){
                            html2 += '<input type="hidden" name="pistonringexpander" value="0">';
                            html2 += '<input type="hidden" name="pistonringexpander_jml" value="'+ data[i].pistonringexpander_jml +'">';
                        }

                        if(data[i].valvespringcompressor > 0){
                            html2 += '<tr><td>Valve Spring Compressor</td><td>'+ data[i].valvespringcompressor +'</td><td>'+ data[i].valvespringcompressor_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="valvespringcompressor" value="'+ data[i].valvespringcompressor +'">';
                            html2 += '<input type="hidden" name="valvespringcompressor_jml" value="'+ data[i].valvespringcompressor_jml +'">';
                        }
                        if(data[i].valvespringcompressor == 0){
                            html2 += '<input type="hidden" name="valvespringcompressor" value="0">';
                            html2 += '<input type="hidden" name="valvespringcompressor_jml" value="'+ data[i].valvespringcompressor_jml +'">';
                        }

                        if(data[i].oilfilterremover > 0){
                            html2 += '<tr><td>Oil Filter Remover</td><td>'+ data[i].oilfilterremover +'</td><td>'+ data[i].oilfilterremover_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="oilfilterremover" value="'+ data[i].oilfilterremover +'">';
                            html2 += '<input type="hidden" name="oilfilterremover_jml" value="'+ data[i].oilfilterremover_jml +'">';
                        }
                        if(data[i].oilfilterremover == 0){
                            html2 += '<input type="hidden" name="oilfilterremover" value="0">';
                            html2 += '<input type="hidden" name="oilfilterremover_jml" value="'+ data[i].oilfilterremover_jml +'">';
                        }

                        if(data[i].oilsealpuller > 0){
                            html2 += '<tr><td>Oil Seal Puller</td><td>'+ data[i].oilsealpuller +'</td><td>'+ data[i].oilsealpuller_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="oilsealpuller" value="'+ data[i].oilsealpuller +'">';
                            html2 += '<input type="hidden" name="oilsealpuller_jml" value="'+ data[i].oilsealpuller_jml +'">';
                        }
                        if(data[i].oilsealpuller == 0){
                            html2 += '<input type="hidden" name="oilsealpuller" value="0">';
                            html2 += '<input type="hidden" name="oilsealpuller_jml" value="'+ data[i].oilsealpuller_jml +'">';
                        }
                        
                        if(data[i].bearingcuppuller > 0){
                            html2 += '<tr><td>Bearing Cup Puller</td><td>'+ data[i].bearingcuppuller +'</td><td>'+ data[i].bearingcuppuller_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="bearingcuppuller" value="'+ data[i].bearingcuppuller +'">';
                            html2 += '<input type="hidden" name="bearingcuppuller_jml" value="'+ data[i].bearingcuppuller_jml +'">';
                        }
                        if(data[i].bearingcuppuller == 0){
                            html2 += '<input type="hidden" name="bearingcuppuller" value="0">';
                            html2 += '<input type="hidden" name="bearingcuppuller_jml" value="'+ data[i].bearingcuppuller_jml +'">';
                        }

                        if(data[i].universalpuller > 0){
                            html2 += '<tr><td>Universal Puller</td><td>'+ data[i].universalpuller +'</td><td>'+ data[i].universalpuller_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="universalpuller" value="'+ data[i].universalpuller +'">';
                            html2 += '<input type="hidden" name="universalpuller_jml" value="'+ data[i].universalpuller_jml +'">';
                        }
                        if(data[i].universalpuller == 0){
                            html2 += '<input type="hidden" name="universalpuller" value="0">';
                            html2 += '<input type="hidden" name="universalpuller_jml" value="'+ data[i].universalpuller_jml +'">';
                        }

                        if(data[i].clutchcentralaligningtool > 0){
                            html2 += '<tr><td>Clutch Central Aligning Tool</td><td>'+ data[i].clutchcentralaligningtool +'</td><td>'+ data[i].clutchcentralaligningtool_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="clutchcentralaligningtool" value="'+ data[i].clutchcentralaligningtool +'">';
                            html2 += '<input type="hidden" name="clutchcentralaligningtool_jml" value="'+ data[i].clutchcentralaligningtool_jml +'">';
                        }
                        if(data[i].clutchcentralaligningtool == 0){
                            html2 += '<input type="hidden" name="clutchcentralaligningtool" value="0">';
                            html2 += '<input type="hidden" name="clutchcentralaligningtool_jml" value="'+ data[i].clutchcentralaligningtool_jml +'">';
                        }

                        if(data[i].bearingpullerattachment > 0){
                            html2 += '<tr><td>Bearing Puller Attachment</td><td>'+ data[i].bearingpullerattachment +'</td><td>'+ data[i].bearingpullerattachment_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="bearingpullerattachment" value="'+ data[i].bearingpullerattachment +'">';
                            html2 += '<input type="hidden" name="bearingpullerattachment_jml" value="'+ data[i].bearingpullerattachment_jml +'">';
                        }
                        if(data[i].bearingpullerattachment == 0){
                            html2 += '<input type="hidden" name="bearingpullerattachment" value="0">';
                            html2 += '<input type="hidden" name="bearingpullerattachment_jml" value="'+ data[i].bearingpullerattachment_jml +'">';
                        }

                        if(data[i].slidinghammer > 0){
                            html2 += '<tr><td>Sliding Hammer</td><td>'+ data[i].slidinghammer +'</td><td>'+ data[i].slidinghammer_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="slidinghammer" value="'+ data[i].slidinghammer +'">';
                            html2 += '<input type="hidden" name="slidinghammer_jml" value="'+ data[i].slidinghammer_jml +'">';
                        }
                        if(data[i].slidinghammer == 0){
                            html2 += '<input type="hidden" name="slidinghammer" value="0">';
                            html2 += '<input type="hidden" name="slidinghammer_jml" value="'+ data[i].slidinghammer_jml +'">';
                        }

                        if(data[i].discbrakepistontool > 0){
                            html2 += '<tr><td>Disc Brake Piston Tool</td><td>'+ data[i].discbrakepistontool +'</td><td>'+ data[i].discbrakepistontool_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="discbrakepistontool" value="'+ data[i].discbrakepistontool +'">';
                            html2 += '<input type="hidden" name="discbrakepistontool_jml" value="'+ data[i].discbrakepistontool_jml +'">';
                        }
                        if(data[i].discbrakepistontool == 0){
                            html2 += '<input type="hidden" name="discbrakepistontool" value="0">';
                            html2 += '<input type="hidden" name="discbrakepistontool_jml" value="'+ data[i].discbrakepistontool_jml +'">';
                        }

                        if(data[i].coilspringcompressor > 0){
                            html2 += '<tr><td>Coil Spring Compressor</td><td>'+ data[i].coilspringcompressor +'</td><td>'+ data[i].coilspringcompressor_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="coilspringcompressor" value="'+ data[i].coilspringcompressor +'">';
                            html2 += '<input type="hidden" name="coilspringcompressor_jml" value="'+ data[i].coilspringcompressor_jml +'">';
                        }
                        if(data[i].coilspringcompressor == 0){
                            html2 += '<input type="hidden" name="coilspringcompressor" value="0">';
                            html2 += '<input type="hidden" name="coilspringcompressor_jml" value="'+ data[i].coilspringcompressor_jml +'">';
                        }

                        if(data[i].balljointseparator > 0){
                            html2 += '<tr><td>Ball Joint Separator/Remover/Tracker Ball Joint</td><td>'+ data[i].balljointseparator +'</td><td>'+ data[i].balljointseparator_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="balljointseparator" value="'+ data[i].balljointseparator +'">';
                            html2 += '<input type="hidden" name="balljointseparator_jml" value="'+ data[i].balljointseparator_jml +'">';
                        }
                        if(data[i].balljointseparator == 0){
                            html2 += '<input type="hidden" name="balljointseparator" value="0">';
                            html2 += '<input type="hidden" name="balljointseparator_jml" value="'+ data[i].balljointseparator_jml +'">';
                        }

                        if(data[i].tierodremover > 0){
                            html2 += '<tr><td>Tie Rod Remover</td><td>'+ data[i].tierodremover +'</td><td>'+ data[i].tierodremover_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="tierodremover" value="'+ data[i].tierodremover +'">';
                            html2 += '<input type="hidden" name="tierodremover_jml" value="'+ data[i].tierodremover_jml +'">';
                        }
                        if(data[i].tierodremover == 0){
                            html2 += '<input type="hidden" name="tierodremover" value="0">';
                            html2 += '<input type="hidden" name="tierodremover_jml" value="'+ data[i].tierodremover_jml +'">';
                        }

                        if(data[i].differentialflangeholder > 0){
                            html2 += '<tr><td>Differential Flange Holder</td><td>'+ data[i].differentialflangeholder +'</td><td>'+ data[i].differentialflangeholder_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="differentialflangeholder" value="'+ data[i].differentialflangeholder +'">';
                            html2 += '<input type="hidden" name="differentialflangeholder_jml" value="'+ data[i].differentialflangeholder_jml +'">';
                        }
                        if(data[i].differentialflangeholder == 0){
                            html2 += '<input type="hidden" name="differentialflangeholder" value="0">';
                            html2 += '<input type="hidden" name="differentialflangeholder_jml" value="'+ data[i].differentialflangeholder_jml +'">';
                        }

                        if(data[i].impactdriver > 0){
                            html2 += '<tr><td>Impact Driver</td><td>'+ data[i].impactdriver +'</td><td>'+ data[i].impactdriver_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="impactdriver" value="'+ data[i].impactdriver +'">';
                            html2 += '<input type="hidden" name="impactdriver_jml" value="'+ data[i].impactdriver_jml +'">';
                        }
                        if(data[i].impactdriver == 0){
                            html2 += '<input type="hidden" name="impactdriver" value="0">';
                            html2 += '<input type="hidden" name="impactdriver_jml" value="'+ data[i].impactdriver_jml +'">';
                        }

                        if(data[i].carlift > 0){
                            html2 += '<tr><td>Car Lift</td><td>'+ data[i].carlift +'</td><td>'+ data[i].carlift_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="carlift" value="'+ data[i].carlift +'">';
                            html2 += '<input type="hidden" name="carlift_jml" value="'+ data[i].carlift_jml +'">';
                        }
                        if(data[i].carlift == 0){
                            html2 += '<input type="hidden" name="carlift" value="0">';
                            html2 += '<input type="hidden" name="carlift_jml" value="'+ data[i].carlift_jml +'">';
                        }

                        if(data[i].enginestand > 0){
                            html2 += '<tr><td>Engine Stand</td><td>'+ data[i].enginestand +'</td><td>'+ data[i].enginestand_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="enginestand" value="'+ data[i].enginestand +'">';
                            html2 += '<input type="hidden" name="enginestand_jml" value="'+ data[i].enginestand_jml +'">';
                        }
                        if(data[i].enginestand == 0){
                            html2 += '<input type="hidden" name="enginestand" value="0">';
                            html2 += '<input type="hidden" name="enginestand_jml" value="'+ data[i].enginestand_jml +'">';
                        }

                        if(data[i].mesinlas > 0){
                            html2 += '<tr><td>Mesin Las</td><td>'+ data[i].mesinlas +'</td><td>'+ data[i].mesinlas_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="mesinlas" value="'+ data[i].mesinlas +'">';
                            html2 += '<input type="hidden" name="mesinlas_jml" value="'+ data[i].mesinlas_jml +'">';
                        }
                        if(data[i].mesinlas == 0){
                            html2 += '<input type="hidden" name="mesinlas" value="0">';
                            html2 += '<input type="hidden" name="mesinlas_jml" value="'+ data[i].mesinlas_jml +'">';
                        }

                        if(data[i].airgun > 0){
                            html2 += '<tr><td>Air Gun</td><td>'+ data[i].airgun +'</td><td>'+ data[i].airgun_jml +'</td></tr>';
                            html2 += '<input type="hidden" name="airgun" value="'+ data[i].airgun +'">';
                            html2 += '<input type="hidden" name="airgun_jml" value="'+ data[i].airgun_jml +'">';
                        }
                        if(data[i].airgun == 0){
                            html2 += '<input type="hidden" name="airgun" value="0">';
                            html2 += '<input type="hidden" name="airgun_jml" value="'+ data[i].airgun_jml +'">';
                        }

                    }
                    $('.subkategori').html(html);
                    $('.hargaservis').html(html1);
                    $('.estimasialat').html(html2);
                    $('.hargaservis').val(html1);
                }
            });
        });
    });
    </script>
    <!-- <script>
        $(document).on("keyup", ".qty1", function() {
    var sum = 0;
    $(".qty1").each(function(){
        sum += +$(this).val();
    });
    $(".total").val(sum);
});
    </script> -->
    <script>
        $(document).ready(function(){
            var addBtn, rowcount, tableBody, imgPath, basePath;

            addBtn = $(".tambah-form"); //dari button di view id="addNew"
            rowcount = $(".autocomplete_div tr").length+1; 
            tableBody = $(".autocomplete_div");
            imgPath = $("#imgPath").val();
            basePath = $("#base_path").val();

            function formHtml() {
                html ='<tr id="row_'+rowcount+'">'
                html += '<td><input class="form-control autocomplete_txt" placeholder="Isi Tambahan Part" type="text" data-nomor="'+rowcount+'" data-field-name="nama_parts" data-type="nama_parts" name="namaparts[]" id="namaparts_'+rowcount+'"></td>'
                html += '<td><input style="text-align: center;background: rgb(234,236,244);" class="form-control autocomplete_txt qty1" type="text" data-field-name="harga" data-type="harga" name="harga[]" id="harga_'+rowcount+'" placeholder="Harga Part" autocomplete="off" readonly></td>'
                html += '<td class="text-center judul"><button id="delete_'+rowcount+'" class="btn btn-danger delete_row" type="button" style="margin-bottom: 15px;"><i class="fas fa-trash"></i></button></td>'
                html += '</tr>'
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
                console.log("kontol"+fieldName)
                if(typeof fieldName === 'undefined') {
                    return false;
                }

                currentEle.autocomplete({
                    source: function (data,cb){
                        $.ajax({
                            url: basePath+'c_serviceadvisor/getParts',
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