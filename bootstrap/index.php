<?php Shield::chunk('header'); ?>
<?php if($config->total_articles > 0): ?>
<?php foreach($articles as $article): ?>
<?php Shield::lot(array('article' => $article)); ?>
<article class="post post-index" id="post-<?php echo $article->id; ?>">
  <?php Shield::chunk('article.header.index'); ?>
  <?php Shield::chunk('article.body.index'); ?>
  <?php Shield::chunk('article.footer.index'); ?>
</article>
<?php endforeach; ?>
<?php else: ?>
<article class="post post-index">
  <?php Shield::chunk('article.body.204'); ?>
</article>
<?php endif; ?>
<?php Shield::chunk('pager'); ?>
<?php Shield::chunk('footer'); ?>