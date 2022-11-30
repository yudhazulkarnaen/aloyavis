<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Daftar Selesai Servis</title>
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
                    <h3 class="text-dark mb-1">DAFTAR SELESAI SERVIS</h3>
                    <div class="card" style="margin-top: 10px;">
                        <form class="search-form" action="<?= base_url('c_serviceadvisor/daftarselesaiservis'); ?>" method="post">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                                <input class="form-control" type="text" placeholder="Cari Plat Nomor" name="keyword_selesaiservis" id="namaproject" autocomplete="off" autofocus>
                                <!-- <button class="btn btn-light" type="button">Search </button> -->
                                <input class="btn btn-primary" type="submit" name="submit"> 
                            </div>
                        </form>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row" style="margin: 0px;margin-bottom: -15px;">
                            <div class="col-md-6">
                                <p><strong>Jumlah Kendaraan = <?php echo $total_rows ?></strong></p>
                                <?php echo $wew ?>
                            </div>
                        </div>
                        <div class="table-responsive" style="margin: 10px;">
                            <table class="table">
                                <thead class="table-light">
                                    <tr class="table-primary">
                                        <th>No.</th>
                                        <th>Plat Nomor</th>
                                        <th>Tanggal Servis</th>
                                        <th>Konfimasi Selesai</th>
                                        <th>Detail Faktur Servis</th>
                                        <th>Detail Pemeriksaan</th>
                                        <th>Detail Work Order</th>
                                        <th>Detail QMC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (empty($res)) : ?>
                            		<tr>
                                        <td colspan="8">
                            				<div class="alert alert-danger" role="alert">
                            					Data not found!
                            				</div>
                            			</td>
                            		</tr>
                            	<?php endif; ?>
                                <?php 
                                $no = 1;
                                foreach ($res as $a) : 
                                    if($a['konfirmasi'] == "Belum"){?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $a['nomor_polisi_selesai']; ?></td>
                                        <td><?= $a['tgl']; ?></td>
                                        <td><a class="btn btn-success btn-sm" role="button" style="color: rgb(255,255,255);" href="<?= base_url('c_serviceadvisor/acceptselesaiservis/').$a['nomor_polisi_selesai'] ?>"><i class="fas fa-search"></i>&nbsp;Konfimasi Selesai</a></td>
                                        <td><a class="btn btn-secondary btn-sm" role="button" style="color: rgb(255,255,255);" disabled><i class="fas fa-search"></i>&nbsp;Detail Faktur Servis</a></td>
                                        <td><a class="btn btn-secondary btn-sm" role="button" style="color: rgb(255,255,255);" disabled><i class="fas fa-search"></i>&nbsp;Detail Pemeriksaan</a></td>
                                        <td><a class="btn btn-secondary btn-sm" role="button" style="color: rgb(255,255,255);" disabled><i class="fas fa-search"></i>&nbsp;Detail Work Order</a></td>
                                        <td><a class="btn btn-secondary btn-sm" role="button" style="color: rgb(255,255,255);" disabled><i class="fas fa-search"></i>&nbsp;Detail QMC</a></td>
                                    </tr>
                                <?php } else { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $a['nomor_polisi_selesai']; ?></td>
                                        <td><?= $a['tgl']; ?></td>
                                        <td>SUDAH KONFIRMASI SELESAI</td>
                                        <td><a class="btn btn-primary btn-sm" role="button" style="color: rgb(255,255,255);" href="<?= base_url('c_serviceadvisor/detailfakturservis/').$a['nomor_polisi_selesai'].'/'.$a['tgl'] ?>"><i class="fas fa-search"></i>&nbsp;Detail Faktur Servis</a></td>
                                        <td><a class="btn btn-primary btn-sm" role="button" style="color: rgb(255,255,255);" href="<?= base_url('c_serviceadvisor/detailpemeriksaan/').$a['nomor_polisi_selesai'].'/'.$a['tgl'] ?>"><i class="fas fa-search"></i>&nbsp;Detail Pemeriksaan</a></td>
                                        <td><a class="btn btn-primary btn-sm" role="button" style="color: rgb(255,255,255);" href="<?= base_url('c_serviceadvisor/detailworkorder/').$a['nomor_polisi_selesai'].'/'.$a['tgl'] ?>"><i class="fas fa-search"></i>&nbsp;Detail Work Order</a></td>
                                        <td><a class="btn btn-primary btn-sm" role="button" style="color: rgb(255,255,255);" href="<?= base_url('c_serviceadvisor/detailqmc/').$a['nomor_polisi_selesai'].'/'.$a['tgl'] ?>"><i class="fas fa-search"></i>&nbsp;Detail QMC</a></td>
                                    </tr>
                                <?php } ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
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