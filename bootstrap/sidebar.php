<aside class="col-md-3 blog-sidebar">
  <?php if($manager && Widget::exist('manager')): ?>
  <?php Shield::chunk('block.widget', array(
      'title' => $speak->widget->manager_menus,
      'content' => Widget::manager()
  )); ?>
  <?php endif; ?>
  <?php Shield::chunk('block.widget', array(
      'title' => $speak->widget->tags,
      'content' => Widget::tag()
  )); ?>
  <?php Shield::chunk('block.widget', array(
      'title' => $speak->widget->related_posts,
      'content' => Widget::relatedPost()
  )); ?>
  <?php Shield::chunk('block.widget', array(
      'title' => $speak->widget->archives,
      'content' => Widget::archive()
  )); ?>
</aside>