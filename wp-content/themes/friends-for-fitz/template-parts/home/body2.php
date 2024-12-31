<?php
  $section_2 = get_field('section_2');
  $title = $section_2['title'];
  $body = $section_2['body'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[72px] lg:grid-cols-[498px_1fr] lg:items-center lg:gap-[112px]">
      <div class="content max-w-[500px] lg:max-w-full lg:order-1">
        <?php get_template_part(
          'template-parts/heading-label',
          null,
          array(
            'text' => "Families We've Helped"
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
            'text' => 'Read the Higgins Family Story',
            'href' => '/families',
          )
        ); ?>
      </div>

      <div class="image-wrap order-0 lg:flex">
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
