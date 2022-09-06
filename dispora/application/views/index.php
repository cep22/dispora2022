<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dispora Manado</title>
    <style>
    <style type="text/css">
    .crop {
    width: 200px;
    height: 200px;
    overflow: hidden;
    margin: 10px;
    position: relative;
}
.potong {
    position: absolute;
    left: -1000%;
    right: -1000%;
    top: -1000%;
    bottom: -1000%;
    margin: auto;
    max-height: 100%;
    max-width: max-width;
}
    .navbar-custom .navbar-collapse {
  border-color: rgba(255, 255, 255, 0.02);
}
.navbar-custom .navbar-toggle {
  background-color: #fed136;
  border-color: #fed136;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  color: white;
  font-size: 12px;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #fed136;
}
.navbar-custom .nav li a {
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  letter-spacing: 1px;
  color: white;
}
.navbar-custom .nav li a:hover,
.navbar-custom .nav li a:focus {
  color: #fed136 !important;
  background-color: transparent !important;
  border-radius: 4px !important;
  outline: none;
}
.navbar-custom .navbar-nav > .active > a {
  border-radius: 0;
  color: white;
  background-color: #fed136 !important;
}
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: white;
  background-color: #fec503;
}

    .carousel-indicators li {
        border: solid 1px #222 !important;
    }
    .carousel-indicators .active {
        background-color: #222 !important;
    }
        
    </style>

    <!-- Bootstrap Core CSS -->
    <<link href="<?php echo base_url()?>bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url()?>bootstrap/css/agency.min.css" rel="stylesheet">




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">


    <!-- Navigation -->
    <div class="wrapper" style="margin-top: 70px">
    <img src="<?php base_url()?>bootstrap/img/PASKAH.jpg" class="img-responsive" alt="" style="margin-top: 50px;background-color: transparent;" >
     </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="font-family: 'Montserrat', sans-serif;;font-size: 15PX; background-color: #222222;padding: 10px 0px;" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php echo base_url() ?>bootstrap/img/dispora.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#portfolio" style="color: white">PROFIL</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about" style="color: white">BERITA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#galeri" style="color: white">GALERI</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact" style="color: white">KONTAK</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   




    <!-- Header 
    <header style="height: 370px">
        
    </header>-->

    
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Profil</h2>
                    <h3 class="section-subheading text-muted">Selamat Datang di Website Dispora Kota Manado.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Visi dan Misi</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Tugas Pokok dan Fungsi</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sejarah</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Prestasi & Penghargaan</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/6.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Struktur Organisasi</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php base_url()?>bootstrap/img/tentang/7.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Profil Pimpinan</h4>
                        <p class="text-muted">Dispora Manado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Berita</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                           <div class="timeline-image">
                                <div class="nailthumb-berita" style="border-radius: 100%">
                                <?php if(file_exists('bootstrap/img/berita/'.$berita[0]['id_berita'].'.jpg')) { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/<?php echo $berita[0]['id_berita'] ?>.jpg" alt="..." />
                                <?php } else { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/berita.jpg" alt="..." />
                                <?php } ?>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a class="subheading" href="<?php echo base_url().'index.php/welcome/news/'.$berita[0]['id_berita']?>"><h4><?php echo date('d M Y',strtotime($berita[0]['tgl_berita'])) ?></h4>
                                    <h4 class="subheading"><?php echo $berita[0]['judul_berita'] ?></h4></a>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo substr($berita[0]['isi_berita'], 0, 200) ;?>. . .</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">

                            <div class="timeline-image">
                                <div class="nailthumb-berita" style="border-radius: 100%">
                                <?php if(file_exists('bootstrap/img/berita/'.$berita[1]['id_berita'].'.jpg')) { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/<?php echo $berita[1]['id_berita'] ?>.jpg" alt="..." />
                                <?php } else { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/berita.jpg" alt="..." />
                                <?php } ?>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a class="subheading" href="<?php echo base_url().'index.php/welcome/news/'.$berita[1]['id_berita']?>"><h4><?php  echo date('d M Y',strtotime($berita[1]['tgl_berita']))?></h4>
                                    <h4 class="subheading"><?php echo $berita[1]['judul_berita'] ?></h4></a>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo substr($berita[1]['isi_berita'], 0, 200); ?>. . .</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <div class="nailthumb-berita" style="border-radius: 100%">
                                <?php if(file_exists('bootstrap/img/berita/'.$berita[2]['id_berita'].'.jpg')) { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/<?php echo $berita[2]['id_berita'] ?>.jpg" alt="..." />
                                <?php } else { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/berita.jpg" alt="..." />
                                <?php } ?>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a class="subheading" href="<?php echo base_url().'index.php/welcome/news/'.$berita[2]['id_berita']?>"><h4><?php echo date('d M Y',strtotime($berita[2]['tgl_berita']))  ?></h4>
                                    <h4 class="subheading"><?php echo $berita[2]['judul_berita'] ?></h4></a>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo substr($berita[2]['isi_berita'], 0, 200); ?>. . .</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <div class="nailthumb-berita" style="border-radius: 100%">
                                <?php if(file_exists('bootstrap/img/berita/'.$berita[3]['id_berita'].'.jpg')) { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/<?php echo $berita[3]['id_berita'] ?>.jpg" alt="..." />
                                <?php } else { ?>
                                <img src="<?php echo base_url()?>bootstrap/img/berita/berita.jpg" alt="..." />
                                <?php } ?>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <a class="subheading" href="<?php echo base_url().'index.php/welcome/news/'.$berita[3]['id_berita']?>"><h4><?php echo date('d M Y',strtotime($berita[3]['tgl_berita'])) ?></h4>
                                    <h4 class="subheading"><?php echo $berita[3]['judul_berita'] ?></h4></a>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo substr($berita[3]['isi_berita'], 0, 200); ?>. . .</p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-inverted">
                            <div class="timeline-image">
                            <a href="<?php echo base_url() ?>index.php/welcome/berita" class="text-muted">
                                <h4>Baca
                                    <br>Berita
                                    <br>Lainnya</h4>
                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Galeri Section -->
    <section id="galeri" class="carousel slide" style="background-color: #eeeeee">
    <div class="container">
    <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Galeri</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
        <!-- Indicators -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
        <ol class="carousel-indicators" style="color: #222222;">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>            
        </ol>
    <div class="col-sm-10 col-sm-offset-1">
  <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php base_url()?>bootstrap/img/galeri/1.jpg" alt="Chania">
            </div>
            <div class="item">
                <img src="<?php base_url()?>bootstrap/img/galeri/2.jpg" alt="Chania">
            </div>
            <div class="item">
                <img src="<?php base_url()?>bootstrap/img/galeri/3.jpg" alt="Flower">
            </div>
            <div class="item">
                <img src="<?php base_url()?>bootstrap/img/galeri/4.jpg" alt="Flower">
            </div>
            <div class="item">
                <img src="<?php base_url()?>bootstrap/img/galeri/5.jpg" alt="Flower">
            </div>
            <div class="item">
                <img src="<?php base_url()?>bootstrap/img/galeri/6.jpg" alt="Flower">
            </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    </div>
  
        <div class="col-sm-2 col-sm-offset-5">
            <div class="intro-text">
                <P>&nbsp;
               
            </div>
            <a href="<?php echo base_url('index.php/welcome/album') ?>" class="btn btn-xl" role="button" style="background-color: #222; border-color: transparent;" >Lihat Galeri</a>
        </div>
   

    </section>

    <!-- Contact Section -->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontak Kami</h2>
                    <h3 class="section-subheading text-muted">Silahkan Kirimkan Pesan Anda</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="<?php echo base_url()."index.php/welcome/insert_komen"; ?>" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *"  ></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email *">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Your Phone *" >
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" name="submit" value="Simpan">Kirim Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Dispora Manado 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $profil[0]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon!</p>
                                <p><?php echo $profil[0]['isi_profil'] ;?></p>
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

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <h2><?php echo $profil[1]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon</p>
                                <p><?php echo $profil[1]['isi_profil'] ;?></p>
                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $profil[2]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon!</p>
                                <p><?php echo $profil[2]['isi_profil'] ;?></p>
                               
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $profil[3]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon!</p>
                                
                                <p><?php echo$profil[3]['isi_profil'] ;?></p>
                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $profil[4]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon!</p>
                                
                                <p><?php echo $profil[4]['isi_profil'] ;?></p>
                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $profil[5]['judul_profil'] ?></h2>
                                <p class="item-intro text-muted">Soon!</p>
                
                                <p><?php echo $profil[5]['isi_profil'] ;?></p>
                                
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- jQuery -->
    <script src="<?php echo base_url()?>bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- nailThumb -->
    <script src="<?php echo base_url()?>bootstrap/vendor/nailthumb/jquery.nailthumb.1.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url()?>bootstrap/js/agency.min.js"></script>

</body>


</html>

 <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.nailthumb-berita').nailthumb({width:156,height:156});
    });
</script>
