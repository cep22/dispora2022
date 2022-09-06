<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="font-family: 'Exo', sans-serif;
">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()."index.php/c_admin"; ?>">Admin Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li >
                       <a href="<?php echo base_url() ?>index.php/c_admin" >Berita</a> 
                    </li>
                    <li>
                       <a href="<?php echo base_url() ?>index.php/c_admin/edit_profil">Profil</a> 
                    </li>
                    <li>
                       <a href="<?php echo base_url() ?>index.php/c_admin/galeri_album">Galeri</a> 
                    </li>
                    <li>
                       <a href="<?php echo base_url() ?>index.php/c_admin/komentar">Pesan</a> 
                    </li>
                    <!--<li>
                       <a href="<?php echo base_url() ?>index.php/c_admin/edit_profil">Profil</a> 
                    </li> -->
                    
                    
                </ul>
                 <ul class="nav navbar-nav navbar-right">
      
      <li><a href="<?php echo base_url('index.php/c_admin/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>

            </div>
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>