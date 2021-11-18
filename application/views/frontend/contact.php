<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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
	<link rel="icon" href="<?php echo base_url('assetsFront/images/pavicon.ico') ?>">
    </head>
<body class="page-contact">

    <div id="wrapper">
        <!-- header begin -->
        <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="">Home</a></li>
                            <li class="sep"></li>
                            <li>Contact Us</li>
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
                    <div class="col-md-8">
                        <div class="de_tab tab_style_2">

                            <div class="de_tab_content tc_style-1">

                                <div id="tab1">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="map-container">
                                                <iframe src="https://maps.google.com/maps?q=pt%20budijaya%20makmursentosa&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="380" frameborder="0" style="border: 0" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <address class="address-style-2">
                                                <span><strong>Address:</strong>Jl. Sangir Talaud I KIM IV RT.000 RW.000, Pematang Johar, Labuhan Deli</span>
                                                <span><strong>Phone:</strong>(208) 333 9296</span>
                                                <span><strong>Email:</strong><a href="mailto:cs@bcasejahtera.com">cs@bcasejahtera.com</a></span>
                                                <span><strong>Web:</strong><a href="#test">http://bcasejahtera.com</a></span>
                                                <span><strong>Open</strong>Sunday - Friday 08:00 - 17:00</span>
                                            </address>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="padding30" data-bgcolor="#f5f5f5">

                            <h3>Send Us Message
							<span class="tiny-border"></span>
                            </h3>
                            <form name="contactForm" id='contact_form' method="post" action='email.php'>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id='name_error' class='error'>Please enter your name.</div>
                                        <div>
                                            <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                        </div>

                                        <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                        <div>
                                            <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                        </div>

                                        <div id='phone_error' class='error'>Please enter your phone number.</div>
                                        <div>
                                            <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                        </div>
										
										<div id='company_name' class='error'>Please enter your Company Name.</div>
                                        <div>
                                            <input type='text' name='company_name' id='company_name' class="form-control" placeholder="Company Name">
                                        </div>

                                        <div id='message_error' class='error'>Please enter your message.</div>
                                        <div>
                                            <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div id='submit'>
                                            <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                        </div>
                                        <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                        <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                    </div>
                                </div>
                            </form>
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
	<script src="<?php echo base_url('assetsFront/js/validation.js') ?>"></script>

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
