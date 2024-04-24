<?php session_start();
$rand = md5(time());

$_SESSION['csrf_token'] = $rand;

$lead_source = '';
$ppc_sources = [
    'bing-ppc-us-search',
    'google-ppc-aus-search',
    'google-ppc-us-search',
    'google-ppc-europe-search',
    'google-ppc-uk-search',
];
if (isset($_GET['source']) || isset($_GET['cat']) || isset($_GET['utm_source']) || isset($_GET['utm_medium'])) {
    if (($_GET['source'] == "email") || isset($_GET['cat']) || ($_GET['utm_source'] == "newsletter") || ($_GET['utm_source'] == "Newsletter") || ($_GET['utm_medium'] == "Email") || ($_GET['utm_medium'] == "email")) {
        $lead_source = "Email";
    }
} elseif (isset($_GET['source']) && $_GET['source'] == "ppc") {
    $lead_source = "PPC";
} elseif (isset($_GET['gclid']) || isset($_GET['msclkid'])) {
    $lead_source = "PPC";
} elseif (isset($_GET['src']) && in_array($_GET['src'], $ppc_sources)) {
    $lead_source = "PPC";
} else {
    $lead_source = "Organic";
}

$user_ip = $_SERVER['REMOTE_ADDR'];

$offer = '$39';
$lead_source_category = (isset($_REQUEST['category'])) ? $_REQUEST['category'] : '';
$lead_source_offer = (isset($_REQUEST['offer'])) ? $_REQUEST['offer'] : '';
$lead_source_country = (isset($_REQUEST['country'])) ? $_REQUEST['country'] : '';


// URL Tracking
$host_http = (isset($_SERVER['HTTPS']) ? "https" : "http");
$fullpageurl = $host_http . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pageurl = $host_http . "://$_SERVER[HTTP_HOST]";
$page_referer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';

// UTM Tracking
$utm_source = (isset($_REQUEST['utm_source'])) ? $_REQUEST['utm_source'] : '';
$utm_medium = (isset($_REQUEST['utm_medium'])) ? $_REQUEST['utm_medium'] : '';
$utm_term = (isset($_REQUEST['utm_term'])) ? $_REQUEST['utm_term'] : '';
$utm_content = (isset($_REQUEST['utm_content'])) ? $_REQUEST['utm_content'] : '';
$utm_campaign = (isset($_REQUEST['utm_campaign'])) ? $_REQUEST['utm_campaign'] : '';
$lead_package = (isset($_REQUEST['lead_package'])) ? $_REQUEST['lead_package'] : '';
$lead_amount = (isset($_REQUEST['lead_amount'])) ? $_REQUEST['lead_amount'] : $offer;
?>



