<form class="leadForm" method="post" enctype="multipart/form-data"  action="">
    <!--hidden required values-->
    <input type="hidden" id="formType" name="formType">
    <input type="hidden" id="referer" name="referer">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name *" name="cn" data-validation="required" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone *" maxlength="10" name="pn" data-validation="required" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address *" name="em" data-validation="required" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="msg" id="msg" placeholder="Requirement *" data-validation="required" rows="5" required></textarea>
            </div>
        </div>
        <div class="custom_div">
            <!-- <input type="hidden" name="short_desc" value="Contact Us"> -->
            <!-- <input type="hidden" name="send" value="1" /> -->
            <!-- Email Source -->
            <!-- <input type="hidden" name="lb_source" value="Organic" /> -->

            <!-- <input type="hidden"  name="lead_area" value="0" class="leadprice"> -->
            <!-- <input type="hidden" id="lead_org_price"  name="lead_org_price" value="" /> -->
            <!-- <input type="hidden" name="send" value="1" /> -->
            <!-- <?php include(WEBSITE_UTILITY_URL . "order/hidden-fields.php"); ?> -->
            <!-- <input type="hidden" value="Auto" name="form_source"> -->
            <!-- <input type="hidden" name="package[]" value="No Package"> -->
        </div>
        <div id="formResult"></div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-submit" id="signupBtn">send now</button>
    </div>
</form>