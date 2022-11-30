<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daftar Peralatan Servis</title>
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
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('c_manager/daftarperalatanservis') ?>"><strong>Daftar Peralatan Servis</strong></a></li>
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
                    <h3 class="text-dark mb-1">DAFTAR PERALATAN SERVIS</h3>
                    <div class="card" style="margin-top: 10px;">
                        <form class="search-form" action="<?= base_url('c_manager/daftarperalatanservis'); ?>" method="post">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                <input class="form-control" type="text" placeholder="Cari Nama Alat" name="keyword_peralatan" id="namaproject" autocomplete="off" autofocus>
                                <!-- <button class="btn btn-light" type="button">Search </button> -->
                                <input class="btn btn-primary" type="submit" name="submit"> 
                            </div>
                        </form>
                        <div class="row" style="margin: 0px;margin-bottom: -15px;">
                            <div class="col-md-6">
                                <p><strong>Jumlah Alat Servis = <?php echo $total_rows ?></strong><br></p>
                                <?php echo $wew ?>
                            </div>
                        </div>
                        <div class="table-responsive" style="margin: 10px;">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr class="table-primary">
                                        <th style="width: 5%;text-align: center;">No.</th>
                                        <th>Nama Alat Servis</th>
                                        <th class="text-center">Jumlah Alat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">1.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Piston Ring Compressor</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['pistonringcompressor_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">2.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Piston Ring Expander</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['pistonringexpander_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">3.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Valve Spring Compressor</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['valvespringcompressor_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">4.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Oil Filter Remover</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['oilfilterremover_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">5.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Oil Seal Puller</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['oilsealpuller_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">6.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Bearing Cup Puller</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['bearingcuppuller_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">7.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Universal Puller</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['universalpuller_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">8.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Clutch Central Aligning Tool</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['clutchcentralaligningtool_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">9.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Bearing Puller Attachment</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['bearingpullerattachment_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">10.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Sliding Hammer</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['slidinghammer_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">11.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Disc Brake Piston Tool</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['discbrakepistontool_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">12.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Coil Spring Compressor</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['coilspringcompressor_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">13.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Ball Joint Separator/Remover/Tracker Ball Joint</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['balljointseparator_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">14.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Tie Rod Remover</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['tierodremover_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">15.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Differential Flange Holder</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['differentialflangeholder_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">16.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Impact Driver</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['impactdriver_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">17.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Car Lift</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['carlift_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">18.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Engine Stand</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['enginestand_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">19.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Mesin Las</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['mesinlas_jml'] ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;color: rgb(0,0,0);vertical-align: middle;">20.</td>
                                        <td style="color: rgb(0,0,0);vertical-align: middle;">Air Gun</td>
                                        <td class="text-center" style="color: rgb(0,0,0);vertical-align: middle;"><?= $res['airgun_jml'] ?></td>
                                    </tr> -->
                                        <?php if (empty($res)) : ?>
                            		    <tr>
                            			    <td colspan="3">
                            				    <div class="alert alert-danger" role="alert">
                            					    Data not found!
                            				    </div>
                            			    </td>
                            		    </tr>
                            	        <?php endif; ?>
                                        <?php 
                                        $no = 1;
                                        foreach ($res as $a) :?>
                                        <tr>
                                            <td style="text-align: center;vertical-align: middle;color: rgb(0, 0, 0);"><?= $no++; ?>.</td>
                                            <td style="vertical-align: middle;"><span style="color: rgb(0, 0, 0); background-color: rgb(253, 253, 254);"><?= $a['nama_alat']; ?></span><br></td>
                                            <td style="vertical-align: middle;" class="text-center"><span style="color: rgb(0, 0, 0); background-color: rgb(253, 253, 254);"><?= $a['jumlah']; ?></span><br></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row" style="margin-right: 0px;">
                            <div class="col">
                                <nav class="d-lg-flex justify-content-lg-end">
                                <?= $this->pagination->create_links(); ?>
                                </nav>
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
</body>

</html>