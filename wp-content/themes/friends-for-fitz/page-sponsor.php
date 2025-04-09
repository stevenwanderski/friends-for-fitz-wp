<?php /* Template Name: Sponsor */ ?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php
  $title = get_the_title();
  $page_header = get_field('page_header');
  $hero_body = $page_header['body'];
?>

<?php get_template_part(
  'template-parts/page-header',
  null,
  array(
    'title' => $title,
    'body' => $hero_body
  )
); ?>

<div class="wrap">
  <div class="container-inner">
    <div class="main grid gap-[64px] lg:grid-cols-2 lg:gap-0">
      <div class="content lg:pr-[72px] lg:border-r lg:border-color-gray-lt">
        <!-- <div class="header max-w-[600px] mb-[36px]">
          <h2 class="mb-[24px]">Become a Sponsor.</h2>

          <p class="text-medium">
            We'd love to hear from you! Reach out with any questions, feedback, or to learn more about how you can get involved.
          </p>
        </div> -->

        <?php echo do_shortcode('[fluentform id="3"]'); ?>
      </div>

      <div class="info flex flex-col gap-[72px] lg:pl-[72px]">
        <div class="item">
          <img
            src="<?php echo get_bloginfo('template_directory') . '/resources/images/icon-email.svg' ?>"
            class="mb-[16px]"
          />

          <div class="label font-bold text-[20px] mb-[4px]">
            Email
          </div>

          <a href="mailto:friends4fitz@gmail.com" class="value text-[20px]">
            friends4fitz@gmail.com
          </a>
        </div>

        <div class="item">
          <img
            src="<?php echo get_bloginfo('template_directory') . '/resources/images/icon-phone.svg' ?>"
            class="mb-[16px]"
          />

          <div class="item-group mb-[32px]">
            <div class="label font-bold text-[20px] mb-[4px]">
              Erin Cotter
            </div>

            <a href="tel:773-879-1060" class="value text-[20px]">
              773-879-1060
            </a>
          </div>

          <div class="item-group mb-[32px]">
            <div class="label font-bold text-[20px] mb-[4px]">
              Katie Ramsden
            </div>

            <a href="tel:773-879-1058" class="value text-[20px]">
              773-879-1058
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
