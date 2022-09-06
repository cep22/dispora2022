<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>



    <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
     <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url();?>date/js/jquery.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<?php include('admin_nav.php') ?>

<div class="container" style="margin-top: 40px">
    <div class="page-header">
        <h1>Halaman Admin <small>Add Gambar: <?php echo $judul ?></small></h1>
    </div>


    <?php echo form_open_multipart('upload/aksi_upload');?>
    <input type="hidden" name="nama" value="<?php echo $judul?>">
    <input type="file" name="berkas" />

    <br /><br />

    <input class="btn btn-primary" type="submit" value="upload" />

</form>