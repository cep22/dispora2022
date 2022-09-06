<div class="'container">
    <html lang="en">

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
    <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<?php include('admin_nav.php') ?>

<div class="container" style="margin-top: 40px">
    <div class="page-header">
        <h1>Halaman Admin <small>Edit Profil</small></h1>
    </div>
    <div class="row">
    <?php foreach($data as $profil) { ?>
    	<div class="col-md-4">
    		<button data-toggle="modal" data-target="#myModal<?php echo $profil['id_profil'] ?>" class="btn btn-primary" style="width: 100%;margin-bottom: 28px; border-radius: 0;height: 60px;"><?php echo 'Edit '.$profil['judul_profil'] ?></button>	
    	</div>
  

    	<!-- Modal -->
    <div id="myModal<?php echo $profil['id_profil'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- konten modal--> 
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit <?php echo $profil['judul_profil'] ?></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
              		<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/c_admin/edit_profil_proses/".$profil['id_profil'] ?>">      
              			<div class="form-group">
              				<label class="control-label col-sm-2">Edit: </label>
              				<div class="col-sm-10">
              					<textarea class="form-control" id="editor<?php echo $profil['id_profil'] ?>" rows="7" name="isi"><?php echo $profil['isi_profil'] ?></textarea>
              				</div>
              			</div>
              			<script>
                			// Replace the <textarea id="editor1"> with a CKEditor
               				// instance, using default configuration.
                			CKEDITOR.replace( 'editor<?php echo $profil['id_profil'] ?>');
            			</script>
             			<div class="form-group">
                			<div  class="col-sm-offset-2 col-sm-10">
                    			<button type="submit" class="btn btn-success" name="simpan" value="Simpan" style="width: 100px">Simpan</button>
                   	 		</div>
                		</div>
        			</form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>

   <!-- end of modal -->
    <?php } ?>
    </div>
     
