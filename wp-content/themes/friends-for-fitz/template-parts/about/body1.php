<?php
  $section_1 = get_field('section_1');
  $title = $section_1['title'];
  $body = $section_1['body'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[72px] lg:grid-cols-2">
      <div class="content max-w-[500px] lg:max-w-full">
        <h2 class="mb-[12px]">
          <?php echo $title; ?>
        </h2>

        <div class="text-medium mb-[40px] space-y-[40px]">
          <?php echo $body; ?>
        </div>
      </div>

      <div class="image-wrap order-1 lg:flex lg:justify-end">
        <?php get_template_part(
          'template-parts/responsive-image',
          null,
          array(
            'src' => 'https://happy-code.imgix.net/IMG_5528.JPEG',
            'class' => 'rounded-[20px] w-full max-w-[498px]'
          )
        ); ?>
      </div>
    </div>
  </div>
</div>
