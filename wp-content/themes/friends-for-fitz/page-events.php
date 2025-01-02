<?php /* Template Name: Events */ ?>

<?php get_header(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js" integrity="sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

<?php get_template_part('template-parts/events/body')?>
<?php get_template_part('template-parts/events/gallery')?>
<?php get_template_part('template-parts/donate-cta')?>

<?php get_footer(); ?>
