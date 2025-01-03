<div class="donate-cta bg-[#269443] py-[80px] px-[20px]">
  <div class="container-inner">
    <div class="main flex flex-col items-center justify-center">
      <div class="content flex flex-col items-center gap-[8px] mb-[48px] lg:max-w-[720px]">
        <h3 class="text-white text-center text-[32px] font-extrabold leading-[38px] lg:text-[60px] lg:leading-[66px]">
          We have helped over 10 local families this year.
        </h3>

        <p class="text-medium !text-green-lt text-center max-w-[500px]">
          Your contribution directly impacts families in need by providing essential support during challenging times.
        </p>
      </div>

      <div class="actions flex flex-col items-center gap-[32px] lg:flex-row lg:justify-center">
        <?php get_template_part(
          'template-parts/button',
          null,
          array(
            'href' => '/families',
            'text' => 'Read the Higgins Family Story'
          )
        ); ?>
      </div>
    </div>
  </div>
</div>
