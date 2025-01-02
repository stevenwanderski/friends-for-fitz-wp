<?php
  $section_1 = get_field('section');
  $title = $section_1['title'];
  $body = $section_1['body'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[40px] lg:grid-cols-[1.5fr_1fr]">
      <div class="content max-w-[600px]">
        <h2 class="mb-[12px]">
          <?php echo $title; ?>
        </h2>

        <div class="text-medium mb-[40px] space-y-[40px]">
          <?php echo $body; ?>
        </div>
      </div>

      <div class="image-wrap order-1 text-right">
        <?php get_template_part(
          'template-parts/responsive-image',
          null,
          array(
            'src' => 'https://happy-code.imgix.net/higgins-fam.jpg',
            'class' => 'rounded-[20px] w-full max-w-[498px]'
          )
        ); ?>
      </div>
    </div>
  </div>
</div>
