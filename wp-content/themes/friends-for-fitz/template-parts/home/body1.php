<?php
  $section_1 = get_field('section_1');
  $title = $section_1['title'];
  $body = $section_1['body'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[72px] lg:grid-cols-2 lg:items-center">
      <div class="content max-w-[500px] lg:max-w-full">
        <?php get_template_part(
          'template-parts/heading-label',
          null,
          array(
            'text' => 'Who We Are'
          )
        ); ?>

        <h2 class="mt-[40px] mb-[12px]">
          <?php echo $title; ?>
        </h2>

        <p class="text-medium mb-[40px]">
          <?php echo $body; ?>
        </p>

        <?php get_template_part(
          'template-parts/arrow-button',
          null,
          array(
            'text' => 'Friends for Fitz Fest 2026',
            'href' => '/events',
          )
        ); ?>
      </div>

      <div class="image-wrap order-1 lg:flex lg:justify-end">
        <?php get_template_part(
          'template-parts/responsive-image',
          null,
          array(
            'src' => 'https://happy-code.imgix.net/fitz-sibs.jpg',
            'class' => 'rounded-[20px] w-full max-w-[498px]'
          )
        ); ?>
      </div>
    </div>
  </div>
</div>
