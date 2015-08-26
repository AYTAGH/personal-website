<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
		<?php echo css('assets/css/site.css') ?>			  
		<?php echo css('assets/css/jquery.fancybox.css') ?>
		<?php echo js('//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js') ?>			  
		<!-- Lazyload -->
		<?php echo js('assets/js/jquery.lazyload.min.js') ?> 
		<?php echo js('assets/js/jquery.scrollstop.min.js') ?> 
		<!-- fancybox -->
		<?php echo js('assets/js/jquery.fancybox.pack.js') ?>
		<?php echo js('assets/js/jquery.fancybox-media.js') ?>
  <?php if($page->description() != ''): ?>
  <meta name="description" content="<?php echo html($page->description()) ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <?php endif ?>
  <meta name="apple-mobile-web-app-title" content="<?php echo html($site->title()) ?>">
</head>
<body>