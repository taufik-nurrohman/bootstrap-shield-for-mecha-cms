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
    <?php echo Menu::navigation(); ?>
    <form class="navbar-form navbar-right" action="<?php echo $config->url . '/' . $config->search->slug; ?>" method="post" role="search">
      <div class="form-group">
        <input name="q" type="text" class="form-control" placeholder="<?php echo $speak->search; ?>">
      </div> <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
    </form>
  </div> <!-- .navbar-collapse -->
</nav>