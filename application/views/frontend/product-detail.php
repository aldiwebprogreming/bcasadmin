<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS - Product Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/bootstrap.css') ?>" type="text/css">	
	<link rel="stylesheet" href="<?php echo base_url('assetsFront/css/jpreloader.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/animate.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/owl.carousel.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/magnific-popup.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/style.css') ?>" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/bg.css') ?>" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php echo base_url('assetsFront/css/color.css') ?>" type="text/css" id="colors">
	<link rel="icon" href="<?php echo base_url('assetsFront/images/pavicon.ico') ?>">
    </head>
<body class="page-project-2">
    <div id="wrapper">
        <!-- header begin -->
		 <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- subheader -->
        <!--<section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo $detail->nama_produk ?></h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="">Home</a></li>
                            <li class="sep"></li>
                            <li>Product Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="project-img-carousel" class="zoom-gallery">
                            <figure class="pic-hover hover-scale mb30">
                                <a href="<?php echo base_url ('assets/upload/'.$detail->gambar) ?>">
                                    <span class="center-xy">
                                        <i class="fa fa-search btn-action btn-action-hide"></i>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <img src="<?php echo base_url ('assets/upload/'.$detail->gambar) ?>" class="img-responsive" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="padding40" data-bgcolor="#f5f5f5">
                            <h3 class="mb20"><?php echo $detail->nama_produk ?>
								<span class="tiny-border"></span>
                            </h3>

                            <div class="info-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="info-text">
                                            <span class="title">Brand:</span>
                                            <span class="val"><?php echo $detail->kode_brand ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="spacer-single"></div>

                            <h3 class="mb20">Description
								<span class="tiny-border"></span>
                            </h3>

                            <p>
                                <?php echo $detail->deskripsi ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer begin -->
         <?php $this->load->view("frontend/partials/footer.php") ?>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="<?php echo base_url('assetsFront/js/jquery.min.js') ?>"></script>	
    <script src="<?php echo base_url('assetsFront/js/jpreLoader.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/jquery.isotope.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/easing.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/owl.carousel.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/jquery.countTo.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/validation.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/enquire.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?php echo base_url('assetsFront/js/designesia.js') ?>"></script>

	<!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/jquery.themepunch.tools.min.js?rev=5.0') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') ?>"></script>

    <!-- RS5.0 Extensions Files -->
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.video.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.navigation.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.actions.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.migration.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assetsFront/revolution/js/extensions/revolution.extension.parallax.min.js') ?>"></script>

</body>
</html>