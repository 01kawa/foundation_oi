<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<!doctype html>
<html class="" lang="<?php echo Localization::activeLanguage()?>">
  <head>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <link href="<?=$view->getThemePath()?>/css/normalize.css" rel="stylesheet">
    <link href="<?=$view->getThemePath()?>/css/foundation.css" rel="stylesheet">
    <link href="<?=$view->getStylesheet('style.less')?>" rel='stylesheet' type='text/css'>
    <script src="<?=$view->getThemePath()?>/js/vendor/modernizr.js"></script>
  </head>
  <body>

    <div class="<?php echo $c->getPageWrapperClass()?>">

		<div class="row">
		  
		    <div class="large-12 columns">
		      <?php
		          $a = new GlobalArea('Navigation');
		          $a->setAreaGridMaximumColumns(12);
		          $a->display($c);
		      ?>
		    </div>

		</div>