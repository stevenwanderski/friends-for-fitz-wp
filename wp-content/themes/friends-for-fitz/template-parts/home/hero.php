<?php
  $hero = get_field('hero');
  $title = $hero['title'];
  $body = $hero['body'];
?>

<div class="outer bg-green-lt py-[44px] px-[20px]">
  <div class="container-inner main lg:grid lg:grid-cols-2 lg:items-center lg:gap-[32px]">
    <div class="content max-w-[500px]">
      <h1 class="mb-[16px]">
        <?php echo $title; ?>
      </h1>

      <p class="mb-[24px] text-[20px] leading-[32px]">
        <?php echo $body; ?>
      </p>

      <div class="actions flex flex-col items-start gap-[24px] lg:flex-row lg:mt-[54px]">
        <?php get_template_part('template-parts/support-button'); ?>

        <?php get_template_part(
          'template-parts/button',
          null,
          array(
            'href' => '/contact',
            'text' => 'Contact Us'
          )
        ); ?>
      </div>
    </div>

    <div class="image-grid hidden lg:block">
      <?php get_template_part('template-parts/pic-hero-grid'); ?>
    </div>
  </div>
</div>
