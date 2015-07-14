<!DOCTYPE html>
<html dir="<?php echo $config->language_direction; ?>" class="page-<?php echo $config->page_type; ?>">
  <head>
    <?php Weapon::fire('SHIPMENT_REGION_TOP'); ?>
    <?php Weapon::fire('shell_before'); ?>
    <?php echo Asset::stylesheet(array(
        $config->protocol . ICON_LIBRARY_PATH,
        'assets/shell/bootstrap.min.css',
        'assets/shell/layout.css'
    )); ?>
    <?php Weapon::fire('shell_after'); ?>
  </head>
  <body>
    <?php Weapon::fire('cargo_before'); ?>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div> <!-- .navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <?php echo Menu::get(); ?>
          <form class="navbar-form navbar-right" action="<?php echo $config->url; ?>/search" method="post" role="search">
            <div class="form-group">
              <input name="q" type="text" class="form-control" placeholder="<?php echo $speak->search; ?>">
            </div> <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </form>
        </div> <!-- .navbar-collapse -->
    </nav>
    <div class="blog-header">
      <?php if($config->url_current == $config->url): ?>
      <h1 class="blog-title"><?php echo $config->title; ?></h1>
      <?php else: ?>
      <h1 class="blog-title"><a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></h1>
      <?php endif; ?>
      <p class="blog-slogan lead"><?php echo $config->slogan; ?></p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-9 blog-main">