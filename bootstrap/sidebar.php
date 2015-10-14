<aside class="col-md-3 blog-sidebar">
  <?php if($manager): ?>
  <div class="widget-wrapper">
    <h4 class="widget-title"><?php echo $speak->widget->manager_menus; ?></h4>
    <div class="widget-content">
      <?php echo Widget::manager(); ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="widget-wrapper">
    <h4 class="widget-title"><?php echo $speak->widget->tags; ?></h4>
    <div class="widget-content">
      <?php echo Widget::tag('LIST', 'ASC'); ?>
    </div>
  </div>
  <div class="widget-wrapper">
    <h4 class="widget-title"><?php echo $speak->widget->related_posts; ?></h4>
    <div class="widget-content">
      <?php echo Widget::relatedPost(); ?>
    </div>
  </div>
  <div class="widget-wrapper">
    <h4 class="widget-title"><?php echo $speak->widget->archives; ?></h4>
    <div class="widget-content">
      <?php echo Widget::archive('HIERARCHY', 'DESC'); ?>
    </div>
  </div>
</aside>