<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BCAS - Company Profile</title>
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
	<link rel="icon" href="<?php echo base_url('assetsFront/images/pavicon.ico') ?>">
	     <style>
			.modal-backdrop {
			  z-index: -1;
			}
        </style>
</head>

<body>

    <div id="wrapper">
        <!-- header begin -->
         <?php $this->load->view("frontend/partials/header.php") ?>
        <!-- header close -->

        <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="<?php echo base_url() ?>">Home</a></li>
                            <li class="sep"></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="padding30 mb30" data-bgcolor="#eee">
                                    <div class="box-icon-simple left">
                                        <i class="icon_comment_alt wow bounceIn id-color" data-wow-delay=".5s"></i>
                                        <div class="text">
                                            <h3>Our Vision</h3>
                                            <?= $visi['desk'] ?>
											<br /><br /><br /><br /><br /><br /><br /><br /><br />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="padding30 mb30" data-bgcolor="#eee">
                                    <div class="box-icon-simple left">
                                        <i class="icon_comment_alt wow bounceIn id-color" data-wow-delay=".5s"></i>
                                        <div class="text">
                                            <h3>Our Mission</h3>
                                            <?= $misi['desk'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <figure class="pic-hover hover-scale mb20">
                                    <span class="center-xy">
                                        <a class="image-popup" href="<?php echo base_url('assetsFront/images/misc/pic_6.jpg') ?>">
                                            <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <img src="<?php echo base_url('assets/upload/') ?><?= $strength['images'] ?>" class="img-responsive" alt="">
                                </figure>

                                <h3>Our Strength</h3>
                                <p><?= $strength['desk'] ?></p>
                            </div>

                            <div class="col-md-6">
                                <h3>Out Products</h3>
                                <p><?= $product['desk'] ?> </p>

                                <figure class="pic-hover hover-scale mt20">
                                    <span class="center-xy">
                                        <a class="image-popup" href="<?php echo base_url('assetsFront/images/misc/pic_7.jpg') ?>">
                                            <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                    </span>
                                    <span class="bg-overlay"></span>
                                    <img src="<?php echo base_url('assets/upload/') ?><?= $product['images'] ?>" class="img-responsive" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <aside id="sidebar" class="col-md-3">
                        <div class="widget">
                            <ul id="services-list">
                                <li class="active"><a href="#">Company Overview</a></li>
                                <li><a href="#">Company History</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="padding30 text-black" data-bgimage="url(<?php echo base_url('assetsFront/images/background/banner-1.jpg') ?>">
                                <h4>Attention!</h4>
								Don't hesitate to contact us any time. If you require any further information, feel free to contact us
								<div class="text-center">
									<button type="button"  class="btn btn-line-black btn-fx mt20" data-toggle="modal" data-target="#penawaran">Get a quote</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

            <!-- section begin -->
            <section class="pt20 pb20 mt80" data-speed="5" data-type="background">

            </section>
            <!-- section close -->

        </div>

        <!-- footer begin -->
        <?php $this->load->view("frontend/partials/footer.php") ?>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
    </div>

	   <!-- Modal -->
        <div class="modal fade" id="penawaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">          <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Request a Quote</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="POST">        
              <div class="modal-body mx-3">
				<div class="col-md-3">
					<label data-error="wrong" data-success="right">Your Name : </label>
				</div> 
                <div class="md-form col-md-9">
                  <!--<i class="fa fa-envelope prefix grey-text"></i>-->
                  	<input type="text" placeholder="Your Name" class="form-control validate" name="nama">
                </div> <br /><br />

				<div class="col-md-3">
					<label data-error="wrong" data-success="right">Your Email : </label>
				</div>  
                <div class="md-form col-md-9">
                  <!--<i class="fa fa-lock prefix grey-text"></i>-->
                  <input type="email" placeholder="Your Email" class="form-control validate" name="email" required>
                </div> <br /><br />

				<div class="col-md-3">
					<label data-error="wrong" data-success="right">Company : </label>
				</div>  
                <div class="md-form col-md-9">
                  <!--<i class="fa fa-institution prefix grey-text"></i>-->
                  <input type="text" placeholder="Company Name" class="form-control validate" name="company">
                </div> <br /><br />
				  
				<div class="col-md-3">  
					<label data-error="wrong" data-success="right">Phone : </label>  
				</div>	
                <div class="md-form col-md-9">
                  <!--<i class="fa fa-phone prefix grey-text"></i>-->
                  <input type="text" placeholder="Your Phone" class="form-control validate" name="phone" required>
                </div> <br /><br />
				  
				<div class="col-md-3">
					<label data-error="wrong" data-success="right">Message : </label>
				</div>  
                <div class="md-form col-md-9">
                  <!--<i class="fa fa-envelope-open-o  prefix grey-text"></i>-->
                  <textarea  class="form-control" name="pesan" rows="5"></textarea>
                </div> 
				<!--<div class="md-form col-md-12">
					<div class="g-recaptcha" data-sitekey="6Les4K0UAAAAABD4BSGVlV4LBO7iLfoZCYF4CVsC"></div>  
				</div> -->
				  	<input type="hidden" name="produk" value="<?php //echo $data['nama_produk']; ?>">
				<div class="md-form col-md-12">
				  	<button class="btn btn-primary">Send</button>
				 </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                
              </div>
              </form>      
            </div>
          </div>
        </div>
        <!-- End Modal -->

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
       		$('.modal-dialog').parent().on('show.bs.modal', function(e){ $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); }); 
      </script>

</body>
</html>
