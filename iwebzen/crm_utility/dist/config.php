<?php
/*
 * CRM Integration
 * */

// Set Credentials
$host = $_SERVER['HTTP_HOST'];

// Localhost
if($host == "localhost" || $host=="local.designsbulls.com")
{
    // Enable error reporting
    //error_reporting(-1);
    error_reporting(E_ALL ^ E_NOTICE  | E_WARNING | E_PARSE  );
    ini_set('display_errors', 1);

    // Set base_url
    $base_url = "http://local.designsbulls.com/";
    $terminal_base_url = "http://local.my-crm-utility.com/";
    $lead_save_url = 'http://local.my-crm-utility.com/admin/lead/api/save';
    $lead_brief_save_url = 'http://local.my-crm-utility.com/admin/lead/api/save-brief';
    $generate_payment_link = 'http://local.my-crm-utility.com/admin/lead/api/generate_payment_link_landing';
    // Set environment
    $environment = 'development';
}
// Production
else{
    // Disable error reporting
    ini_set('display_errors', 0);

    // Set base_url
    $base_url = "https://designsbulls.com/";
    $terminal_base_url = "https://dev-custom.live/crm-utility/";
    $lead_save_url = 'https://dev-custom.live/crm-utility/admin/lead/api/save';
    $lead_brief_save_url = 'https://dev-custom.live/crm-utility/admin/lead/api/save-brief';
    $generate_payment_link = 'https://dev-custom.live/crm-utility/admin/lead/api/generate_payment_link_landing';
    // Set environment
    $environment = 'production';
}

/*
 * General Setting
 * */

// Folder path utility
$utility = "crm_utility/";
$path_utility = $_SERVER['DOCUMENT_ROOT'] . "/" . $utility;
$order_create_url = $base_url . $utility ."order/order-create-ppc.php";
$brand_identifier = "DB-US";
$brand_currency = "USD";

// Define variables
define('BRAND_BASE_URL',$base_url);
define('TERMINAL_BASE_URL',$terminal_base_url);
define('UTILITY_LEAD_SAVE_URL',$lead_save_url);
define('UTILITY_LEAD_BRIEF_SAVE_URL',$lead_brief_save_url);
define('UTILITY_ENVIRONMENT', $environment);
define('UTILITY_GEN_PAYMENT_LINK', $generate_payment_link);
define('WEBSITE_UTILITY_URL', $path_utility);
define('WEBSITE_ORDER_URL', $order_create_url);
define('WEBSITE_BRAND_IDENTIFIER', $brand_identifier);
define('WEBSITE_BRAND_CURRENCY', $brand_currency);
?>