<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS - Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="Budijaya Makmursentosa">
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
</head>
<body class="page-projects">

    <div id="wrapper">
        <!-- header begin -->
        <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Gallery</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="">Home</a></li>
                            <li class="sep"></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-top no-bottom">
            <!-- section begin -->
            <section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom">
                <div class="container">

                    <div class="spacer-single"></div>

                    <div id="gallery" class="row grid_gallery gallery de-gallery">

                        <!-- gallery item -->
                        <div class="col-md-4 item residential">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/1.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 1</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="<?php echo base_url('assetsFront/images/gallery/1.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-4 item">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/2.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 2</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="<?php echo base_url('assetsFront/images/gallery/2.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-4 item">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/3.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 3</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="<?php echo base_url('assetsFront/images/gallery/3.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->
						
						<!-- gallery item -->
                        <div class="col-md-4 item residential">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/1.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 1</span>
                                        </span>
                                    </span>
                                </a>
                                <img src="<?php echo base_url('assetsFront/images/gallery/1.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-4 item">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/2.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 2</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="<?php echo base_url('assetsFront/images/gallery/2.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-md-4 item">
                            <div class="picframe">
                                <a class="image-popup-gallery" href="<?php echo base_url('assetsFront/images/gallery/3.jpg') ?>">
                                    <span class="overlay">
                                        <span class="pf_text">
                                            <span class="project-name">Project 3</span>
                                        </span>
                                    </span>
                                </a>

                                <img src="<?php echo base_url('assetsFront/images/gallery/3.jpg') ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->

                    </div>

                </div>

            </section>
            <!-- section close -->

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
