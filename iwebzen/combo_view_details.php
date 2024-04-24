<?php
   include __DIR__ . '/include/header.php'
   ?> 
<?php
   $getPackageParam = $_GET['package'];
   $pakageData = getPackageByName($getPackageParam);
      // print_r($pakageData);die;
    //getPromotionPackageByName(PROMOTION_CUSTOM_LOGO,$getPackageParam);
   ?>
<title>The Most Decent and Prime Creative Design Agency| Designs Bulls</title>
<meta name="description" content="Designs Bulls are an innovative Design agency with admirable design services within minimum time.Share your idea with us and discuss your project now!">
</head>
<!-- Banner Area -->
<section class="banner_area combo_detail_sec">
   <div class="container">
      <div class="combo-pack-box" data-package-box>
         <div class="combo-pack-head">
            <div class="productSku" style="display: none;"><?php echo $pakageData['sku']; ?></div>
            <h5><?php echo $pakageData['title']; ?></h5>
         </div>
         <div class="combo-pack-info">
            <p><?php echo $pakageData['short_description']; ?></p>
         </div>
         <div class="comb-pack-desc-main-box" data-package-scroll>
            <div class="row">
               <?php echo $pakageData['html_description']; ?>
               <div class="col-lg-3 col-md-6 col-sm-12 combo-package-desc-price">
                  <div class="combo-pack-price">
                     <h6>$<?php echo $pakageData['price']; ?></h6>
                  </div>
                  <div class="combo-package-chat-box">
                     <div class="chat-btn">
                        <a href="javascript:;" class="chatt">
                           <h4>Click here to <i class="fa fa-comment"></i><span>Live Chat</span></h4>
                        </a>
                     </div>
                     <a href="javascript:;" data-toggle="modal" data-target="#req_qoute" class="btn-combo">request a qoute</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Banner Area -->
<section class="pricing-page-awards awards-sec">
   <div class="container">
      <div class="awards-head-box" data-aos="fade-down" data-aos-duration="2000">
         <h4>awards & recognitions</h4>
      </div>
      <div class="awards-img-box awards-responsive-slider">
         <img src="images/award-img-1.png" alt="" class="img-fluid" />
         <img src="images/award-img-2.png" alt="" class="img-fluid" />
         <img src="images/award-img-3.png" alt="" class="img-fluid" />
         <img src="images/award-img-4.png" alt="" class="img-fluid" />
         <img src="images/award-img-5.png" alt="" class="img-fluid" />
      </div>
   </div>
</section>
<section class="get-in-touch-sec">
   <div class="container">
      <div class="get-in-touch-head">
         <h4>Get In Touch With Us</h4>
         <p>Our friendly call center representatives are always available round the clock for any guidence</p>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4">
            <div class="lets-talk-box">
               <h5>Let’s Talk.</h5>
            </div>
            <div class="call-us-at-box">
               <img src="images/call-us-img-1.png" alt="" class="img-fluid" />
               <div class="call-us-content">
                  <p>call us at</p>
                  <a href="tel:<?= SITE_PHONE_NUMBER ?>"><?= SITE_PHONE_NUMBER ?></a>
               </div>
            </div>
            <div class="call-us-para">
               <p>We are available on live chat! Just ping us and we will take care of it all. </p>
            </div>
            <div class="call-us-at-box border-none">
               <img src="images/call-us-img-2.png" alt="" class="img-fluid" />
               <div class="call-us-content">
                  <p>let's chat now</p>
                  <a href="javascript:void(0);" class="chatt">LIVE CHAT</a>
               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-8">
            <div class="get-in-touch-form-box" data-form-type="contact_form">
                <?php
                include __DIR__ . '/include/general_form.php'
                ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="contact-us-sec">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="contact-left-box" data-aos="fade-right" data-aos-duration="2000">
               <h6>contact us</h6>
               <h5>Let's write your <br /> story, together.</h5>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="contact-right-box" data-aos="fade-left" data-aos-duration="2000">
               <p>We do not tell you our story. We write it together. Partnering with us means a seat at the table where you will be heard.</p>
               <div class="contact-bottom-info-box">
                  <a href="contact-us.php" class="btn btn-ctn">contact us</a>
                  <a href="tel:<?= SITE_PHONE_NUMBER ?>" class="btn-tel">
                     <img src="images/second-comtact-img-1.png" alt="" class="img-fluid">  
                     <div class="second-con-box">
                        <h6>call us at</h6>
                        <p><?= SITE_PHONE_NUMBER ?></p>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
   include __DIR__ . '/include/footer.php'
   ?>