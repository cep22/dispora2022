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
  <h1 style="font-family: 'Asap', sans-serif;">Halaman Admin <small>Berita</small></h1>
</div>
    
    <div class="col-sm-12 " >
   
       <a href="<?php echo base_url('index.php/c_admin/tambah_berita_form') ?>" class="btn btn-info" role="button"><span><i class="glyphicon glyphicon-plus-sign"> </i></span> Tambahkan Berita</a> <p>&nbsp;<p>
        <?php foreach ($data as $berita) { ?>
           
                <h3 class="media-heading"><?php echo $berita['judul_berita'] ?></h3>
                <p class="text-justify"><?php echo substr(nl2br($berita['isi_berita']),0, 400).'. . .';?>
                <br><br>
                <a href="<?php echo base_url('index.php/c_admin/edit_berita_form/'.$berita['id_berita']) ?>" class="btn btn-success btn-md" style=" color:white !important" role="button"><span><i class="glyphicon glyphicon-pencil"> </i></span> Edit Berita</a>&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url("index.php/c_admin/delete_berita/".$berita['id_berita']) ?>" class="btn btn-danger btn-md" style="color: white; " role="button"><span><i class="glyphicon glyphicon-trash"> </i></span> Hapus Berita</a>&nbsp;&nbsp;&nbsp;
                <button data-toggle="modal" data-target="#myModal<?php echo $berita['id_berita'] ?>" class="btn btn-primary btn-md" style="color: white; " role="button"><span><i class="glyphicon glyphicon-picture"> </i></span>  Add Gambar</button>
          <hr>

          <!-- Modal -->
    <div id="myModal<?php echo $berita['id_berita'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $berita['judul_berita'] ?></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                Masukkan Gambar dengan ukuran kotak (mis: 500 x 500) <br><br>
                    <?php echo form_open_multipart('c_admin/aksi_upload');?>
                    <input type="file" name="berkas" /><br>
                    <input type="hidden" name="nama_file" value="<?php echo $berita['id_berita'] ?>">
                    <input type="submit" value="upload" />
                    </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>

   <!-- end of modal -->



             <?php } ?>
        </div>
        
        </div>


    