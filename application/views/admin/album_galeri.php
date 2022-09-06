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
  <h1 style="font-family: 'Asap', sans-serif;">Halaman Admin <small>Galeri</small></h1>
</div>

<div class="container">
<a href="<?php echo base_url('index.php/c_admin/form_tambah_album') ?>" class="btn btn-info" role="button"><span><i class="glyphicon glyphicon-plus-sign"> </i></span> Tambahkan Album</a> <p>&nbsp;<p>
<table class="table">
  <thead>
    <th>Daftar Album</th>
  </thead>
  <?php 
    foreach ($data as $album) { ?>
    <tr>
      	<td><a href="<?php echo base_url() ?>index.php/c_admin/add_foto/<?php echo $album['id_album']; ?>"><?php echo $album['nama_album'] ?></a></td>
	<td><a href="<?php echo base_url() ?>index.php/c_admin/hapus_album/<?php echo $album['id_album'] ?>">Hapus Album</a></td>
    </tr>
   <?php }
   ?>
</table>