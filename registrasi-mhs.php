<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="lib/images/favicon.png" type="image/png">

  <title>Lab FTIK</title>

  <link href="lib/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signuppanel" >
        
        <div class="row">
            
            
            <div class="col-md-6">
                
                <form method="post" action="registrasi-mhs-proses.php?act=tambah">
                
                    
                    <div class="mb10">
                        <label class="control-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required/>
                    
                    </div>
                    <div class="mb10">
                        <label class="control-label">NIM</label>
                        <input type="text" class="form-control" name="nim" placeholder="NIM" required/>
                    </div>
                    <div class="mb10">
                        <label class="control-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required/>
                    </div>
                    <div class="mb10">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required/>
                    </div>
                    
                    <label class="control-label">Tanggal Lahir</label>
                    <div class="row mb10">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="tanggal" name="tanggal" required/>
                        </div>
                        <div class="col-sm-5">
                            <select class="form-control chosen-select" data-placeholder="bulan" name="bulan" required>
                                <option value="">- bulan -</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="Nopember">Nopember</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="tahun" name="tahun" required/>
                        </div>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Angkatan</label>
                        <select class="form-control chosen-select" data-placeholder="bulan" name="angkatan" required>
                                <option value="">- Tahun -</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                            </select>
                    </div>
                    <div class="mb10">
                        <label class="control-label">Email Address</label>
                        <input type="text" class="form-control" placeholder="email" name="email" required/>
                    </div> 

                    <div class="mb10">
                        <label class="control-label">No. Telepon</label>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" name="notelp" required/>
                    </div>

                    <div class="mb10">
                        <label class="control-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" placeholder="alamat" required></textarea>
                    </div>
                    
                    
                    <br />
                    
                    <button class="btn btn-success btn-block">Daftar</button>     
                </form>
            </div><!-- col-sm-6 -->

            <div class="col-md-6">
                <h1>Pendaftaran Mahasiswa Praktikum</h1>
            </div>
            
        </div><!-- row -->
    </div><!-- signuppanel -->
  
</section>


<script src="lib/js/jquery-1.10.2.min.js"></script>
<script src="lib/js/jquery-migrate-1.2.1.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/modernizr.min.js"></script>
<script src="lib/js/retina.min.js"></script>

<script src="lib/js/chosen.jquery.min.js"></script>

<script src="lib/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        // Chosen Select
        jQuery(".chosen-select").chosen({
            'width':'100%',
            'white-space':'nowrap',
            disable_search_threshold: 10
        });
        
    });
</script>

</body>
</html>
