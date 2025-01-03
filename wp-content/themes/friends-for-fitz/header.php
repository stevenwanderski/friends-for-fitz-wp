<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <?php get_template_part('template-parts/favicon' ); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Grenze:wght@600&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width" />
  <script src="//unpkg.com/alpinejs" defer></script>

  <?php wp_head(); ?>
  <?php global $wp; ?>
</head>

<body>

<header x-data="{ menu: false }" class="bg-green-lt p-[20px]">
  <div class="container-inner flex items-center justify-between">
    <a href="/" class="flex gap-[10px] items-center">
      <?php get_template_part('template-parts/logo' ); ?>

      <span class="text-[28px] font-[600] font-display">Friends for Fitz</span>
    </a>

    <nav class="items-center gap-[32px] pt-[3px] hidden lg:flex">
      <?php get_template_part(
        'template-parts/nav-link',
        null,
        array(
          'href' => '/about',
          'text' => 'About',
          'is_active' => $wp->request == 'about'
        )
      ); ?>

      <?php get_template_part(
        'template-parts/nav-link',
        null,
        array(
          'href' => '/families',
          'text' => 'Families We Help',
          'is_active' => $wp->request == 'families'
        )
      ); ?>

      <?php get_template_part(
        'template-parts/nav-link',
        null,
        array(
          'href' => '/events',
          'text' => 'Events',
          'is_active' => $wp->request == 'events'
        )
      ); ?>

      <?php get_template_part(
        'template-parts/nav-link',
        null,
        array(
          'href' => '/contact',
          'text' => 'Contact',
          'is_active' => $wp->request == 'contact'
        )
      ); ?>

      <span class="pl-[20px]">
        <?php get_template_part('template-parts/support-button' ); ?>
      </span>
    </nav>

    <div @click="menu = !menu" class="line-wrap lg:hidden flex flex-col gap-[8px] w-[40px]">
      <div class="h-[3px] bg-black"></div>
      <div class="h-[3px] bg-black"></div>
      <div class="h-[3px] bg-black"></div>
    </div>
  </div>

  <nav x-show="menu" x-cloak class="flex flex-col py-[24px]">
    <a href="/about" class="mobile-nav-link">About</a>
    <a href="/families" class="mobile-nav-link">Families We Help</a>
    <a href="/events" class="mobile-nav-link">Events</a>
    <a href="/contact" class="mobile-nav-link">Contact</a>
    <span class="pt-[14px]">
      <?php get_template_part('template-parts/support-button' ); ?>
    </span>
  </nav>
</header>
