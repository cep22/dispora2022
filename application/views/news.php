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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:600" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
    <style type="text/css">
        .navbar .nav li a:hover{
            border-bottom: 3px white solid;
        }
    </style>
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li >
                       <a href="<?php echo base_url() ?>index.php/welcome/berita" style="font-family: 'Roboto', sans-serif; font-size: 20px;padding-top: 22px;" ><strong>Berita</strong></a> 
                    </li>
                </ul>               

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="container" >
    <div class="page-header">
        <h2 style="font-family: 'Open Sans', sans-serif;"><?php echo $judul ?></h2>
        <br>
        <div style="font-family: 'Open Sans', sans-serif;">
            <span> <span><i class="glyphicon glyphicon-calendar"></i></span> <?php echo date('D, d M Y',strtotime($tgl)) ?> | <?php echo $sumber ?></span>
        </div>
    </div>
    <p>&nbsp;<p>
    <div class="col-sm-8 ">
    <?php if(file_exists('bootstrap/img/berita/'.$id.'.jpg')) { ?>
        <img src="<?php echo base_url();?>bootstrap/img/berita/<?php echo $id?>.jpg" class="img-responsive"  >
        <?php } else { ?>
        <img src="<?php echo base_url();?>bootstrap/img/berita/change.jpg" class="img-responsive">
    <?php } ?>
    <br>&nbsp;        
    </div>
    <div class='col-md-8'>
    <p class="text-justify">
        <?php echo $isi?>
    </p>
    </div>
</div>