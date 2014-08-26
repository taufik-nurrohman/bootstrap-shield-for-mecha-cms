<?php include 'header.php'; ?>
<article class="post">
  <h2 class="post-title"><?php echo $config->search->title . ' &ldquo;' . Text::parse($config->search_query)->to_encoded_html . '&rdquo;'; ?></h2>
  <div class="post-body"><p><?php echo $speak->notify_error_not_found; ?></p></div>
</article>
<?php include 'footer.php'; ?>