<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS - Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BuildPro is the most complete constructon and building website template">
    <meta name="keywords" content="construction,multipurpose,onepage,responsive,minimal,bootstrap,theme">
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
	<link rel="stylesheet" href="<?php echo base_url('assetsFront/') ?>" >
	<link rel="icon" href="<?php echo base_url('assetsFront/images/pavicon.ico') ?>">
    </head>
<body class="page-shop">

    <div id="wrapper">
        <!-- header begin -->
        <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Products</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="">Home</a></li>
                            <li class="sep"></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <ul class="products">
								<?php foreach($products as $product): ?>
                                <li class="col-md-4 product">
                                    <figure class="pic-hover">
                                        <a href="<?php echo base_url('detail/'.$product->alias)?>">
                                            <span class="center-xy">
                                                <i class="fa fa-link btn-action btn-action-hide"></i>
                                            </span>
                                            <span class="bg-overlay"></span>
                                            <img src="<?php echo base_url('assets/upload/'.$product->gambar) ?>" class="img-responsive" alt="">
                                        </a>
                                    </figure>
                                    <h4><?php echo $product->nama_produk ?></h4><?php if(strlen($product->nama_produk) < 25){ echo '<br />'; } ?><br />
                                    <!--<a href="<?php echo base_url('detail/'.$product->alias)?>" class="btn btn-link">Detail</a> -->
                                </li>
								<?php endforeach; ?>
                            </ul>
                        </div>               
					</div>
					
                    <div id="sidebar" class="col-md-3">
                        <div class="widget widget_search">
                            <input type='text' name='search' id='search' class="form-control" placeholder="search product">
                            <button id="btn-search" type='submit'></button>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget widget_category">
                            <h4>Brand</h4>
                            <ul>
                                <?php foreach($brand as $br) { ?>
                                <li><a href="#"><?= $br['name_brand'] ?></a></li>
                                <?php } ?>
                            </ul>
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
