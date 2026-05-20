<?php
require_once __DIR__ . '../../app/Helpers/UrlHelper.php';

// require_once __DIR__ . '../../app/Helpers/Database.php';
require_once __DIR__ . '../../app/Helpers/Custom.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
      content="Wealth Advisory — SEBI Registered Investment Advisor. Expert equity, F&O, MCX and currency market advisory. Your Wealth, Our Devotion.">
    <meta name="keywords"
      content="investment advisor India, SEBI registered advisor, stock market tips, equity advisory, MCX advisory, Wealth Advisory">
    <meta property="og:title" content="Wealth Advisory | Your Wealth, Our Devotion">
    <meta property="og:description"
      content="SEBI Registered Investment Advisory — precision-driven research and disciplined portfolio strategies.">
    <meta property="og:type" content="website">
    <title>Home — Wealth Advisory | Your Wealth, Our Devotion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo UrlHelper::asset('css/main.css'); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body>

    <!-- FLOATING CTA -->
    <a href="contact" class="d-none float-cta">
      <span class="float-cta-dot"></span> Free Consultation
    </a>
    <a href="#top" class="back-top">↑</a>

    <!-- Header Menu -->
    <?php include_once ('elements/header-menu.php');?>
    
    