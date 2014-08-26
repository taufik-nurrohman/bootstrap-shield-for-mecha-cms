<?php include 'header.php'; ?>
<article class="post">
  <h2 class="post-title"><?php echo $config->page_title; ?></h2>
  <div class="post-body">
    <?php if($cargo = File::exist($config->cargo)) include $cargo; ?>
  </div>
</article>
<?php include 'footer.php'; ?>