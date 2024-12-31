<?php
  $section_2 = get_field('section_2');
  $title = $section_2['title'];
  $body = $section_2['body'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[72px] lg:grid-cols-[498px_1fr] lg:gap-[112px]">
      <div class="content max-w-[500px] lg:max-w-full lg:order-1">
        <h2 class="mb-[12px]">
          <?php echo $title; ?>
        </h2>

        <div class="text-medium mb-[40px] space-y-[40px]">
          <?php echo $body; ?>
        </div>
      </div>

      <div class="image-wrap order-0">
        <?php get_template_part(
          'template-parts/responsive-image',
          null,
          array(
            'src' => 'https://happy-code.imgix.net/bill-fitz-cropped.jpg',
            'class' => 'rounded-[20px] w-full max-w-[498px]'
          )
        ); ?>
      </div>
    </div>
  </div>
</div>
