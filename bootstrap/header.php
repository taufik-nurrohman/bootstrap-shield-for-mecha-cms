<!DOCTYPE html>
<html dir="<?php echo $config->language_direction; ?>" class="page-<?php echo $config->page_type; ?>">
  <head>
    <?php Weapon::fire('SHIPMENT_REGION_TOP'); ?>
    <?php Weapon::fire('shell_before'); ?>
    <?php echo Asset::stylesheet($config->protocol . ICON_LIBRARY_PATH); ?>
    <?php echo Asset::stylesheet(array(
        'assets/shell/bootstrap.min.css',
        'assets/shell/layout.css'
    ), "", 'shell/bootstrap.min.css'); ?>
    <?php Weapon::fire('shell_after'); ?>
  </head>
  <body>
    <?php Weapon::fire('cargo_before'); ?>
    <?php Shield::chunk('navigation'); ?>
    <?php Shield::chunk('block.header'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9 blog-main">