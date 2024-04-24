<?php
  include __DIR__ . '/include/header.php'
  ?>
<section class="page-title">
  <div class="container">
    <h1>Let's Get Started with Your Project</h1>
    <p>Please Provide the information requested below.</p>
  </div>
</section>
<section class="steps-seq">
  <div class="container">
      <?php

    $skuText = getSessionValue('sku','package_detail');
    $actionText = strpos($skuText,'WEB') === false ? (strpos($skuText,'LOGO')  === false ? '' : 'Logo Brief') : 'Web Brief';
    ?>


    <ul id="progressbar">
        <li class="active" <?php if($actionText == ""){ ?> <?php } ?>><h4>Order Now</h4></li>
        <?php if($actionText != ""){ ?>
            <li class="progressbar-2"><h4 id="dynamicValue"><?= $actionText ?></h4></li>
        <?php } ?>
        <li class="color" <?php if($actionText == ""){ ?> <?php } ?>><h4>Payment</h4></li>
    </ul>
  </div>
</section>
<section class="content-seq">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row" style="display: flex;flex-wrap: wrap;">
          <div class="col-md-6 col-lg-5">
            <div class="boxpackages">
              <div class="packheads">
                <div class="productSku" style="display: none;"><?= getSessionValue('sku', 'package_detail') ?></div>
                <h3 class="montfont packageName"><?= getSessionValue('title', 'package_detail') ?></h3>
              </div>
              <div class="packdetails">
                <div class="packtitles">
                  <div class="fleft">
                    <h3 class="opensansfont packagePrice"><?= getSessionValue('priceText', 'package_detail') ?></h3>
                  </div>
                </div>
                  <div class="listpacks">
                    <?= getSessionValue('html_description', 'package_detail') ?>
                  </div>
                <div class="botarea-pack">
                  <div class="liovechats-bx">
                    <a href="javascript:;" title="" class="chat">
                      <span>Click here to</span>
                      <h5 class="montfont">Live Chat</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-7" data-form-type="ordernow_form">
            <form id="orderForm" class="leadForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
              <!--hidden required values-->
              <input type="hidden" id="formType" name="formType">
              <input type="hidden" id="referer" name="referer">
              <input type="hidden" value="<?= getSessionValue('sku', 'package_detail') ?>" name="customers_meta[package_sku]">
              <input type="hidden" name="customers_meta[selected_package]" value="<?= getSessionValue('title', 'package_detail') ?>">
              <input type="hidden" name="customers_meta[package_price]" value="<?= getSessionValue('priceText', 'package_detail') ?>">
              <input type="hidden" id="package_sku" name="customers_meta[sku]" value="<?= getSessionValue('sku','package_detail') ?>">

              <div class="col-md-12 form-sec step-1-form">
                <h4>Please Fill the Form</h4>
                <ul>
                  
                  <li>
                    <label>Name <span class="req-field-star">*</span></label>
                    <input type="text" name="name" placeholder="Name" 
                      data-validation="required">
                  </li>
                  <li>
                    <label>Email Address <span class="req-field-star">*</span></label>
                    <input type="email" name="email" placeholder="Address" 
                      data-validation="email">
                  </li>
                  <li>
                    <label>Phone Number <span class="req-field-star">*</span></label>
                    <input type="tel" name="phone" placeholder="Phone Number" 
                      data-validation="number" maxlength="10"
                      onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                  </li>
                  <li>
                    <div class="g-recaptcha leadCaptcha" id="mainFormCaptcha" data-sitekey=<?php echo CAPTCHA_KEY ?> data-validation="required" >
                    </div>
                    <span id="mainFormCaptchaError"></span>
                  </li>
                </ul>
              </div>
              <div class="col-md-12 form-sec ">
                <ul>
                  <li class="submit-btn">
                    <div id="formResult"></div>
                    <button type="submit" class="tbtn btn-red a-btn"
                      id="signupBtn" name="signupForm">SUBMIT
                    </button>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 sidebar">
        <h2><span>Need</span> Assistance?</h2>
        <ul>
          <li><i class="fa fa-phone" aria-hidden="true"></i>
            <span>Toll Free:</span> <?= SITE_PHONE_NUMBER_TEXT ?>
          </li>
          <li><a href="javascript:;" class="chat"><i class="fa fa-comments"
            aria-hidden="true"></i>
            <span>Live Chat:</span>with our design expert</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/include/footer.php'?>

<?php include __DIR__ . '/../crm_inc/lead-setup.php'; ?>