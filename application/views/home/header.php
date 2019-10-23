<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>SMK GAMA TANGERANG</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="<?php echo base_url()?>assets/css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='<?php echo base_url()?>assets/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="<?php echo base_url()?>assets/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="<?php echo base_url()?>"> SMK <span>GAMA TANGERANG</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li ><?php echo anchor('home','Home');?></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sekolah<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><?php echo anchor('home/profile','Profile');?></li>
                     <li><?php echo anchor('home/guru','Guru');?></li> 

                      
                      
                  </ul>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pendaftaran<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><?php echo anchor('home/psb','Info PSB');?></li> 
                      <li><?php echo anchor('home/tk_daftar','Daftar');?></li>
                      <li><?php echo anchor('home/pembayaran','Info Pembayaran');?></li> 
                 </ul>
                </li>
                <li><?php echo anchor('login','Login');?></li> 
                <li><?php echo anchor('home/contact','Contact');?></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 
