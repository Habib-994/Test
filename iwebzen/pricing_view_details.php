<!DOCTYPE html>
<html>
   <head>
   <title>The Most Decent and Prime Creative Design Agency| Designs Bulls</title>
<meta name="description" content="Designs Bulls are an innovative Design agency with admirable design services within minimum time.Share your idea with us and discuss your project now!">
      <?php
         include __DIR__ . '/include/header.php';
         $getPackageParam = $_GET['package'];
        $pakageData = getPackageByName($getPackageParam);
         ?>
    <div class="main-wrapper">
        <!-- Banner Area -->
        <section class="banner_area packages_detail_sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8" data-package-box>
                        <div class="content_div">
                            <?php echo $pakageData['technical_description']; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-item" >
                            <div class="pricing-info" data-package-box>
                                <div class="productSku" style="display: none;"><?php echo $pakageData['sku']; ?></div>
                                <h4 class="title"><?php echo $pakageData['title']; ?></h4>
                                <span class="price">$<?php echo $pakageData['price']; ?></span>
                                <div class="pricing-list" data-package-scroll>
                                    <?php echo $pakageData['html_description']; ?>
                                </div>

                                <div class="pricing-btn">
                                    <a  class="a-btn btn-order order-package"
                                        data-sku="<?php echo $pakageData['sku']; ?>"
                                        data-category-type="<?= $pakageData['category_id'] == 96 ? 'logo' : (($pakageData['category_id'] == 92) ? 'web' : '') ?>"
                                        data-promotion-id="<?= isset($pro_id) ? $pro_id : 0 ?>"
                                        data-price="<?php echo $pakageData['price']; ?>"
                                        data-price-text="$<?php echo $pakageData['price']; ?>"
                                        data-title="<?php echo $pakageData['title']; ?>"
                                        data-package-id="<?php echo $pakageData['id']; ?>"
                                        href="javascript:;" >order now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->    
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


    </div>

    <?php include 'include/footer.php' ?>