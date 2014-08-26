<?php include 'header.php'; ?>
<?php if($config->total_articles > 0): ?>
<?php foreach($articles as $article): ?>
<article class="post post-index" id="post-<?php echo $article->id; ?>">
  <p class="post-time text-muted"><i class="fa fa-calendar"></i> <time datetime="<?php echo $article->date->W3C; ?>"><?php echo $article->date->FORMAT_1; ?></time></p>
  <h3 class="post-title"><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h3>
  <div class="post-body">
    <div class="post-description"><?php echo $article->description; ?></div>
  </div>
  <div><?php Weapon::fire('article_footer', array($article)); ?></div>
</article>
<?php endforeach; ?>
<?php else: ?>
<article class="post post-index">
  <div class="post-body"><?php echo Config::speak('notify_empty', array(strtolower($speak->posts))); ?></div>
</article>
<?php endif; ?>
<ul class="pager">
  <li class="previous"><?php echo $pager->prev->link; ?></li>
  <li class="next"><?php echo $pager->next->link; ?></li>
</ul>
<?php include 'footer.php'; ?>