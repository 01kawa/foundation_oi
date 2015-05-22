<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!doctype html>
<html class="" lang="<?php echo Localization::activeLanguage()?>">
  <head>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/style.css" />
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/normalize.css" />
    <link rel="stylesheet" href="<?=$view->getThemePath()?>/css/foundation.css" />
    <script src="<?=$view->getThemePath()?>/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="<?php echo $c->getPageWrapperClass()?>">