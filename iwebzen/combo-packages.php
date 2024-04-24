<!DOCTYPE html>
<html>

<head>
   <title>The Most Decent and Prime Creative Design Agency| Designs Bulls</title>
   <meta name="description" content="Designs Bulls are an innovative Design agency with admirable design services within minimum time.Share your idea with us and discuss your project now!">
   <?php
   include __DIR__ . '/include/header.php'
   ?>
   <section class="banner-sec about-banner-sec pricing-page-sec">
      <div class="header-slider banner-txt-box">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="anim-banner-txt" data-aos="zoom-in" data-aos-duration="2000">
                     <h5>MOST AFFORDABLE <br /> PACKAGES FOR ALL <br /> OUR CUSTOMERS</h5>
                     <div class="pricig-page-img-box">
                        <img src="images/pricing-page-banner-img.png" alt="" class="img-fluid" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="pricing-page pricing-main-sec combo-pack-sec">
      <div class="wrapv">
         <div class="vertical tlt">
            Design
         </div>
      </div>
      <div class="wrapv-two">
         <div class="vertical-two tlt-2">
            Creative.
         </div>
      </div>
      <div class="container">
         <div class="price-head-box" data-aos="fade-down" data-aos-duration="2000">
            <h4>Most Affordable Packages</h4>
            <p>We are well aware of the competition. That is the reason why we have a fair pricing model. <br />We ensure quality over quantity on each order.</p>
         </div>
         <?php
         $packages = getPromotionPackages(PROMOTION_CUSTOM_PACKAGE); { ?>
            <div class="pricing-tabs-box">
               <ul class="nav nav-pills combo-pricing-tabs">
                  <?php
                  foreach ($packages as $index => $package) { ?>
                     <li class="nav-item">
                        <a href="#tab_content_<?= $package['id'] ?>" data-toggle="tab" class="nav-link <?= $index == 0 ? 'active' : '' ?>">
                           <?= $package['title'] ?>
                        </a>
                     </li>
                  <?php } ?>
               </ul>
            </div>
            <div class="tab-content">
               <?php foreach ($packages as $index => $package) {
                  $package['promotion_id'] = PROMOTION_CUSTOM_PACKAGE;

                  if ($package['is_advance']) {
                     $advancePackages[] = $package;
                  } else { ?>
                     <div id="tab_content_<?= $package['id'] ?>" class="tab-pane <?= $index == 0 ? 'in active' : '' ?>">
                        <?php echo generatePackageBox('package_box_inner_combo', $package); ?>
                     </div>
                  <?php } ?>
               <?php } ?>
            </div>
         <?php } ?>
         <a href="pricing.php" class="btn btn-view-pack">view all packages</a>
      </div>
   </section>
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