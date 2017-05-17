<!DOCTYPE html>
<html>
<head>
	<title>BORANG AKREDITASI PROGRAM STUDI</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css">

    <script src="<?php echo base_url();?>js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo base_url();?>js/clxtablefilter.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="<?php echo base_url();?>jqfu/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="<?php echo base_url();?>jqfu/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?php echo base_url();?>jqfu/js/jquery.fileupload.js"></script>

	<link rel="stylesheet" href="<?php echo base_url();?>jqfu/css/style.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	

	

	<link rel="stylesheet" href="<?php echo base_url();?>css/bootflat.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>jqfu/css/jquery.fileupload.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/mystyle.css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="<?php echo base_url();?>fontawesome/css/font-awesome.min.css">


    <style type="text/css">
        @media print {
          .btn{
            display: none;
          }
          input{
            border: none;
            background: #fff;
            color: #000;
          }
          .form-control{
            border: none;
            background: #fff;
            color: #000;
          }
        }
        <?php 
          if(!islogin()){
            ?>
              body {
                  background-image: url("<?php echo base_url();?>img/bg.png");
                  background-color: #cccccc;
                  background-size: cover;
                  background-repeat: none;
              }

            <?php
          }
         ?>
    </style>
</head>
<body style="padding-top:0px">

    <div class="page-header bg-info hidden-print">
  
        <img src="<?php echo base_url();?>img/header.png" class="" height="100px">
    </div>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="http://polinela.ac.id/">Beranda Polinela</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                      if(!islogin()){

                      }else{


                    ?>

                     <?php if(!isadmin() && iskaps()){ ?>
                       <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url('home/index');?>">Draf Usulan</a></li>
                        <li class=""><a href="<?php echo base_url('home/mysubmission');?>">Usulan Saya</a></li>
                        <li class=""><a href="<?php echo base_url('home/allsubmission');?>">Daftar Semua Usulan</a></li>
                        <!-- <li class=""><a href="<?php echo base_url('home/search');?>">Pencarian Data</a></li> -->


                        
                      </ul>
                      <a style="margin-right: 0px;" href="<?php echo base_url('user/logout');?>" type="button" class="btn btn-success navbar-btn navbar-right"><i class="fa fa-sign-out"></i> Logout</a>
                      <?php } elseif (!isadmin() && !iskaps()) {
                           ?>
                              <ul class="nav navbar-nav">
                                 <li class=""><a href="<?php echo base_url('home/allsubmission');?>">Daftar Semua Usulan</a></li>


                                  <!-- <li class=""><a href="<?php echo base_url('home/search');?>">Pencarian Data</a></li> -->
                                  </ul>
                                    <a style="margin-right: 0px;" href="<?php echo base_url('user/logout');?>" type="button" class="btn btn-success navbar-btn navbar-right"><i class="fa fa-sign-out"></i> Logout</a>
                           <?php
                      }

                      else{ ?>
                             <ul class="nav navbar-nav">
                              <li class=""><a href="<?php echo base_url('admin/');?>">Beranda</a></li>
                             


                               
                             
                            </ul>
                              <a style="margin-right: 0px;" href="<?php echo base_url('user/logout');?>" type="button" class="btn btn-success navbar-btn navbar-right"><i class="fa fa-sign-out"></i> Logout</a>

                      <?php } ?>

                    <?php
                      }
                    ?>

                     
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

<div class="container" style="padding:0px;padding-top:0px">
	
