<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BCAS">
    <meta name="keywords" content="BCAS">
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

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsFront/revolution/css/settings.css') ?>">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsFront/revolution/css/layers.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assetsFront/revolution/css/navigation.css') ?>">
	
	<link rel="icon" href="<?php echo base_url('assetsFront/images/pavicon.ico') ?>">
	<style>
		#headertext {
			background-color: #111;
			opacity: 0,5;
			z-index: 9999;
		}
	</style>
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
                <div id="revolution-slider">
                    <ul>

                        <?php foreach($slide as $data) { ?>

                        <li data-transition="parallaxhorizontal" data-slotamount="10" data-masterspeed="1500" data-thumb="" class="headertext">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo base_url('assets/upload/') ?><?= $data['images'] ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
							<div id="headertext">
                            <div class="tp-caption very-big-white"
                                data-x="0"
                                data-y="200"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="x:50px;opacity:0;s:1000;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;px;s:800;e:Power3.easeInOut;"
                                data-start="700"
                                data-splitin="none"
                                data-splitout="none"
                                data-responsive_offset="on">
                                <?= $data['title'] ?><span class="id-color">.</span>
                            </div>

                            <div class="tp-caption"
                                data-x="0"
                                data-y="260"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1100">
                               <?= $data['desk'] ?>
                            </div>
							</div>
                            <div class="tp-caption"
                                data-x="0"
                                data-y="350"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-transform_in="y:100px;opacity:0;s:500;e:Power3.easeOut;"
                                data-transform_out="opacity:0;x:-10;s:800;e:Power3.easeInOut;"
                                data-start="1200">
                                <a href="#" class="btn-slider">Contact Us
                                </a>
                            </div>
                        </li>

                    <?php } ?>

                     
                    </ul>
                </div>
            </section>
            <!-- revolution slider close -->

            <!-- section begin -->
            <section id="section-features-2" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay="0">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay=".4s">1</span>
                                <div class="text">
                                    <h3>Professional Staff</h3>
                                    Our professional staff is proactive in identifying client service needs.
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".2s">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay=".6s">2</span>
                                <div class="text">
                                    <h3>Save Time and Money</h3>
                                    Simple solutions can save your business time and money
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".4s">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay=".8s">3</span>
                                <div class="text">
                                    <h3>Detailed Estimated</h3>
                                   		Make sure your estimates specify detailed project description
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->


                        <div class="spacer-single"></div>

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".6s">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay="1s">4</span>
                                <div class="text">
                                    <h3>On Time Completion</h3>
                                    	We estimate completion time accurately before we commit to a project deadline
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay=".8s">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay="1.2s">5</span>
                                <div class="text">
                                    <h3>No Hidden Cost</h3>
                                    We're know for our reliability, experienced and friendly team, and no hidden costs
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-small-icon col-md-4 wow fadeIn" data-wow-delay="1s">
                            <div class="inner">
                                <span class="number wow fadeIn" data-wow-delay="1.4s">6</span>
                                <div class="text">
                                    <h3>Zero Complaints</h3>
                                    One of the simplest ways to reduce our customer complaints is to ensure that customers receive exactly what they have paid for
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-steps" class="text-light no-padding" data-stellar-background-ratio=".2">
                <div class="color-overlay pt80 pb80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Our Process
								<span class="tiny-border"></span>
                                </h2>
                            </div>

                            <div class="col-md-12">
                                <div class="de_tab tab_steps style-2">
                                    <ul class="de_nav">
                                        <li class="wow fadeInRight" data-wow-delay="0s"><span>Design</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay=".4s"><span>Preparation</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay=".8s"><span>Construction</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay="1.2s"><span>Revision</span><div class="v-border"></div>
                                        </li>
                                        <li class="wow fadeInRight" data-wow-delay="1.6s"><span>Finalization</span><div class="v-border"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section class="call-to-action bg-color dark pt30 pb30" aria-label="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="<?php echo base_url('products') ?>" class="btn btn-line-black btn-fx">View All Products</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-deco-1" class="text-light no-top no-bottom" data-bgcolor="#333" data-stellar-background-ratio=".2">
                <div class="color-overlay pt80 pb60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2><span class="id-color">PT Budijaya Cemerlang Abadi</span> </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Our Strength</h3>
                                        <p><?=  $strength['desk'] ?></p>
										<h3>Out Products</h3>
										<p><?= $product['desk'] ?></p>
                                    </div>

                                    <div class="col-md-6">
                                        <h3>Our Vision</h3>
                                        <p><?= $visi['desk'] ?></p>
                                        <h3>Our Mission</h3>
										<p><?= $misi['desk'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <figure class="pic-hover hover-scale mb30">
                                    <!--<span class="center-xy">
                                        <a class="popup-youtube" href="">
                                            <i class="fa fa-play btn-action btn-play"></i></a>
                                    </span> -->
                                    <span class="bg-overlay"></span>
                                    <img src="<?php echo base_url('assetsFront/images/misc/pic_8.jpg') ?>" class="img-responsive" alt="">
                                </figure>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
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

    <script>
        jQuery(document).ready(function () {
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 3500,
                navigation: {
                    arrows: { enable: true }
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                spinner: "off",
                gridwidth: 1140,
                gridheight: 510,
                disableProgressBar: "on"
            });
        });
    </script>

</body>
</html>
