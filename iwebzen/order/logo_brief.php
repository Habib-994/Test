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
            <li style="width: 33%"><h4>Order Now</h4></li>
            <li class="active" style="width: 33%"><h4>Logo Brief</h4></li>
            <li style="width: 33%"><h4>Payment</h4></li>
        </ul>
    </div>
</section>


<section class="content-seq">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row" style="display: flex;flex-wrap: wrap;">
                    <div class="col-md-12">
                        <form id="briefForm" method="post" enctype="multipart/form-data" action="javascript:void(0)">
                            <input type="hidden" class="form-control" name="orders_meta[customer_name]"
                                   value="<?= getSessionValue('name', 'user_detail') ?>">
                            <input type="hidden" class="form-control" name="orders_meta[customer_email]"
                                   value="<?= getSessionValue('email', 'user_detail') ?>">
                            <input type="hidden" class="form-control" name="orders_meta[customer_phone]"
                                   value="<?= getSessionValue('phone', 'user_detail') ?>">

                            <input type="hidden" value="logoBriefForm" name="orders_meta[form_id]">
                            <input type="hidden" value="Logo Brief" name="orders_meta[form_name]">
                            <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                <h4 style="margin-bottom: 30px">Logo Brief</h4>
                                <ul>
                                    <li>
                                        <label>IS THIS A RE-DESIGN OR A NEW LOGO? <span class="req-field-star">*</span></label>
                                        <input type="text" name="orders_meta[logo_info]" placeholder="" class="required">
                                    </li>
                                    <li>
                                        <label>SELECT WHAT TYPE(S) OF YOUR LOGO SHOULD BE LOOK LIKE?</label>
                                        <div class="select-logo">
                                            <input type="hidden" name="orders_meta[selected_logo]" id="logoSelect" value="">

                                            <ul class="list-inline">
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/sony-e-log.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>high-tech</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/anderoid-pic.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>minimalist</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/cola-pic.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>typography</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/mico-pic.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>corporate</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/kfc-log.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>illustrative</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/gn-lo.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>initials</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/fanta-log.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>fun</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/egale-log.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>sporty</p>
                                                </li>
                                                <li><i><img selected="0" class="bordr" src="img/breiflogo/porch-log.jpg"
                                                            width="151" height="151" alt=""></i>
                                                    <p>shield</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <label>WORD/NAME THAT YOU WANT IN LOGO TO APPEAR (TYPE IN EXACTLY AS YOU
                                            WANTED).<span class="req-field-star">*</span></label>
                                        <input type="text" placeholder="" class="required" required name="orders_meta[brief_text]"
                                               required="">
                                    </li>
                                    <li>
                                        <label>TAGLINE THAT YOU WANT IN LOGO TO APPEAR.</label>
                                        <input type="text" name="orders_meta[brief_tagline]" placeholder="">
                                    </li>
                                    <li>
                                        <label>PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO
                                            LIST WEBSITE ADDRESSES OF YOUR COMPETITORS, IF ANY.</label>
                                        <input type="text" name="orders_meta[brief_Description]" placeholder="">
                                    </li>
                                    
                                    <li>
                                        <label>ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN
                                            CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                        <input type="text" name="orders_meta[design_concept]" placeholder="">
                                    </li>
                                    <li>
                                        <label>EXISTING WEBSITE ADDRESS, IF ANY</label>
                                        <input type="text" name="orders_meta[existing_website]" placeholder="">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 form-sec ">
                                <ul>
                                    <li class="submit-btn">
                                        <div id="formResult"></div>
                                        <button type="submit" class="btn btn-red a-btn" id="briefFormBtn"
                                                >Continue
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
                    <li>
                        <a href="javascript:;" class="chat">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span>Live Chat:</span>with our design expert</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/include/footer.php'?>
<?php include __DIR__ . '/../crm_inc/brief-setup.php'; ?>