<?php Shield::chunk('header'); ?>
<article class="post" id="post-<?php echo $page->id; ?>">
  <?php Shield::chunk('page.title'); ?>
  <?php Shield::chunk('page.body'); ?>
  <?php Shield::chunk('page.footer'); ?>
</article>
<?php Shield::chunk('footer'); ?>