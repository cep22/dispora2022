<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Admin Dispora</title>

    

      <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
     <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    <script src="<?php echo base_url();?>date/js/jquery.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
<body>

    <nav class="navbar navbar-inverse " role="navigation" >
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
      <h1>Berita <small>Dinas Pemuda dan Olahraga Kota Manado</small></h1>
    </div>
    <?php foreach($data as $berita) { ?>
    <div class="row">
    <div class="col-sm-2">
    <?php if(file_exists('bootstrap/img/berita/'.$berita['id_berita'].'.jpg')) { ?>
                                    <img src="<?php echo base_url();?>bootstrap/img/berita/<?php echo $berita['id_berita']?>.jpg" class="img-responsive"  >
                                    <?php } else { ?>
                                    <img src="<?php echo base_url();?>bootstrap/img/berita/change.jpg" class="img-responsive">
                                    <?php } ?>
    
    </div>
    <div class="col-sm-10">
    <h3><a href="<?php echo base_url().'index.php/welcome/news/'.$berita['id_berita']?>" style="color: black;" ><?php echo $berita['judul_berita'] ?></a></h3>
    <p><?php echo substr(nl2br($berita['isi_berita']),0, 400).'. . .';?> <a href="<?php echo base_url().'index.php/welcome/news/'.$berita['id_berita']?>"> Selengkapnya </a>
    </div>
    </div><hr>
    <?php } ?>
    

    
</body>