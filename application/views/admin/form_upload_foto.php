<div class="'container">
    <html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>

    
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
      <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
     <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url();?>date/js/jquery.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<?php include('admin_nav.php'); ?>

    <div class="container" style="margin-top: 20px">
    <div class="page-header">
  <h1 style="font-family: 'Asap', sans-serif;">Halaman Admin <small>Upload Foto Galeri</small></h1>
</div>
<p style="color: red; margin-left: 10px;"> <i>Ukuran Maximal Gambar: 500KB</i>

<?php echo form_open_multipart('c_admin/upload_foto_action');?>
    <div class="form-group" style="padding-bottom: : 100px;">
      <label class="control-label col-sm-2">Penjelasan</label>
        <div class="col-sm-10">
          <input type="text" name="judul" class="form-control" placeholder="Masukkan Penjelasan/Judul Gambar" >
        </div>
    </div><br>&nbsp;
    <div class="form-group">
      <label class="control-label col-sm-2">Pilih File</label>
        <div class="col-sm-10">
          <input type="file" name="berkas"  />
        </div>
    </div><br>
    <div class="form-group">
      <div  class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="upload" class="btn btn-primary" style="padding: 2px; width: 100px;" />
      </div>
    </div>
  </form>