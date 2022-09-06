<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>

    <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/vendor/unslider-master/dist/css/unslider.css">
     <link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/vendor/unslider-master/dist/css/unslider-dots.css">

      <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
     <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <script src="<?php echo base_url()?>bootstrap/vendor/unslider-master/dist/js/unslider-min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/vendor/unslider-master/src/js/unslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/vendor/nailthumb/jquery.nailthumb.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>

   <style type="text/css">
      body{
        font-family: 'Open Sans', sans-serif;
      }
       a {
        text-decoration: none !important;
       }
       a .panel-header:hover {
        background-color: #3498DB !important;
        color: white !important;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        font-weight: 900 !important;
       }
   </style>
<body>

    <nav class="navbar navbar-inverse " role="navigation" style="border-radius: 0;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>bootstrap/img/dispora.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <div class="container" >
  
    <div class="page-header">
      <h1>Daftar Album <small>Dinas Pemuda dan Olahraga Kota Manado</small></h1>
    </div>
    
    <div class="row">
    <?php 
    foreach ($data as $album) { ?>
    <div class="col-md-4">
      <a href="<?php echo base_url('index.php/welcome/galeri/'.$album['id_album']) ?>" style="color: black;">
        <div class="panel panel-default" >
            <div class="panel panel-header text-center" style="margin-bottom: 0">
            <h4><?php echo $album['nama_album'] ?></h4>
            </div>
                     
            <div class="panel-body" style="padding: 0; margin-bottom: 0">
              <div class="my-slider">
                <ul>
                  <?php
                    $this->load->model('mymodel');
                    $gambar=$this->mymodel->list_gambar_galeri($album['id_album']);
                    $jumlah = count($gambar);
                    if ($jumlah == 0 ) { ?>
                    <li><div class="nailthumb-album"><img src="<?php echo base_url('galeri/nopic.jpg') ?>"></div></li>
                  <?php   } else {
                    foreach ($gambar as $gambar) {
                  
                  ?>
                  <li><div class="nailthumb-album"><img src="<?php echo base_url('galeri/'.$gambar['id_foto'].'.jpg') ?>"></div></li>
                  <?php } }?>
                </ul>
              </div>            
            </div>
            <div class="panel-footer" style="margin-top: 0">
           <span style="font-size: 12px;padding-bottom: 5px;"><?php echo date('d M Y', strtotime($album['tgl_album']));
          ?></span>
            </div>
        </div>
        </a> 
    </div>

    <script>
    jQuery(document).ready(function($) {
      $('.my-slider').unslider({
        autoplay: true,
        infinite: true,
        arrows: false
      });
      
    });
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-album').nailthumb({
          width:358,
        height: 150,
        fitDirection:'center center'
        });
        
    });
</script>
  
    <?php } ?>
    </div>

   



    