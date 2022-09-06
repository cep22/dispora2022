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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/vendor/nailthumb/jquery.nailthumb.1.1.min.js"></script>
    <link href="<?php echo base_url();?>bootstrap/font-awesome/css/font-awesome.min.css" rel='stylesheet'>
    <!-- Bootstrap Core CSS -->
    <!-- Custom CSS -->
   </head>
   <style type="text/css">
   .img-link {
  display: block;
  position: relative;
  max-width: 400px;
  margin: 0 auto;
}
      .img-hover {
        background: rgba(84, 172, 210, 0.6);
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: all ease 0.5s;
        -webkit-transition: all ease 0.5s;
        -moz-transition: all ease 0.5s;
      }
      .img-hover:hover {
        opacity: 1;
      }
      .img-hover .img-hover-content {
        position: absolute;
        width: 100%;
        height: 20px;
        font-size: 20px;
        text-align: center;
        top: 50%;
        margin-top: -12px;
        color: white;
      }
   </style>
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
             <ul class="nav navbar-nav" >
                    <li >
                       <a href="<?php echo base_url() ?>index.php/welcome/album" style="font-family: 'Roboto'; font-size: 20px;padding-top: 22px;" ><strong>Galeri</strong></a> 
                    </li>
                </ul>      
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  <div class="container" >
    <div class="page-header">
      <h1>Galeri <small><?php echo $album ?></small></h1>
    </div>
    <div class="container" style="margin-top:10px;">

    <div class="row">
    <?php foreach($data as $gambar) { ?>
    <div class="col-md-4">
    <a href="#myModal<?php echo $gambar['id_foto'] ?>" data-toggle="modal" class="img-link" style="margin-bottom: 30px;">
    <div class="img-hover">
      <div class="img-hover-content">
      <i class="fa fa-search " aria-hidden="true"></i>
      </div>
    </div>
   
    <img class="nailthumb-foto " src="<?php echo base_url() ?>/galeri/<?php echo $gambar['id_foto'] ?>.jpg" >
    
    </a>
    </div>

     <!-- Modal -->
    <div id="myModal<?php echo $gambar['id_foto'] ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $gambar['judul_foto'] ?></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <img class="img-responsive" src="<?php echo base_url() ?>/galeri/<?php echo $gambar['id_foto'] ?>.jpg">
                    
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100px">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
   <!-- end of modal -->
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-foto').nailthumb({
          width:359,
        height: 359,
        fitDirection:'center center'
        });
        
    });
</script>