<?php
  $href = $args['href'];
  $text = $args['text'];
  $is_active = $args['is_active'];
  $active_class = $is_active ? '!border-black' : null;
?>

<a
  href="<?php echo $args['href']; ?>"
  class="<?php echo $active_class ?> nav-link"
>
  <?php echo $args['text']; ?>
</a>