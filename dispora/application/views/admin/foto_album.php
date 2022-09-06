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
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
      <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
      <link href="<?php echo base_url();?>bootstrap/font-awesome/css/font-awesome.min.css" rel='stylesheet'>
     <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
     <script type="text/javascript" src="<?php echo base_url()?>bootstrap/vendor/nailthumb/jquery.nailthumb.1.1.min.js"></script>
    
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <style type="text/css">
      .box-gambar img{
        vertical-align: middle;
        position: relative;
        margin-left: auto;
    margin-right: auto;
    text-align: center; 
        max-height: 150px;
        
      }
      .box-add {
        border: 1px rgba(119,119,119, 0.2) dotted;
        text-align: center;
        vertical-align: middle;
        color: rgba(119,119,119, 0.6);
        padding: 25px;
        font-family: 'Open Sans', sans-serif;
        text-transform: uppercase;
      }

      a .box-add:hover {
        border: 1px rgba(174, 212, 243, 0.6) dotted;
        text-align: center;
        vertical-align: middle;
        color: white;
        padding: 25px;
        text-decoration: none !important;
        background-color: rgba(174, 212, 243, 0.6);
      }

      a {
        text-decoration: none !important;
      }

    </style>
   </head>
<?php include('admin_nav.php'); ?>

    <div class="container" style="margin-top: 25px">
    <div class="page-header">
  <h1 style="font-family: 'Asap', sans-serif;">Halaman Admin <small>Album: <?php echo $album ?></small></h1>
</div>
<div class='row'>
<div class="col-md-4" style="margin-bottom: 50px;">
  <a href="#myModal" data-toggle="modal">
    <div class="box-add">
      <i class="fa fa-plus" aria-hidden="true" style="font-size: 60px;"></i><br>
      <strong>Tambahkan Foto</strong>
    </div>
    </a>
  </div>
<?php if(isset($gambar)) { 
  foreach ($gambar as $gambar) { ?>
      <div class="col-md-4">
        <div class="panel panel-default"">
        <div class = "panel-heading">
          <strong><?php echo $gambar['judul_foto'] ?></strong>
        </div>
            
            <div class="panel-body" style="padding: 0;">
            <div class="nailthumb-gambar">
            <img src="<?php echo base_url()?>galeri/<?php echo $gambar['id_foto'] ?>.jpg">
            </div>
            </div>
            <div class="panel-footer text-right">
            <button data-toggle="modal" data-target="#modaledit<?php echo $gambar['id_foto']?>" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
            <button data-toggle="modal" data-target="#modalhapus<?php echo $gambar['id_foto']?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button>
            </div>
        </div>
    </div> 

    <!-- Modal Hapus -->
    <div id="modalhapus<?php echo $gambar['id_foto']?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Konfirmasi Hapus</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <h3>Apakah Anda yakin akan menghapus Foto ini?</h3>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <a class="btn btn-danger" href="<?php echo base_url('index.php/c_admin/hapus_foto/'.$gambar['id_foto']) ?>" style="width: 100px">Ya</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>

   <!-- end of modal Hapus -->

   <!-- Modal Edit -->
    <div id="modaledit<?php echo $gambar['id_foto']?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Keterangan Foto</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                  <form method="post" action="<?php echo base_url('index.php/c_admin/edit_ket_foto/'.$gambar['id_foto']) ?>">
                    <input class="form-control" type="text" name="judul" placeholder="Keterangan Foto" value="<?php echo $gambar['judul_foto'] ?>"><br>
                    <input type="submit" class="btn btn-success" value="Edit" />
                  </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>

   <!-- end of modal Edit -->



<?php } } ?>

  
</div>

 <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambahkan Gambar</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p style="color: red">-Maximum Size Gambar: 500KB<br>-File Harus bertipe jpg</p>
               
                    <?php echo form_open_multipart('c_admin/upload_foto_galeri');?>
                    <input type="file" name="berkas" /><br>
                    <input type='hidden' name='id_album' value=<?php echo $id_album ?>>
                    <input class="form-control" type="text" name="nama" placeholder="Keterangan Foto"><br>
                    <input type="submit" class="btn btn-success" value="upload" />
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

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-gambar').nailthumb({
            width:359,
            height: 165,
            fitDirection:'center center'
        });
        
    });
</script>
