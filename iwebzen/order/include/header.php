<?php include_once __DIR__ . '/../../crm_inc/core/config.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title> <?= SITE_NAME_TEXT ?></title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="icon" href="img/favicon.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom-scroller.css" rel="stylesheet">
    <link href="css/style-web.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    
    <style>
      .selected-dial-code {
      display: none;
      }
    </style>
  </head>
  <body class="home-page">
    <header>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-3">
            <a href="../" class="header-logo">
                <img src="/images/designsbullslogo.png" alt="">
            </a>
          </div>
          <div class="col-md-9">
            <div class="phoneInfo">
              <ul>
                <li>
                  <a href="#" class="chat"><i class="chat-icon for-sprite"></i>
                  Start Live Chat</a>
                </li>
                <li>
                  <a href="tel:<?= SITE_PHONE_NUMBER ?>"><i class="tell-icon for-sprite"></i> Call 24/7: <span><?= SITE_PHONE_NUMBER ?></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>