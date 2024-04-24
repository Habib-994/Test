<?php
include __DIR__ . '/../crm_inc/core/config.php';
// Load CRM utility config
include __DIR__ . '/../crm_utility/dist/config.php';
// Load CRM fields (for Landing User from PPC/AD)
include __DIR__ . '/../crm_utility/order/parameters.php';
?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" type="text/css" href="css/plugin.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173243351-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173243351-1');
</script>
</head>
<body>
   <header data-aos="fade-down" class="<?php echo trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH),'/') !='' && trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH),'/') == 'pricing_view_details' || trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH),'/') == 'combo_view_details'  ? 'inner-header' : ''?>" data-aos-duration="3000">
      <div class="container">
      <div class="top-info-box">
         <div class="contact-box">
            <img src="images/contact-img-1.png" alt="" class="img-fluid" />
            <a href="mailto:<?= SITE_INFO_EMAIL ?>"><?= SITE_INFO_EMAIL ?></a>
         </div>
         <div class="contact-box">
            <img src="images/contact-img-2.png" alt="" class="img-fluid" />
            <a href="tel:<?= SITE_PHONE_NUMBER ?>"><?= SITE_PHONE_NUMBER ?></a>
         </div>
         <div class="contact-box">
            <img src="images/chat-img-1.png" alt="" class="img-fluid" />
            <a href="javascript:void(0);" class="chatt">Live Chat</a>
         </div>
      </div>
      <div class="navbar-box">
         <a href="/"><img src="images/designsbullslogo.png" alt="" class="img-fluid" /></a>
         <div class="nav-list-box">
            <ul>
               <li><a href="index">home</a></li>
               <li><a href="about">about us</a></li>
               <li><a href="portfolio">portfolio</a></li>
               <li class="nav-item dropdown megamenu-li dmenu">
                  <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                  <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                     <div class="row no-gutters">
                        <div class="col-md-3">
                           <a class="dropdown-item" href="logo-design">
                              <div class="mega-links-box">
                                 <img src="images/icon-1.png" alt="" class="img-fluid" />
                                 <h6>logo design</h6>
                                 <p>Get a logo that defines <br /> who you are</p>
                              </div>
                           </a>
                        </div>
                         <div class="col-md-3">
                             <a class="dropdown-item" href="web-design">
                                 <div class="mega-links-box">
                                     <img src="images/icon-3.png" alt="" class="img-fluid" />
                                     <h6>web design & development</h6>
                                     <p>get a website that <br /> increases conversion</p>
                                 </div>
                             </a>
                         </div>
                         <div class="col-md-3">
                             <a class="dropdown-item" href="video-animation">
                                 <div class="mega-links-box">
                                     <img src="images/icon-5.png" alt="" class="img-fluid" />
                                     <h6>video animation</h6>
                                     <p>animation that delivers <br /> your message</p>
                                 </div>
                             </a>
                         </div>
                        <div class="col-md-3">
                           <a class="dropdown-item" href="branding">
                              <div class="mega-links-box">
                                 <img src="images/icon-2.png" alt="" class="img-fluid" />
                                 <h6>branding</h6>
                                 <p>effective and strategized <br /> branding</p>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                           <a class="dropdown-item" href="e-commerce">
                              <div class="mega-links-box">
                                 <img src="images/icon-4.png" alt="" class="img-fluid" />
                                 <h6>E-Commerce</h6>
                                 <p>sell your products in the <br /> best way possible</p>
                              </div>
                           </a>
                        </div>

                        <div class="col-md-4">
                           <a class="dropdown-item" href="social-media-marketing">
                              <div class="mega-links-box">
                                 <img src="images/icon-6.png" alt="" class="img-fluid" />
                                 <h6>social media marketing</h6>
                                 <p>get your brand noticed <br /> around various</p>
                              </div>
                           </a>
                        </div>
                        <!--<div class="col-md-3">
                           <a class="dropdown-item" href="content-writing">
                              <div class="mega-links-box">
                                 <img src="images/icon-7.png" alt="" class="img-fluid" />
                                 <h6>content writing</h6>
                                 <p>professional content that <br /> boosts your roi</p>
                              </div>
                           </a>
                        </div>-->
                        <div class="col-md-4">
                           <a class="dropdown-item" href="seo-services">
                              <div class="mega-links-box">
                                 <img src="images/icon-8.png" alt="" class="img-fluid" />
                                 <h6>SEO</h6>
                                 <p>get the top spot on <br /> search engine ranking</p>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </li>
               <!--<li><a href="pricing">pricing</a></li>-->
               <!--<li><a href="combo-packages">combo packages</a></li>-->
               <li><a href="contact-us">contact us</a></li>
            </ul>
            <button class="btn btn-qoute" data-toggle="modal" data-target="#req_qoute">request a quote</button>
         </div>
         <div class="toggle-box d-lg-none">
            <span onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
         </div>
         <div id="mySidenav" class="sidenav d-lg-none">
            <a href="/" class=" m-logo-img"><img src="images/mobile-logo.png" alt="" class="img-fluid" /></a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about">about us</a>
            <a href="portfolio">portfolio</a>
            <a class="dropdown-btn">Services
               <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-container" style="display: none;">
               <a href="logo-design">Logo Design</a>
                <a href="web-design">Web Design & Development</a>
                <a href="video-animation">Video Animation</a>
                <a href="branding">Branding</a>
               <a href="social-media-marketing">Social Media Marketing</a>
               <!--<a href="content-wrtiting">Content Writing</a>-->
               <a href="seo">SEO</a>
            </div>
            <!--<a href="pricing">pricing</a>-->
            <a href="combo-packages">combo packages</a>
            <a href="contact-us">contact us</a>
         </div>
      </div>
   </header>
   <!-- Modal -->
   <div id="req_qoute" class="modal fade gradient_form" role="dialog">
      <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-body">
               <div id="popup" class="custom-popup">
                  <a href="javascript:;" class="closed" data-dismiss="modal"></a>
                  <h3>Let's Build Something Great Together!</h3>
                  <p>Drop us a line or view contact info.</p>
                  <div id="popupform" class="fixedform-1" data-form-type="popup_form">
                     <form class="row" method="post" action="<?php echo WEBSITE_ORDER_URL;?>">
                        <input type="hidden" id="formType" name="formType">
                        <input type="hidden" id="referer" name="referer">
                        <div class="col-md-4">
                           <div class="mm-field namefield">
                              <input type="text" placeholder="Your Name*" name="cn" required>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="mm-field emailfield">
                              <input type="text" placeholder="Email address*" name="em" required>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="mm-field pnfields">
                              <input type="text" class="form-control" name="pn" maxlength="10" placeholder="Phone Number"  required>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="mm-field textarea">
                              <textarea name="msg" id="detail_msg" rows="6" placeholder="Enter Your Comment Here" required></textarea>
                           </div>
                        </div>

                         <div class="custom_div">
                             <input type="hidden" name="short_desc" value="Request a Quote">
                             <input type="hidden" name="send" value="1" />
                             <!-- Email Source -->
                             <input type="hidden" name="lb_source" value="Organic" />

                             <input type="hidden"  name="lead_area" value="0" class="leadprice">
                             <input type="hidden" id="lead_org_price"  name="lead_org_price" value="" />
                             <input type="hidden" name="send" value="1" />
                             <!-- <?php include(WEBSITE_UTILITY_URL . "order/hidden-fields.php"); ?> -->
                             <input type="hidden" value="Auto" name="form_source">
                             <input type="hidden" name="package[]" value="No Package">
                         </div>

                        <div class="col-md-12">
                           <div class="input-btn">
                           <div id="formResult"></div>
                              <button type="submit" id="" class="entery-submit">Submit Your Request</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

    <!-- Packages modal -->
   <div id="req_qoute_package" class="modal fade gradient_form" role="dialog">
       <div class="modal-dialog">
           <!-- Modal content-->
           <div class="modal-content">
               <div class="modal-body">
                   <div id="popup-package" class="custom-popup">
                       <a href="javascript:;" class="closed" data-dismiss="modal"></a>
                       <h3>Let's Build Something Great Together!</h3>
                       <p>Drop us a line or view contact info.</p>
                       <div id="popupformpackage" class="fixedform-1" data-form-type="popup_form">
                           <form class="row" method="post" action="<?php echo WEBSITE_ORDER_URL;?>">
                               <input type="hidden" id="formType" name="formType">
                               <input type="hidden" id="referer" name="referer">
                               <div class="col-md-4">
                                   <div class="mm-field namefield">
                                       <input type="text" placeholder="Your Name*" name="cn" required>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="mm-field emailfield">
                                       <input type="text" placeholder="Email address*" name="em" required>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="mm-field pnfields">
                                       <input type="text" class="form-control" name="pn" maxlength="10" placeholder="Phone Number"  required>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="mm-field textarea">
                                       <textarea name="msg" id="detail_msg" rows="6" placeholder="Enter Your Comment Here" required></textarea>
                                   </div>
                               </div>

                               <div class="custom_div">
                                   <input type="hidden" name="short_desc" value="">
                                   <input type="hidden" name="send" value="1" />
                                   <!-- Email Source -->
                                   <input type="hidden" name="lb_source" value="Organic" />

                                   <input type="hidden"  name="lead_area" value="0" class="leadprice">
                                   <input type="hidden" id="lead_org_price"  name="lead_org_price" value="" />
                                   <input type="hidden" name="send" value="1" />
                                   <?php include(WEBSITE_UTILITY_URL . "order/hidden-fields.php"); ?>
                                   <input type="hidden" value="Auto" name="form_source">
                                   <input type="hidden" name="package[]" value="Logo Design Tasks">
                               </div>

                               <div class="col-md-12">
                                   <div class="input-btn">
                                       <div id="formResult"></div>
                                       <button type="submit" id="" class="entery-submit">Submit Your Request</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>