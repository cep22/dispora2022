<div class="'container">
    <html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>


    <script src="<?php echo base_url();?>date/js/jquery.js"></script>
    <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
     <link href="<?php echo base_url();?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<?php include('admin_nav.php') ?>

<div class="container" style="margin-top: 40px">
    <div class="page-header">
        <h1>Halaman Admin <small>Tambah Album</small></h1>
    </div>

    <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/c_admin/add_album/" ?>">            
            <div class="form-group">
                <label class="control-label col-sm-2">Judul Album</label>
                <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Album">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Tanggal Album</label>
                <div class="col-sm-4">
                   <div class='input-group date'  id='datepicker1'>
                    <input type='text' class="form-control" name='tgl' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <div  class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success" name="simpan" value="Simpan" style="width: 100px">Simpan</button>
                    </div>
                </div>
        </form>
        </div>
        </html>
         <script type="text/javascript">
            $(document).ready(function () {
                
                $('#datepicker1').datepicker({
                    format: "yyyy/mm/dd"
                });  
            
            });

</script>

