<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blank Page - TA</title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark d-sm-inline align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(9,40,71);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-tools"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>SIYANVIS</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="daftar%20antrian.html"><strong>Daftar Antrian</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="monitoring%20servis.html"><strong>Monitoring Servis</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar%20selesai%20servis.html"><strong>Daftar Selesai Servis</strong></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="me-2 text-gray-600 small">Hello, Yudha</span><i class="fas fa-sort-down" style="font-size: 20px;margin-bottom: 9px;"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profil.html"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="ganti%20password.html"><i class="far fa-edit fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Ganti Password</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Form Pengecekan</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 fw-bold">Pengecekan "<?= $res['merk_kendaraan'] ?> - <?= $res['nomor_polisi'] ?>"</p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Nomor Pitstop</strong><br></label><input class="form-control" type="text" id="username-3" placeholder="Nomor Polisi Sesuai STNK" value="<?php 
                                                    if ($res['no_antrian'] <= 3) {
                                                        echo $res['no_antrian'];
                                                    } else {
                                                        echo 1;
                                                    }
                                                    ?>" readonly=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Nomor Polisi</strong><br></label><input class="form-control" type="text" id="username-2" placeholder="Nomor Polisi Sesuai STNK" value="<?= $res['nomor_polisi'] ?>" readonly=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Tanggal</strong><br></label><input class="form-control" id="username-1" placeholder="Nomor Polisi Sesuai STNK" type="date" value="<?php echo $date; ?>" readonly=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="username"><strong>Kilometer Kendaraan</strong><br></label><input class="form-control" type="number" id="username-4" placeholder="Isi Kilometer Kendaraan" autocomplete="off"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Pilih Paket Servis</strong><br></label>
                                                        <select name="kategori" id="kategori" class="form-select">
                                                            <option value="0">Pilih Paket Servis</option>
                                                            <?php foreach ($servis->result_array() as $s):?>
                                                                <option value="<?= $s['id']; ?>"><?= $s['tipe_servis']; ?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                        <div class="col">
                                                            <div class="mb-3">
                                                                <div class="table-responsive" style="margin-top: 15px;">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="table-primary" style="width: 170px;">Jenis</th>
                                                                                <th class="table-primary">Masukan Catatan</th>
                                                                                <th class="table-primary" style="width: 55px;">OK?</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody name="subkategori" class="subkategori">
                                                                            <tr>
                                                                                <td>Cek Kondisi</td>
                                                                                <td><input class="form-control" type="text"></td>
                                                                                <td>
                                                                                    <div class="form-check" style="font-size: 28px;margin-top: -1px;margin-bottom: 0px;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2"></label></div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: -15px;">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Tambah Oli/Sparepart/Kegiatan Servis</strong><br></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text"></div>
                                                </div>
                                                <div class="col-1 d-flex justify-content-center"><button class="btn btn-danger" type="button" style="margin-bottom: 15px;"><i class="fas fa-trash"></i></button></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><input class="form-control" type="text"></div>
                                                </div>
                                                <div class="col-1 d-flex justify-content-center"><button class="btn btn-danger" type="button" style="margin-bottom: 15px;"><i class="fas fa-trash"></i></button></div>
                                            </div>
                                            <div class="row">
                                                <div class="col d-flex justify-content-end"><button class="btn btn-info" type="button" style="color: rgb(255,255,255);"><i class="fas fa-plus"></i>&nbsp;Add More</button></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Keluhan</strong><br></label><input class="form-control" type="text" placeholder="Isi Keluhan Pada Kendaraan Jika Ada"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Estimasi Selesai</strong><br></label><input class="form-control" type="time" value="09:00" disabled="" readonly=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3"><label class="form-label" for="first_name"><strong>Perkiraan Alat-alat yang Dibutuhkan</strong><br></label>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="table-primary">Alat</th>
                                                                        <th class="table-primary">Jumlah yang Dibutuhkan</th>
                                                                        <th class="table-primary">Jumlah Alat yang Tersisa</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Car Lift</td>
                                                                        <td>1</td>
                                                                        <td>0</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tang</td>
                                                                        <td>3</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Palu</td>
                                                                        <td>3</td>
                                                                        <td>10</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Clutch Aligning Tool</td>
                                                                        <td>2</td>
                                                                        <td>2</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mb-3"><button class="btn btn-secondary btn-sm" type="submit" style="margin-right: 10px;"><i class="fas fa-print"></i>&nbsp; Print Estimasi Biaya</button><button class="btn btn-primary btn-sm" type="submit"><i class="fas fa-play"></i>&nbsp; Mulai Servis</button></div>
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
                    <div class="text-center my-auto copyright"><span>Copyright ?? TA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?= base_url(''); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/theme.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(''); ?>assets/js/myscript.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#kategori').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>c_frontdesk/get_subkategori",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr><td>'+data[i].pengecekan+'</td> <td><input class="form-control" type="text"></td> <td> <div class="form-check" style="font-size: 28px;margin-top: -1px;margin-bottom: 0px;"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2"></label></div> </td> </tr>';
                    }
                    $('.subkategori').html(html);
                     
                }
            });
        });
    });
</script>
</body>

</html>