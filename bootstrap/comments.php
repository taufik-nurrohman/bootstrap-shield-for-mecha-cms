<section class="comments">
  <h3><i class="fa fa-comments"></i> <?php echo $article->total_comments_text; ?></h3>
  <ol class="media-list">
    <?php if($article->total_comments > 0): ?>
    <?php foreach($article->comments as $comment): ?>
    <li class="media">
      <div class="media-left">
        <img class="media-object" alt="" src="<?php echo $config->protocol . 'www.gravatar.com/avatar/' . md5($comment->email) . '?s=64&amp;d=monsterid'; ?>" width="64" height="64">
      </div>
      <div class="media-body">
        <?php if( ! empty($comment->url) && $comment->url != '#'): ?>
        <h4 class="media-heading"><a href="<?php echo $comment->url; ?>" rel="nofollow" target="_blank"><?php echo $comment->name; ?></a></h4>
        <?php else: ?>
        <h4 class="media-heading"><?php echo $comment->name; ?></h4>
        <?php endif; ?>
        <div class="media-content">
          <p class="media-time"><time class="text-muted" datetime="<?php echo $comment->date->W3C; ?>"><?php echo $comment->date->FORMAT_1; ?></time> <a href="<?php echo $comment->permalink; ?>" title="<?php echo $speak->permalink; ?>" rel="nofollow">#</a></p>
          <?php echo $comment->message; ?>
        </div>
        <footer class="media-footer">
          <?php Weapon::fire('comment_footer', array($comment, $article)); ?>
        </footer>
      </div>
    </li>
    <?php endforeach; ?>
    <?php endif; ?>
  </ol>
  <?php Shield::chunk('comment.form'); ?>
</section>