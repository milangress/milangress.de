<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css('assets/css/main.css') ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <?php echo js('assets/javascript/app.js') ?>



</head>
<body>
  <div class="wrapper">
  <div class="logo">
    <a href="/">
    <?php echo $site->author()->html() ?>
    </a>
  </div>
  <header class="header" role="banner">
    <div class="header_col">
      <?php snippet('menu') ?>
    </div>
    <div class="header_col">
      <?php echo $page->text()->kirbytext() ?>
    </div>
  </header>