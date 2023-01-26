<html lang="en">
<link rel='canonical' href='<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>'>
<?php $root = '..'; ?>
<link href="css/custom.css" rel="stylesheet">
<link href="css/altModals.css" rel="stylesheet">
<?php include 'modals.php'; ?>
<header class="main-header">
    <!--header-top start-->
    <div class="header-top">
      <!--container start-->
      <div class="container">
        <!--row start-->
        <div class="row">
          <!--col start-->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="user-wrap">
            <!--  <div class="login-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-md-1">Login</button>
              </div>
              <div class="register-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".bs-example-modal-md">Register</button>
              </div> -->
              <div class="clearfix"></div>
            </div>
          </div>
          <!--col end-->
          <!--col start-->
          <div class="col-md-4 col-sm-6">
            <div class="top-left">
              <p style="font-weight: bolder;font-size: 15px;"><i class="fa fa-phone" aria-hidden="true"></i> +63916-3770-871 &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope-o" aria-hidden="true"></i> sales@aggtedeck.com</p>
            </div>
          </div>
          <!--col end-->

          <!--col start-->

          <div class="col-md-5 col-sm-6 col-xs-6">
            <ul class="top-social-icons">
              <li><a href="https://www.facebook.com/wpc.claddingdecking" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/AggteD" target="_blank"><i class="fab fa-twitter-square" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/aggtedeck"  target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/company/aggtedeck" target="_blank"><i class="fab fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.pinterest.ph/aggtedeck " target="_blank"><i class="fab fa-pinterest-square" aria-hidden="true" style="color: #8b0000;"></i></a></li>
            </ul>
            <div class="btn-box">
              <button data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".quote-modal" class="brochure-btn theme-btn hvr-link">Get A Quote</button>
            </div>
          </div>
          <!--col end-->
        </div>
        <!--row end-->
      </div>
      <!--container end-->
    </div>
    <!--header-top end-->
    <!--header-upper start-->

    <!--header-upper end-->
    <!--header-lower start-->
    <div class="header-lower">
      <!--container start-->
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-12">
            <div class="logo-outer">
              <div class="logo"> <a href="index.php"> <img class="logo-default" src="<?php echo $root; ?>/images/logo-default.png" alt="AGG WPC Cladding & Decking Logo" title="AGGTE WPC Cladding & Decking Logo"> </a> </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-12">
            <div class="nav-outer clearfix menu-bg">
              <!--main-menu start-->
              <nav class="main-menu">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                  <ul class="navigation clearfix">
                    <li class="current"><a class="hvr-link" href="<?php echo $root; ?>/index.php">Home</a>
                        <!--Drop Down-->
                  </li>
                    <li class="dropdown"><a class="hvr-link" href="#">About</a>
                      <ul>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/about.php">About</a></li>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/our-team.php">Team</a></li>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/faq.php">FAQ's</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="hvr-link" href="services.php">Services</a>
                      <ul>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/services.php">Services</a></li>
                        <li><a class="hvr-link" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".quote-modal" class="brochure-btn theme-btn hvr-link">Get a Quote</a></li>
                          <li><a class="hvr-link" href="cleaning.php">Cleaning Guides</a></li>
                        <li><a class="hvr-link" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".termed">Terms and Conditions</a></li>

                      </ul>
                    </li>
                    <!--<li title="Coming Soon"><a class="hvr-link" href="/products/" style="pointer-events: none">Products</a></li>-->
                    <li><a class="hvr-link" href="<?php echo $root; ?>/projects.php">Projects</a>
                    </li>
                    <li><a class="hvr-link" href="<?php echo $root; ?>/contact.php">Contact</a></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </nav>
              <!--main-menu end-->

            </div>
          </div>
        </div>
      </div>
      <!--container end-->
    </div>
    <!--header-lower end-->
    <!--sticky-header start-->
    <div class="sticky-header">
      <!--container start-->
      <div class="container clearfix">
        <!--row start-->
        <div class="row">
          <!--col start-->
          <div class="col-md-5 col-sm-5">
            <div class="logo"> <a href="index.php" class="img-responsive"><img class="logo-default" src="<?php echo $root; ?>/images/logo-default.png" alt="AGG WPC Cladding & Decking Logo" title="AGGTE WPC Cladding & Decking Logo"></a> </div>
          </div>
          <!--col end-->
          <!--col start-->
          <div class="col-md-7 col-sm-7">
            <!--main-menu start-->
            <nav class="main-menu">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="navbar-collapse collapse clearfix">
                <ul class="navigation clearfix">
                  <li class="current"><a class="hvr-link" href="<?php echo $root; ?>/index.php">Home</a>
                  </li>
                  <li class="dropdown"><a class="hvr-link" href="#">About</a>
                      <ul>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/about.php">About</a></li>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/our-team.php">Team</a></li>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/faq.php">FAQ's</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="hvr-link" href="services.php">Services</a>
                      <ul>
                        <li><a class="hvr-link" href="<?php echo $root; ?>/services.php">Services</a></li>
                        <li><a class="hvr-link" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".quote-modal" class="brochure-btn theme-btn hvr-link">Get a Quote</a></li>
                          <li><a class="hvr-link" href="cleaning.php">Cleaning Guides</a></li>
                        <li><a class="hvr-link" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target=".termed">Terms and Conditions</a></li>
                      </ul>
                    </li>
                    <!--<li title="Coming Soon"><a class="hvr-link" href="/products/" style="pointer-events: none">Products</a></li>-->
                    <li><a class="hvr-link" href="<?php echo $root; ?>/projects.php">Projects</a>
                    </li>
                  <li><a class="hvr-link" href="<?php echo $root; ?>/contact.php">Contact</a></li>
                </ul>
              </div>
            </nav>
            <!--main-menu stendart-->
          </div>
          <!--col end-->
        </div>
        <!--row end-->
      </div>
      <!--container end-->
    </div>
    <?php include 'social.php'; ?>
    <!--sticky-header end-->
    </header>
</html>
