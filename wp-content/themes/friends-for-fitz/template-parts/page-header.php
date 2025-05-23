<?php
  $title = $args['title'];
  $body = $args['body'];
?>

<div class="wrap bg-green-lt">
  <div class="container-inner">
    <div class="main max-w-[800px]">
      <h1 class="mb-[16px]">
        <?php echo $title; ?>
      </h1>

      <?php if ($body): ?>
      <p class="text-medium">
        <?php echo $body; ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</div>
