<?php
// Send Lead to New Lead admin START
$leadId = 0;
// send email
$subject = "Lead of ".$name." - Brand";
$message = ($name) ?  'Name: ' .$name."\r\n\r\n" : '';
$message .= ($email) ?  'Email: ' .$email."\r\n\r\n" : '';
$message .= ($phone) ?  'Phone: ' .$phone."\r\n\r\n" : '';
$message .= ($msg) ?  'Message: ' .$msg."\r\n\r\n" : '';
$message .= ($user_country) ?  'Country: ' .$user_country."\r\n\r\n" : '';
$message .= ($user_region) ?  'State: ' .$user_region."\r\n\r\n" : '';
$message .= ($user_city) ?  'City: ' .$user_city."\r\n\r\n" : '';
$message .= ($user_ip) ?  'IP: ' .$user_ip."\r\n\r\n" : '';
$form_source = (isset($_POST['form_source'])) ? $_POST['form_source'] : "";
$headers = "From: Brand <do-not-reply@brand.com>" . "\r\n";

// Create email array
$email_data = array(
	//'to'=>$to,
	'subject'=>$subject,
	'message'=>$message,
	'headers'=>$headers,
);
$leadApiData = [
	'Brand' => "TFAUS",
	'Currency' => 'USD',
	'Package' => $package_name,
	'Email' => $email,
	'Name' => $name,
	'Lead_Title' => $package_name,
	'Phone' => $phone,
	'Number' => $phone,
	'Message' => $msg,
	//'Category' => $type,
	'Amount' => $amount,
	'Campaign_Category' => $lead_source_category,
	'Campaign_Offer' => $lead_source_offer,
	'Campaign_Country' => $lead_source_country,
	'UTM_Source' => $utm_source,
	'UTM_Medium' => $utm_medium,
	'UTM_Term' => $utm_term,
	'UTM_Content' => $utm_content,
	'UTM_Campaign' => $utm_campaign,
	'Lead_Source' => $lead_source,
	'Form_Source' => $form_source,
	'Page' => $full_page_url,
	'Website' => $page_url,
	'Referer' => $referer_url,
	'ISP' => $user_isp,
	'City' => $user_city,
	'Country' => $user_country,
	'State' => $user_region,
	'IP' => $user_ip,
	'IP_Organization' => $user_org,
];
// Add file (we are calling this file in "order" folder)
require ('../utility/Utility.php');

// Send data (lead info + email data)
// Create obj
$obj = new Utility();
$custom_lead_id = $obj->save_lead($leadApiData, $email_data);
//$form_type = 'contact'; // set to forcefully redirect
$amount = 0; // set to forcefully redirect

// Send Lead to New Lead admin END
