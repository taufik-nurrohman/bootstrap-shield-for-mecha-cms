        </div> <!-- .blog-main -->
        <?php Shield::chunk('sidebar'); ?>
      </div> <!-- .row -->
    </div> <!-- .container -->
    <footer class="blog-footer cf">
      <div class="container-fluid">
        <div class="pull-left">&copy; <?php echo date('Y'); ?> <a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></div>
        <div class="pull-right">
          <?php if($manager): ?>
          <a href="<?php echo $config->url . '/' . $config->manager->slug; ?>/logout"><i class="fa fa-sign-out"></i> <?php echo $speak->log_out; ?></a>
          <?php else: ?>
          <a href="<?php echo $config->url . '/' . $config->manager->slug; ?>/login"><i class="fa fa-sign-in"></i> <?php echo $speak->log_in; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </footer>
    <?php Weapon::fire('cargo_after'); ?>
    <?php Weapon::fire('sword_before'); ?>
    <?php echo Asset::javascript($config->protocol . 'ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); ?>
    <?php echo Asset::javascript('assets/sword/bootstrap.min.js'); ?>
    <?php Weapon::fire('sword_after'); ?>
    <?php Weapon::fire('SHIPMENT_REGION_BOTTOM'); ?>
  </body>
</html>