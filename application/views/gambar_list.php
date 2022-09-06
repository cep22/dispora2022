<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Galeri</title>
    

    <link href="<?php echo base_url(); ?>bs-3/css/bootstrap.min.css" rel='stylesheet'>
    <script src="<?php echo base_url();?>date/js/jquery.js"></script>
    <script src="<?php echo base_url();?>date/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>date/datepick/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?php echo base_url()?>bootstrap/css/agency.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/vendor/nailthumb/jquery.nailthumb.1.1.min.js"></script>
    <style type="text/css">
    .portfolio-link {
  display: block;
  position: relative;
  max-width: 400px;
  margin: 0 auto;
}
        .portfolio-hover {
        background: rgba(0, 0,0, 0.5);
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
       transition: all ease 0.5s;
      -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    }
.portfolio-hover:hover {
  opacity: 1;
}
.portfolio-hover .portfolio-hover-content {
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
    <!-- Bootstrap Core CSS -->
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
<div class="container">
<?php $i=0;
foreach ($map as $k) {
  $i++;?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding-top: 20px">	
        <a href="#portfolioModal<?php echo $i ?>" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    LIHAT GAMBAR
                </div>
            </div>
            <img class="img-responsive" src="<?php echo base_url($dir)."/".$k;?>" alt="">
        </a>
     <h4 class="header">Tes</h4>
     <small><?php echo substr($k, 0, -4) ?></small>
     </div>

     <!-- Portfolio Modal1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $i ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body" >
                                <!-- Project Details Go Here -->
                                <h2>Testing</h2>
                                <p class="item-intro text-muted"><?php echo substr($k, 0, -4) ?></p>
                                <p><img class="img-responsive" src="<?php echo base_url($dir)."/".$k;?>" alt=""></p>
                                <p>
                                    
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
          
?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-gambar').nailthumb({
          width:350,
        height: 350,
        fitDirection:'center center'
        });
        
    });
</script>
