<?php
  $section = get_field('section');
  $section_title = $section['title'];
  $section_body = $section['body'];
  $template_dir = get_bloginfo('template_directory');
?>

<div class="wrap">
  <div class="container-inner">
    <div class="header mb-[72px] max-w-[700px]">
      <h2 class="mb-[8px]"><?php echo $section_title; ?></h2>

      <p class="text-medium">
        <?php echo $section_body; ?>
      </p>
    </div>

    <div class="body">
      <div class="mb-16">
        <div class="body-title flex items-center gap-[16px] mb-[32px]">
          <img src="<?php echo $template_dir . '/resources/images/icon-heart.svg' ?>">
          <h2 class="m-0">Make a Donation</h2>
        </div>

        <div class="actions inline-flex flex-wrap flex-col gap-[16px] lg:flex-row lg:gap-[32px]">
          <div class="item bg-gray-xlt p-[32px] rounded-[20px]">
            <div class="item-title flex gap-[8px] mb-[4px]">
              <img src="<?php echo $template_dir . '/resources/images/icon-credit-card.svg' ?>">
              <span class="text-[24px] font-bold leading-[32px]">Credit Card</span>
            </div>

            <p class="text-medium max-w-[300px] mb-[24px]">
              You will be redirected to a secure page hosted by Stripe.
            </p>

            <div class="action">
              <a href="https://buy.stripe.com/28o2aS5Ll2yL8bmbII" class="button button-yellow">
                Click to Donate
              </a>
            </div>
          </div>

          <div class="or text-medium flex justify-center lg:items-center">
            or
          </div>

          <div class="item item-zelle bg-gray-xlt p-[32px] rounded-[20px] flex flex-col justify-between">
            <div>
              <div class="item-title flex gap-[8px] mb-[8px]">
                <img src="<?php echo $template_dir . '/resources/images/icon-zelle.png' ?>" class="zelle-image w-[60px]">
              </div>

              <p class="text-medium max-w-[300px] mb-[24px]">
                Use the following email to send a donation via Zelle:
              </p>
            </div>

            <div class="email text-[24px] font-bold leading-[32px] pb-[8px]">
              friends4fitz@gmail.com
            </div>
          </div>
        </div>
      </div>

      <div class="mb-8">
        <div class="body-title flex items-center gap-[16px] mb-[32px]">
          <img src="<?php echo $template_dir . '/resources/images/icon-heart.svg' ?>">
          <h2 class="m-0">Become a Sponsor</h2>
        </div>

        <div class="actions inline-flex flex-wrap flex-col gap-[16px] lg:flex-row lg:gap-[32px]">
          <div class="item bg-gray-xlt p-[32px] rounded-[20px]">
            <p class="text-medium max-w-[300px] mb-[24px]">
              Pick from a preset sponsorship level or provide your own donation amount.
            </p>

            <div class="action">
              <a href="/sponsor" class="button button-yellow">
                Click to Become a Sponsor
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
