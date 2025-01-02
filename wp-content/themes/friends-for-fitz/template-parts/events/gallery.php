<?php
  $gallery_info = get_field('gallery_info');
  $gallery_title = $gallery_info['title'];
  $gallery_body = $gallery_info['body'];
?>

<div class="wrap bg-gray-xlt">
  <div class="container-inner">
    <div class="header max-w-[600px] mb-[72px]">
      <h2 class="mb-[24px]">
        <?php echo $gallery_title; ?>
      </h2>

      <p class="text-medium">
        <?php echo $gallery_body; ?>
      </p>
    </div>

    <div class="gridx flex flex-wrap gap-[24px]">
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5539.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5528.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5245.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5511.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5246.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5244.jpg')) ?>

      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_5229.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_4881.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_4887.JPEG')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1344.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1244.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1241.jpg')) ?>

      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1250.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1333.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/fitz-fest.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1247.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1251.jpg')) ?>
      <?php get_template_part('template-parts/events/gallery-item', null, array('src' => 'https://happy-code.imgix.net/IMG_1263.jpg')) ?>
    </div>
  </div>
</div>
