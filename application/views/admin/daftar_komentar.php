<div class="'container">
    <html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>

    <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
    <script source="<?php echo base_url(); ?>bs-3/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<?php include('admin_nav.php'); ?>

    <div class="container" style="margin-top: 20px">
    <div class="page-header">
  <h1>Halaman Admin <small>Berita</small></h1>
</div>
    
    <div class="col-sm-12 " >
   
       
        <?php foreach ($data as $komentar) { ?>
           
                <h4 class="media-heading"><?php echo $komentar['nama'] ?></h4>
                <p class="text-justify"><?php echo $komentar['komentar'];?>
               
                
          <hr>
             <?php } ?>
        </div>
        
        </div>
<?php 
        $dirname = base_url().'bootstrap/img/berita/';
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                echo '<img src='.$image.' /><br />';
            }
        ?>
       
        
