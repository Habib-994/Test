<?php
  include __DIR__ . '/include/header.php'
  ?>

<style>
    section.steps-seq ul li.first:after {
        background: linear-gradient(to right, #f70343, rgba(106, 29, 109, 0.8));
        color: #fff;
        text-align: center;
    }
</style>

<section class="page-title">
    <div class="container">
        <h1>Let's Get Started with Your Project</h1>
        <p>Please Provide the information requested below.</p>
    </div>
</section>

<section class="steps-seq">
    <div class="container">
        <ul id="progressbar">
            <li>
                <h4>Order Now</h4>
            </li>
            <li class="progressbar-2"><h4 class="progressbar-2-text"><?= $categoryType ?>Logo Brief</h4></li>
                <?php $categoryType = getSessionValue('categoryType', 'package_detail');
                
                if($categoryType == "Logo" || $categoryType == "Web"){ ?>
                <li class="progressbar-2"><h4 class="progressbar-2-text"><?= $categoryType ?> Brief</h4></li>
                <?php } ?>
            <li class="color ">
                <h4>Payment</h4>
            </li>
        </ul>
    </div>
</section>


<section class="content-seq">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row" style="display: flex;flex-wrap: wrap;">
                    <div class="col-md-12">
                        <form id="briefForm">
                            <input type="hidden" class="form-control" name="orders_meta[customer_name]"
                                   value="<?= getSessionValue('name', 'user_detail') ?>">
                            <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                <h4 style="margin-bottom: 30px">WEB BRIEF</h4>
                                <ul>
                                    <li>
                                        <label>ARE THERE OTHER DECISION MAKERS? PLEASE SPECIFY</label>
                                        <input type="text" name="orders_meta[other_decision_makers]" class=""
                                               name="services" value="">
                                    </li>
                                    <li>
                                        <label>Tell me about Your Company</label>
                                    </li>
                                    <li>
                                        <label>WEBSITE ADDRESS – OR DESIRED DOMAIN(S)</label>
                                        <input type="text" class="" name="orders_meta[website_address]" value="">
                                    </li>
                                    <li>
                                        <label>>PLEASE GIVE ME A BRIEF OVERVIEW OF THE COMPANY, WHAT YOU DO OR
                                            PRODUCE?</label>
                                        <textarea name="orders_meta[company_overview]" class="form-control valid"
                                                  placeholder="" rows="10"
                                                  aria-required="true" aria-invalid="false"></textarea>
                                    </li>
                                    <li>
                                        <label>What is the purpose of this site?*</label>
                                    </li>
                                    <li>

                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="BRING IN NEW CLIENTS TO YOUR BUSINESS" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> BRING IN NEW CLIENTS TO YOUR
                                            BUSINESS </label>
                                    </li>

                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="PROVIDE YOUR CUSTOMERS WITH INFORMATION ON A CERTAIN SUBJECT"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> PROVIDE YOUR CUSTOMERS WITH
                                            INFORMATION ON A CERTAIN SUBJECT </label>
                                    </li>
                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="DELIVER NEWS OR CALENDAR OF EVENTS " style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> DELIVER NEWS OR CALENDAR OF
                                            EVENTS </label>
                                    </li>
                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="CREATE A BLOG THAT ADDRESSES SPECIFIC TOPICS OR INTERESTS"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">CREATE A BLOG THAT ADDRESSES
                                            SPECIFIC TOPICS OR INTERESTS </label>
                                    </li>
                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="SELL A PRODUCT OR PRODUCTS ONLINE" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">SELL A PRODUCT OR PRODUCTS
                                            ONLINE</label>
                                    </li>
                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]"
                                               value="PROVIDE SUPPORT FOR CURRENT CLIENTS" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">PROVIDE SUPPORT FOR CURRENT
                                            CLIENTS</label>
                                    </li>

                                    <li>
                                        <input class="purpose1" type="radio" name="orders_meta[purpose]" value="OTHERS"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">OTHERS</label>
                                    </li>

                                    <li>
                                        <label>DO YOU HAVE A TIME FRAME OR DEADLINE TO GET THIS SITE ONLINE?</label>
                                        <input type="text" class="form-control" name="orders_meta[deadline]"
                                               placeholder=""
                                               aria-required="true">
                                    </li>
                                    <li>
                                        <label>Target market</label>
                                    </li>
                                    <li>
                                        <label>WHO WILL VISIT THIS SITE? DESCRIBE YOUR POTENTIAL CLIENTS.</label>
                                        <textarea name="orders_meta[clients]" class="form-control valid" placeholder=""
                                                  rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>
                                    <li>
                                        <label>WHY DO YOU BELIEVE SITE VISITORS SHOULD DO BUSINESS WITH YOU RATHER THAN
                                            WITH A COMPETITOR? WHAT PROBLEM ARE YOU SOLVING FOR THEM?</label>
                                        <textarea name="orders_meta[competitor]" class="form-control valid"
                                                  placeholder="" rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>

                                    <li>
                                        <label>WHAT ACTION(S) SHOULD THE USER PERFORM WHEN VISITING YOUR SITE? PLEASE
                                            PUT AN X NEXT TO THE ONES THAT APPLY TO YOU (OR) BOLD FONTS.</label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]" value="CALL YOU"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">CALL YOU </label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]"
                                               value=" FILL OUT A CONTACT FORM" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> FILL OUT A CONTACT FORM </label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]"
                                               value="FILL OUT A QUOTE FORM"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> FILL OUT A QUOTE FORM </label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]"
                                               value="SIGN UP FOR YOUR MAILING LIST" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;"> SIGN UP FOR YOUR MAILING
                                            LIST </label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]"
                                               value="SEARCH FOR INFORMATION" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">SEARCH FOR INFORMATION </label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]"
                                               value="PURCHASE A PRODUCT(S)"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">PURCHASE A PRODUCT(S)</label>
                                    </li>

                                    <li>
                                        <input class="visiting1" type="radio" name="orders_meta[visit]" value="OTHERS"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">OTHERS</label>
                                    </li>


                                    <li>
                                        <label>WHAT ARE YOU OFFERING? MAKE A LIST OF ALL THE SECTIONS/PAGES YOU THINK
                                            THAT YOU'LL NEED. (SAMPLES BELOW ARE JUST AN EXAMPLE TO GET YOU STARTED,
                                            PLEASE FILL THIS OUT COMPLETELY.)</label>
                                        <textarea name="orders_meta[offering]" class="form-control valid" placeholder=""
                                                  rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>

                                    <li>
                                        <label>DO YOU HAVE THE WRITTEN CONTENT AND IMAGES/PHOTOGRAPHS PREPARED FOR THESE
                                            PAGES?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" name="orders_meta[written_content]" value="YES"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" name="orders_meta[written_content]" value="NO" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">NO</label>
                                    </li>

                                    <li>
                                        <label>IF NOT, WILL YOU NEED COPYWRITING AND PHOTOGRAPHY SERVICES?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="YES" name="orders_meta[copywrite]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="NO" name="orders_meta[copywrite]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">NO</label>
                                    </li>

                                    <li>
                                        <label>ARE YOU WILLING TO COMMIT TIME/EFFORT INTO LEARNING HOW TO USE CONTENT
                                            MANAGEMENT SYSTEM (CMS) AND EDIT YOUR SITE?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="YES" name="orders_meta[cms]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="NO" name="orders_meta[cms]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">NO</label>
                                    </li>
                                    <li>
                                        <label>IS THIS A SITE RE-DESIGN?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="YES" name="orders_meta[re-design]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="NO" name="orders_meta[re-design]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">NO</label>
                                    </li>

                                    <li>
                                        <label>IF YES, CAN YOU PLEASE EXPLAIN WHAT IS WORKING AND NOT WORKING ON YOUR
                                            CURRENT SITE?</label>
                                        <textarea name="orders_meta[current_site]" class="form-control valid"
                                                  placeholder="" rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>

                                    <li>
                                        <label>ARE YOU GOING TO NEED?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="ECOMMERCE (SELL PRODUCTS)"
                                               name="orders_meta[going_to_need?]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">ECOMMERCE (SELL PRODUCTS)</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="MEMBERSHIP OF ANY KIND"
                                               name="orders_meta[going_to_need?]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">MEMBERSHIP OF ANY KIND</label>
                                    </li>

                                    <li>
                                        <label>PEOPLE ARE COMING TO YOUR NEW SITE FOR THE FIRST TIME. HOW DO YOU WANT
                                            THEM TO FEEL ABOUT YOUR COMPANY?</label>
                                        <textarea name="orders_meta[When_user_visit_first_time]"
                                                  class="form-control valid" placeholder="" rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>

                                    <li>
                                        <label>IF YOU DO NOT ALREADY HAVE A LOGO, ARE YOU GOING TO NEED ON
                                            DESIGNED?</label>
                                    </li>
                                    <li>
                                        <input class="" type="radio" value="YES" name="orders_meta[already_logo_design]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>

                                    <li>
                                        <label>IS THERE A SPECIFIC LOOK AND FEEL THAT YOU HAVE IN MIND?</label>
                                    </li>
                                    <li>
                                        <input class="" type="radio" value="YES"
                                               name="orders_meta[specific_look_n_feel]" style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">YES</label>
                                    </li>
                                    <li>
                                        <input class="" type="radio" value="NO" name="orders_meta[specific_look_n_feel]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">NO</label>
                                    </li>
                                    <li>
                                        <h5>Websites of your closest competition</h5>
                                    </li>
                                    <li>
                                        <label>Please include at least 3 links of sites of your competition.What do you
                                            like and don't like about them? What would you like to do
                                            differently?</label>
                                    </li>

                                    <li>
                                        <label for="inputType" class="control-label">LINKS 1</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[competition_web_link_1]" placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label for="inputType" class="control-label">LINKS 2</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[competition_web_link_2]" placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label for="inputType" class="control-label">LINKS 3</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[competition_web_link_3]" placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label for="inputType" class="control-label">LINKS 4</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[competition_web_link_4]" placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label>DESCRIPTION ABOUT WEBSITE YOU LIKE</label>
                                        <textarea name="orders_meta[website_description]" class="form-control valid"
                                                  placeholder="" rows="10"
                                                  data-error="Type your message..." aria-required="true"
                                                  aria-invalid="false"></textarea>
                                    </li>
                                    <li>
                                        <h5>Marketing The Site</h5>
                                    </li>
                                    <li>
                                        <label>HOW DO PEOPLE FIND OUT ABOUT YOUR BUSINESS RIGHT NOW?</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[how_people_find_my_business]" placeholder=""
                                               aria-required="true">
                                    </li>
                                    <li>
                                        <label>ADDRESS TO MARKET THIS SITE?</label>
                                        <input type="text" class="form-control"
                                               name="orders_meta[address_to_market_this_site]" placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label>DO YOU HAVE ANY SOCIAL NETWORK ACCOUNTS SETUP?</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="FACEBOOK" name="orders_meta[social]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">FACEBOOK</label>
                                    </li>

                                    <li>
                                        <input class="" type="radio" value="TWITTER" name="orders_meta[social]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">TWITTER</label>
                                    </li>
                                    <li>
                                        <input class="" type="radio" value="OTHERS" name="orders_meta[social]"
                                               style="float: left;">
                                        <label class="checkLeft" for="styled-checkbox-1"
                                               style="float: left; padding-left: 5px;">OTHERS</label>
                                    </li>

                                    <li>
                                        <label>
                                            DO YOU ALREADY OWN A DOMAIN NAME(S)?
                                        </label>
                                        <input type="text" class="form-control" name="orders_meta[own_domain_name]"
                                               placeholder=""
                                               aria-required="true">
                                    </li>

                                    <li>
                                        <label>ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN
                                            CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                        <input type="text" class="form-control" name="orders_meta[design_concept]"
                                               placeholder=""
                                               aria-required="true">
                                    </li>
                                    <li>
                                        <label>EXISTING WEBSITE ADDRESS, IF ANY</label>
                                        <input type="text" class="form-control" name="orders_meta[existing_website]"
                                               placeholder=""
                                               aria-required="true">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 form-sec ">
                                <ul>
                                    <li class="submit-btn">
                                        <div id="formResult"></div>
                                        <button type="submit" class="btn btn-red a-btn" id="briefFormBtn"
                                                name="briefForm" value='1'>Continue
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
                        <span>Toll Free:</span> <?= SITE_PHONE_NUMBER_TEXT ?> </li>
                    <li><a href="javascript:;" onclick="$zopim.livechat.window.toggle();"><i class="fa fa-comments"
                                                                                             aria-hidden="true"></i>
                            <span>Live Chat:</span>with our design expert</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php
  include __DIR__ . '/include/footer.php'
  ?>