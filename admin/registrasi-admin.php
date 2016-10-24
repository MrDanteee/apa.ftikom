<!DOCTYPE html>
<html lang="en">

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signuppanel" >
        
        <div class="row">
            
            
            <div class="col-md-6">
                
                <form method="post" action="registrasi-admin-proses.php?act=tambah">
                
                    
                    <div class="mb10">
                        <label class="control-label">Nama</label>
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required/>
                    
                    </div>

                    <div class="mb10">
                        <label class="control-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required/>
                    </div>
                    <div class="mb10">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required/>
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
