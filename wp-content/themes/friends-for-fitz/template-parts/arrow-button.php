<?php
  $href = $args['href'];
  $text = $args['text'];
  $arrow_path = get_bloginfo( 'template_directory' ) . '/resources/images/icon-arrow.svg';
?>

<a href="<?php echo $href; ?>" class="button bg-green text-white !inline-flex gap-[8px] hover:bg-[#44c867]">
  <?php echo $text; ?> <img src="<?php echo $arrow_path; ?>" />
</a>