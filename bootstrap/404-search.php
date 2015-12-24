<?php Shield::chunk('header'); ?>
<article class="post">
  <?php Shield::chunk('page.header.404'); ?>
  <div class="post-body">
    <p><?php echo $speak->notify_error_not_found; ?></p>
  </div>
</article>
<?php Shield::chunk('footer'); ?>