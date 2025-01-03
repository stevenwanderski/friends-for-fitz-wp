<footer class="py-[80px] px-[20px] bg-yellow-lt">
  <div class="container-inner">
    <div class="flex flex-col gap-[24px] mb-[48px] lg:flex-row lg:items-center lg:justify-between">
      <a href="/" class="flex gap-[10px] items-center">
        <?php get_template_part('template-parts/logo' ); ?>

        <span class="text-[28px] font-[600] font-display">Friends for Fitz</span>
      </a>

      <nav class="flex flex-col lg:flex-row gap-[16px] lg:gap-[40px]">
        <a href="/about" class="footer-link">About</a>
        <a href="/families" class="footer-link">Families We Help</a>
        <a href="/events" class="footer-link">Events</a>
        <a href="/contact" class="footer-link">Contact</a>
        <a href="/support" class="footer-link">Support Us</a>
      </nav>
    </div>

    <div class="middle flex flex-col gap-[24px] mb-[32px] pb-[32px] border-b border-gray-lt lg:flex-row lg:justify-between">
      <div class="facebook lg:order-1">
        <a href="https://www.facebook.com/friends.for.fitz.2024/">
          <?php get_template_part('template-parts/logo-facebook' ); ?>
        </a>
      </div>

      <p class="text-medium max-w-[480px]">
        We are a nonprofit dedicated to supporting local families in need. Together, we make a meaningful difference, one family at a time.
      </p>
    </div>

    <div class="bottom flex flex-col gap-[24px] pb-[32px] lg:flex-row lg:justify-between lg:items-center">
      <div>&copy; 2024. All rights reserved.</div>
      <div>Designed and built by <a href="https://stevenwanderski.com" target="_blank" class="text-green hover:underline">Happy Code</a></div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
