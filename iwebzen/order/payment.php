<?php
  include __DIR__ . '/include/header.php';
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
                <li class="" <?php if($actionText == ""){ ?> style="width: 49%" <?php } ?>><h4>Order Now</h4></li>
                <?php if($actionText != ""){ ?>
                    <li class="progressbar-2"><h4 id="dynamicValue"><?= $actionText ?></h4></li>
                <?php } ?>
                <li class="active" <?php if($actionText == ""){ ?> style="width: 49%" <?php } ?>><h4>Payment</h4></li>
            </ul>
  </div>
</section>

<section class="content-seq">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <form id="orderForm" action="javascript:void(0)" method="post">
            <input type="hidden" value="<?= Functions::getClientIp(); ?>" name="customer[ip]"/>
            <input type="hidden" id="invoiceId" value="<?= getSessionValue('invoiceId'); ?>"
            name="invoiceId"/>
            <!-- One "tab" for each step in the form: -->
            <div class="form-sec step-1-form logo-brief-form">
                <h4 style="margin-bottom: 30px">Payment</h4>
                <ul>
                    <li>
                    <label>DESCRIPTION </label>
                    <input type="text" placeholder="" readonly id="pname"
                        value="<?= getSessionValue('title', 'package_detail') ?>">
                    </li>
                    <li>
                    <label>Amount: USD </label>
                    <input type="text" placeholder="" id="pprice" readonly
                        value="<?= getSessionValue('priceText', 'package_detail') ?>">
                    </li>
                    <hr>
                    <li>
                    <label>FIRST NAME <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[firstName]" placeholder=""
                        id="txtShipFirstName">
                    </li>
                    <li>
                    <label>LAST NAME <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[lastName]" placeholder=""
                        id="txtShipLastName">
                    </li>
                    <li>
                    <label>COUNTRY <span class="req-field-star">*</span></label>
                    <select id="countryId" data-validation="required" name="customer[country]" class="valid">
                        <option value="">Select</option>
                        <?php
                            foreach (getCountries() as $values) {
                                echo "<option value=" . $values['code'] . ">" . $values['name'] . "</option>";
                            }
                        ?>
                    </select>
                    </li>
                    <li>
                    <label>ZIP/POSTAL CODE <span class="req-field-star">*</span></label>
                    <input type="text" name="customer[zip]" placeholder="" id="txtShipPostalCode"
                    data-validation="required" aria-required="true" maxlength="5"
                        onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </li>
                    <li>
                    <label>CITY <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[city]" placeholder="" id="txtShipCity">
                    </li>
                    <li>
                    <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                    <select data-validation="required" id="stateName" name="customer[state]">
                        <option value="">Select State</option>
                        
                    </select>
                    </li>
                    <li>
                    <label>ADDRESS <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[address]" placeholder="" id="txtShipAddress1">
                    </li>
                    <li>
                    <label>Telephone <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[phone]" placeholder="" id="txtPhoneNumber"
                        maxlength="10"
                        onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </li>
                    <li>
                    <label>EMAIL <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="customer[email]" placeholder="" id="txtEmailAddress">
                    </li>
                    <hr>
                    <img class="img-responsive in-block" src="img/visa.png"
                    style="text-align: center;margin: 0 auto;">
                    <li>
                    <label>CARD NAME: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[name]" placeholder="" id=""
                        >
                    </li>
                    <li>
                    <label>CARD NUMBER: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[number]" placeholder="" id="txtCardNumber"
                        maxlength="16">
                    </li>
                    <li>
                    <label>EXP DATE: <span class="req-field-star">*</span></label>
                    <select id="cmbCardMonth" data-validation="required" class="required month" name="card[expiryMonth]">
                        <option value="">Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select id="cmbCardYear" data-validation="required" class="required year" name="card[expiryYear]">
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                        <option value="2041">2041</option>
                        <option value="2042">2042</option>
                        <option value="2043">2043</option>
                    </select>
                    </li>
                    <li>
                    <label>CVV: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[cvv]" placeholder="" id="txtCardSecurityCode"
                        maxlength="4">
                    </li>
                </ul>
            </div>
            <div class="row paddingBottom">
                <div class="col-lg-6 col-md-6 ">
                    <label class="field-txt">Statement Descriptor:</label>
                </div>
                <div class="col-lg-6 col-md-6">
                    <label class="field-txt"><?= getDescriptor(); ?></label>
                </div>
            </div>

            <div class="privacy-terms paddingBottom">
                <input type="checkbox" name="checkbox" id="tos" checked="" disabled="">
                <label>I accept <a href="terms" target="blank">Terms
                condition</a> and <a href="privacy" target="blank">Privacy Policy</a>.</label>
            </div>
            <div class="col-md-12">
                <div id="finalFormResult" style="margin: 15px 0"></div>
            </div>
            <div class="form-sec">
                <ul>
                    <li class="submit-btn">
                    <button type="submit" class="btn btn-red a-btn" id="orderFormBtn" name="orderForm"
                        value="1"
                        >Submit</button>
                    <img class="img-responsive in-block" src="img/verfication.png"
                        style="margin-top: 16px;">
                    </li>
                </ul>
            </div>
        </form>
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

<?php include __DIR__ . '/../crm_inc/payment-setup.php'; ?>