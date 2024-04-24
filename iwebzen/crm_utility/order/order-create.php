<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")  {
	session_destroy();


        /***************** Customer Info ***********/

        $name = (isset($_POST['cn'])) ? $_POST['cn'] : "";
        $email = (isset($_POST['em'])) ? $_POST['em'] : "";
        $phone = (isset($_POST['pn'])) ? $_POST['pn'] : "";
        $msg = (isset($_POST['msg'])) ? $_POST['msg'] : "";
        $form_type = (isset($_POST['form_type'])) ? $_POST['form_type'] : "";
		
		$lead_amount = (isset($_POST['lead_area'])) ? $_POST['lead_area'] : "";
        $lead_amount = (isset($_POST['lead_amount'])) ? $_POST['lead_amount'] : $lead_amount;
        $amount = preg_replace("/[^0-9]/", "", $lead_amount);

        $type = (isset($_POST['lead_type'])) ? ucwords($_POST['lead_type']) : "logo";
		$package_default = '$'.$amount;
		$package_default = (isset($_POST['services'])) ? $_POST['services'] : $package_default;
        $package_name = (isset($_POST['lead_package'])) ? $_POST['lead_package'] : $package_default;
        $lead_title = 'Lead of '.ucwords($name);

        /***************** Campaign Info ***********/

        $lead_source = (isset($_POST['lead_source'])) ? $_POST['lead_source'] : "";
        $lead_source_category = (isset($_POST['lead_source_category'])) ? $_POST['lead_source_category'] : "";
        $lead_source_offer = (isset($_POST['lead_source_offer'])) ? $_POST['lead_source_offer'] : "";
        $lead_source_country = (isset($_POST['lead_source_country'])) ? $_POST['lead_source_country'] : "";
        $lead_area = (isset($_POST['lead_area'])) ? $_POST['lead_area'] : "";
        $lead_form = (isset($_POST['lead_p'])) ? $_POST['lead_p'] : "-";

        /***************** Campaign Source ***********/
        $utm_source = (isset($_POST['utm_source'])) ? $_POST['utm_source'] : "";
        $utm_medium = (isset($_POST['utm_medium'])) ? $_POST['utm_medium'] : "";
        $utm_term = (isset($_POST['utm_term'])) ? $_POST['utm_term'] : "";
        $utm_content = (isset($_POST['utm_content'])) ? $_POST['utm_content'] : "";
        $utm_campaign = (isset($_POST['utm_campaign'])) ? $_POST['utm_campaign'] : "";
        

        /***************** Page/Customer Info ***********/

        $full_page_url = (isset($_POST['full_page_url'])) ? $_POST['full_page_url'] : "";
        $page_url = (isset($_POST['page_url'])) ? $_POST['page_url'] : "";
        $referer_url = (isset($_POST['referer_url'])) ? $_POST['referer_url'] : "";
        $user_ip = (isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER['REMOTE_ADDR']); 
        $user_isp = (isset($_POST['user_isp'])) ? $_POST['user_isp'] : "";
        $user_org = (isset($_POST['user_org'])) ? $_POST['user_org'] : "";
        $user_city = (isset($_POST['user_city'])) ? $_POST['user_city'] : "";
        $user_region = (isset($_POST['user_region'])) ? $_POST['user_region'] : "";
        $user_country = (isset($_POST['user_country'])) ? $_POST['user_country'] : "";

        $leadData = [
            'Brand' => "LCUS",
            'Currency' => 'USD',
            'Package' => $package_name,
            'Email' => $email,
            'Last Name' => $name,
            'Lead Title' => $package_name,
            'Phone' => $phone,
			'Number' => $phone,
            'Message' => $msg,
            'Category' => $type,
            'Amount' => $amount,
			'Lead Amount' => $amount,
            'Campaign Category' => $lead_source_category,
            'Campaign Offer' => $lead_source_offer,
            'Campaign Country' => $lead_source_country,
            'UTM Source' => $utm_source,
            'UTM Medium' => $utm_medium,
            'UTM Term' => $utm_term,
            'UTM Content' => $utm_content,
            'UTM Campaign' => $utm_campaign,
            'Lead Source' => $lead_source,
            'Page' => $full_page_url,
            'Website' => $page_url,
            'Referer' => $referer_url,
            'ISP' => $user_isp,
			'Form Source' => $lead_form,
            'City' => $user_city,
            'Country' => $user_country,
            'State' => $user_region,
            'IP' => $user_ip,
            'IP Organization' => $user_org,
        ];

		
        $leadId = 0;

    // Include custom lead file
    require '../utility/include/custom_lead.php';

        /*----- Custom Lead Function End -----*/


    	$divert = http_build_query([
    	    'id' => $leadId,
    	    'email' => $email,
            'name' => $name,
			'phone' => $phone,
            'type' => $type,
    	    'amount' => $amount,
    	    'country' => $user_country,
			'message' => $msg,
    	]);




        $redirect_path = null;
		$type = strtolower($type);
        if($type == 'logo'){
             $redirect_path = 'logo';
        } elseif($type == 'website'){
             $redirect_path = 'website';
        } elseif($type == 'website'){
             $redirect_path = 'website';
        } elseif($type == 'stationery'){
             $redirect_path = 'stationery';
        } elseif($type == 'bundle'){
             $redirect_path = 'bundle';
        } elseif($type == 'bundle'){
             $redirect_path = 'bundle';
        } elseif($type == 'other'){
             $redirect_path = '/thankyou';
        }
    ?>

    <?php if($amount == 0) { ?>
		<script type="text/javascript">
			window.location.replace("thankyou/?<?php echo $divert ?>");
		</script>
    <?php } elseif (!$redirect_path){ ?>
	<html>
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript">
        function submitform() { document.forms["myformsubmitted"].submit(); } </script>
        </head>
        <body>
        <form action="/pay-secure/"  method='post' id="myformsubmitted">
            <input type="hidden" value="<?php echo $leadId; ?>" name="id">
            <input type="hidden" value="<?php echo $email; ?>" name="email">
            <input type="hidden" value="<?php echo $name; ?>" name="name">
            <input type="hidden" value="<?php echo $amount; ?>" name="amount">
            <input type="hidden" value="<?php echo $type; ?>" name="type">
            <input type="hidden" value="LCUS" name="brand">
            <input type="hidden" value="$" name="currency">
            <input type="hidden" value="<?php echo $user_country ?>" name="country">
            <input type="hidden" value="Logo Traffic" name="brand_name">
            <input type="hidden" value="order/thankyou/" name="thankyou">
        </form>
        <script type="text/javascript"> submitform(); </script>
        </body>
    </html>

    <?php } elseif($form_type == 'contact') { ?>

    <script type="text/javascript">
        window.location.replace("/thankyou/?<?php echo $divert ?>");
    </script>

    <?php } else { ?>

    <script type="text/javascript">
        window.location.replace("<?php echo $redirect_path ?>/?<?php echo $divert ?>");
    </script>

    <?php } ?>


<?php } else { ?>
    <script type="text/javascript">
        window.location.replace("/"); 
    </script>
<?php } ?>


