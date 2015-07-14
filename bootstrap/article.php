<?php include 'header.php'; ?>
<article class="post" id="post-<?php echo $article->id; ?>">
  <p class="post-time text-muted"><i class="fa fa-calendar"></i> <time datetime="<?php echo $article->date->W3C; ?>"><?php echo $article->date->FORMAT_1; ?></time></p>
  <h2 class="post-title"><?php echo $article->title; ?></h2>
  <div class="post-body"><?php echo $article->content; ?></div>
  <footer class="post-footer">
    <div><?php echo $speak->posted_by; ?> <a href="<?php echo $config->author_profile_url; ?>" rel="author"><?php echo $article->author; ?></a> <?php echo strtolower($speak->on) . ' ' . $article->date->FORMAT_5; ?></div>
    <div><?php echo Widget::tagLinks(); ?></div>
    <div><?php Weapon::fire('article_footer', array($article)); ?></div>
  </footer>
</article>
<ul class="pager">
  <li class="previous"><?php echo $pager->prev->link; ?></li>
  <li class="next"><?php echo $pager->next->link; ?></li>
</ul>
<?php if($config->comments) include 'comments.php'; ?>
<?php include 'footer.php'; ?>