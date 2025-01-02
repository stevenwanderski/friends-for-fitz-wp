<?php
  $template_dir = get_bloginfo('template_directory');
  $event_info = get_field('event_info');
  $date = $event_info['date'];
  $time = $event_info['time'];
  $location = $event_info['location'];
?>

<div class="wrap">
  <div class="container-inner">
    <div class="main pb-[72px] lg:grid lg:grid-cols-2 lg:gap-[144px]">
      <div class="content max-w-[600px]">
        <div class="heading mb-[32px]">
          <?php get_template_part(
            'template-parts/heading-label',
            null,
            array(
              'text' => 'Event Info'
            )
          ); ?>
        </div>

        <div class="event flex flex-col gap-[24px]">
          <div class="date item flex gap-[16px] items-start">
            <img
              src="<?php echo $template_dir . '/resources/images/icon-calendar.svg' ?>"
              alt=""
              class="icon mt-[4px]"
            >

            <span class="text-[36px] font-bold leading-[34px]">
              <?php echo $date; ?>
            </span>
          </div>

          <div class="time item flex gap-[16px] items-start">
            <img
              src="<?php echo $template_dir . '/resources/images/icon-clock.svg' ?>"
              alt=""
              class="icon mt-[4px]"
            >

            <div class="value text-[24px] leading-[32px]">
              <?php echo $time; ?>
            </div>
          </div>

          <div class="location item flex gap-[16px] items-start">
            <img
              src="<?php echo $template_dir . '/resources/images/icon-map-pin.svg' ?>"
              alt=""
              class="icon mt-[4px]"
            >

            <div class="value text-[24px] leading-[32px]">
              <?php echo nl2br($location); ?>
            </div>
          </div>
        </div>

        <hr class="hr">

        <p class="text-medium">
          Sponsors are essential to making Friends for Fitz Fest 2025 a success, and we invite local businesses and community members to join us in bringing this event to life. Your sponsorship helps cover event costs and maximizes our impact for families in need.
        </p>
      </div>

      <div class="image-wrap hidden lg:block">
        <?php get_template_part('template-parts/pic-hero-grid'); ?>
      </div>
    </div>
  </div>
</div>
